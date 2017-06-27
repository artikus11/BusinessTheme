<?php
/**
 * Template name: Страница контактов
 */

get_header(); ?>
<main>
  <?php if ( get_post_meta( $post->ID, 'contact_map_show', true ) != 'off' ) : ?>
    <section class="map">
    <?php 
$adr = get_post_meta( $post->ID, 'contact_address_city', true ).','.get_post_meta( $post->ID, 'contact_address_adr', true );
if ($adr) :
  $ymap = ya_geo_map_contact($adr);
$latitude = $ymap[1];
$longitude = $ymap[0];
$contact_map_zoom = get_post_meta( $post->ID, 'contact_map_zoom', true );
$contact_map_height = get_post_meta( $post->ID, 'contact_map_height', true );
?>
<script type="text/javascript">
  jQuery(document).ready(function () {
      ymaps.ready(init);
      function init() {
          var myMap = new ymaps.Map("yamap", {
                  center: [<?php echo $latitude; ?>, <?php echo $longitude; ?>],
                  zoom: <?php echo $contact_map_zoom; ?>,
                  controls: ['zoomControl']
              }),
              // Создаем геообъект с типом геометрии "Точка".
              myGeoObject = new ymaps.GeoObject({
                  // Описание геометрии.
                  geometry: {
                      type: "Point",
                      coordinates: [<?php echo $latitude; ?>, <?php echo $longitude; ?>]
                  },
                  properties: {
                      iconContent: "<?php echo get_bloginfo( 'name' ); ?>",
                      hintContent: "<?php echo get_bloginfo( 'description' ); ?>"
                  }
              }, {
                  preset: 'islands#redStretchyIcon',
                  draggable: false
              });

          myMap.geoObjects
              .add(myGeoObject)

      }
  });
</script>
<div id="yamap" style="height: <?php echo $contact_map_height; ?>px;  "></div>
<?php
endif;
     ?>


    </section>
  <?php endif; ?>
  <section class="well1">
    <div class="container">
      <?php
      while ( have_posts() ) : the_post();

      get_template_part( 'template/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

      endwhile; // End of the loop.
      ?>
    </div>
  </section>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
