<?php 
$postcover = $post->postimage()->toFile();
if ($postcover != '') {
	echo $postcover->url(); 
} else {
	echo $post->images()->first()->url();
}
?>