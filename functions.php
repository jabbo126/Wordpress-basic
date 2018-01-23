<?php
add_theme_support ('post-thumbnails'); // umožní vkládat náhledové obrázky

/* Vlastní velikost náhledového obrázku využívá tuto funkci */
function fimage($size) {
global $post;
    $attachment_id = get_post_meta($post->ID, 'featured-image', true);
    $fimage = wp_get_attachment_image( $attachment_id, $size );
return $fimage;
}

// SIDEBARY začátek //
if ( function_exists('register_sidebar') ) {

	register_sidebar(array(
	'name' => 'floating-sidebar', /*pouze změníme jméno, jinak zkopírujeme */
	'id' => 'sidebar-1',
	'before_widget' => '<div id="widget">',
	'after_widget' => '</div></div>',
	'before_title' => '<h2>',
	'after_title' => '</h2><div id="widget-area">',
));}
// SIDEBARY začátek //

// PHP include //
$function_include = dirname( __FILE__ ) . '/external/example.php' ;
if ( file_exists( $function_include) ) require_once( $function_include );

// add $cap capability to this role object
$role_object = get_role( 'administrator' );
$role_object->add_cap( 'edit_theme_options' );

?>
