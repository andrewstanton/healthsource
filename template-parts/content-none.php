<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hs
 */

?>



	<main id="main" class="site-main" role="main">
		<section class="none-header">
			<header class="page-header">
				<h1 class="page-title">
					<?php
					if ( is_404() ) { esc_html_e( 'Page not available', 'hs' );
					} else if ( is_search() ) {
						/* translators: %s = search query */
						printf( esc_html__( 'Nothing found for &ldquo;%s&rdquo;', 'hs'), get_search_query() );
					} else {
						esc_html_e( 'Nothing Found', 'hs' );
					}
					?>
				</h1>


				<div class="page-content">

					<?php if ( is_search() ) : ?>

						<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hs' ); ?></p>

					<?php elseif ( is_404() ) : ?>

						<p><?php esc_html_e( 'You seem to be lost. Please use the navigation above to find the correct page. Thank you!', 'hs' ); ?></p>

					<?php else : ?>

						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'hs' ); ?></p>

					<?php endif; ?>
				</div><!-- .page-content -->
			</header><!-- .page-header -->
		</section>
	</main><!-- #main -->


<?php
get_footer();