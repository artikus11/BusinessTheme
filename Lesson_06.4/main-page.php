<?php
/**
 * Template name: Главная страница
 */

get_header(); ?>
<?php 
$sliders_main = get_post_meta( $post->ID, 'main_slider_list', true );
$advaced_main = get_post_meta( $post->ID, 'main_advansed_list', true );
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
          <p><?php echo $adv_text ;?></p>
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
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
