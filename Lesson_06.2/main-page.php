<?php
/**
 * Template name: Главная страница
 */

get_header(); ?>
<?php 
$sliders_main = get_post_meta( $post->ID, 'main_slider_list', true );
/*echo '<pre>';
print_r($sliders_main);
echo '</pre>';*/
?>
<main>
<?php 
          if ($sliders_main) : ?>
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
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
