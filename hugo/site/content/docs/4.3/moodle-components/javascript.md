---
layout: docs
title: "Javascript"
date: 2020-01-14T13:38:37+01:00
group: moodle-components
draft: false
menu: "main"
---

## Component name

Describe what this component is used for.

## Examples

Provide examples on how this component can be used and include some example code.

### Example 1

This is rendered using our custom "mustache renderer shortcode" for Hugo.

{{< mustacherender >}}
<div class="alert alert-{{type}}">
  text: {{text}}
</div>
{{< /mustacherender >}}

### Example 2

This is rendered using our custom "mustache shortcode" for Hugo.

{{< mustache "block_myprofile/myprofile" >}}

## Example

This is rendered using the "example shortcode" for Hugo.


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
<script>
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
</script>
{{< /example >}}