<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package indosoft
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			//the_post_navigation();
			?>

			<h5>Artikel Berkaitan :</h5>
			<?php $this_post = $post;$category = get_the_category();
			$category = $category[0]; $category = $category->cat_ID;
			$posts = get_posts('numberposts=11&offset=0&orderby=rand&order=DESC&category='.$category);$count = 0;
			foreach ( $posts as $post ) {if ( $post->ID == $this_post->ID || $count == 10) {unset($posts[$count]);}
			else{$count ++;}}?>
			<?php if ( $posts ) : ?><div class="artikel"><ol>
			<?php foreach ( $posts as $post ) : ?>
			<li><a href="<?php the_permalink() ?>" target="_blank"><?php if ( get_the_title() ){ the_title(); } else { echo "Tidak ada artikel terkait"; } ?></a></li>
			<?php endforeach
			// $posts as $post ?></ol></div>
			<?php endif
			// $posts ?>
			<?php $post = $this_post;unset($this_post);?>
			<br><br>
			<?php
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
