<?php 
    get_header();
?>

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_de_bienvenida'); ?>
        </h2>
        <p><?php the_field('texto_de_bienvenida'); ?></p>
    </section>

    <section class="areas">
        <div class="area">
            <?php 
                $area1 = get_field('area_1'); 
                $imagen = $area1['imagen']['sizes']['medium_large'];
                $texto = $area1['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo $texto; ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php 
                $area2 = get_field('area_2'); 
                $imagen = $area2['imagen']['sizes']['medium_large'];
                $texto = $area2['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo $texto; ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php 
                $area3 = get_field('area_3'); 
                $imagen = $area3['imagen']['sizes']['medium_large'];
                $texto = $area3['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo $texto; ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>

        <div class="area">
            <?php 
                $area4 = get_field('area_4'); 
                $imagen = $area4['imagen']['sizes']['medium_large'];
                $texto = $area4['texto'];
            ?>
            <img src="<?php echo esc_attr($imagen); ?>" alt="Imagen <?php echo $texto; ?>">
            <p><?php echo esc_html($texto); ?></p>
        </div>
    </section>

    <main class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestras Clases</h2>
        <?php gymfitness_lista_clases(4); ?>

        <div class="contenedor-boton">
            <a class="boton boton-primario" href="<?php echo get_permalink(get_page_by_title('Nuestras Clases')); ?>">Ver Todas las clases</a>
        </div>
 
    </main>

<?php 
    get_footer();
?>