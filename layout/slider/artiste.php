<section>
    <h2>Artiste</h2>
    <hr>

    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($allArtiste as $key => $artiste) : ?>
                <div class="swiper-slide">
                    <h3><?= $artiste['name'] ?></h3>
                    <img class="swiper-slide__image--artiste" src="<?= $artiste['image'] ?>" alt="" srcset="">
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