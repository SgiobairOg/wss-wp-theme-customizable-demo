# CWS WordPress Theme Template
The template is a starting point for creating custom themes.

## Setup
**NOTE: Do not fork this repository to start a new plugin!!!**

## Set up your local environment
If you haven't done so already, follow the instructions in [vagrant-wordpress](https://github.dominionenterprises.com/TOL-CWS-Sites/vagrant-wordpress) to install WordPress on your machine.

### Create your theme's repository
If your theme's repository hasn't already been created for you, create it in the [TOL-CWS-Sites](https://github.dominionenterprises.com/TOL-CWS-Sites) organization and include a README.md file during creation. The naming convention for theme repositories is as follows:

 ```
 wp-theme-<domain>
 ```
 
`<domain>` should be replaced with the domain name of the site being replicated. For example, if you are creating a theme for `mysite.com`, the name of the theme's repository must be `wp-theme-mysite.com`.

### Create your fork
Once the repository has been created, fork it. All of your work will be done in your fork. Follow the [CWS Product Team Workkflow](https://github.dominionenterprises.com/TOL-CWS/handbook/blob/master/development/Workflow.md) when making changes.

### Add your initial files 
Using this repository as a starting point, create the files you'll need for your theme by performing the following commands:
```bash
cd </path/to/your/themes>
git clone git@github.dominionenterprises.com:TOL-CWS-Sites/wp-theme-template wp-theme-<domain>
cd wp-theme-<domain>
git remote rm origin
git remote add origin git@github.dominionenterprises.com:my-username/wp-theme-<domain>
git remote add upstream git@github.dominionenterprises.com:TOL-CWS-Sites/wp-theme-<domain>
git pull origin master
```

At this point, you should get a merge conflict message. Do the following to resolve it and complete your theme repository's setup.
```bash
git checkout --theirs README.md
git push -u origin master
```

You're done!

## Folder Structure
CSS, JavaScript, and images should exist in the directories reserved for those resources.
* `assets/css` is for all CSS files **except** the style.css file
* `assets/img` is for all theme images
* `assets/js` is for all JavaScript files

## Testing
To make sure your theme is up to snuff, run the following commands once you're done with your changes:
```
composer install --no-interaction
./vendor/bin/phing -verbose
```

## Replicating Sites
If you are replicating a PSN site, consult the [replication guide](docs/REPLICATING.md) for further instructions.

## Troubleshooting
Consult the [troubleshooting guide](docs/TROUBLESHOOTING.md) for solutions to common problems.