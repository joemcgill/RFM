<?php
/**
 * Hero Element Markup
 *
 * @package rfm
 */
?>

<div class="hero-wrap">
  <figure class="hero">
    <a href="#">
      <picture class="hero-media">
        <!--[if IE 9]><video style="display: none;"><![endif]-->
        <source srcset="http://lorempixel.com/g/1400/500/people/1" media="(min-width: 1000px)">
        <source srcset="http://lorempixel.com/g/1000/500/people/1" media="(min-width: 600px)">
        <source srcset="http://lorempixel.com/g/600/400/people/1" >
        <!--[if IE 9]></video><![endif]-->
        <img class="hero-image" srcset="http://lorempixel.com/g/600/400/people/1" alt="A giant stone face at The Bayon temple in Angkor Thom, Cambodia">
      </picture>
    </a>
    <figcaption class="hero-content">
      <h2 class="post-title"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </figcaption>
  </figure>
</div>
