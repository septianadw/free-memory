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
	  	<div>
			<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->
	<div class="row" id="breadcumb_nav">
	    	<!-- <ul id="breadcrumbs" class="breadcrumbs">
	    		<li class="item-home">
	    			<a class="bread-link bread-home" href="http://homestead.app" title="Home"><span class="breadcrums_homepage">Home</span></a>
	    		</li>
	    		<li class="separator separator-home"> </li>
	    		<li class="item-current item-archive"><span class="bread-current bread-archive"><?php the_title('<a href="'.esc_url( home_url( '/' ) ).'" rel="home"></a>' ); ?></span></li>
	    	</ul> -->
	    	<?php custom_breadcrumbs(); ?>
	    </div>

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
