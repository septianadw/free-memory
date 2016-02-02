<?php
add_shortcode('wp_pdfjs_viewer', 'wp_pdfjs_viewer_shortcode_tags');
function wp_pdfjs_viewer_shortcode_tags($attr)
{
    ?>
    <iframe style="margin:10px;"
            width='550px'
            height='400px'
            src='http://homestead.app/wp-content/plugins/wp_pdfjs/assets/vendor/pdfjs/web/viewer.html?file='
            allowfullscreen
            webkitallowfullscreen >

    <?php
}
?>