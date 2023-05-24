<script>
function incrustar_hoja_estilos_comision() {
    var hoja_estilos_url =
        '<?php echo get_site_url() . '/wp-content/themes/prisa-chile/assets/modulos/modulo-contenidos/modulo-contenidos.css';?>';
    var hoja_estilos = document.createElement('link');
    hoja_estilos.rel = 'stylesheet';
    hoja_estilos.href = hoja_estilos_url;
    document.head.appendChild(hoja_estilos);
}
incrustar_hoja_estilos_comision();
</script>

<!-- #seccion 5 contenidos -->
<section class="seccion-cinco container-fluid mt-5 mb-5">

    <?php $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = -1; // -1 shows all posts
    $args = array(
        'post_type' => 'videos',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page,
        'tax_query' =>array(
            array(
                'taxonomy' =>'genero-videos',
                'field'=>'slug',
                'terms'=> 'capitulos',
            ),
        )
    );
    $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="row mt-4">
            <div class="col-12 col-md-1 text-white">1</div>
            <div class="col-12 col-md-4"><?php netflix_post_thumbnail();?></div>
            <div class="col-12 col-md-7 text-white">
                <h4><?php echo get_the_title();?></h4>
                <p><?php the_content();?></p>
            </div>
            
        </div>


    <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>




</section>
<!------seccion contacto---->