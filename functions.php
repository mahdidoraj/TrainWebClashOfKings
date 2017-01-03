<?php


$args = array(
	'default-color' => 'F9F9F9',
);
add_theme_support( 'custom-background', $args );
if ( ! isset( $content_width ) ) $content_width = 300;
add_editor_style();


if ( function_exists('register_sidebar') ){

register_sidebar(array(
'name' => 'بلوک چپ',
'before_title' => '<div class="navbarleftbg"><div class="contentmenuheader"><h2>',
'after_title' => '</h2><br></div>',
'before_widget' => '<div class="content">',
'after_widget' => '</div></div>',
));
}
