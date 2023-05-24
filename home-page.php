<?php
/**
 * Template name: Pagina de inicio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

get_header();
?>

	<main id="primary" class="site-main ">
	    <?php
		  while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home-page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		 endwhile; // End of the loop.
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h1 class="text-white">Anime</h1>
					<?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-anime.php';?>
				</div>
				
				<div class="col-12">
					<h1 class="text-white">Drama</h1>
					<?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-drama.php';?>
				</div>

				<div class="col-12">
					<h1 class="text-white">Animacion</h1>
					<?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-animacion.php';?>
				</div>
				
				<div class="col-12">
					<h1 class="text-white">Accion</h1>
					<?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-accion.php';?>

				</div>

				<div class="col-12">
					<h1 class="text-white">Suspenso</h1>
					<?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-suspenso.php';?>

				</div>

			</div>
		</div>
		
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
