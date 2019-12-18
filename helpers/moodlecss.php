<?php

require_once(__DIR__ . '/../../../../config.php');

if (!empty($CFG->allowthemechangeonurl) && isset($SESSION->theme)) {
	$themename = $SESSION->theme;
} else {
	$themename = core_useragent::get_device_type_theme(core_useragent::DEVICETYPE_DEFAULT);
}
$theme = theme_config::load($themename);
$CFG->themedesignermode = false;
$page = new moodle_page();
$urls = $theme->css_urls($page);
if (count($urls) === 1) {
	echo $urls[0]->out();
}
?>