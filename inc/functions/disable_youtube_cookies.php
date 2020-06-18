<?php

add_filter( 'embed_oembed_html', 'youtube_nocookie_loesung', 10, 4);
function youtube_nocookie_loesung( $original, $url, $attr, $post_ID ) {
	$html = str_replace("youtube.com","youtube-nocookie.com",$original);
	$html = str_replace("feature=oembed","feature=oembed&showinfo=0",$html);
	return $html;
}
