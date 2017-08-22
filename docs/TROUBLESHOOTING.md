# Troubleshooting Guide

## I can't see my site when I go to http://192.168.10.33.
If the HTTP status code of the error begins with a **4** (e.g. 404), then you need to make sure that vagrant is running. Try running `vagrant up`.

If the HTTP status code of the error beings with a **5** (e.g. 500), then there is either something wrong with your theme or with one of the plugins. Follow these instructions:

1. Deactivate your theme. If the problem goes away, then there is something wrong with your theme. Troubleshoot your theme. If the problem persists, then it is most likely a plugin issue. Continue to the next step.
2. Deactivate all of your plugins. If the problem persists, then there is a larger issue. Notify your manager. If the problem goes away, continue to the next step.
3. Activate a plugin. If the problem re-emerges, the issue is with that plugin. Notify your manager. If the problem doesn't yet re-emerge, continue re-activating plugins one by one until you see the problem again, then notify your manager once you have identified the problematic plugin.

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

## My hero carousel isn't transitioning properly
Delete the carousel.css file, and remove the call from your header.

## My featured inventory widget isn't working correctly
If you are getting either of the following errors -- `JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4` or `$inventoryCarousel.carousel is not a function` -- remove the jquery call(s) from your header and add the following inside functions.php:
```
add_action( 'wp_enqueue_scripts', function () {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.12.4.min.js', [ ], false, true );
});
```

## My featured inventory is being affected by styles on the hero carousel
Find the name of the div containing the hero carousel.
In the original css, find all `.carousel`, `.carousel-inner`, `.item`, `.carousel-indicators`, `.carousel-control` (and any related generic styles) -- add the container name in front of them.
_ex._ `.carousel { width: 300px; }` should become `#hero-spot .carousel { width: 300px; }`

The same method applies if the .carousel rotation _script_ is affecting your featured inventory -- add the name of the container div in front of the `.carousel` inside the script.
