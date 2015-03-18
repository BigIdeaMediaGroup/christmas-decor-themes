<?php
/**
 * Template Name: About Us
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post();

                global $post;
                
                $page_content = do_shortcode('	[tab title="Professionalism"][bimg_row id="" class="" equal="false"]
                								[bimg_col id="" class="" columns="2" width="1"] ' . get_post_meta( $post->ID, '_bimg_about_professionalism_description', true ) . '[bimg_separator id="" class="about-separator"]<div class="christmas-list">' . get_post_meta( $post->ID, '_bimg_about_professionalism_list', true ) . '</div>[/bimg_col]
                								[bimg_col id="" class="" columns="2" width="1"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_professionalism_image_1', true ) . '" alt="Professionals" scale="false" url="" target="false"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_professionalism_image_2', true ) . '" alt="Professionals" scale="false" url="" target="false"]
                								[/bimg_col]
                								[/bimg_row]
                								[/tab]');
                
                $page_content .= do_shortcode('	[tab title="Premium Products"][bimg_row id="" class="" equal="false"]
                								[bimg_col id="" class="" columns="2" width="1"] ' . get_post_meta( $post->ID, '_bimg_about_products_description', true ) . '[bimg_separator id="" class="about-separator"]<div class="christmas-list">' . get_post_meta( $post->ID, '_bimg_about_products_list', true ) . '</div>[/bimg_col]
                								[bimg_col id="" class="" columns="2" width="1"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_products_image_1', true ) . '" alt="Christmas Decorations" scale="false" url="" target="false"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_products_image_2', true ) . '" alt="Christmas Decorations" scale="false" url="" target="false"]
                								[/bimg_col]
                								[/bimg_row]
                								[/tab]');
                								
				$page_content .= do_shortcode('	[tab title="All-Inclusive"][bimg_row id="" class="" equal="false"]
                								[bimg_col id="" class="" columns="2" width="1"] ' . get_post_meta( $post->ID, '_bimg_about_inclusive_description', true ) . '[bimg_separator id="" class="about-separator"]<div class="christmas-list">' . get_post_meta( $post->ID, '_bimg_about_inclusive_list', true ) . '</div>[/bimg_col]
                								[bimg_col id="" class="" columns="2" width="1"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_inclusive_image_1', true ) . '" alt="Entryway of brick home decorated with garland and lights" scale="false" url="" target="false"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_inclusive_image_2', true ) . '" alt="" scale="false" url="" target="false"]
                								[/bimg_col]
                								[/bimg_row]
                								[/tab]');
                								
                $page_content .= do_shortcode('	[tab title="Philanthropy"][bimg_row id="" class="" equal="false"]
                								[bimg_col id="" class="" columns="2" width="1"] ' . get_post_meta( $post->ID, '_bimg_about_philanthropy_description', true ) . '[bimg_separator id="" class="about-separator"]<div class="christmas-list">' . get_post_meta( $post->ID, '_bimg_about_philanthropy_list', true ) . '</div>[/bimg_col]
                								[bimg_col id="" class="" columns="2" width="1"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_philanthropy_image_1', true ) . '" alt="Entryway of brick home decorated with garland and lights" scale="false" url="" target="false"]
                								[bimg_image id="" class="aligncenter about-images" img_url="' . get_post_meta( $post->ID, '_bimg_about_philanthropy_image_2', true ) . '" alt="" scale="false" url="" target="false"]
                								[/bimg_col]
                								[/bimg_row]
                								[/tab]');
                
                echo do_shortcode('[bimg_tabs id="about-tabs" class=""]' . $page_content . '[/bimg_tabs]');
            
            ?>

                <?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
