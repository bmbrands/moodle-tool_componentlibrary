<?php

require_once(__DIR__ . '/../../../config.php');

$PAGE->set_pagelayout('admin');
$url = new moodle_url('/admin/tool/componentlibrary/index.php');
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());
$PAGE->set_heading('Component Library test');
$PAGE->set_title('Component Library test');


$urls = $PAGE->theme->css_urls($PAGE);
if (count($urls) === 1) {
    $cssurl =  $urls[0]->out();
}

$renderer = new core_renderer($PAGE, 'frontpage');
$headhtml = $renderer->standard_head_html();
$jsheader = $PAGE->requires->get_head_code($PAGE, $renderer);
$jsurl = $PAGE->theme->javascript_url(false);
$jsfooter = $PAGE->requires->get_end_code();

echo '
<head>
' . $headhtml  . '
<link rel="stylesheet" type="text/css" href="' . $cssurl . '">
</head>
<body>

' . $jsurl . '

<div class="container my-4">
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
</div>
' . $jsfooter . '
</body>
';

