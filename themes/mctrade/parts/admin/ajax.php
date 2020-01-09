<?php
function getDetails(){
	$id = $_POST['id'];
	$content = apply_filters('the_content', get_post($id)->post_content);
	echo $content;
	wp_die();
}

add_action('wp_ajax_nopriv_details', 'getDetails' );
add_action('wp_ajax_details', 'getDetails' );