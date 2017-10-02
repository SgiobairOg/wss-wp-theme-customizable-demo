<?php get_header(); ?>

<?php
    $model = get_query_var( 'model' );
    if ( !$model ) {
        get_template_part( 'partials/showrooms', 'description' );
        do_action( 'cws_content' );
    }
?>

<?php do_action( 'cws_showrooms' ); ?>

<?php get_footer(); ?>
