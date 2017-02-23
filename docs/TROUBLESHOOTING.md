# Troubleshooting Guide

## There is extra whitespace in my content.
If you find that extra whitespace is being added to content when copying it over into WordPress, try first copying the content into Notepad, then copying it from Notepad to WordPress. Notepad should remove any miscellaneous spaces that may exist within the content. If that doesn't work, remove any spaces between lines in the content, as WordPress may add `<p></p>` tags to empty lines.

## The widget area is blank.
If you have correctly added code to your template that should show a widget area yet it is still blank, do the following:
### Make sure you are calling in the right widget area
Verify that the name of widget area's `id` matches the `id` you are using when you are calling the widget. For example, if, in your functions.php file, you are registering the widget area using the `id` of `home_widget_area`, you should be calling the widget in your theme using the following code:
```php
<?php if ( is_active_sidebar( 'home_widget_area' ) ) : ?>
    <?php dynamic_sidebar( 'home_widget_area' ); ?>
<?php endif; ?>
```
### Make sure a widget has been added to your widget area
* In the WordPress administrative console, navigate to **Appearance** > **Widgets**.
* Verify that your widget areas have widgets in them.

## I can't find the widgets I need.
Verify that the plugins you need are installed and activated. Below is a table mapping widgets to their respective plugins:

| Widget | Plugin |
| ------ | ------ |
| Quick Search | CWS Inventory |
| Featured Inventory | CWS Inventory |