<?php get_header(); ?>

<?php get_template_part( 'content', 'top' ); ?>

<?php do_action( 'cws_content' ); ?>

<?php do_action( 'cws_showrooms' ); ?>

<?php get_template_part( 'content', 'bottom' ); ?>

<?php get_footer(); ?>
