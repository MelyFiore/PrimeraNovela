<?php
add_action("init", "codigo_inicial");

function codigo_inicial() {

	register_post_type("noticias", [
	"label" => "Noticias",
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
?>