<?php
/**
 * Template name: Главная страница
 */

get_header(); ?>
<?php 
$sliders_main = get_post_meta( $post->ID, 'main_slider_list', true );
$advaced_main = get_post_meta( $post->ID, 'main_advansed_list', true );
$services_main = get_post_meta( $post->ID, 'main_services_list', true );

// echo '<pre>';
// print_r($services_main);
// echo '</pre>';
?>
<main>
  <?php 
  if ($sliders_main && (get_post_meta($post->ID, 'main_slider_show', true ) != 'off')) : ?>
  <section class="camera_container">
    <div id="camera" class="camera_wrap">
      <?php 

      foreach ($sliders_main as $slider) :
        $slide_header = $slider['main_slider_list_header'] ? $slider['main_slider_list_header'] : '';
        $slider_upload = $slider['main_slider_list_upload'] ? $slider['main_slider_list_upload'] : '';
      ?>

      <div data-src="<?php echo $slider_upload ; ?>">
        <div class="camera_caption fadeIn">
          <div class="container">
            <div class="row">
              <div class="preffix_6 grid_6"><?php echo $slide_header; ?></div>
            </div>
          </div>
        </div>
      </div>
      <?php
      endforeach;
      ?>

    </div>
  </section>
  <?php
  endif;
  ?>
    <?php 
  if (get_post_meta($post->ID, 'main_advansed_show', true ) != 'off') : ?>
  <section>
    <div class="container banner_wr">
      <ul class="banner">
        <?php
        foreach ($advaced_main as $adv) :
          $adv_icon = $adv['main_advansed_list_icon'] ? $adv['main_advansed_list_icon'] : '';
          $adv_header = $adv['main_advansed_list_header'] ? $adv['main_advansed_list_header'] : '';
          $adv_text = $adv['main_advansed_list_text'] ? $adv['main_advansed_list_text'] : '';
          $adv_link = $adv['main_slider_list_link'] ? $adv['main_slider_list_link'] : '';
        ?>
        <li>
        <div class="<?php echo $adv_icon ;?>"></div>
          <h3><?php echo $adv_header ;?></h3>
          <p><?php echo wp_trim_words( $adv_text, 12, ' ...' );?></p>
          <a href="<?php echo $adv_link ;?>"></a>
        </li>
        <?php
        endforeach;
        ?>

      </ul>
    </div>
  </section>
    <?php
  endif;
  ?>
  <section class="well ins1">
    <div class="container hr">
      <ul class="row product-list">
      <?php 
      $j = 1;
      foreach ($services_main as $sevice_id) : 

        $service = get_post( $sevice_id['main_services_list_item'], ARRAY_A);

      ?>
        <li class="grid_6">
          <div data-wow-delay="0.<?php echo $j; ?>s" class="box wow fadeInRight">
            <div class="box_aside">
            <?php
            if (get_post_meta( $service['ID'] , 'service_icon', true)) : ?>
              <div class="icon <?php echo get_post_meta( $service['ID'] , 'service_icon', true); ?>"></div>
            <?php else :  ?>
              <?php echo get_the_post_thumbnail( $service['ID'], 'service-img' );?>
            <?php endif; ?>
            </div>
            <div class="box_cnt__no-flow">
              <h3><a href="<?php echo get_the_permalink($service['ID']); ?>"><?php echo $service['post_title']; ?></a></h3>
              <p><?php echo wp_trim_words( $service['post_content'], 10, ' ...' );?></p>
            </div>
          </div>
          </li>
          <?php 
          $j++;
          endforeach;  ?>
      </ul>
    </div>
  </section>
  <section class="well1">

    <div class="container">
      <div class="row">
        <div class="grid_4">
          <?php 
          if (get_post_meta($post->ID, 'main_about_page', true )) :
            $about = get_post( get_post_meta($post->ID, 'main_about_page', true ), ARRAY_A);
          endif; 
          ?>
          <h2><?php echo $about['post_title']; ?></h2>
          <?php echo get_the_post_thumbnail( get_post_meta($post->ID, 'main_about_page', true ),'large' ); ?>
          <p><?php echo wp_trim_words( $about['post_content'], 40, ' ...' );?></p>
          <a href="<?php echo get_the_permalink(get_post_meta($post->ID, 'main_about_page', true )); ?>" class="btn">Подробнее</a>
        </div>
        <div class="grid_4">
          <h2>Услуги</h2>
          <?php if (get_post_meta($post->ID, 'main_services_desc', true )) : ?>
            <p><?php echo get_post_meta($post->ID, 'main_services_desc', true ); ?></p>
          <?php endif; 
          $posts_per_page_service = get_post_meta($post->ID, 'main_services_number', true );
          $arg = array(
            'post_type' => 'artbt_sevices', 
            'posts_per_page' => $posts_per_page_service,
            );
          $service_query = new WP_Query ($arg);

          if ($service_query->have_posts()) : ?>
          <ul class="marked-list">
            <?php
            while ($service_query->have_posts()) : $service_query->the_post();
            ?>
            <li>
              <a href="<?php echo get_permalink(); ?>">
                <?php echo get_the_title( ); ?>
              </a>
            </li>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
          </ul>
          <?php
          endif;
          $all_service_link = get_post_meta($post->ID, 'main_services_link', true ) ? get_post_meta($post->ID, 'main_services_link', true ) : '';
          $all_service_link_text = get_post_meta($post->ID, 'main_services_link_text', true ) ? get_post_meta($post->ID, 'main_services_link_text', true ) : '';
          ?>
          <a href="<?php echo $all_service_link; ?>" class="btn"><?php echo $all_service_link_text; ?></a>
        </div>
        <div class="grid_4">
          <?php 
          $main_help_budni = get_post_meta($post->ID, 'main_help_budni', true ) ? get_post_meta($post->ID, 'main_help_budni', true ) : '';
          $main_help_sat = get_post_meta($post->ID, 'main_help_sat', true ) ? get_post_meta($post->ID, 'main_help_sat', true ) : '';
          $main_help_sun = get_post_meta($post->ID, 'main_help_sun', true ) ? get_post_meta($post->ID, 'main_help_sun', true ) : '';
          $main_help_phone_support = get_post_meta($post->ID, 'main_help_phone_support', true ) ? get_post_meta($post->ID, 'main_help_phone_support', true ) : '';
          ?>
          <div class="info-box">
            <h2 class="fa-comment">Поддержка</h2>
            <hr>
            <h3>Позвоните специалисту:</h3>
            <dl>
              <dt>Пн - Пт:</dt>
              <dd><?php echo $main_help_budni; ?></dd>
            </dl>
            <dl>
              <dt>Сб:</dt>
              <dd><?php echo $main_help_sat; ?></dd>
            </dl>
            <dl>
              <dt>Вс:</dt>
              <dd><?php echo $main_help_sun; ?></dd>
            </dl>
            <hr>
            <h3>24/7 Онлайн:</h3>
            <dl>
              <dt><a href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", $main_help_phone_support )?>"><?php echo $main_help_phone_support ; ?></a></dt>
            </dl>
          </div>
          <?php if (get_post_meta($post->ID, 'main_review_show', true ) != 'off') :?>
            <div class="owl-carousel">
              <?php 
              $args = array(
                'post_type'   => 'artbt_reviews',
                'post_status' => 'publish',
                'order'               => 'DESC',
                'orderby'             => 'title',
                'posts_per_page'         => -1,

                );

              $query_review = new WP_Query( $args );
              if ($query_review->have_posts()) : 
                while ($query_review->have_posts()) : $query_review->the_post();
              ?>
              <div class="item">
                <blockquote class="box">
                  <div class="box_aside">
                    <?php echo get_the_post_thumbnail( $post->ID, array(80,80)); ?>

                  </div>
                  <div class="box_cnt__no-flow">
                    <p>
                    <q>
                      <?php echo wp_trim_words( get_the_content(), 5, ' ...' );?>
                    </q>
                    </p>
                    <cite>
                      <?php if (get_post_meta($post->ID, 'review_name', true )) : ?>
                        <span class="review-name"><?php echo get_post_meta($post->ID, 'review_name', true ); ?></span>
                      <?php  endif; ?>
                      <?php if (get_post_meta($post->ID, 'review_regal', true ) || get_post_meta($post->ID, 'review_link', true )) : ?>
                        <?php if (get_post_meta($post->ID, 'review_link', true )) :?>
                          <a href="<?php echo get_post_meta($post->ID, 'review_link', true ); ?>">
                            <span class="review-regal">
                              <?php echo get_post_meta($post->ID, 'review_regal', true ); ?>
                            </span>
                          </a>
                        <?php else: ?>
                          <span class="review-regal">
                            <?php echo get_post_meta($post->ID, 'review_regal', true ); ?>
                          </span>
                        <?php  endif; ?>
                      <?php  endif; ?>
                      
                    </cite>
                  </div>
                </blockquote>
              </div>

              <?php
              endwhile;
              wp_reset_postdata();
              ?>

              <?php
              endif;
              ?>
            </div>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
