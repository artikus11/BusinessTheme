<?php
/**
 * Template name: Главная страница
 */

get_header(); ?>
<main>
  <section class="well1">
    <div class="container">
      <?php
      while ( have_posts() ) : the_post();

      get_template_part( 'template/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

      endwhile; // End of the loop.
      ?>
    </div>
  </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
