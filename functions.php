<?php
function load_my_scripts() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap_css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css');
    
    // Enqueue FontAwesome CSS
    wp_enqueue_style('fontawesome_css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    
    // Enqueue jQuery (slim version)
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js', array(), null, true);
    
    // Enqueue Bootstrap JS (with jQuery dependency)
    wp_enqueue_script('bootstrap_js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js', array('jquery'), null, true);
    
    // Enqueue your custom style.css from the theme folder
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
}

// Hook the function into WordPress' wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'load_my_scripts');
?>
<?php
function register_navwalker(){
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
?>
<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'top-menu' ),
) );
?>