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
 * This file is serving optimised JS
 *
 * @package    tool_componentlibrary
 * @copyright  2020 Bas Brands (<bas@moodle.com>)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// disable moodle specific debug messages and any errors in output,
// comment out when debugging or better look into error log!
define('NO_DEBUG_DISPLAY', true);

// we need just the values from config.php and minlib.php
// define('ABORT_AFTER_CONFIG', true);
require_once(__DIR__ . '/../../../../config.php');
require_once("$CFG->dirroot/lib/jslib.php");

$manager = new page_requirements_manager();
$renderer = $PAGE->get_renderer('core');
$safeconfig = $manager->get_config_for_javascript($PAGE, $renderer);

$js = '';

$js .= js_writer::set_variable('M.cfg', $safeconfig, false) . "\n";

js_send_uncached($js);