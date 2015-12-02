# webdevs-craft

## Introduction
Webdevs Page with Craft

## Dependencies
- Node 4.2.x
- Gulp 3.9.0
- Craft 2.5.2

## Installation

### First Install
Clone Repo than:

```bash
npm install && bower install
```

Than add a `dist` folder to your project root.
Next download Craft 2.5 and put all files in the `dist` folder, than start `gulp init`.

### Regular Start

When you have an initiated Project, you will continue your work with:

```bash
gulp
``` 

And work only in the `src` folder.
- `src/structure/` will be copied to `dist/craft/templates`
- Sass Stuff is in the `src/style` folder. Use the `workfile.scss`, alternative use the `src/styles/application` folder for Sass Comps, Modules and Elements.
- Preconfigured URL is `http://webdevs.local` (for BrowserSync and the Craft Config)

