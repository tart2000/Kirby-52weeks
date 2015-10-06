<?php 
if ($post->postimage() != '') {
	$postcover = $post->postimage()->toFile();
	echo $postcover->url(); 
} else if ($post->hasImages()) {
	echo $post->images()->first()->url();
} else {
	echo $site->url().'/assets/images/orange.gif';
}
?>