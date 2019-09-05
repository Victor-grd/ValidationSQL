<section>
    <h2>Album</h2>
    <hr>
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach ($allAlbum as $key => $album) : ?>
                <div class="swiper-slide">
                    <h3><?= $album['name'] ?></h3>
                    <img class="swiper-slide__image--album" src="<?= $album['image'] ?>" alt="" srcset="">
                    <h3><?= $album['author'] ?></h3>
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