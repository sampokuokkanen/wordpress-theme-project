<?php

add_theme_support( 'title-tag' );

// Add scripts and stylesheets
function btheme_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/all.min.css', array(), '5.2.0' );
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
}
add_action( 'wp_enqueue_scripts', 'btheme_scripts' );

// Add Google Fonts
function btheme_google_fonts() {
				wp_register_style('Poppins', 'https://fonts.googleapis.com/css?family=Poppins');
				wp_enqueue_style( 'Poppins');
		}
add_action('wp_print_styles', 'btheme_google_fonts');

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
		<input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
		<?php }
function setting_github() { ?>
			<input type="text" name="github" id="github" value="<?php echo get_option('github'); ?>" />
			<?php }
function setting_facebook() { ?>
			<input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
			<?php }
function custom_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('github', 'GitHub URL', 'setting_github', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  
	register_setting('section', 'twitter');
  register_setting('section', 'github');
  register_setting('section', 'facebook');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Custom Post Type
function create_my_custom_post() {
	register_post_type( 'my-custom-post',
			array(
			'labels' => array(
					'name' => __( 'My Custom Post' ),
					'singular_name' => __( 'My Custom Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_my_custom_post' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );
//svg support 

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// making the nav active part work

    remove_filter('the_content', 'wpautop');

    remove_filter('the_excerpt', 'wpautop');

    add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
    function special_nav_class($classes, $item){
        if( in_array('current_page_parent', $classes) ){
            $classes[] = 'active ';
        }
    return $classes;
    }
// Navwalker

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'btheme' ),
) );