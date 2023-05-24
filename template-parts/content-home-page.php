<?php
/**
 * Template name: Pagina Inicio
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package netflix
 */

?>
<body>
<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>	
	<div class="row inicio m-5">
	    <div class="col-12 col-md-4 m-5">
		    <?php netflix_post_thumbnail(); ?>
			<h1 class="text-white pt-4 "><?php echo get_the_title();?></h1>
			<span class="text-white fs-4">
				<?php the_content();?>
			</span>
			<div class="pt-3">
				<a href="" class="btn btn-light btn-lg text-black">Reproducir ahora</a>
				<a href="" class="btn btn-outline-light btn-lg text-white">Mas Informacion</a>
		   </div>
		</div>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
</body>