<?php
/**
 * The front page template file.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package rfm
 */

get_header(); ?>

	<?php get_template_part( RFM_PATTERNS . 'hero' ); ?>

	<div id="primary" class="content-area full-width">

		<main id="main" class="site-main" role="main">

		<div class="programs grid cols-3">
		<?php for ( $i = 0; $i < 3; $i++ ) {
			get_template_part( RFM_PATTERNS . 'card', 'program' );
		} ?>
		</div>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
