<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RiikkaPortfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div class="intro">
		<h1 class="intro__headline">Riikka Sutinen</h1>
		<div class="intro__biotext">
		<p>I am a UX designer who is inspired by calm and human-centered solutions. I have a background in art and a side interest in front-end development. Currently I am finishing my digital design studies at Metropolia and looking for work opportunities.</p>
		<p><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">Read more about me</a> or scroll down to see some of my work!</p>
		</div>
	</div>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
