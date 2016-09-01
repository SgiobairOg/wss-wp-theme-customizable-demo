# CWS WordPress Theme Template
The template is a starting point for creating custom themes. Consult [WordPress' Theme Handbook](https://developer.wordpress.org/themes/) for development best practices.

## Features
* The template is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).
* All classes, functions, and variables are documented so that you know what you need to be changed.
* The template uses a strict file organization scheme that makes it easy to organize the files that compose the theme.

## Setup
*Do not fork this repository to start a new plugin!*

### Create your repository
The repository name should follow the ```wp-theme-<project name>``` naming convention and should exist in the TOL-CWS
organization.

### Clone the template
To use the template files without copying all of the unnecessary git history associated with the template repository,
do a shallow clone of this repository by executing the following command:
```
git clone --depth 1 git@github.dominionenterprises.com:TOL-CWS/wp-theme-template.git wp-plugin-<project name>
```

### Change the remote
Change the shallow clone's remote to that of your new plugin's repository by executing the following commands:
```
cd <project-name>
git remote rm origin
git remote add origin git@github.dominionenterprises.com:TOL-CWS/wp-theme-<project name>
```

## Folder Structure
CSS, JavaScript, and images should exist in the directories reserved for those resources.
* `css` is for all CSS files **except** the style.css file
* `img` is for all theme images
* `js` is for all JavaScript files
* `less` is for all LESS files

# Packaging
To prepare your theme for installation, use the `package` build target and pass the theme slug as an argument. For example:
```
./vendor/bin/phing -Dtheme.slug=my-theme package -verbose # this will produce a my-theme.zip in the project root
```
