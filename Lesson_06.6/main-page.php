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
          <h2>Services</h2>
          <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
          <ul class="marked-list">
            <li><a href="#">Lorem ipsum dolor sit amet </a></li>
            <li><a href="#">Conse ctetur adipisicing</a></li>
            <li><a href="#">Elit sed do eiusmod tempor</a></li>
            <li><a href="#">Incididunt ut labore</a></li>
            <li><a href="#">Et dolore magna aliqua</a></li>
            <li><a href="#">Ut enim ad minim veniam</a></li>
            <li><a href="#">Quis nostrud exercitation</a></li>
            <li><a href="#">Incididunt ut labore</a></li>
            <li><a href="#">Et dolore magna aliqua</a></li>
          </ul><a href="#" class="btn">Read more</a>
        </div>
        <div class="grid_4">
          <div class="info-box">
            <h2 class="fa-comment">Help center</h2>
            <hr>
            <h3>Ask professionals:</h3>
            <dl>
              <dt>Monday - Friday:</dt>
              <dd>8am-7pm</dd>
            </dl>
            <dl>
              <dt>Saturday:</dt>
              <dd>8am-5pm</dd>
            </dl>
            <dl>
              <dt>Sunday:</dt>
              <dd>1pm-5pm</dd>
            </dl>
            <hr>
            <h3>24/7 Online Support:</h3>
            <dl>
              <dt>800-2345-6789</dt>
            </dl>
          </div>
          <div class="owl-carousel">
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="images/page-1_img02.jpg" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Incididunt ut labor</a></cite>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="images/page-1_img03.jpg" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Incididunt ut labor</a></cite>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="images/page-1_img04.jpg" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Incididunt ut labor</a></cite>
                </div>
              </blockquote>
            </div>
            <div class="item">
              <blockquote class="box">
                <div class="box_aside"><img src="images/page-1_img05.jpg" alt=""></div>
                <div class="box_cnt__no-flow">
                  <p>
                    <q>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</q>
                  </p>
                  <cite><a href="#">Incididunt ut labor</a></cite>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
