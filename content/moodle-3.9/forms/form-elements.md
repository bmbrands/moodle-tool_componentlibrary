---
layout: docs
title: "Form elements"
date: 2020-01-14T16:32:24+01:00
draft: false
---

## Moodle forms

Forms are constructed using lib/formslib.php. Using the addElement methods in php a set of different form element types can be added to a form. For more info visit the [Moodledocs](https://docs.moodle.org/dev/lib/formslib.php_Form_Definition) page for forms

{{< php >}}
    $mform->addElement('button', 'intro', get_string("buttonlabel"));
{{< / php >}}

Form elements are styled using Moodle templates which are rendered through PHP. Themes can override these templates.

Form elements are styled using the .form-control class, see the [Bootstrap](/bootstrap-4.3/forms/input-group/) docs for more info.


