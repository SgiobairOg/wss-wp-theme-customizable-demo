<?php get_header(); ?>

<?php get_template_part( 'content', 'top' ); ?>

<?php do_action( 'cws_content' ); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
        do_action( 'cws_content' );
    }
    do_action( 'cws_inventory' );
?>

<?php get_template_part( 'content', 'bottom' ); ?>

<?php get_footer(); ?>
