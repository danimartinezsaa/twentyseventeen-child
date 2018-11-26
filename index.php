<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) {

				/* Start the Loop */
				while ( have_posts() ) {
					the_post();
			?>
					<!--Mostramos el título con un enlace al post-->
					<a href="<?php the_permalink(); ?>"><h2 class="titulo-dani"><?php the_title(); ?></h2></a>
					<!--Mostramos las categorías-->
					<p class="categorias"><?php the_category(); ?></p>
			<?php
					//Sacamos la foto del post
					the_post_thumbnail('thumbnail');
			?>
					<!--Sacamos el autor del post y la fecha-->
					<p><?php the_author(); ?> - <?php the_time('F j, Y'); ?></p>
					
					<!--Sacamos la descripcion del post-->
			<span class="descripcion">	<?php
					the_excerpt();
			?></span>
		
			<!--Enlace a seguir leyendo-->
			<a class="seguir-leyendo" href="<?php the_permalink(); ?>" >Seguir leyendo</a>
			
			<?php
			
				}
					

			}else{

				get_template_part( 'template-parts/post/content', 'none' );

			}
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
