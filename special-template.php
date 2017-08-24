<?php

/*
Template Name: Special Layout
 */

get_header();

if (have_posts()) :
  while (have_posts()) : the_post(); ?>

  <article class="post page">
    <h2><?php the_title(); ?></h2>

    <!-- info box -->
    <div class="info-box">
      <h4>Disclaimer</h4>
      <p>Dis montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    </div><!-- /info box -->
    <?php the_content(); ?>
  </article>

  <?php endwhile;

  else :
    echo '<p>No content found!</p>';

endif;

get_footer();

?>

