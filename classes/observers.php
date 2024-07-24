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
 * Observer functions for the plugin.
 *
 * @package     local_quickchat
 * @copyright   2024 Bastian Schmidt-Kuhl <bastian.schmidt-kuhl@ruhr-uni-bochum.de>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class observers
{
    /**
     * Attach the template function to course views. //TODO Ist das ein gutes Event?
     *
     * @param \core\event\course_viewed $event the course viewed event
     */
    public static function course_viewed(\core\event\course_viewed $event)
    {
        global $PAGE;

        if (empty($event->objectid)) {
            return;
        }

        // Add button to activity modules
        $PAGE->requires->js_call_amd('local_quickchat/main', 'init');

        // $lockfactory = \core\lock\lock_config::get_lock_factory('local_course_template_course_viewed');
        // $lockkey = "course{$event->objectid}";
        // $lock = $lockfactory->get_lock($lockkey, 0);
        // if ($lock !== false) {
        //     try {
        //         helper::template_course($event->objectid);
        //     } finally {
        //         $lock->release();
        //     }
        // }
    }
}
