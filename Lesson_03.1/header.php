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
        </div>
        <div id="stuck_container" class="stuck_container">
          <div class="container">
            <nav class="nav">
              <ul data-type="navbar" class="sf-menu">
                <li class="active"><a href="./">Home</a>
                </li>
                <li><a href="index-1.html">About</a>
                  <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Conse ctetur adipisicing</a></li>
                    <li><a href="#">Elit sed do eiusmod
                        <ul>
                          <li><a href="#">Lorem ipsum</a></li>
                          <li><a href="#">Conse adipisicing</a></li>
                          <li><a href="#">Sit amet dolore</a></li>
                        </ul></a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                    <li><a href="#">Et dolore magna</a></li>
                    <li><a href="#">Ut enim ad minim</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Services</a>
                </li>
                <li><a href="index-3.html">FAQS</a>
                </li>
                <li><a href="index-4.html">Contacts</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
