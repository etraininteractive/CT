<?php 
//This is important to call now as the default init file is too early to execute
add_action( 'muplugins_loaded', function(){
    include_once( dirname(__FILE__) . '/init.php' );
}, 8 );
add_action( 'plugins_loaded', function(){
    include_once( dirname(__FILE__) . '/init.php' );
}, 8 );