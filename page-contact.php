<?php
/**
 * Template Name: Contact Us
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

                global $post;
             
                echo do_shortcode('[bimg_row id="contact-row-1" class="" equal=""][bimg_col id="" class="" columns="2" width="1"][bimg_title id="" class="" h_size="2"]Do you need help with your Christmas decorations?[/bimg_title][bimg_image id="" class="contact-image" img_url="http://127.0.0.1:8080/wordpress/wp-content/uploads/2015/03/confused-man-with-Christmas-lights-ws-679x1024.jpg" alt="Man tangled in Christmas lights" scale="false" url="" target="false"][/bimg_col][bimg_col id="" class="" columns="2" width="1"][bimg_title id="" class="" h_size="2"]Contact Us for More Information[/bimg_title][contact-form-7 id="1790" title="Contact form 1"][/bimg_col][/bimg_row]');
									
            ?>

                <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
