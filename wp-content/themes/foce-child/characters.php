<?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>

            <article id="characters" class="fadein">
                    <h3 class="reveal-wrapper"><span class="reveal">Les</span> <span class="reveal">personnages</span></h3>
<div class="swiper mySwiper characters">
<div class="swiper-wrapper">
    
<?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure class= swiper-slide single-characters>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
</div>
            </article>

            <!-- <article id="characters" class="fadein">
                <div class="main-character">
                    <h3 class="reveal-wrapper"><span class="reveal">Les</span> <span class="reveal">personnages</span></h3>
                    <?php
                    $main_character = $characters_query->posts[0];
                    echo '<figure>';
                    echo get_the_post_thumbnail( $main_character->ID, 'full' );
                    echo '<figcaption>'. $main_character->post_title . '</figcaption>';
                    echo '</figure>';
                    $characters_query->next_post();
                    ?>
                </div>
                <div class="other-characters">
                    <?php
                    while ( $characters_query->have_posts() ) {
                        $characters_query->the_post();
                        echo '<figure>';
                        echo get_the_post_thumbnail( get_the_ID(), 'full' );
                        echo '<figcaption>';
                        the_title();
                        echo'</figcaption>';
                        echo '</figure>';
                    }
                    ?>
                </div>
            </article> -->
