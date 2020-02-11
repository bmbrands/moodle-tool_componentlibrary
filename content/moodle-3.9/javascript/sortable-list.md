---
layout: docs
title: "Sortable list"
date: 2020-02-04T09:40:32+01:00
draft: false
---

## Description

The sortable lists amd module is located in ```/lib/amd/src/sortable_lists.js```
It can be used to create a list where each element is draggable.

## Examples

{{< example >}}
<ul class="list-group my-draggable-list">
    <li class="list-group-item">
        <span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="1. Cras justo odio">
            <i class="fa fa-arrows"></i>
        </span>
        1. Cras justo odio
    </li>
    <li class="list-group-item">
        <span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="2. Dapibus ac facilisis in">
            <i class="fa fa-arrows"></i>
        </span>
        2. Dapibus ac facilisis in
    </li>
    <li class="list-group-item">
        <span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="3. Morbi leo risus">
            <i class="fa fa-arrows"></i>
        </span>
        3. Morbi leo risus
    </li>
    <li class="list-group-item">
        <span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="4. Porta ac consectetur ac">
            <i class="fa fa-arrows"></i>
        </span>
        4. Porta ac consectetur ac
    </li>
    <li class="list-group-item">
        <span tabindex="0" role="button" aria-haspopup="true" data-drag-type="move" title="5. Vestibulum at eros">
            <i class="fa fa-arrows"></i>
        </span>
        5. Vestibulum at eros
    </li>
</ul>
{{#js}}
require(
[
    'jquery',
    'core/sortable_list',
],
function(
    $,
    SortableList
) {
     new SortableList('ul.my-draggable-list');

     $('ul.my-draggable-list > *').on(SortableList.EVENTS.DROP, function(evt, info) {
        console.log(info);
     });
});
{{/js}}
{{< /example >}}

## Usage

The sortable list AMD module can be loaded in your template or via a amd init call. The list to be sorted is passed as the first argument to

{{< highlight js >}}
// Default config, this variable is optional.
var config = {
    targetListSelector: null,
    moveHandlerSelector: '[data-drag-type=move]',
    isHorizontal: false,
    autoScroll: true
};
new SortableList(domElement, config);
{{< /highlight >}}

The events listed below can be used to connect the sortable list to a webserver handling changed positions of your sortable list items.

## Events

<table class="table">
  <thead>
    <tr>
      <th style="width: 150px;">Event type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>SortableList.EVENTS.DRAGSTART</td>
      <td>This event fires immediately when user started dragging a list element.</td>
    </tr>
    <tr>
      <td>SortableList.EVENTS.DRAG</td>
      <td>This event is fired when user dragged a list element to a new position.</td>
    </tr>
    <tr>
      <td>SortableList.EVENTS.DROP</td>
      <td>This event is fired when user dropped a list element</td>
    </tr>
    <tr>
      <td>SortableList.EVENTS.DROPEND</td>
      <td>This event is fired when user finished dragging - either fired right after dropping or if "Esc" was pressed during dragging</td>
    </tr>
  </tbody>
</table>
