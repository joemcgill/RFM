<?php
/**
 * @package rfm
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail( $post->ID, 'large') ) { ?>
	<figure class="featured-image">
		<?php the_post_thumbnail('large'); ?>
	</figure>
	<?php } ?>
	
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php rfm_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rfm' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php rfm_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
