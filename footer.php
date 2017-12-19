<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HealthSource
 */

?>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if( has_nav_menu( 'social' ) ) { ?>
			<nav class="social-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . hs_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-menu -->
		<?php } ?>
		<div class="site-info">
			<span class="sitemeta">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hs' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s.', 'hs' ), 'WordPress' ); ?></a>
			</span>
			<span class="sitemeta">
				<?php printf( esc_html__( 'Theme: %1$s.', 'hs' ), '<a href="https://wordpress.org/themes/hs" rel="nofollow">HealthSource</a>' ); ?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
