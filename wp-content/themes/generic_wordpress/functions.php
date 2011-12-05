<?php
// enable post thumbnails
add_theme_support( 'post-thumbnails' );

$domain = preg_replace('/^(www|dev[0-9])\./','',$_SERVER['SERVER_NAME']);
switch ($domain) {       
       case 'fulcrum-acoustic.com':
       set_post_thumbnail_size( 104, 104 );
       break;

}

if (preg_match('/\/ajaxreload\/?$/', $_SERVER['REQUEST_URI'])) {
   // remove ajaxreload URL prefix
   $_SERVER['REQUEST_URI'] = preg_replace('/\/ajaxreload\/?$/','', $_SERVER['REQUEST_URI']);
}

if ( function_exists('register_sidebar_widget') ) {
    register_sidebar_widget(__("Recent Posts"), 'new_wp_widget_recent_entries');
}

if ( function_exists('register_sidebar') )
    register_sidebars(2, array(
		'name' => 'Sidebar %d',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));


function remove_more_jump_link($link) { 
	 $offset = strpos($link, '#more-');
	 if ($offset) {
	    $end = strpos($link, '"',$offset);
	 }
	 if ($end) {
	    $link = substr_replace($link, '', $offset, $end-$offset);
	 }
	 return $link;
}
