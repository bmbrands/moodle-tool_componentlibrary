---
layout: docs
title: "Charts"
date: 2020-01-14T16:32:24+01:00
group: moodle-components
draft: false
---

## Component name

Describe what this component is used for.

## Examples

Provide examples on how this component can be used and include some example code.

### Example 1

{{< example >}}
<div class="chart-area" id="chart-area-999">
    <div class="chart-image" role="presentation" aria-describedby="chart-table-data-999"></div>
    <div class="chart-table {{^withtable}}accesshide{{/withtable}}">
        <p class="chart-table-expand">
            <a href="#" aria-controls="chart-table-data-999" role="button">
                {{#str}}showchartdata, moodle{{/str}}
            </a>
        </p>
        <div class="chart-table-data" id="chart-table-data-999" {{#withtable}}role="complementary" aria-expanded="false"{{/withtable}}></div>
    </div>
</div>

<script>
var chartdata = {"type":"line","series":[{"label":"Sales","labels":null,"type":null,"values":[1000,1170,660,1030],"colors":[],"axes":{"x":null,"y":null},"smooth":null},{"label":"Expenses","labels":null,"type":null,"values":[400,460,1120,540],"colors":[],"axes":{"x":null,"y":null},"smooth":null}],"labels":["2004","2005","2006","2007"],"title":"TENSIONED LINES CHART","axes":{"x":[],"y":[]},"config_colorset":null,"smooth":false};

require([
    'jquery',
    'core/chart_builder',
    'core/chart_output_chartjs',
    'core/chart_output_htmltable',
], function($, Builder, Output, OutputTable) {
    var data = chartdata,
        uniqid = "999",
        chartArea = $('#chart-area-' + uniqid),
        chartImage = chartArea.find('.chart-image'),
        chartTable = chartArea.find('.chart-table-data'),
        chartLink = chartArea.find('.chart-table-expand a');
    Builder.make(data).then(function(ChartInst) {
        new Output(chartImage, ChartInst);
        new OutputTable(chartTable, ChartInst);
    });

    chartLink.on('click', function(e) {
        e.preventDefault();
        if (chartTable.is(':visible')) {
            chartTable.hide();
            chartLink.text("showchartdata");
            chartTable.attr('aria-expanded', false);
        } else {
            chartTable.show();
            chartLink.text("hidechartdata");
            chartTable.attr('aria-expanded', true);
        }
    });
});
</script>
{{< /example >}}

## Accessibility

## Usage

List the available CSS classes for this componentn

### Javascript attributes

List the various data-attributes linked to JavaScript behaviour for this component.