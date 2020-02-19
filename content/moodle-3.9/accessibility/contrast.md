---
layout: docs
title: "Contrast"
date: 2020-02-04T09:40:32+01:00
draft: false
---

## Colour contrast checks

The colour contrast of the components on this page are checked with some JS that adds a badge like this: <span class="badge badge-danger border border-dark m-1">2.50:1</span> if a the colour contrast of the component does not meet the WCAG standards. For AA compliance with these standards the number should be at least 4.5:1 to pass.

## Theme Buttons

The buttons shown below are rendered with your current theme CSS.

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <button type="button" class="btn btn-{{ .name }} mr-2">
        <i class="icon fa fa-smile-o fa-fw"></i>
        btn-{{ .name }}
    </button>
    <button type="button" class="btn btn-outline-{{ .name }}">
        <i class="icon fa fa-lightbulb-o fa-fw"></i>
        btn-outline-{{ .name }}
    </button>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}

## Buttons made accessible (MDL-64494)

The buttons shown below are using the Component Library CSS. Most of the standard (not outline) buttons should show as passing.

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <button type="button" class="btn btn-acc-{{ .name }} mr-2">
        <i class="icon fa fa-smile-o fa-fw"></i>
        btn-{{ .name }}
    </button>
    <button type="button" class="btn btn-acc-outline-{{ .name }}">
        <i class="icon fa fa-lightbulb-o fa-fw"></i>
        btn-outline-{{ .name }}
    </button>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}

## Alerts

The alerts shown below are rendered with your current theme CSS.

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <div class="alert alert-{{ .name }}" role="alert">{{ .name }}</div>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}

## Alerts made accessible (MDL-64494)

The alerts shown below are using the Component Library CSS.

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <div class="alert alert-acc-{{ .name }}" role="alert">{{ .name }}</div>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}

## Tables

{{< example show_markup="false">}}
<div data-action="contrastcheck">
    <table class="table table-striped">
        <tbody>
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
          <tr class="table-{{ .name }}">
            <th scope="row">{{ .name }}</th>
            <td>Cell</td>
            <td>Cell</td>
          </tr>
{{- end -}}
{{< /colors.inline >}}
        </tbody>
    </table>
</div>
{{< /example >}}

## Badges

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <span class="badge badge-{{ .name }}">{{ .name }}</button>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}