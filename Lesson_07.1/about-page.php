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
              <h3>Quick facts</h3>
              <div class="row">
                <div class="grid_2">
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
                <div class="grid_4">
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
              <h3>Our staff</h3>
              <p>Curabitur facilisis pellentesque pharetra. Donec justo urna, malesuada a viverra ac, pellentesque vitae nunc. Aenean ac leo eget nunc fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum, justo eget ultrices.</p>
              <div class="row">
                
                <div data-wow-delay="0.1s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img03.jpg" alt="">
                </div>
                <div data-wow-delay="0.2s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img06.jpg" alt="">
                </div>
                <div data-wow-delay="0.3s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img04.jpg" alt="">
                </div>
                <div data-wow-delay="0.4s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img07.jpg" alt="">
                </div>
                <div data-wow-delay="0.5s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img05.jpg" alt="">
                </div>
                <div data-wow-delay="0.6s" class="grid_2 wow fadeInRight">
                  <img src="images/page-2_img08.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="well1 ins3 bg-primary">
        <div class="container">
          <h2>Our awards</h2>
          <ul class="product-list row off1">
            <li class="grid_6">
              <div data-wow-delay="0.1s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-asterisk"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Vestibulum elementum tempus eleifend</h3>
                  <p>Sed do eiusmod tempor incididunt ut labore et dolore magna. Suspendisse commodo tempor sagittis! In justo est sollicitudin.</p>
                </div>
              </div>
              <hr>
            </li>
            <li class="grid_6">
              <div data-wow-delay="0.2s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-asterisk"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Congue dui ut porta aenean laoreet</h3>
                  <p>Pellentesque vitae tortor id neque fermentum pretium. Maecenas ac lacus ut neque rhoncus laoreet sed id tellus.</p>
                </div>
              </div>
              <hr>
            </li>
            <li class="grid_6">
              <div data-wow-delay="0.3s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-asterisk"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Aenean laoreet viverra turpis a com</h3>
                  <p>Maecenas ac lacus ut neque rhoncus laoreet sed id tellus. Donec justo tellus, tincidunt vitae pellentesque nec, pharetra a orci. Praesent</p>
                </div>
              </div>
              <hr>
            </li>
            <li class="grid_6">
              <div data-wow-delay="0.4s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-asterisk"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Tempus eleifend cum sociis natoque</h3>
                  <p>Labore et dolore magna. Suspendisse commodo tempor sagittis! In justo est sollicitudin eu scelerisque pretium, placerat eget elit.</p>
                </div>
              </div>
              <hr>
            </li>
            <li class="grid_6">
              <div data-wow-delay="0.5s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-trophy"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Sociis natoque penatibus vestibulum</h3>
                  <p>Suspendisse commodo tempor sagittis! In justo est sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum.</p>
                </div>
              </div>
              <hr>
            </li>
            <li class="grid_6">
              <div data-wow-delay="0.6s" class="box wow flipInX">
                <div class="box_aside">
                  <div class="icon fa-trophy"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <h3>Penatibus vestibulum congue dui ut</h3>
                  <p>In justo est sollicitudin eu scelerisque pretium, placerat eget elit. Praesent faucibus rutrum odio at rhoncus.</p>
                </div>
              </div>
              <hr>
            </li>
          </ul>
        </div>
      </section>
      <section class="well3">
        <div class="container">
          <ul class="row contact-list">
            <li class="grid_4">
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-map-marker"></div>
                </div>
                <div class="box_cnt__no-flow">
                  <address>4578 Marmora Road,Glasgow<br/> D04 89GR</address>
                </div>
              </div>
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-envelope"></div>
                </div>
                <div class="box_cnt__no-flow"><a href="mailto:#">info@demolink.org</a></div>
              </div>
            </li>
            <li class="grid_4">
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-phone"></div>
                </div>
                <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6789</a></div>
              </div>
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-fax"></div>
                </div>
                <div class="box_cnt__no-flow"><a href="callto:#">800-2345-6790</a></div>
              </div>
            </li>
            <li class="grid_4">
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-facebook"></div>
                </div>
                <div class="box_cnt__no-flow"><a href="#">Follow on facebook</a></div>
              </div>
              <div data-wow-delay="0.2s" class="box wow fadeIn">
                <div class="box_aside">
                  <div class="icon2 fa-twitter"></div>
                </div>
                <div class="box_cnt__no-flow"><a href="#">Follow on Twitter</a></div>
              </div>
            </li>
          </ul>
        </div>
      </section>
    </main>

<?php
//get_sidebar();
get_footer();
