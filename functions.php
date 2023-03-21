<?php

foreach (glob( __DIR__ . '/includes/*') as $filename) {
  require_once($filename);
}

add_theme_support('menus');
add_theme_support('post-thumbnails');

add_filter('show_admin_bar', '__return_false');
add_filter('admin_footer_text', 'customize_admin_footer');

add_action('admin_menu', 'configure_admin_menu');
add_action('init', 'load_plugins');
// add_action('init', 'register_post_types');
// add_action('init', 'register_taxonomies');
add_action('init', 'register_menus');
add_action('init', 'add_option_pages');
add_action('login_head', 'customize_login_logo');
add_action('get_header', 'remove_admin_bar');

function configure_admin_menu() {
  // Configure the admin menu here.
  remove_menu_page('edit-comments.php');
  //remove_menu_page('themes.php');
  //remove_menu_page('index.php');
  // remove_menu_page('tools.php');
  //remove_menu_page('edit.php');
  //remove_menu_page('edit.php?post_type=acf-field-group');
}

// add_action('init', 'init_remove_support',100);
// function init_remove_support(){
//     $post_type = 'page';
//     remove_post_type_support( $post_type, 'editor');
// }

add_image_size( 'cover', 2000, 9999 );


function add_option_pages() {
  
  if( function_exists('acf_add_options_page') ) {
  
    $languages = array( 'nl' );
    foreach ( $languages as $lang ) {
      acf_add_options_page( array(
        'page_title' => 'Opties',
        'menu_title' => __('Opties', 'text-domain'),
        'menu_slug'  => "opties-${lang}",
        'post_id'    => $lang
      ) );
    }
  }
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
// function arphabet_widgets_init() {

//   register_sidebar( array(
//     'name'          => 'Text with sidebar',
//     'id'            => 'text_side',
//     'before_widget' => '<div>',
//     'after_widget'  => '</div>',
//     'before_title'  => '<h2 class="rounded">',
//     'after_title'   => '</h2>',
//   ) );

// }
// add_action( 'widgets_init', 'arphabet_widgets_init' );

function register_post_types() {
  // $labels = array(
  //   'name'               => _x( 'Calendar', 'post type general name', 'your-plugin-textdomain' ),
  //   'singular_name'      => _x( 'Calendar', 'post type singular name', 'your-plugin-textdomain' ),
  //   'menu_name'          => _x( 'Calendar', 'admin menu', 'your-plugin-textdomain' ),
  //   'name_admin_bar'     => _x( 'Calendar', 'add new on admin bar', 'your-plugin-textdomain' ),
  //   'add_new'            => _x( 'Add New', 'month', 'your-plugin-textdomain' ),
  //   'add_new_item'       => __( 'Add New Month', 'your-plugin-textdomain' ),
  //   'new_item'           => __( 'New Month', 'your-plugin-textdomain' ),
  //   'edit_item'          => __( 'Edit Month', 'your-plugin-textdomain' ),
  //   'view_item'          => __( 'View Month', 'your-plugin-textdomain' ),
  //   'all_items'          => __( 'All Months', 'your-plugin-textdomain' ),
  //   'search_items'       => __( 'Search Months', 'your-plugin-textdomain' ),
  //   'parent_item_colon'  => __( 'Parent Months:', 'your-plugin-textdomain' ),
  //   'not_found'          => __( 'No months found.', 'your-plugin-textdomain' ),
  //   'not_found_in_trash' => __( 'No months found in Trash.', 'your-plugin-textdomain' )
  // );

  // $args = array(
  //   'labels'             => $labels,
  //   'description'        => __( 'Description.', 'your-plugin-textdomain' ),
  //   'public'             => true,
  //   'publicly_queryable' => true,
  //   'show_ui'            => true,
  //   'show_in_menu'       => true,
  //   'menu_icon'          => 'dashicons-calendar-alt',
  //   'query_var'          => true,
  //   'rewrite'            => array( 'slug' => 'calendar' ),
  //   'capability_type'    => 'post',
  //   'has_archive'        => true,
  //   'hierarchical'       => false,
  //   'menu_position'      => null,
  //   'supports'           => array( 'title' )
  // );

  // register_post_type( 'calendar', $args );
}

function register_taxonomies() {
  // Register taxonomies here.
}

function register_menus() {
    //Register menus here.
    register_nav_menus(
        array(
            'header_01' => __( 'Meta navigatie' ),
            'header_02' => __( 'Header navigatie' ),
            'header_03' => __( 'Mobiele navigatie Main' ),
            'header_04' => __( 'Mobiele navigatie Sub' ),
            'footer_01' => __( 'Footer 1' ),
            'footer_02' => __( 'Footer 2' ),
            'footer_03' => __( 'Footer 3' ),
            'overlay_01' => __( 'Overlay kolom 1' ),
            'overlay_02' => __( 'Overlay kolom 2' ),
            'overlay_03' => __( 'Overlay kolom 3' ),
            'overlay_04' => __( 'Overlay kolom 4' )
        )
    );
}

function load_plugins() {
  // Load plugins bundled with the theme here. Example:
  // include_once(TEMPLATEPATH . '/plugins/my-plugin.php');
}

function remove_admin_bar() {
  remove_action('wp_head', '_admin_bar_bump_cb');
}

// Custom Login Logo
function customize_login_logo() {
    echo '<style type="text/css">h1 a { background-image:url('.get_bloginfo('template_directory').'/assets/images/logo-login.png) !important;background-size:auto !important;height:200px !important;width:300px !important; }</style>';
}

// Replace Footer Text Admin
function customize_admin_footer() {
    echo '<style type="text/css">#widget-3_calendar-__i__ {display:none;}</style>Made by <a href="http://www.moonbase.co" target="_blank">Angelo Vaudo & David Hoogland</a>';
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

  register_sidebar( array(
    'name'          => 'Blog',
    'id'            => 'blog',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


function remove_widgets() {
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Pages');
  unregister_widget('PLL_Widget_Languages');
  unregister_widget('WP_Widget_Archives');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Media_Audio');
  unregister_widget('WP_Widget_Media_Image');
  unregister_widget('WP_Widget_Media_Video');
  unregister_widget('WP_Widget_Media_Gallery');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Text');
  unregister_widget('WP_Widget_Categories');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Posts');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_RSS');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Nav_Menu_Widget');
  unregister_widget('WP_Widget_Custom_HTML');
}

add_action( 'widgets_init', 'remove_widgets' );

if(!class_exists('WP_Widget_Events')) {

  class WP_Widget_Events extends WP_Widget {

    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget-events',
        'description' => 'Toon evenementen in de sidebar',
      );
      parent::__construct( 'events', 'Events', $widget_ops );
    }

    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }
      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      include( locate_template( 'partials/widgets/widget-events.php', false, false ) );
    }

    public function form( $instance ) {
      // outputs the options form on admin
    }

    public function update( $new_instance, $old_instance ) {
      // processes widget options to be saved
    }

  }

}

if(!class_exists('WP_Widget_Shop')) {

  class WP_Widget_Shop extends WP_Widget {

    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget-shop',
        'description' => 'Toon producten in de sidebar',
      );
      parent::__construct( 'shop', 'Shop', $widget_ops );
    }

    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }
      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      include( locate_template( 'partials/widgets/widget-shop.php', false, false ) );
    }

    public function form( $instance ) {
      // outputs the options form on admin
    }

    public function update( $new_instance, $old_instance ) {
      // processes widget options to be saved
    }

  }

}

if(!class_exists('WP_Widget_Html')) {

  class WP_Widget_Html extends WP_Widget {

    public function __construct() {
      $widget_ops = array(
        'classname' => 'widget-html',
        'description' => 'Toon html content in de sidebar',
      );
      parent::__construct( 'html', 'Html', $widget_ops );
    }

    public function widget( $args, $instance ) {
      // outputs the content of the widget
      if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }
      // widget ID with prefix for use in ACF API functions
      $widget_id = 'widget_' . $args['widget_id'];

      include( locate_template( 'partials/widgets/widget-html.php', false, false ) );
    }

    public function form( $instance ) {
      // outputs the options form on admin
    }

    public function update( $new_instance, $old_instance ) {
      // processes widget options to be saved
    }

  }

}

function myplugin_register_widgets() {
  register_widget( 'WP_Widget_Events' );
  register_widget( 'WP_Widget_Shop' );
  register_widget( 'WP_Widget_Html' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );

/**
 * Don't allow date to be selected after maxDate
 *
 * @link https://wpforms.com/developers/customize-the-date-time-field-date-options/
 */
 
function wpf_dev_limit_date_picker() {

    ?>
    <script type="text/javascript">
        window.wpforms_1765_8 = window.wpforms_1765_8 || {};
        window.wpforms_1765_8.datepicker = {
            disableMobile: true,
            // Don't allow users to pick past dates
            minDate: new Date(),
            // Don't allow users to pick dates after Dec 31, 2025
            // maxDate: new Date( '2025-12-31' ),
            // dateFormat: "d-m-Y"
            enable: ["2022-07-27","2022-08-03","2022-08-10","2022-08-17"]
        }
    </script>
    <?php
}
add_action( 'wpforms_wp_footer_end', 'wpf_dev_limit_date_picker', 10 );


?>