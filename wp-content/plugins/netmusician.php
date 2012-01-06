<?php
/**
 * @package NetMusician overrides and other misc stuff
 * @version 1.0
 */
/*
Plugin Name: NetMusician
Description: NetMusician overrides and other misc stuff
*/

class nm {
	function restoreWPPreview() {
		global $post;
		global $pages;
		global $page;
		
		if (isset($_GET['preview_id']) && isset($_GET['preview'])
		 	&& $_GET['preview'] && $_GET['preview_id'] && $post->ID == $_GET['preview_id']) {
			$post = _set_preview($post);
			$pages[$page-1] = $post->post_content;
		}
	}
}

$nm = new nm();


add_action('the_post',array($nm, 'restoreWPPreview'));

?>