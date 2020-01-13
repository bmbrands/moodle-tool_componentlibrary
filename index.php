<?php

require_once(__DIR__ . '/../../../config.php');

$PAGE->set_pagelayout('admin');
$thispageurl = new moodle_url('/admin/tool/componentlibrary/index.php');
$PAGE->set_url($thispageurl, $thispageurl->params());
$PAGE->set_context(context_system::instance());
$title = 'Component Library test';
$PAGE->set_heading($title);
$PAGE->set_title($title);
$PAGE->set_docs_path('');

// No edit.
$USER->editing = $edit = 0;

// Add navbar.
$PAGE->navbar->ignore_active();
$PAGE->navbar->add($PAGE->title, $thispageurl);

echo $OUTPUT->header();
echo $OUTPUT->box_start();

echo '<div class="container my-4">
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
      Tooltip on top
    </button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
      Tooltip on right
    </button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
      Tooltip on bottom
    </button>
    <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
      Tooltip on left
    </button>
</div>';

echo $OUTPUT->box_end();

echo $OUTPUT->footer();
