<?php

get_header();

?>

<main id="primary" class="site-main">
    <section class="section banner">

        <video autoplay loop muted poster="<?php echo get_template_directory_uri() . './assets/images/banner.png'; ?>">
            <source class="video" src="<?php echo get_stylesheet_directory_uri() . '/images/Studio+Koukaki-vidéo+header+sans+son+(1).mp4'; ?> " type="video/mp4">
        </video>
        <img class="logo" src=" <?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt=" logo Fleurs d'oranger & chats errants">
    </section>
    <section class="story" id="story">
        <h2 class="section">
            <span class="Animetitre animateTitle">L'</span>
            <span class="Animetitre2 animateTitle2">histoire</span>
        </h2>
        <article class="section story__article ">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php get_template_part('/template-parts/carrousel'); ?>

        <article id="place" class="section">

            <div>
                <h3>
                    <span class="Animetitre animateTitle">Le</span>
                    <span class="Animetitre2 animateTitle2">&nbsp;lieu</span>
                </h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div>
                <img id="nuagesBleu" src=" <?php echo get_stylesheet_directory_uri() . '/images/Nuages_bleu.png'; ?> " alt="Nuage Bleu">
            </div>
            <img id="fond_ss_nuages" src=" <?php echo get_stylesheet_directory_uri() . '/images/section_lieu_ss_nuages.png'; ?> " alt="fond">


        </article>
    </section>

    <section id="studio" class="section">
        <h2>
            <span class="Animetitre animateTitle">Studio</span>
            <span class="Animetitre2 animateTitle2">&nbsp;Koukaki</span>
        </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue
                des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections
                en activité : le long métrage et le court métrage. Nous développons des films fantastiques,
                principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et
                commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable
                dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise
                sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats
                errants”.</p>
        </div>
    </section>


</main><!-- #main -->


<?php

get_footer();
