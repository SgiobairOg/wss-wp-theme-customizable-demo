# CWS WordPress Theme Template
The template is a starting point for creating custom themes. Consult [WordPress' Theme Handbook](https://developer.wordpress.org/themes/) for development best practices.

## Features
* The template is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).
* The template uses a strict file organization scheme that makes it easy to organize the files that compose the theme.

## Setup
**Do not fork this repository to start a new plugin!!!**

### Create and fork the repository
Create a repository in the TOL-CWS-Sites organization whose name follows this naming convention:
```wp-theme-<project name>```

When creating the repository, be sure to click on the option that asks you to "Initialize this repository with a README".

Once the repository has been created, fork it in your account.

### Clone the template
To use the template files without copying all of the unnecessary git history associated with the template repository,
do a shallow clone of this repository by executing the following command:
```
cd </path/to/your/projects>
git clone git@github.dominionenterprises.com:TOL-CWS-Sites/wp-theme-template wp-theme-<domain>
cd wp-theme-<domain>
git remote rm origin
git remote add origin git@github.dominionenterprises.com:my-username/wp-theme-<domain>
git remote add upstream git@github.dominionenterprises.com:TOL-CWS-Sites/wp-theme-<domain>
git commit -am "<Jira Issue ID>: Initial commit"
git push -u origin master
```

## Folder Structure
CSS, JavaScript, and images should exist in the directories reserved for those resources.
* `assets/css` is for all CSS files **except** the style.css file
* `assets/img` is for all theme images
* `assets/js` is for all JavaScript files
* `assets/less` is for all LESS files

## Testing
To make sure your theme is up to snuff, run the following commands once you're done with your changes:
```
composer install --no-interaction
./vendor/bin/phing -verbose
```
