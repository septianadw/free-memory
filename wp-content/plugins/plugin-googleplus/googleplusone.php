<?php
	/*
    Plugin Name: Plugin GooglePlus
    Plugin URI: http://homestead.app/
    Description: Share to googleplus one
    Author: Septiana DW
    Version: 1.0
    Author URI: http://homestead.app/
    */
function pasang_jscript(){
    echo "<script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script>";
}

add_action("wp_head","pasang_jscript");

function pasang_tombol($content){
    echo $content;
    if(is_single()){
        echo "<p><g:plusone></g:plusone>";
    }
}

add_filter("the_content","pasang_tombol");

?>