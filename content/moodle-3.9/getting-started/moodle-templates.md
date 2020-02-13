---
layout: docs
title: "Moodle templates"
date: 2020-01-14T13:38:37+01:00
group: moodle-components
draft: false
menu: "main"
---

## Moodle templates

To render example HTML and Javascript we use a custom HUGO shortcode. A shortcode is a simple snippet inside a content file that Hugo will render using a predefined template.

The example short code included with the component library is an easy and simple way to allow displaying HTML code and running RequireJS JavaScript (AMD modules).

```
{{</* example */>}}

  Your mustache HTML

{{</* /example */>}}
```

The example code will be rendered on the page and allows you to use Moodle's amd structure for require.js. The ```{{#js}}``` tags will be transformed into normal ```<script>``` tags. 

## Example

This example shows the result of the Bootstrap toast method using Jquery and a Boostrap AMD module.

{{< example >}}
<div id="toasttest" role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
  <div class="toast-header">
    <img src="http://placekitten.com/50/50" class="rounded mr-2" alt="PlaceKitten">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
{{#js}}
require(
[
    'jquery',
    'theme_boost/toast',
],
function(
    $,
    Toast
) {
    var root = $('#toasttest');
    root.toast('show');
});
{{/js}}
{{< /example >}}