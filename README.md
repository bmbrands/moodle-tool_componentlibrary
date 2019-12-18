## Moodle Component Library plugin

The Moodle UI component Library is built with the aim to provide a single repository of Moodle UI components to be used for new and existing Moodle pages.

A Moodle UI component is a self-contained UI element originating from one source file that can be used in different locations in core code, for example a button.

This plugin generates the documentation of the Moodle User Interface components. It is build using the [Bootstrap](http://getbootstrap.com) docs and the [Hugo](gohugo.io) static site builder.

You will find all of the Bootstrap Component documentation pages using this plugin, and Moodle specific documentation all rendered using your Moodle's CSS and Javascript!

## Installation

Either install this plugin using Moodle's plugin installation interface or unzip it in your Moodle's admin/tools folder. Ensure the extracted folder name is called componentlibrary.

Once installed you can find the component library navigating to Site Administration > Development > Component Library

## Usage

-- warning: this process might change a lot during the development of this plugin

You can add documentation pages for new or existing UI elements using the [Hugo](gohugo.io) static site builder. To install Hugo you will need to have Node installed.

Install Hugo:
```
cd admin/tool/componentlibrary/src
npm install
````

Create the component library html pages:
```
./node_modules/hugo-bin/vendor/hugo
```
This will override any docs pages already included in this plugin.


Add a new hugo docs page
```
./node_modules/hugo-bin/vendor/hugo new site/content/docs/4.3/moodle-components/test.md
```
This adds a new documentation page, to include this page in the left hand menu manually edit the file site/data/sidebar.yml (for now).

For examples on the tools available, like including nicely formatted code please look at site/content/docs/4.3/moodle-components/search.md.

Hugo docs pages are written using Markdown, an easy to learn way of writing formatted pages. With Hugo we can do a lot more, there is an excellent [course on using Hugo](https://www.youtube.com/watch?v=qtIqKaDlqXo&list=PLLAZ4kZ9dFpOnyRlyS-liKL5ReHDcj4G3) on Youtube.

## Modifications for Moodle

This component library uses Moodle CSS for the docs pages in the ./ui folder. This has been made possible changing this HUGO layout file: ./src/site/layouts/partials/stylesheet.html

This file now include a reference to a helper JS file:

```
<script type="text/javascript" src="/../helpers/moodleresources.js"></script>
```

This JS file will pull the CSS of your current theme and include it on the page. Please note the CSS is cached in your local browser storage after first load to improve loading speed.

Some of the Bootstrap docs pages have been altered removing advertisements and pages not relevant to Moodle.