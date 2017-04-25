<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {

  $main_page = array(
    'id'          => 'main_page_box',
    'title'       => 'Настройки главной страницы',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Слайдер',
        'id'          => 'main_slider_tab',
        'type'        => 'tab'
        ),
      array(
        'label'       => 'Показывать слайдер',
        'id'          => 'main_slider_show',
        'type'        => 'on-off',
        'desc'        => 'Показывать или нет слайдер на главной странице',
        'std'         => 'on'
        ),
      array(
        'id'          => 'main_slider_list',
        'label'       => 'Слайдер',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => 'main_slider_show:is(on)',
        'settings'    => array( 
          array(
            'id'          => 'main_slider_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'main_slider_list_upload',
            'label'       => 'Загрузите слайд',
            'desc'        => '',
            'type'        => 'upload',
            ),
          )
        ),
        array(
        'label'       => 'Преимущства',
        'id'          => 'main_advansed_tab',
        'type'        => 'tab'
        ),
        array(
        'label'       => 'Показывать преимущества',
        'id'          => 'main_advansed_show',
        'type'        => 'on-off',
        'desc'        => 'Показывать или нет на главной странице',
        'std'         => 'on'
        ),
        array(
        'id'          => 'main_advansed_list',
        'label'       => 'Преимущества',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => 'main_advansed_show:is(on)',
        'settings'    => array( 
          array(
            'id'          => 'main_advansed_list_icon',
            'label'       => 'Укажите иконку',
            'desc'        => 'Добавьте в данном поле класс иконки в формате "fa-globe", полный список иконок можно посмотреть <a href="http://fontawesome.io/icons/" target="_blank">здесь</a>',
            'type'        => 'text',
            ),
          array(
            'id'          => 'main_advansed_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'main_advansed_list_text',
            'label'       => 'Напишите текст описания',
            'desc'        => '',
            'type'        => 'textarea',
            ),
          array(
            'id'          => 'main_slider_list_link',
            'label'       => 'Укажите ссылку',
            'desc'        => '',
            'type'        => 'text',
            ),
          )
        ),
        array(
        'label'       => 'Услуги',
        'id'          => 'main_services_tab',
        'type'        => 'tab'
        ),
        array(
        'label'       => 'Показывать услуги',
        'id'          => 'main_services_show',
        'type'        => 'on-off',
        'desc'        => 'Показывать или нет на главной странице',
        'std'         => 'on'
        ),
        array(
            'id'          => 'main_services_list',
            'label'       => 'Услуги',
            'desc'        => '',
            'std'         => '',
            'type'        => 'list-item',
            'condition'   => 'main_services_show:is(on)',
            'settings'    => array( 
                array(
                    'id'          => 'main_services_list_item',
                    'label'       => 'Услуги',
                    'desc'        => '',
                    'type'        => 'custom-post-type-select',
                    'post_type'   => 'artbt_sevices',
                    ),
                )
            ),
        array(
            'id'          => 'main_services_desc',
            'label'       => 'Краткое описание',
            'desc'        => '',
            'type'        => 'textarea',
            ),
        array(
            'id'          => 'main_services_number',
            'label'       => 'Количество статей',
            'desc'        => '',
            'std'         => '',
            'type'        => 'numeric-slider',
            'min_max_step'=> '-1,20,1',
            ),
        array(
            'id'          => 'main_services_link',
            'label'       => 'Ссылка на все услуги',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
            'id'          => 'main_services_link_text',
            'label'       => 'Надпись на кнопке',
            'std'         => 'Все услуги',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
            'label'       => 'О нас',
            'id'          => 'main_about_tab',
            'type'        => 'tab'
            ),
        array(
            'label'       => 'Показывать раздел О нас',
            'id'          => 'main_about_show',
            'type'        => 'on-off',
            'desc'        => 'Показывать или нет на главной странице',
            'std'         => 'on'
            ),
        array(
            'id'          => 'main_about_page',
            'label'       => 'Страница О нас',
            'desc'        => '',
            'type'        => 'page-select',
            'condition'   => 'main_about_show:is(on)',
            ),
        array(
            'label'       => 'Хелп-центр',
            'id'          => 'main_help_tab',
            'type'        => 'tab'
            ),
        array(
            'id'          => 'main_help_budni',
            'label'       => 'Время в будни',
            'std'         => '',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
            'id'          => 'main_help_sat',
            'label'       => 'Время в субботу',
            'std'         => '',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
            'id'          => 'main_help_sun',
            'label'       => 'Время в воскресенье',
            'std'         => '',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
            'id'          => 'main_help_phone_support',
            'label'       => 'Телефон поддержки',
            'std'         => '',
            'desc'        => '',
            'type'        => 'text',
            ),
        array(
        'label'       => 'Отзывы',
        'id'          => 'main_review_tab',
        'type'        => 'tab'
        ),
        array(
        'label'       => 'Показывать Отзывы',
        'id'          => 'main_review_show',
        'type'        => 'on-off',
        'desc'        => 'Показывать или нет на главной странице',
        'std'         => 'on'
        ),
       
        )
    );
  $meta_box_about = array(
    'id'          => 'about_meta_box',
    'title'       => 'Настройки страницы О нас',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
        array(
            'label'       => 'Быстрые факты',
            'id'          => 'about_quick_tab',
            'type'        => 'tab'
            ),
        array(
            'label'       => 'Название', 
            'id'          => 'about_quick_name',
            'type'        => 'text',
            'desc'        => '', 
            ),
        array(
            'label'       => 'Дата создания', 
            'id'          => 'about_quick_birth_day',
            'type'        => 'text',
            'desc'        => '', 
            ),
        array(
            'label'       => 'Место создания', 
            'id'          => 'about_quick_birth_place',
            'type'        => 'text',
            'desc'        => '', 
            ),
        array(
            'label'       => 'История', 
            'id'          => 'about_quick_history',
            'type'        => 'textarea',
            'desc'        => '', 
            ),

      )
    );

  $meta_box_services = array(
    'id'          => 'services_meta_box',
    'title'       => 'Настройки услуг',
    'desc'        => '',
    'pages'       => array( 'artbt_sevices' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      array(
        'label'       => 'Иконка', 
        'id'          => 'service_icon',
        'type'        => 'text',
        'desc'        => '', 
        ),
      array(
        'label'       => 'Цена', 
        'id'          => 'service_price',
        'type'        => 'text',
        'desc'        => '', 
        ),

      )
    );
  $meta_box_review = array(
    'id'          => 'review_meta_box',
    'title'       => 'Настройки отзывов',
    'desc'        => '',
    'pages'       => array( 'artbt_reviews' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

      array(
        'label'       => 'Имя', 
        'id'          => 'review_name',
        'type'        => 'text',
        'desc'        => '', 
        ),
      array(
        'label'       => 'Должность', 
        'id'          => 'review_regal',
        'type'        => 'text',
        'desc'        => '', 
        ),
    array(
        'label'       => 'Ссылка', 
        'id'          => 'review_link',
        'type'        => 'text',
        'desc'        => '', 
        ),
      )
    );
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'theme-text-domain' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
        ),
      array(
        'label'       => __( 'Show Gallery', 'theme-text-domain' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
        ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
        ),
      array(
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
        ),
      array(
        'label'       => __( 'More Options', 'theme-text-domain' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
        ),
      array(
        'label'       => __( 'Text', 'theme-text-domain' ),
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
        ),
      array(
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
        )
      )
    );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );
ot_register_meta_box( $meta_box_services );
ot_register_meta_box($meta_box_review);
$post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
if ( $template_file == 'main-page.php' ){
    ot_register_meta_box( $main_page );
}
if ( $template_file == 'about-page.php' ){
    ot_register_meta_box( $meta_box_about );
}


}