<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RiikkaPortfolio
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php
		if ( is_singular() ) : ?>
		<div class="entry-content__projectpage">
		<?php
			the_title( '<h1 class="entry-title">', '</h1>' );

			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'riikkaportfolio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			); ?>
		</div><!-- .entry-content__projectpage -->
			<?php
		else : ?>
			<div class="entry-content__frontpage">
				<?php 
				//  project title
				the_title( '<h2 class="entry-content__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				
				//  project thumbnail
				?> 	
				<div class="entry-content__thumbnail">
					<a href="#">
						<?php the_post_thumbnail('full');  ?>
					</a>
				</div>
				
				
				<div class="entry-content__excerpt">
				<?php 
				the_excerpt(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'riikkaportfolio' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				); ?>
				</div><!-- .entry-content__excerpt -->
				<div class="entry-content__readmore">
				   		<a href="<?php esc_url( the_permalink() ) ?>" rel="bookmark" class="textdecorationoff">
						   <div class="portfolio__linkbutton">
							   <p>Read more</p>
					</div></a>
				</div> <!-- .entry-content__readmore -->
			</div><!-- .entry-content__frontpage -->
			<?php
		endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'riikkaportfolio' ),
				'after'  => '</div>',
			)
		);
		?>
		

</article><!-- #post-<?php the_ID(); ?> -->