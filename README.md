# CWS WordPress Theme Template
The template is a starting point for creating custom themes. Consult [WordPress' Theme Handbook](https://developer.wordpress.org/themes/) for development best practices.

## Features
* The template is based on the [Plugin API](http://codex.wordpress.org/Plugin_API), [Coding Standards](http://codex.wordpress.org/WordPress_Coding_Standards), and [Documentation Standards](https://make.wordpress.org/core/handbook/best-practices/inline-documentation-standards/php/).
* The template uses a strict file organization scheme that makes it easy to organize the files that compose the theme.

## Setup
**NOTE: Do not fork this repository to start a new plugin!!!**

## Create your theme's repository
If your theme's repository hasn't already been created for you, create it in the [TOL-CWS-Sites](https://github.dominionenterprises.com/TOL-CWS-Sites) organization. The naming convention for theme repositories is as follows:

 ```
 wp-theme-<domain>
 ```
 
`<domain>` should be replaced with the domain name of the site being replicated. For example, if you are creating a theme for `mysite.com`, the name of the theme's repository must be `wp-theme-mysite.com`.

## Create your fork
Once the repository has been created, fork it. All of your work will be done in your fork. Follow the [CWS Product Team Workkflow](https://github.dominionenterprises.com/TOL-CWS/handbook/blob/master/development/Workflow.md) when making changes.

## Add your initial files 
Using this repository as a starting point, create the files you'll need for your theme by performing the following commands:
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
