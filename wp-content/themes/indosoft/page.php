<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package indosoft
 */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				if(is_page('home')){
					get_template_part( 'template-parts/content', 'page' );
				}
				// else if(is_page('fact_sheets')){
					// get_template_part( 'template-parts/content', 'fact_sheets' );
				// }
				else if(is_page('submit_inquiry')){
					get_template_part( 'template-parts/content', 'page_submit_inquiry' );
				} else {
					 get_template_part( 'template-parts/content', 'page_blank' );
					 // get_template_part( 'template-parts/content', 'page_sheet' );
					 // get_template_part( 'template-parts/content', 'page_fact_sheets' );
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
