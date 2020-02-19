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
        <i class="icon fa fa-lightbulb-o fa-fw"></i>
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

## Buttons according to MDL-64494

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
    <button type="button" class="btn btn-mdl-{{ .name }} mr-2">
        <i class="icon fa fa-lightbulb-o fa-fw"></i>
        btn-{{ .name }}
    </button>
    <button type="button" class="btn btn-outline-mdl-{{ .name }}">
        <i class="icon fa fa-lightbulb-o fa-fw"></i>
        btn-outline-{{ .name }}
    </button>
</p>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}


## New Accessible buttos

The buttons shown below are using the Component Library CSS.

{{< example show_markup="false">}}
<div data-action="contrastcheck">
{{< colors.inline >}}
{{- range $themecolours := (index $.Site.Data "colours") }}
<div class="row mt-5 mb">
    <div class="col-12">
        <button type="button" class="btn btn-now-{{ .name }} mr-2">
            <i class="icon fa fa-lightbulb-o fa-fw"></i>
            btn-{{ $themecolours.name }}
        </button>
        <button type="button" class="btn btn-new-{{ .name }} mr-2">
            <i class="icon fa fa-lightbulb-o fa-fw"></i>
            New btn-{{ $themecolours.name }}
        </button>
        <button class="btn btn-sm btn-secondary" type="button" data-toggle="collapse" data-target="#btn-test-{{ .name }}" aria-expanded="false">
           <i class="fa fa-caret-down fa-fw"></i>
        </button>
    </div>
</div>
<div class="collapse" id="btn-test-{{ .name }}">
    <div class="row py-3">
    {{ range $num := (seq 49) }}
        <div class="col-md-3 mb-2">
            <button type="button" class="btn btn-test-{{ $num }}-{{ $themecolours.name }} mr-2">
                <i class="icon fa fa-lightbulb-o fa-fw"></i>
                {{ $themecolours.name }} {{ $num }}
            </button>
        </div>
    {{ end }}
    </div>
</div>
{{- end -}}
{{- range $themecolours := (index $.Site.Data "colours") }}
<div class="row mt-5 mb">
    <div class="col-12">
        <button type="button" class="btn btn-outline-now-{{ .name }} mr-2">
            <i class="icon fa fa-lightbulb-o fa-fw"></i>
            btn-outline-{{ $themecolours.name }}
        </button>
        <button type="button" class="btn btn-outline-new-{{ .name }} mr-2">
            <i class="icon fa fa-lightbulb-o fa-fw"></i>
            New btn-outline-{{ $themecolours.name }}
        </button>
        <button class="btn btn-sm btn-secondary nomargin" type="button" data-toggle="collapse" data-target="#btn-outline-test-{{ .name }}" aria-expanded="false">
            <i class="fa fa-caret-down fa-fw"></i>
          </button>
    </div>
</div>
<div class="collapse" id="btn-outline-test-{{ .name }}">
    <div class="row py-3">
    {{ range $num := (seq 49) }}
        <div class="col-md-3 mb-2">
            <button type="button" class="btn btn-outline-test-{{ $num }}-{{ $themecolours.name }} mr-2">
                <i class="icon fa fa-lightbulb-o fa-fw"></i>
                {{ $themecolours.name }} {{ $num }}
            </button>
        </div>
    {{ end }}
    </div>
</div>
{{- end -}}
{{< /colors.inline >}}
</div>
{{< /example >}}
