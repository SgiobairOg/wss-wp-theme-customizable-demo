<?php get_header(); ?>

<?php do_action( 'cws_content' ); ?>

<?php if ( is_active_sidebar( 'home_widget_area' ) ) : ?>
    <?php dynamic_sidebar( 'home_widget_area' ); ?>
<?php endif; ?>

<?php get_footer(); ?>
