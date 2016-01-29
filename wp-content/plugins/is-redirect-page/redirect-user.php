<?php
    /*
    Plugin Name: Redirect Page User
    Plugin URI: http://wordpress2.app/
    Description: Redirect Page User
    Author: Waone
    Version: 1.0
    Author URI: http://wordpress2.app/
    */


function my_page_template_redirect()
{
    global $post;
    $redirect = get_post_meta( $post->ID, 'meta_url', true );
    //print_r($redirect);
    //print_r($post);

    if($redirect)
    {
        wp_redirect( $redirect);
        exit();
    }
}
add_action( 'template_redirect', 'my_page_template_redirect' );

add_action( 'admin_init', 'my_admin' );
function my_admin() {
    add_meta_box( 'redirect_url_meta_box',
        '-Redirect URL-',
        'display_redirect_url_meta_box',
        'page', 'normal', 'high'
    );
}
function display_redirect_url_meta_box( $redir_url ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $meta_url = esc_html( get_post_meta( $redir_url->ID, 'meta_url', true ) );
    //echo "<pre>";
    //print_r($pages);
    ?>

    <table>
        <tr>
            <td>New URL redirect</td>
            <td>       :      </td>
            <td><input type="url" size="80" name="meta_url_name" value="<?php echo $meta_url; ?>" /></td>
        </tr>
    </table>
    <?php
}

add_action( 'save_post', 'add_redirect_url', 10, 2 );
function add_redirect_url( $redir_url_id, $redir_url ) {
    // Check post type for movie reviews
    //print_r($_POST['meta_url_name'] );exit;
    if ( $redir_url->post_type == 'page' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['meta_url_name'] ) && $_POST['meta_url_name'] != '' ) {
            update_post_meta( $redir_url_id, 'meta_url', $_POST['meta_url_name'] );
        } elseif ( '' == $_POST['meta_url_name']  )
            delete_post_meta( $redir_url_id, 'meta_url', $_POST['meta_url_name'] );
    }
}

?>
