 <section class="well3">
  <div class="container">
    <ul class="row contact-list">
      <li class="grid_4">
        <?php if (ot_get_option ('contact_address')): ?>
          <div data-wow-delay="0.1s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-map-marker"></div>
            </div>
            <div class="box_cnt__no-flow">
              <address><?php echo ot_get_option ('contact_address'); ?></address>
            </div>
          </div>
        <?php endif; ?>
        <?php if (ot_get_option ('contact_email')): ?>
          <div data-wow-delay="0.2s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-envelope"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="mailto:<?php echo ot_get_option ('contact_email'); ?>"><?php echo ot_get_option ('contact_email'); ?></a></div>
          </div>
        <?php endif; ?>
      </li>
      <li class="grid_4">
        <?php if (ot_get_option ('contact_phone_one')): ?>
          <div data-wow-delay="0.3s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-phone"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="callto:<?php echo str_replace(array(" ", ")", "(", "-"), "", ot_get_option( 'contact_phone_one' ))?>"><?php echo ot_get_option ('contact_phone_one'); ?></a></div>
          </div>
        <?php endif; ?>
        <?php if (ot_get_option ('contact_phone_two')): ?>
          <div data-wow-delay="0.4s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-fax"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="callto:<?php echo str_replace(array(" ", ")", "(", "-"), "", ot_get_option( 'contact_phone_two' ))?>"><?php echo ot_get_option ('contact_phone_two'); ?></a></div>
          </div>
        <?php endif; ?>
      </li>
      <li class="grid_4">
        <?php if (ot_get_option ('contact_social_one')): ?>
          <div data-wow-delay="0.5s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-facebook"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo ot_get_option ('contact_social_one'); ?>">Мы в Фейсбук</a></div>
          </div>
        <?php endif; ?>
        <?php if (ot_get_option ('contact_social_two')): ?>
          <div data-wow-delay="0.6s" class="box wow fadeIn">
            <div class="box_aside">
              <div class="icon2 fa-twitter"></div>
            </div>
            <div class="box_cnt__no-flow"><a href="<?php echo ot_get_option ('contact_social_two'); ?>">Мы в Твиттере</a></div>
          </div>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</section>