<?php
/**
 * Hero Element Markup
 *
 * @package rfm
 */
?>

<div class="hero-wrap">
  <figure class="hero">
    <picture class="hero-media">
      <!--[if IE 9]><video style="display: none;"><![endif]-->
      <source srcset="http://lorempixel.com/g/1400/500/people/1" media="(min-width: 1000px)">
      <source srcset="http://lorempixel.com/g/1000/500/people/1" media="(min-width: 600px)">
      <source srcset="http://lorempixel.com/g/600/400/people/1" >
      <!--[if IE 9]></video><![endif]-->
      <img class="hero-image" srcset="http://lorempixel.com/g/600/400/people/1" alt="A giant stone face at The Bayon temple in Angkor Thom, Cambodia">
    </picture>
    <figcaption class="hero-content">
      <h2 class="post-title"><a class="post-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-excerpt">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </figcaption>
  </figure>
</div>

<hr>
