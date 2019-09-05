<section>
    <h2>Genres</h2>
    <hr>
    <div class="content_genre">
        <?php foreach ($allGenre as $key => $genre) : ?>
            <div class="genre-item" style="background-color:<?= $genre['color_bck'] ?>">
                <h3 style="color:<?= $genre['color_text'] ?>"><?= $genre['name'] ?></h3>
            </div>
        <?php endforeach ?>
    </div>
</section>