<?php
/*
Plugin Name: Subscript and Superscript
Plugin URI: https://www.grindstone.com.au
Description: Add Subscript and Superscript Buttons to the Visual Editor
Version: 1
Author: Yavisht Katgara
Author URI: https://www.grindstone.com.au
Text Domain: subscript-superscript
Domain Path: /languages
*/

function my_mce_buttons_2( $buttons ) { 
    /**
     * Add in a core button that's disabled by default
     */
    $buttons[] = 'superscript';
    $buttons[] = 'subscript';

    return $buttons;
}
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

?>