<?php 

function gymfitness_lista_clases( $cantidad = -1){
    ?>
        <ul class="listado-grid">
            <?php 
                $args = array(
                    'post_type' => 'gymfitness_clases',
                    'posts_per_page' => $cantidad
                );

                $clases = new WP_Query($args);

                while( $clases->have_posts() ){
                    $clases->the_post();
                ?>
                    <li class="card-clases">
                        <?php the_post_thumbnail(); ?>
                       <div class="contenido">
                            <a href=" <?php the_permalink(); ?> ">
                                <h3><?php the_title(); ?></h3>
                            </a>

                            <?php 
                                $hora_inicio = get_field('hora_de_inicio');
                                $hora_fin = get_field('hora_fin');
                            ?>
                            
                            <p><?php the_field('dias_clases');?> - <?php echo $hora_fin . " a " . $hora_fin ?></p>
                       </div>
                    </li>
                <?php
                }
                wp_reset_postdata();
            ?>
        </ul>
    <?php
}

?>