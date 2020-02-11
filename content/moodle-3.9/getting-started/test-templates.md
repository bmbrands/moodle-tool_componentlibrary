---
layout: docs
title: "Test Templates"
date: 2020-01-14T13:38:37+01:00
group: moodle-components
draft: true
---

## Testing the mustache renderer

As an addon for this component library I would like it to be able to load core mustache templates. Lets give that a try

The shortcode for this is:


```
{{</* mustache component_name/templatename */>}}
```

{{< mustache template="block_myoverview/nav-sort-selector" >}}

hallo?