<?php
/**
 * Template Name: Residential
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

                global $post;
             
                echo do_shortcode('	[bimg_row id="" class="" equal="false"]
        								[bimg_col id="" class="" columns="2" width="1"]
        								[bimg_title id="" class="" h_size="2"]' . get_post_meta( $post->ID, '_bimg_services_about_title', true ) . '[/bimg_title]
        								' . get_post_meta( $post->ID, '_bimg_services_about_description', true ) . '
        								[/bimg_col]
        								[bimg_col id="" class="" columns="2" width="1"]
        									[bimg_image id="" class="aligncenter" img_url="' . get_post_meta( $post->ID, '_bimg_services_about_image', true ) . '" alt="Commercial Decorating Example" scale="false" url="" target="false"]
        								[/bimg_col]
        								[/bimg_row]');
                
				echo do_shortcode('	[bimg_row id="" class="" equal="false"]
										[bimg_col id="" class="" columns="3" width="2"]
											[bimg_title id="" class="" h_size="2"]Why decorate your business for the Holidays?[/bimg_title]
											[bimg_tabs id="about-tabs" class=""]
											[tab title="' . get_post_meta( $post->ID, '_bimg_services_tabs_tab1_title', true ) . '"]' . get_post_meta( $post->ID, '_bimg_services_tabs_tab1_text', true ) . '[/tab]
											[tab title="' . get_post_meta( $post->ID, '_bimg_services_tabs_tab2_title', true ) . '"]' . get_post_meta( $post->ID, '_bimg_services_tabs_tab2_text', true ) . '[/tab]
											[tab title="' . get_post_meta( $post->ID, '_bimg_services_tabs_tab3_title', true ) . '"]' . get_post_meta( $post->ID, '_bimg_services_tabs_tab3_text', true ) . '[/tab]
											[tab title="' . get_post_meta( $post->ID, '_bimg_services_tabs_tab4_title', true ) . '"]' . get_post_meta( $post->ID, '_bimg_services_tabs_tab4_text', true ) . '[/tab]
											[/bimg_tabs]
										[/bimg_col]
										[bimg_col id="" class="" columns="3" width="1"]
	                						<div class="video-container">
	                						<div class="video"><iframe src="https://www.youtube.com/embed/'. get_post_meta( $post->ID, '_bimg_services_video_id', true ) . '" width="365" height="206" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>
	                						</div>                				
										[/bimg_col]
									[/bimg_row]');
									
            ?>

                <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
