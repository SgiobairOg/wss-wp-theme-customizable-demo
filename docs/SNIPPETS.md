#Important Code Snippets

##Meta Tag Replacement
```
<title><?php wp_title();?></title>
<meta property="og:url" content="<?php bloginfo('url');?>"/>
<meta property="og:image" content="Empty"/>
<meta property="og:title" content="<?php wp_title();?>"/>
<meta property="og:description" content="<?php bloginfo('description');?>"/>
<link rel="canonical" href="<?php bloginfo('url');?>">
```

##Viewport
```
<meta name="viewport" content="width=device-width, initial-scale=1">
```

##Footer URLs
```
<a href="/policy">Policies</a>
<a href="/privacy">Privacy</a>
<a href="/terms">Terms & Conditions</a>
<a href="/disclaimer">Disclaimer</a>
a href="/site-map">Site Map</a>
```

##Widget areas
```
<?php if ( is_active_sidebar( 'featured_inventory_widget_area' ) ) : ?>
    <?php dynamic_sidebar( 'featured_inventory_widget_area' ); ?>
<?php endif; ?>
```
```
<?php if ( is_active_sidebar( 'quick_search_widget_area' ) ) : ?>
    <?php dynamic_sidebar( 'quick_search_widget_area' ); ?>
<?php endif; ?>
```

##Featured Inventory Style adjustments
Add space above widget: `.widget_featured_inventory { margin-top: 10px; }`
Hide default widget title: `.widget_featured_inventory > h2 { display: none; }`
Hide carousel indicators: `.widget_featured_inventory .carousel-indicators { display: none !important; }`
Various carousel-control styles: `#featured-inventory-carousel .carousel-control { color: #b9d306 !important; font-size: 48px !important; font-weight: bold; height: 48px !important; width: 48px !important; top: 50px !important; transform: translateY(0) !important; padding: 0; opacity: 1; }`
Model info text color: `#featured-inventory-carousel .featured-inventory-model-info { color: #fff !important; }`