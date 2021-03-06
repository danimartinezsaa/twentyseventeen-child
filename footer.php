<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
				<?php 
				
					//Recogemos un nuevo menú definido en functions.php
					//Commit
					wp_nav_menu( array( 'theme_location' => 'en-pie-menu' ) );
					
					//Recogemos las areas de widgets definidas en functions.php
					//Commit
					dynamic_sidebar( 'sidebar-dani2' );
					get_template_part( 'template-parts/footer/site', 'info' );
				?>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
