---
layout: docs
title: "Example Page"
date: 2020-02-04T09:40:32+01:00
draft: true
---

## Images

To use images use this syntax:

```
{{</* image "wildebeest-1200.jpg" "Image of a Wildebeest" */>}}
```

{{< image "wildebeest-1200.jpg" "Image of a Wildebeest">}}

## Examples

{{< example >}}
<div class="myclass">
	This is an example.
</div>
{{< /example >}}

## PHP code

{{< php >}}
	$mform->addElement('passwordunmask', 'password', get_string('label'), $attributes);
{{< / php >}}

## Javascript code

{{< highlight js >}}
var config = {
    test: null,
    selector: '[data-drag-type=move]'
};
{{< /highlight >}}

## Raw HTML

<table class="table">
  <thead>
    <tr>
      <th style="width: 150px;">Table head 1</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Lorum ipsum</td>
      <td>Dolor sit amet.</td>
    </tr>
    <tr>
      <td>Lorum ipsum</td>
      <td>...</td>
    </tr>
  </tbody>
</table>

## Mustache templates

{{< mustache template="tool_componentlibrary/navbar" >}}