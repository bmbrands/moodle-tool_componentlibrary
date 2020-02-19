---
layout: docs
title: "Contrast"
date: 2020-02-04T09:40:32+01:00
draft: false
---

## Buttons

{{< example show_markup="false">}}
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
	<button type="button" class="btn btn-{{ .name }}">{{ .name }} {{ .hex }}</button>
</p>
{{- end -}}
{{< /colors.inline >}}
{{< /example >}}

## Alerts

{{< example show_markup="false">}}
{{< colors.inline >}}
{{- range (index $.Site.Data "colours") }}
<p>
	<div class="alert alert-{{ .name }}" role="alert">{{ .name }} {{ .hex }}</div>
</p>
{{- end -}}
{{< /colors.inline >}}
{{< /example >}}