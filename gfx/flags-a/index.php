<?php

$dirname = "/home/taylor/www/wp/gfx/flags-a/";
$images = glob($dirname."*.png");
foreach($images as $image) {
echo '<img src="'.basename($image).'" />' . basename($image) . '<br />';
}