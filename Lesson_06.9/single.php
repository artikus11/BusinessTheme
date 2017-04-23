<?php get_header(); ?>
<main id="main" class="site-main" role="main">
	<div class="container">
		<?php
		while ( have_posts() ) : the_post();

		get_template_part( 'template/content', get_post_format() );

		the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->


<?php
// get_sidebar();
get_footer();
