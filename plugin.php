<?php
/**
 * Plugin Name: UC Santa Cruz Alumni Quiz
 * Plugin URI: https://github.com/Herm71/alumni-quiz
 * Description: Test your UC Santa Cruz Alumni Knowledge!
 * Version: 1.1.0
 * Author: Jason Chafin
 * Author URI: http://www.ucsc.edu/
 * License: GPL2
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */
// Plugin Directory 
define( 'BB_DIR', dirname( __FILE__ ) );

//enqueue styles
add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');
function callback_for_setting_up_scripts() {
    wp_register_style( 'quiz-style', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'quiz-style' );
}



//Include Customization files:

// General
include_once( BB_DIR . '/assets/functions/general.php' );

// Quiz
include_once( BB_DIR . '/assets/functions/quiz.php' );

// Results
include_once( BB_DIR . '/assets/functions/grade.php' );