<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package RiikkaPortfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
	<?php


	?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );



//	Previous/next post navigation.
			?>

			<div class="nav-links">
			<?php $prevPost = get_next_post(true);
				if($prevPost) {
					$args = array(
						'posts_per_page' => 1,
						'include' => $prevPost->ID
					);
					$prevPost = get_posts($args);
					foreach ($prevPost as $post) {
						setup_postdata($post);
			?>
				<div class="nav-previous">
					<span class="nav-title"><span class="nav-subtitle">&#8592;</span><br><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
					<span class="nav-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></span>
				</div>
			<?php
						wp_reset_postdata();
					} //end foreach
				} // end if
				 
				$nextPost = get_previous_post(true);
				if($nextPost) {
					$args = array(
						'posts_per_page' => 1,
						'include' => $nextPost->ID
					);
					$nextPost = get_posts($args);
					foreach ($nextPost as $post) {
						setup_postdata($post);
			?>
				<div class="nav-next">
					<span class="nav-title"><span class="nav-subtitle">&#8594;</span><br><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
					<span class="nav-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></span>
				</div>
			<?php
						wp_reset_postdata();
					} //end foreach
				} // end if
			?>
		</div>
<?php

	//  ** Underscores post navigation ** //

	//		the_post_navigation(
	//			array(
	//				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'riikkaportfolio' ) . '</span> <span class="nav-title">%title</span>',
	//				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'riikkaportfolio' ) . '</span> <span class="nav-title">%title</span>',
	//			)
	//		);


		//	If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
