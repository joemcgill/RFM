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

		<?php
		$home_features = new WP_Query(
			array(
				'category_name'	=> 'home-feature',
				'post_per_page'	=> 3,
				'ignore_sticky_posts' => true,
			)
		);

		if ( $home_features->have_posts() ) {
		?>
			<div class="programs grid cols-3">
			<?php

				$i = 0;
				while ( $home_features->have_posts() ) {
					$home_features->the_post();

					// display the feature cards
					get_template_part( RFM_PATTERNS . 'card', 'program' );

					$i++;

					// Account for sticky posts by breaking after three posts.
					if ( 3 === $i ) {
						break;
					}
				}

				// reset post data only, not the query.
				wp_reset_postdata();
			?>
			</div>
		<?php	} // end if ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="content-entry">
					<?php the_content(); ?>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php get_footer(); ?>
