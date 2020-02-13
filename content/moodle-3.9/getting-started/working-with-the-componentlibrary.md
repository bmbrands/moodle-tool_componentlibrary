---
layout: docs
title: "Working with the Component Library"
date: 2020-01-01T15:43:07+01:00
group: moodle-components
draft: false
---

## Managing Pages

Pages for the component library are written in [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet) and a number of Hugo powered tools that will allow you to include Mustache templates.

## Running Hugo

Hugo pages are created with the Hugo binary which is not included with this component library. To install it you will need to have `npm` installed on your Moodle server. With npm install simpy run `npm install` to fetch hugo and all dependancies.

Once you have installed you all you need to do is run `npm run start` to create the component library pages.

All configuration for running Hugo is included in this plugin. The required folders for Hugo are:


```
├── content
│   ├── bootstrap-4.3
│   ├── moodle-3.9
```

`docs` The Bootstrap documentation

`moodle` The Moodle documentation

```
├── hugo
│   ├── archetypes
│   ├── dist
│   ├── scss
│   ├── site
```

`archetypes` are template markdown files used when creating a new hugo page.

`dist` CSS and JavaScript for use in Hugo pages

`scss` The SCSS used to generate the docs css for the Component Library.

`site` The page templates for hugo that include the left hand menu, navbar etc. And the templates to render example code shown in this component library.

## Creating a new docs page

Run this command to create a new page called `MYDOCSPAGE`.

```
./node_modules/hugo-bin/vendor/hugo new -k moodle moodle/3.9/testing/MYDOCSPAGE.md
```

Open your new docs page in your editor and start writing your page. When you are done run this command to see the results.

```
npm run start
```

