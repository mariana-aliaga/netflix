<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid articulo');?>>
	<div class="row d-flex justify-content-center">
		<div class="d-flex justify-content-center imagen">
			<div class="info col-12 col-md-6">
				<a href="" class="btn btn-light btn-lg text-black">Reproducir</a>
			</div>
			<div class="col-12 col-md-6">
				<a href="" class="like-button"><i class="fas fa-thumbs-up"></i></a>
			</div>
		</div>
		<div class="contenido entry-content">
			<div class="col-12 col-md-6">
				<div class="d-flex text-white">
					<span class="pe-2">1999</span>
					<span class="ps-2">|</span>
					<span class="ps-2">Clasificación por edad:13+</span>
					<span class="ps-2">|</span>
					<span class="ps-2">13 temporadas</span>
					<span class="ps-2">|</span>
					<span class="ps-2">Animes</span>
				</div>
				<span class="text-light fs-4">
					<p><?php the_content();?></p>
				</span>
			</div>
			<div class=" col-12 col-md-6">
				<p class="text-light">Protagonistas:Mayumi Tanaka,Akemi Okamura,Kazuya Nakai</p>
			</div>
			<div>
		      <?php include get_template_directory(). '/assets/modulos/modulo-videos/loop-videos-capitulos.php';?>
		   </div>
		</div>
		
	</div>
	
</article><!-- #post-<?php the_ID(); ?> -->
