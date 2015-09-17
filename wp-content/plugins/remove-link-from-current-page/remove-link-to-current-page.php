<?php
/*
Plugin Name:  Remove Link to Current Page
Description:  Removes the link from the current page in wp_list_pages() and wp_nav_menu()
Version:      1.2
Plugin URI:   http://frankprendergast.ie/resources/remove-link-to-current-page-in-wordpress/
Author:       <a href="http://johnblackbourn.com/">John Blackbourn</a> and <a href="http://frankprendergast.ie/">Frank Prendergast</a>

	Written by John Blackbourn at johnblackbourn.com
	for Frank at websitedesigncork.com

	---

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

*/

function no_link_current_page( $p ) {
	return preg_replace( '%((current_page_item|current-menu-item)[^<]+)[^>]+>([^<]+)</a>%', '<span class="$1"></span>', $p, 1 );
}

add_filter( 'wp_list_pages', 'no_link_current_page' );
add_filter( 'wp_nav_menu',   'no_link_current_page' );

?>