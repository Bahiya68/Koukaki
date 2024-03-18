<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',
);
$characters_query = new WP_Query($args);
?>

<article class="section" id="characters">
    <div class="main-character">
        <h3 id="#place" class="titreh3">
            <span class="Animetitre animateTitle">Les</span>
            <span class="Animetitre2 animateTitle2">&nbsp;personnages</span>
        </h3>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <?php
                while ($characters_query->have_posts()) {   //parcourt chaque publication obtenue à partir de la requête $characters_query
                    $characters_query->the_post();
                    echo '<div class="swiper-slide">';  //début du conteneur
                    echo '<figure>';
                    echo get_the_post_thumbnail(get_the_ID(), 'full');    //Affiche l'image mise en avant de la publication actuelle.
                    echo '<figcaption>';
                    the_title();
                    echo '</figcaption>';
                    echo '</figure>';
                    echo '</div>';
                };
                ?>
            </div>
        </div>
</article>