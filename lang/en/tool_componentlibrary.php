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
 * Strings for component 'tool_componentlibrary', language 'en'
 *
 * @package    tool_componentlibrary
 * @copyright  2020 Bas Brands <bas@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['all'] = 'All components';
$string['pluginname'] = 'UI Component library';
$string['privacy:metadata'] = 'The Component library plugin does not store any personal data.';
$string['installer'] = '<h3>Please setup this component library</h3>
	<p>Before you can see the content of the component library you will need to have shell access to your Moodle installation and be able to write to folder /admin/tool/componentlibrary and have npm installed on your Moodle server.</p>
	<p>If you meet these requirements you can cd into the /admin/tool/componentlibrary folder, and run:</p>
	<pre>npm install</pre>
	<p>This will fetch all the required packages for building the component library docs.</p>
	<p>Once they are installed you can run:</p>
	<pre>npm run start</pre>
	<p>That will start <a href="http://gohugo.io">Hugo</a>, a static site builder that creates the HTML pages from the source files in /content</p>
	<p>For more info see the README.md file in this plugin</p>';

$string['themeselector'] = 'Theme selector';
$string['urlswitchurlwarning'] = 'To have the theme selector on the navbar, the core theme \'allowthemechangeonurl\' setting needs to be set.';
