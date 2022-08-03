<?php
add_action("init", "codigo_inicial");

function codigo_inicial() {

	register_post_type("capitulos", [
	"label" => "Capitulos",
	"public" => true,
    "supports" => ["title", "editor", "comments", "author", "thumbnail"]
	]);

	register_nav_menus([
		'principal' => 'Zona principal'
	]);

}

function theme_setup(){
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','theme_setup');
add_theme_support('post-thumbnails');
function my_excerpt_length($length){
	return 100;
	}
	add_filter('excerpt_length', 'my_excerpt_length');
?>