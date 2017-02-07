<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site page">

      <!--
      ========================================================
      							HEADER
      ========================================================
	-->
      <header>
        <div class="container">
          <div class="brand">
          	<?php if (is_front_page() && is_home()){ ?>
            <?php if (ot_get_option( 'logo_upload' )) { ?>
            <h1 class="brand_name"><img src="<?php echo ot_get_option( 'logo_upload' ); ?>" alt=""></h1>
            <?php } else { ?>
            <h1 class="brand_name"><?php bloginfo('name'); ?></h1>
            <?php } ?>
            <?php } else {?>
            <div class="brand_name"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
            <?php } ?>
            <?php if (ot_get_option('desc_on_off') != 'off') {?>
            <p class="brand_slogan"><?php bloginfo('description'); ?></p>
            <?php } ?>
          </div>
          <?php if (ot_get_option( 'contact_phone' )) { ?>
          <a href="tel:<?php echo str_replace(array(" ", ")", "(", "-"), "", ot_get_option( 'contact_phone' ))?>" class="fa-phone"><?php echo ot_get_option( 'contact_phone' ); ?></a>
          <?php } ?>
          <?php if (ot_get_option( 'contact_open' )) { ?>
          <p><?php echo ot_get_option( 'contact_open' ); ?></p>
          <?php } ?>
          <?php if (ot_get_option( 'header_feedback_on_off' ) != 'off') { ?>
          <p><i class="fa fa-share" aria-hidden="true"></i> <a href="#header-feedback-form" class="feedback-form"><?php echo ot_get_option( 'feedback_title' ); ?></a></p>
          <div id="header-feedback-form" class="mfp-hide white-popup-block">
            <?php if (ot_get_option( 'feedback_form' )) { ?>
            <?php echo do_shortcode( ot_get_option( 'feedback_form' )); ?>
            <?php } ?>
          </div>

          <?php } ?>
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
                        <?php
                $args = array(
                  'theme_location' => 'primary',
                  'menu' => '',
                  'container' => '',
                  'container_class' => '',
                  'container_id' => '',
                  'menu_class' => 'sf-menu',
                  'menu_id' => '',
                  'echo' => true,
                  'fallback_cb' => 'wp_page_menu',
                  'before' => '',
                  'after' => '',
                  'link_before' => '',
                  'link_after' => '',
                  'items_wrap' => '<ul id = "%1$s" data-type="navbar" class = "%2$s">%3$s</ul>',
                  );

                wp_nav_menu( $args ); 

                ?>
            </nav>
          </div>
        </div>
      </header>
