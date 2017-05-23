<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Business
 */

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="well1 ins2 mobile-center">
			<div class="container">
				<h2><?php post_type_archive_title(); ?></h2>
				<ul id="filters">
					<li><a href="#" data-filter="*" class="selected">Все услуги</a></li>
					<?php 
					$arg = array (
						'taxonomy' => 'service-cat',
						'hide_empty' => false,
						);
					$terms = get_terms ($arg);
					if ($terms ) :
						foreach ($terms as $term) : ?>
					<li>
						<a href="#" data-filter=".<?php echo $term->slug; ?>">
							<?php echo $term->name; ?>
						</a>
					</li>
					<?php 
					endforeach;
					endif;
					?>

				</ul>
				
				<div id="services-list" class="row off2">
					
					<?php if ( have_posts() ) : ?>
						
						<?php while ( have_posts() ) : the_post(); 
						$term_slugs = get_the_terms( $post->ID, 'service-cat' );

						$term_string = '';
						foreach ($term_slugs as $term) {
							$term_string .= $term->slug;
						}
						?>
						<div class="grid_4 <?php echo $term_string; ?> service-item" >
							<?php the_post_thumbnail( 'medium' ); ?>

							<h3><?php the_title( ); ?></h3>
							<div class="entry-service">
								<?php the_excerpt(); ?>
							</div>
							<a href="<?php the_permalink(); ?>" class="btn">Читать</a>
						</div>
					<?php endwhile; ?>
					
				<?php endif; ?>
			
		</div>
	</div>
</section>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
