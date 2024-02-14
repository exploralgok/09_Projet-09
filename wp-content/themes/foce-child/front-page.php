<?php

get_header();
?>

    <main id="primary" class="site-main">
    <div class="video-wrapper">
        <section class="banner-video">
            <video autoplay muted loop poster="/wp-content/themes/foce/assets/images/banner.png">
                <source src="/wp-content/themes/foce-child/assets/videos/Studio+Koukaki-vidéo+header+sans+son+(1).mp4">
            </video>
        </section>
        <div class="parallax "></div>
            <img class = "logo floating" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">

</div>
        <section id="story" class="story fadein rotating">
            <h2 class="reveal-wrapper"><span class="reveal">L'histoire</span></h2>
            <article id="" class="story__article fadein rotating">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>


            <?php get_template_part( 'characters' ); ?>

            <article id="place" class="fadein">
                <div>
                    <h3 class="reveal-wrapper"><span class="reveal">Le</span> <span class="reveal">Lieu</span></h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fadein rotating">
            <h2 class="reveal-wrapper"><span class="reveal">Studio</span> <span class="reveal">Koukaki</span></h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div> 
        </section>


    </main><!-- #main -->

<?php

get_footer();
