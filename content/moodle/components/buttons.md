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

### Primary and secondary buttons

Primary buttons have a higher visual weight and attracts most attention it should be used for the default action on a page.

Us primary buttons for the positive action on the page, for example "Save" or "Submit" when working on an assignment

{{< example >}}
<div class="row">
	<div class="col-5">
		<div class="card mb-2">
			<div class="card-body">
				<strong>Save Changes?</strong>
				<div class="d-flex">
					<button type="button" class="btn btn-secondary">Cancel</button>
					<button type="button" class="btn btn-primary mr-1">Save</button>
				</div>
			</div>
		</div>
	</div>
	<div class="col-5">
		<div class="card mb-2">
			<div class="card-body">
				<strong>Delete profile</strong>
				<div class="d-flex">
					<button type="button" class="btn btn-primary">Cancel</button>
					<button type="button" class="btn btn-secondary">Delete</button>
				</div>
			</div>
		</div>
		<div class="alert alert-success">Avoid generic 'OK' or 'Yes', avoid confusing phrases</div>
	</div>
</div>
{{< /example >}}

In case of more dangerous actions, like deleting something the having stiling the Cancel button as the primary button could be a good choice

Bootstrap classes are used to style Buttons, the most used styles are:

{{< example >}}
<button type="button" class="btn btn-primary">Primary buttons</button>
<button type="button" class="btn btn-secondary">Secondary buttons</button>
{{< /example >}}

### Button placement

TODO

### Button text

The meaning of buttons must be very clear.

{{< example show_markup="false">}}
<div class="row">
	<div class="col-5">
		<div class="card mb-2">
			<div class="card-body">
				<strong>Save Changes?</strong>
				<p>Would you like to not save your changes before exiting?</p>
				<div class="d-flex">
					<button type="button" class="btn btn-primary mr-1">Yes</button>
					<button type="button" class="btn btn-secondary">No</button>
				</div>
			</div>
		</div>
		<div class="alert alert-warning">Avoid generic 'OK' or 'Yes', avoid confusing phrases</div>
	</div>
	<div class="col-5">
		<div class="card mb-2">
			<div class="card-body">
				<strong>Save Changes</strong>
				<p>Would you like to save your changes before exiting?</p>
				<div class="d-flex">
					<button type="button" class="btn btn-primary mr-1">Save</button>
					<button type="button" class="btn btn-secondary">Discard</button>
				</div>
			</div>
		</div>
		<div class="alert alert-success">Avoid generic 'OK' or 'Yes', avoid confusing phrases</div>
	</div>
</div>
{{< /example >}}

### Button placement

### Button size

### Accessibility

