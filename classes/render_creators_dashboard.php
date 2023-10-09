<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * This is a one-line short description of the file.
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    lytix_config
 * @author     Guenther Moser
 * @copyright  2021 Educational Technologies, Graz, University of Technology
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace lytix_config;

use context_course;


/**
 * Render class for the Creator's Dashboard.
 */
class render_creators_dashboard {

    /**
     * Renders the template.
     * @param \stdClass|null $course
     * @param \stdClass|null $user
     * @return mixed
     */
    public function render($course, $user) {
        global $OUTPUT;
        $params = self::get_parameter($course, $user);

        return $OUTPUT->render_from_template('lytix_config/creators_dashboard', $params);
    }

    /**
     * Gets the parameter for the template.
     * @param \stdClass|null $course
     * @param \stdClass|null $user
     * @return array
     */
    public function get_parameter($course, $user) {
        $context = context_course::instance($course->id);
        $iscreator = render_view::is_creator($context, $user->id);

        return [
            'contextid' => $context->id,
            'courseid' => $course->id,
            'userid' => $user->id,
            'iscreator' => $iscreator,
            'locale' => moodle_getlocale(),
            'widgetheading' => 4,
        ];
    }
}
