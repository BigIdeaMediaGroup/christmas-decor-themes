<?php
/**
 * Template Name: FAQs
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <?php

		// The Query
		$the_query = new WP_Query( 'post_type=faq' );

		$faq_content = '';

		// The Loop
	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$faq_content .= '[toggle title="' . get_the_title() . '"]' . get_the_content() . '[/toggle]';
		}
		echo do_shortcode( '[bimg_accordion collapsible="true" height_style="" icon="false" id="cd-faq" class=""]' . $faq_content . '[/bimg_accordion]' );
	} else {
		// no posts found
	}
		/* Restore original Post Data */
		wp_reset_postdata();

	?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
