<?php
/**
 * Template Name: Test Patterns
 *
 * @package rfm
 */

get_header(); ?>
	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">

    <?php /* The loop */
    if ( have_posts() ) {
      while ( have_posts() ) : the_post();
    ?>
      <h1><?php the_title() ?></h1>
    <?php
        the_content();
      endwhile;
    } else {
      get_template_part( 'content', 'none' );
    } //endif
    ?>

      <hr>

    <?php
      /* Pattern loader */
      $patterns = array(
        'cards',
        'buttons'
      );

      foreach ( $patterns as $pattern ) {
        get_template_part( RFM_PATTERNS . 'test', $pattern );
      }
    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
