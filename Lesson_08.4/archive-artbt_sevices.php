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
			<?php if (ot_get_option( 'services_archive_page_title' )) :?>
				<h2><?php echo ot_get_option( 'services_archive_page_title' ); ?></h2>
			<?php else : ?>
				<h2><?php post_type_archive_title(); ?></h2>
			<?php endif; ?>
				<div class="row off2">
				<ul id="filters" class="grid_12">
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
				</div>
				<div class="row off2">
					<div id="services-list">

						<?php if ( have_posts() ) : ?>

							<?php while ( have_posts() ) : the_post(); 
							$term_slugs = get_the_terms( $post->ID, 'service-cat' );

							$term_string = '';
							foreach ($term_slugs as $term) {
								$term_string .= $term->slug . ' ';
							}
							?>
							<div class="grid_4 <?php echo $term_string; ?> service-item" >
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'service-archive' ); ?>

								<h3><?php the_title( ); ?></h3>
								</a>
								<!-- <div class="entry-service">
									<?php //the_excerpt(); ?>
								</div>
								<a href="<?php //the_permalink(); ?>" class="btn">Читать</a> -->
							</div>
						<?php endwhile; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<?php 
	$bg_service_special_box = ot_get_option( 'services_archive_special_box_background' );
	//var_dump($bg_service_special_box);
	 ?>
	 <style>
	 	.bg-image {
	 		background: <?php echo $bg_service_special_box['background-color'] ?> url('<?php echo $bg_service_special_box['background-image'] ?>') <?php echo $bg_service_special_box['background-position'] ?> <?php echo $bg_service_special_box['background-repeat'] ?>;
	 		background-size: <?php echo $bg_service_special_box['background-size'] ?>;
	 	}
	 </style>
	<section class="well1 ins4 bg-image">
		<div class="container">
			<div class="row">
				<div class="grid_7 preffix_5">
					<?php if (ot_get_option( 'services_archive_special_box_title' )) :?>
						<h2><?php echo ot_get_option( 'services_archive_special_box_title' ); ?></h2>
					<?php endif; ?>
					<?php if (ot_get_option( 'services_archive_special_box_desc' )) :?>
						<div class="special-box-desc">
							<?php echo ot_get_option( 'services_archive_special_box_desc' ); ?>
						</div>
					<?php endif; ?>
					<div class="row off4">
						<?php 
						$services_archive_list = ot_get_option( 'services_archive_list' );
						?>
						<ul class="grid_3 marked-list wow fadeInRight">
							<?php 
							$count = 0;
							foreach ($services_archive_list as $item) : 
								if($count != 0 && $count%3 == 0) : ?>
						</ul><ul data-wow-delay="0.<?php echo $count; ?>s" class="grid_3 marked-list wow fadeInRight">
						<?php $count = 0;
						endif;
						$item_service = get_post( $item['services_archive_list_item'], ARRAY_A);
						?>
						<li><a href="<?php echo get_permalink($item_service['ID']); ?>"><?php echo $item_service['post_title']; ?></a></li>
						<?php 
						$count++;
						endforeach;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>


</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
