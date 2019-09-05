<section>
    <h2>Titre</h2>
    <hr>

    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($allTitre as $key => $titre) : ?>
                <div class="swiper-slide">
                    <h3><?= $titre['name'] ?>
                        <span 
                            class="badge badge-primary" 
                            style="background:<?= $titre['genre_color_bck']?>"
                        >
                            <?= $titre['genre_name'] ?>
                        </span>
                    </h3>
                    <img class="swiper-slide__image--titre" src="<?= $titre['image'] ?>" alt="" srcset="">
                    <h3><?= $titre['author'] ?> <span><?php if($titre['feat']) echo('feat ' . $titre['feat']) ?></span></h3>
                </div>
            <?php endforeach ?>
        </div>

        <!-- If we need pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- If we need navigation buttons -->
        <!-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->

        <!-- If we need scrollbar -->
        <!-- <div class="swiper-scrollbar"></div> -->
    </div>
</section>