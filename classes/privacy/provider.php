<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.


/**
 * Privacy API implementation for the AI Text to questions generator plugin.
 *
 * @package     local_whatsappgen
 * @category    privacy
 * @copyright   2024 Stephan Waetzig <stephanwaetzig@hotmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace local_whatsappgen\privacy;

use core_privacy\local\metadata\collection;
use core_privacy\local\request\writer;
use core_privacy\local\request\contextlist;
use core_privacy\local\request\approved_contextlist;
use core_privacy\local\request\approved_userlist;
use core_privacy\local\request\userlist;

class provider implements 
    \core_privacy\local\metadata\provider,
    \core_privacy\local\request\core_user_data_provider,
    \core_privacy\local\request\core_userlist_provider {

    /**
     * Bring metadata for privacy overview
     *
     * @param collection $items
     * @return collection
     */
    public static function get_metadata(collection $items) : collection {
        $items->add_database_table(
            'whatsappgen_messages',
            [
                'useridfrom' => 'privacy:metadata:local_whatsappgen:useridfrom',
                'userid_to' => 'privacy:metadata:local_whatsappgen:userid_to',
                'message' => 'privacy:metadata:local_whatsappgen:message',
                'timecreated' => 'privacy:metadata:local_whatsappgen:timecreated',
            ],
            'privacy:metadata:local_whatsappgen'
        );
        return $items;
    }

    /**
     * Bring context to the user
     *
     * @param int $userid
     * @return contextlist
     */
    public static function get_contexts_for_userid(int $userid) : contextlist {
        $contextlist = new contextlist();
        $sql = "SELECT ctx.id
                  FROM {context} ctx
                  JOIN {whatsappgen_messages} msg ON msg.contextid = ctx.id
                 WHERE (msg.useridfrom = :userid OR msg.userid_to = :userid)";
        $params = ['userid' => $userid];
        $contextlist->add_from_sql($sql, $params);
        return $contextlist;
    }

    /**
     * Export userid in overview.
     *
     * @param approved_contextlist $contextlist
     */
    public static function export_user_data(approved_contextlist $contextlist) {
        global $DB;
        foreach ($contextlist->get_contextids() as $contextid) {
            $context = \context::instance_by_id($contextid);
            $records = $DB->get_records('whatsappgen_messages', ['contextid' => $contextid]);
            foreach ($records as $record) {
                writer::with_context($context)->export_data(
                    [get_string('pluginname', 'local_whatsappgen')],
                    (object) [
                        'useridfrom' => $record->useridfrom,
                        'userid_to' => $record->userid_to,
                        'message' => $record->message,
                        'timecreated' => transform::datetime($record->timecreated),
                    ]
                );
            }
        }
    }

    /**
     * Delete it from Context.
     *
     * @param \context $context
     */
    public static function delete_data_for_all_users_in_context(\context $context) {
        global $DB;
        $DB->delete_records('whatsappgen_messages', ['contextid' => $context->id]);
    }

    /**
     * Delete userdata from context.
     *
     * @param approved_contextlist $contextlist
     */
    public static function delete_data_for_user(approved_contextlist $contextlist) {
        global $DB;
        foreach ($contextlist->get_contextids() as $contextid) {
            $DB->delete_records_select(
                'whatsappgen_messages',
                'contextid = :contextid AND (useridfrom = :userid OR userid_to = :userid)',
                [
                    'contextid' => $contextid,
                    'userid' => $contextlist->get_user()->id,
                ]
            );
        }
    }

    /**
     * Bring user in the correct context.
     *
     * @param \core_privacy\local\request\userlist $userlist
     */
    public static function get_users_in_context(userlist $userlist) {
        global $DB;
        $context = $userlist->get_context();
        $sql = "SELECT useridfrom AS userid
                  FROM {whatsappgen_messages}
                 WHERE contextid = :contextid
                UNION
                SELECT userid_to AS userid
                  FROM {whatsappgen_messages}
                 WHERE contextid = :contextid";
        $params = ['contextid' => $context->id];
        $userlist->add_from_sql('userid', $sql, $params);
    }

    /**
     * Delete userid from list.
     *
     * @param approved_userlist $userlist
     */
    public static function delete_data_for_users(approved_userlist $userlist) {
        global $DB;
        $context = $userlist->get_context();
        $userids = $userlist->get_userids();

        if (empty($userids)) {
            return;
        }

        list($in_sql, $params) = $DB->get_in_or_equal($userids, SQL_PARAMS_NAMED);
        $params['contextid'] = $context->id;

        $DB->delete_records_select(
            'whatsappgen_messages',
            "contextid = :contextid AND (useridfrom $in_sql OR userid_to $in_sql)",
            $params
        );
    }
}
