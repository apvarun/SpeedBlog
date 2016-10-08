<?php
// Add scripts and stylesheets
function speedblog_scripts() {
	//wp_enqueue_style( 'blog-old', get_template_directory_uri() . '/css/layouts/blog-old-ie.css');
	wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/layouts/blog.css' );
}
add_action( 'wp_enqueue_scripts', 'speedblog_scripts' );
// WordPress Titles
add_theme_support( 'title-tag' );
// Custom settings
function theme_settings_add_menu() {
  add_menu_page( 'Theme Settings', 'Theme Settings', 'manage_options', 'theme-settings', 'theme_settings_page', null, 99);
}
add_action( 'admin_menu', 'theme_settings_add_menu' );
// Create Custom Global Settings
function theme_settings_page() { ?>
  <div class="wrap">
    <h1>Theme Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields('section');
           do_settings_sections('theme-options');
           submit_button();
       ?>
    </form>
  </div>
<?php }
// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" />
<?php }
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" />
<?php }
function setting_googleplus() { ?>
  <input type="text" name="googleplus" id="googleplus" value="<?php echo get_option('googleplus'); ?>" />
<?php }
function theme_settings_page_setup() {
  add_settings_section('section', 'All Settings', null, 'theme-options');
  add_settings_field('twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section');
  add_settings_field('facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section');
  add_settings_field('googleplus', 'Google Plus URL', 'setting_googleplus', 'theme-options', 'section');

  register_setting('section', 'twitter');
  register_setting('section', 'facebook');
  register_setting('section', 'googleplus');
}
add_action( 'admin_init', 'theme_settings_page_setup' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );
