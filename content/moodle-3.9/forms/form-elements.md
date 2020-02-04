---
layout: docs
title: "Form elements"
date: 2020-01-14T16:32:24+01:00
draft: false
---

## Elements that can be added to a Moodle form

### Element button:

{{< php >}}
    $mform->addElement('button', 'intro', get_string("buttonlabel"));
{{< / php >}}

{{< mustache template="core_form/element-button" >}}

### Element Password unmask

{{< php >}}
	$mform->addElement('passwordunmask', 'password', get_string('label'), $attributes);
{{< / php >}}

{{< mustache template="core_form/element-passwordunmask" >}}

### Autocomplete

{{< php >}}
$searchareas = \core_search\manager::get_search_areas_list(true);

foreach ($searchareas as $areaid => $searcharea) {
    $areanames[$areaid] = $searcharea->get_visible_name();
}

$options = array(
    'multiple' => true,
    'noselectionstring' => get_string('allareas', 'search'),
);

$mform->addElement('autocomplete', 'areaids', get_string('searcharea', 'search'), $areanames, $options);
{{< / php >}}

{{< mustache template="core_form/element-autocomplete" >}}

