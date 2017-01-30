<?php get_header(); ?>

<?php get_template_part( 'partials/content', 'top' ); ?>

<?php do_action( 'cws_content' ); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
        do_action( 'cws_content' );
    }
    do_action( 'cws_inventory' );
?>

<?php get_template_part( 'partials/content', 'bottom' ); ?>

<?php get_footer(); ?>
