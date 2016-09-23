<?php

/*
  EDIT DEFAULT WORDPRESS WIDGET
*/

function girino_tag_cloud_font_change( $args ){

    $args['smallest'] = 12;
    $args['largest'] = 12;

    return $args;
}


add_filter( 'widget_tag_cloud_args', 'girino_tag_cloud_font_change');


function girino_list_categories_output_change( $links ) {

	$links = str_replace('</a> (', '</a> <span>', $links);
	$links = str_replace(')', '</span>', $links);

	return $links;

}
add_filter( 'wp_list_categories', 'girino_list_categories_output_change' );
?>
