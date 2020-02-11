---
layout: docs
title: "Buttons"
date: 2020-01-14T16:32:24+01:00
draft: false
---

## Button types

Button components are available as part of a Moodle form, as a single button functioning as a form submit or triggering a JavaScript action.

### Button renderers

{{< php >}}
    $OUTPUT->single_select($url, $name, $options);
{{< / php >}}

### Button styles

Bootstrap classes are used to style Buttons, the most used styles are:

{{< example >}}
<button type="button" class="btn btn-primary">Primary buttons</button>
<button type="button" class="btn btn-secondary">Secondary buttons</button>
{{< /example >}}



