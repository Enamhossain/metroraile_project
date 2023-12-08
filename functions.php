
<?php


function theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    // Add custom image sizes
  
}
add_action('after_setup_theme', 'theme_setup');


function bd(){
    // style.css
        wp_enqueue_style('style',get_stylesheet_uri());
    //bootstrap css
    
        wp_register_style('bootstrapcss',get_template_directory_uri().'/css/bootstrap.min.css',array(),'5.2.3','all');
        wp_enqueue_style('bootstrapcss');
    
      //custom css
        wp_register_style('custom',get_template_directory_uri().'/custom.css',array(),'1.0.0','all');
        wp_enqueue_style('custom');
    
        wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);
        wp_enqueue_script('bootstrapjs',get_template_directory_uri().'/js/bootstrap.min.js',array(),'5.2.3',true);
        //js: bootstrap popper js
        wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array(),'2.11.7',true);
        //CDN
        wp_enqueue_style('fontawsome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
    }
    
    add_action('wp_enqueue_scripts','bd');


 



function load_bootstrap_css($wp_customize) {
    
//nav_menu
// register_nav_menus( array(
//     'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//     'secondary' => __( 'Secondary Menu', 'myfirsttheme' ),
// ) );

/**
 * Enable support for the following post formats:
 * aside, gallery, quote, image, and video
 */
// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );






}
add_action( 'wp_enqueue_scripts', 'load_bootstrap_css' );

register_nav_menus( [
    'TM' => 'primary menu',
    'FM' => 'Footer Menu'
] );


register_sidebar([
    'name' => 'left_side',
    'id' => 'left_sidebar',
    'before_widget' => '',
    'after_widget' => ''
] );
register_sidebar([
    'name' => 'hero_section',
    'id' => 'hero_section',
    'before_widget' => '',
    'after_widget' => ''
] );

register_sidebar([
    'name' => 'card_section',
    'id' => 'card_section',
    'before_widget' => '',
    'after_widget' => ''
] );


register_sidebar([
    'name' => 'card_section2',
    'id' => 'card1_section',
    'before_widget' => '',
    'after_widget' => ''
] );

?>