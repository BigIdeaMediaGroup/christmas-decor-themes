<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package BIMG Base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php /*<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header --> */ ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'bimg-base' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
