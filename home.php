<?php


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					
					//get_template_part( 'content', get_post_format() );
					?>
					<div class="blog_post">
						<div class="blog_featured">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="blog_title">
							<h2><?php the_title(); ?></h2>
						</div>
						<div class="blog_excerpt">
							
							<?php
							the_excerpt();
							?>
						
						</div>
						<div class="blog_permalink">
							
							<a href="<?php the_permalink(); ?>"> Read More </a>
							
						</div>
						
					</div>
		<div class="break_space"></div>
					<?php
					
					
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>