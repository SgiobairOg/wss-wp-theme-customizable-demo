<?php get_header(); ?>

<?php get_template_part( 'content', 'top' ); ?>

<?php do_action( 'cws_content' ); ?>

<?php get_template_part( 'content', 'form' ); ?>

<?php get_template_part( 'content', 'bottom' ); ?>

<?php get_footer(); ?>
