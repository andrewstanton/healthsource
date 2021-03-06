<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HealthSource
 */

get_header(); ?>

<?php
if ( !have_posts() ) :

get_template_part( 'template-parts/content', 'none' );
return;

endif;
?>

	<main id="main" class="site-main" role="main">

	<?php
	if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'hs' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		</header><!-- .page-header -->
		
		<div class="pages-grid-container">
		<?php
		//echo hs_get_the_archive_navigation( 'next' );
		
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content', 'search' );

		endwhile;?>
		</div>
		<!--pages--grid-container-->
		
		<?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

	</main><!-- #main -->

<?php
get_footer();
