<?php 
// Custom Functions and Overrides

function add_description_to_menu($item_output, $item, $depth, $args) {

   
    if (strlen($item->description) > 0 ) {
       // append description after link
       $item_output = sprintf('<a href="%s"><span class="english">%s</span><span class="maori">%s</span></a>', esc_html($item->url), esc_html($item->title), esc_html($item->description));
     
    }   
    return $item_output;
 }
 add_filter('walker_nav_menu_start_el', 'add_description_to_menu', 10, 4);
 
