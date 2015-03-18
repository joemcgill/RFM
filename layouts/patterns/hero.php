<?php
/**
 * Hero Element Markup
 *
 * @package rfm
 */

$attachment_id = ($attachment_id) ? $attachment_id : get_post_thumbnail_id();
$hero_large = wp_get_attachment_image_src( $attachment_id, 'hero-lg' );
$hero_med = wp_get_attachment_image_src( $attachment_id, 'hero-md' );
$hero_sm = wp_get_attachment_image_src( $attachment_id, 'hero-sm' );

?>

<div class="hero-wrap">
  <figure class="hero">
    <a href="#">
      <picture class="hero-media">
        <!--[if IE 9]><video style="display: none;"><![endif]-->
        <source srcset="<?php echo $hero_large[0]; ?>" media="(min-width: 1000px)">
        <source srcset="<?php echo $hero_med[0]; ?>" media="(min-width: 600px)">
        <source srcset="<?php echo $hero_sm[0]; ?>" >
        <!--[if IE 9]></video><![endif]-->
        <img class="hero-image" srcset="<?php echo $hero_large[0]; ?>" alt="A giant stone face at The Bayon temple in Angkor Thom, Cambodia">
      </picture>
    </a>
    <figcaption class="hero-content">
      <h2 class="post-title"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </figcaption>
  </figure>
</div>
