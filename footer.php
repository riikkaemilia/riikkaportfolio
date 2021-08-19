<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RiikkaPortfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer site-info">
			<div class="footer__wrapper portfolio__text">
				<div class="footer__links">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><p>Works</p></a>
					<a href="<?php echo esc_url( home_url( '/about' ) ); ?>"><p>About</p></a>
				</div>
				<div class="footer__contact">
					<p>riikka.e.sutinen@gmail.com</p>
						<div class="footer__socialicons">
						<a href="https://www.linkedin.com/in/riikka-sutinen/" target="_blank"><img class="footer__icon" id="linkedin" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/08/linkedin2.png"></a>
						<a href="https://www.behance.net/riikkaemiliasutinen" target="_blank"><img class="footer__icon" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/2021/08/behance-64.png"></a>
						</div>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
