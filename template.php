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
 * Moodle Component Library
 *
 * Serves the Hugo docs html pages.
 *
 * @package    tool_componentlibrary
 * @copyright  2020 Bas Brands <bas@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// we need just the values from config.php and minlib.php
require_once(__DIR__ . '/../../../config.php');
require_once($CFG->dirroot . '/lib/filelib.php');

$PAGE->set_pagelayout('embedded');
$thispageurl = new moodle_url('/admin/tool/componentlibrary/template.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_context(context_system::instance());
$title = get_string('pluginname', 'tool_componentlibrary');
$PAGE->set_heading($title);
$PAGE->set_title($title);

echo $OUTPUT->header();

echo 'Hello moto';

echo $OUTPUT->render_from_template('tool_componentlibrary/lala', (object) []);

echo $OUTPUT->footer();
