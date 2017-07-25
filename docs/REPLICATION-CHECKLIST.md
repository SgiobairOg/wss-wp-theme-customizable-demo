# Replication Checklist

## Initial Setup
- [ ] Create a new GitHub repository and initialize with readme
- [ ] Fork the repository
- [ ] Clone wp_theme_template (follow readme instructions)
- [ ] Checkout into a new branch named after your ticket (ex. CUP-100)
- [ ] Add the theme name to style.css

## Site Cloning
- [ ] Download all theme assets/images from current site (including css files) -- save into appropriate subdirectory of assets (replace any spaces with dashes -- remember to change this in the code as well)
- [ ] Save css and js files from current site into assets/css -- primary css should be copied and pasted in style.css
- [ ] Get template source code for home page using View Source, and paste into header -- delete content and old widgets (for featured inventory, delete the entire class="style5container" table; if your rotator or quick search is still directly inside of a table, add a <tr><td> around the widget as needed, then close the tags)
- [ ] Replace all srcs and hrefs with the correct `<?php bloginfo ('stylesheet_directory');?>` path

## Header Setup
- [ ] Grab consistent header pieces (including relevant content wrappers) and move into header.php
- [ ] Delete any Visistat snippets
- [ ] [Replace title tag with wp tag](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#meta-tag-replacement)
- [ ] Remove any meta property="og" tags
- [ ] Delete all jquery and bootstrap call-ins (these are now automatically being added inside functions.php)
- [ ] If you have a line similar to this, delete it: `<link href="http://site.com/stylesheet.asp..." title="new" rel="stylesheet" type="text/css">` (we are now linking to style.css using functions.php)
- [ ] Add the [viewport](https://github.dominionenterprises.com/TOL-CWS-Sites/wp-theme-template/blob/master/docs/SNIPPETS.md#viewport) if it isn't already there
- [ ] If you have a carousel script (see below), make it more specific using the ID of the carousel container. Example:
If your carousel div inside another div called `<div id="hero_spot">`, change the 3rd line here
```
<script>
    $(document).ready(function(){
        $('.carousel').carousel({
            interval: 5000
        });
    });
</script>
```
to this
```
$('#hero_spot .carousel').carousel({
```
this means "div with class 'carousel' inside div with id of 'hero_spot'"
- [ ] Move `<?php wp_head();?>` before closing </head> tag
- [ ] Replace the links in your hard-coded navigation with our link-naming convention
- [ ] If your MenuAnchor has a z-index larger than 999, change the z-index to 999

## Footer Setup
- [ ] Grab consistent footer pieces (being sure to grab any necessary closing tags to complete header.php) and move into footer.php
- [ ] Replace footer links with the footer plugin tag:  `<?php do_action('cws_footer'); ?>`
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
- [ ] Create a ‘Home’ page and set as static front page (if not done by default)
- [ ] Create a Wordpress page for each page in the PSN navigation (use our naming convention for slugs) -- confirm slugs match what you used in your hard-coded navigation
- [ ] Duplicate the content for each PSN page
- [ ] Visit each page using PSN maintenance
- [ ] Download images (using Chrome’s ‘Image Downloader’ extension)
- [ ] If you see special files (ex. PDF or DOC), save those as well
- [ ] Upload images/pdfs/docs to media library
- [ ] Copy the content from the page (html version)
- [ ] Paste content into the text-editor tab of the WP content section
- [ ] Replace any srcs with the media library URL (ex. wp-content/uploads…)
- [ ] Add any necessary SEO meta data
- [ ] Preview/publish the page

*Note that some inventory/showroom pages have different content throughout -- we have special workarounds for this right now (involving partial files), so ask if you need help with this*
- [ ] After Inventory/showrooms has been added, update any missing inventory and showroom links throughout the site

## Finishing touches
- [ ] Remove any unused pages -- any pages not being used on the website should be moved to the Trash (including form pages)

## Redirects
- [ ] Copy the old PSN URL extension and map it to the new URL extension (Ex. - “/custompage.asp?pg=mypage” > “/my-page”
- [ ] Add all custom page redirects in Redirection

## SEO Meta Titles and Descriptions
- [ ] Copy the SEO meta titles and descriptions for each page on PSN into the corresponding pages in WordPress (ignore cws-login page and legal pages)

## Mobile Website Configuration
- [ ] If your site is labeled 'Responsive', DEACTIVATE the WPtouch plugin (and ignore the following steps)
- [ ] If your site is not responsive, confirm the WPtouch plugin is activated
- [ ] Navigate to WPtouch settings and select Customize theme > Go to the Customizer
- [ ] Site Identity - If the website has a favicon, attach / select it here
- [ ] Colors - Set the theme background, header & menu, and links colors here to match the desktop site as closely as possible (use the same hex codes)
- [ ] Header - Upload / select the dealer’s logo here (if available)
- [ ] Save & Publish
