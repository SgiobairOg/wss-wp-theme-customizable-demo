# Replication Checklist

## Initial Setup
- [ ] Create a new GitHub repository and initialize with readme
- [ ] Fork the repository
- [ ] Clone wp_theme_template (follow readme instructions)
- [ ] Checkout into a new branch named after your ticket (ex. CUP-100)
- [ ] Add the theme name to style.css

## Site Cloning
- [ ] Download images from current site (for theme) -- save into assets/images (replace any spaces with dashes -- remember to change this in the code as well)
- [ ] Save css and js files from current site into assets/css -- primary css should be copied and pasted in style.css
- [ ] Get template source code for home and interior pages using View Source
- [ ] Replace all srcs and hrefs with the correct `<?php bloginfo ('stylesheet_directory');?>` path

## Header Setup
- [ ] Grab consistent header pieces (including relevant content wrappers) and move into header.php
- [ ] Delete any Visistat snippets
- [ ] [Replace title tag with wp tag](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#meta-tag-replacement)
- [ ] Remove any meta property="og" tags
- [ ] Save favicon in assets/images (if not already done)
- [ ] Add link to style.css (or replace existing stylesheet link)
- [ ] Add the [viewport](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#viewport) if it isn't already there
- [ ] Move `<?php wp_head();?>` before closing </head> tag
- [ ] Replace all srcs and hrefs with the correct `<?php bloginfo ('stylesheet_directory');?>` path
- [ ] Replace the links in your hard-coded navigation with our link-naming convention

## Footer Setup
- [ ] Grab consistent footer pieces (being sure to grab any necessary closing tags to complete header.php) and move into footer.php
- [ ] Replace footer link [urls](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#footer-urls)
- [ ] Move `<?php wp_footer();?>` before closing </body> tag

## Page Templates
- [ ] Paste home-only content into page-home.php (between `<?php get_header(); ?>` and `<?php get_footer(); ?>`)
- [ ] Place `<?php do_action( 'cws_content' ); ?>` where dealer content should go
- [ ] Repeat for the interior template(s) -- then duplicate this for index.php and each page-.php file -- be careful not to disturb any logic or form-names on specific pages

## Widgets
- [ ] Add [widget areas](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#widget-areas) wherever there is a quick search or featured inventory rotator

## Local Wordpress Setup
- [ ] In local wordpress, activate theme
- [ ] Add a ‘Home’ page to pages
- [ ] Set ‘Home’ as static front page (Appearance > Customize)
- [ ] Activate widget areas (Appearance > Widgets)
- [ ] Add [adjustments to style.css](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#featured-inventory-style-adjustments) as necessary

## Deploying to Demo
- [ ] Once the theme is ready, push your code to your origin (ex. git push origin CUP-100)
- [ ] Create a pull request from your branch (ex. CUP-100) to the TOL-CWS-Sites theme qa branch -- once approved/merged, the theme will be deployed to demo.prod so you can add content
- [ ] Activate widget areas again
- [ ] If Contact Form 7 Honeypot plugin is not installed, add and activate it

## Content Setup
- [ ] Create a Wordpress page for each page in the PSN navigation (use our naming convention for slugs) -- confirm slugs match what you used in your hard-coded navigation
- [ ] Duplicate the content for each PSN page
- [ ] Visit each page using PSN maintenance
- [ ] Download images (using Chrome’s ‘Image Downloader’ extension)
- [ ] If you see special files (ex. PDF or DOC), save those as well
- [ ] Upload images/pdfs/docs to media library
- [ ] Copy the content from the page (html version)
- [ ] Paste content into the text-editor tab of the WP content section
- [ ] Replace any srcs with the media library URL (ex. wp-content/uploads…)
- [ ] Preview/publish the page

*Note that some inventory/showroom pages have different content throughout -- we have special workarounds for this right now, so ask if you come across this*
- [ ] After Inventory/showrooms has been added, update any missing inventory and showroom links throughout the site
- [ ] Redirects
