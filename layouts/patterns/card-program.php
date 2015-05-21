<?php
/**
 * Program card
 *
 * @package rfm
 */
?>

<div class="card card-program">
  <div class="card-header">
    <?php if ( has_post_thumbnail() ) { ?>
	    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'hero-sm' ); ?> </a>
    <?php } ?>
    <h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </div>
  <div class="card-body">
    <?php the_excerpt(); ?>
  </div>
  <div class="card-footer">
    <a class="cta" href="<?php the_permalink(); ?>">Learn More</a>
  </div>
</div>
