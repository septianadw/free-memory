<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indosoft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		  <div class="login-inf">
			   <?php
			   global $current_user;
			        get_currentuserinfo();
			   if ( $user_ID ) { ?>
			    <span>Welcome back <?php echo $current_user->user_login ?> | if you are not <?php echo $current_user->user_login ?>, <a href="<?php echo wp_logout_url( $redirect ); ?> ">click here</a></span>
			   <?php } else {   ?>
			   <?php } ?>
		  </div>
	  	<div>
			<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'indosoft' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			//edit_post_link(
				//sprintf(
					/* translators: %s: Name of current post */
					//esc_html__( 'Edit %s', 'indosoft' ),
					//the_title( '<span class="screen-reader-text">"', '"</span>', false )
				//),
				//'<span class="edit-link">',
				//'</span>'
			//);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
