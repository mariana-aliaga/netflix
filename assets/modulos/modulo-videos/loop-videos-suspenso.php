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
<section class="seccion-cinco container-fluid mt-5 mb-5 d-flex">

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
                        'terms'=> 'suspenso',
                    ),
                )
            );
            $wp_query = new WP_Query($args);
            if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
               <div class="row">
                    <div class="col-12 img">
                        <?php netflix_post_thumbnail(); ?>
                    </div>
               </div>


            <?php endwhile; endif; wp_reset_query(); $wp_query = $temp ?>




</section>
<!------seccion contacto---->