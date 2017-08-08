<?php
/**
 * Template name: Страница О нас
 */

get_header(); ?>
<main class="mobile-center">
      <section>
        <div class="container hr well1 ins2">
          <h2><?php the_title( ); ?></h2>
          <div class="row">
            <div class="grid_6">
              <div class="about-content">
              <?php
              while ( have_posts() ) : the_post();

              the_content();

              endwhile; 
              ?>
              </div>
            </div>
            <div class="grid_6">
              <h3>Факты</h3>
              <div class="row">
                <div class="grid_3">
                  <dl class="info">
                    <?php if (get_post_meta($post->ID, 'about_quick_name', true )) : ?>
                      <dt>Название</dt>
                      <dd><?php echo get_post_meta($post->ID, 'about_quick_name', true ); ?></dd>
                    <?php endif; ?>
                    <?php if (get_post_meta($post->ID, 'about_quick_birth_day', true )) : ?>
                      <dt>Дата создания</dt>
                      <dd><?php echo get_post_meta($post->ID, 'about_quick_birth_day', true ); ?></dd>
                    <?php endif; ?>
                    <?php if (get_post_meta($post->ID, 'about_quick_birth_place', true )) : ?>
                      <dt>Место создания</dt>
                      <dd><?php echo get_post_meta($post->ID, 'about_quick_birth_place', true ); ?></dd>
                    <?php endif; ?>
                  </dl>
                </div>
                <div class="grid_3">
                  <dl class="info">
                    <?php if (get_post_meta($post->ID, 'about_quick_history', true )) : ?>
                      <dt>История</dt>
                      <dd>
                      <?php 
                      echo apply_filters( 'the_content', get_post_meta($post->ID, 'about_quick_history', true ) ); 
                      ?></dd>
                    <?php endif; ?>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="well1 ins3">
        <div class="container">
          <div class="row off1">
            <div class="grid_12">
              
              <?php if (get_post_meta($post->ID, 'about_staff_name', true )) : ?>
                      <h3><?php echo get_post_meta($post->ID, 'about_staff_name', true ); ?></h3>
              <?php else : ?>
                <h3>Наша команда</h3>
              <?php endif; ?>
              <?php if (get_post_meta($post->ID, 'about_staff_desc', true )) : ?>
                <div class="staff-desc">
                    <?php echo get_post_meta($post->ID, 'about_staff_desc', true ); ?>
                </div>
               <?php endif; ?>
               <?php if (get_post_meta($post->ID, 'about_staff_gallery', true )) : ?>
                <div class="row">
                  <?php 
                  $about_staff_gallery = explode(',', get_post_meta($post->ID, 'about_staff_gallery', true )) ;
                  $l = 1;
                  foreach ($about_staff_gallery as $item) : ?>
                  <?php  $image = wp_get_attachment_image_src( $item, 'medium' );?>
                  <div data-wow-delay="0.<?php echo $l; ?>s" class="grid_2 wow fadeInRight">
                    <img src="<?php echo $image[0]; ?>" alt="">
                  </div>
                  

                  <?php $l++;
                  endforeach;
                  ?>
                </div>
              <?php endif; ?>

            </div>
          </div>
        </div>
      </section>
      <section class="well1 ins3 bg-primary award-section">
        <div class="container">
        <?php if (get_post_meta($post->ID, 'about_award_name', true )) : ?>
                      <h2><?php echo get_post_meta($post->ID, 'about_award_name', true ); ?></h3>
              <?php endif; ?>
          <ul class="product-list row off1">
          <?php 
              $award_posts_per_page = get_post_meta($post->ID, 'about_award_number', true );
              $args = array(
                'post_type'   => 'artbt_awards',
                'post_status' => 'publish',
                'order'       => 'DESC',
                'orderby'     => 'title',
                'posts_per_page' => $award_posts_per_page,

                );
              $j=1;
              $query_award = new WP_Query( $args );
              if ($query_award->have_posts()) : 
                while ($query_award->have_posts()) : $query_award->the_post();

              ?>
              <li class="grid_6">
              <div data-wow-delay="0.<?php echo $j; ?>s" class="box wow flipInX">
                <div class="box_aside">
                <?php the_post_thumbnail( 'service-img'); ?>
                  <!-- <div class="icon fa-asterisk"></div> -->
                </div>
                <div class="box_cnt__no-flow">
                  <h3><?php the_title( ); ?></h3>
                  <div class="award-content">
                    <?php the_content( ); ?>
                  </div>
                </div>
              </div>
              
            </li>
               <?php
               $j++;
              endwhile;
              wp_reset_postdata();
              ?>

              <?php
              endif;
              ?>

          </ul>
        </div>
      </section>
       <section class="well3">
      <?php get_template_part( 'template/contact', 'option' ); ?>
      </section>
    </main>

<?php
//get_sidebar();
get_footer();
