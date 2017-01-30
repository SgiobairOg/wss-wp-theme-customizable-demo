<?php get_header(); ?>

<?php get_template_part( 'partials/content', 'top' ); ?>

<?php do_action( 'cws_content' ); ?>

<?php get_template_part( 'partials/content', 'bottom' ); ?>

<?php get_footer(); ?>
