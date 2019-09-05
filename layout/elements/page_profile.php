<section class="content profile">

    <!-- Liste des albums de l'artiste connecté -->

    <div class="profile__albums">
        <h3>Albums</h3>
        <?php foreach ($albumsUser as $key => $albumUser) : ?>
            <div class="profile-album__item">
                <div class="profile-album__infos">
                    <img class="profile-album__image" src="<?= $albumUser['image'] ?>" alt="">
                    <div>
                        <h3><?= $albumUser['name'] ?></h3>
                        <?php// var_dump($albumUser) ?>
                        <span 
                          class="badge badge-primary" 
                          style="background:<?= $albumUser['genre_color_bck']?>"
                        >
                          <?= $albumUser['genre_name'] ?>
                        </span>
                    </div>
                </div>
                <div class="profile-album__actions">
                    <button 
                       type="button" 
                       class="btn btn-info btn-action" 
                       data-id="<?= $albumUser['album_id'] ?>"
                       data-name="<?= $albumUser['name'] ?>"
                       data-image="<?= $albumUser['image'] ?>"
                       data-genre="<?= $albumUser['genre'] ?>"
                       data-toggle="modal" 
                       data-target="#modalAlbum"
                    >
                      Edit
                    </button>
                    <form method="post" action="./data/deleteAlbum.php">
                        <input type="hidden" name="id" value="<?= $albumUser['album_id'] ?>">
                        <input type="submit" class="btn btn-danger btn-action" value="Delete">
                    </form>
                </div>
            </div>
            <hr>
        <?php endforeach ?>
    </div>


    <!-- Liste des titres de l'artiste connecté -->

    <div class="profile__titres">
        <h3>Titre</h3>
        <?php foreach ($titresUser as $key => $titreUser) : ?>
            <div class="profile-album__item">
                <div class="profile-album__infos">
                    <img class="profile-album__image" src="<?= $titreUser['image'] ?>" alt="">
                    <div>
                        <h3><?= $titreUser['name'] ?></h3>
                        <span 
                          class="badge badge-primary" 
                          style="background:<?= $titreUser['genre_color_bck']?>"
                        >
                          <?= $titreUser['genre_name'] ?>
                        </span>
                    </div>
                </div>
                <div class="profile-album__actions">
                    <button 
                        type="button" 
                        class="btn btn-info btn-action" 
                        data-id="<?= $titreUser['id'] ?>"
                        data-id="<?= $titreUser['id'] ?>" 
                        data-name="<?= $titreUser['name'] ?>" 
                        data-feat="<?= $titreUser['feat'] ?>" 
                        data-album="<?= $titreUser['album'] ?>" 
                        data-lyrics="<?= $titreUser['lyrics'] ?>" 
                        data-image="<?= $titreUser['image'] ?>" 
                        data-genre="<?= $titreUser['genre'] ?>"  
                        data-toggle="modal" 
                        data-target="#modalTitre"
                    >
                        Edit
                    </button>
                    <form method="post" action="./data/deleteTitre.php">
                        <input type="hidden" name="id" value="<?= $titreUser['id'] ?>">
                        <input type="submit" class="btn btn-danger btn-action" value="Delete">
                    </form>
                </div>
            </div>
            <hr>
        <?php endforeach ?>
    </div>

    <!-- Onglets d'ajout de titre/album -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#home">add album</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#profile">add titre</a>
        </li>
    </ul>

    <!-- Formulaire d'ajout de titre/album -->
    <div id="myTabContent" class="tab-content">
        <!-- Formulaire d'ajout de titre/album -->

        <!-- debut d'onglet 1 -->
        <div class="tab-pane fade" id="home">
            <div>
                <form method="post" action="./data/addAlbum.php" class="card-body">
                    <input type="text" class="form-control" placeholder="Name"  name="name" >
                    <input type="text" class="form-control" placeholder="Image" name="image">
                    <select class="form-control" name="genre">
                        <?php foreach ($allGenre as $key => $genre) : ?>
                            <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="hidden" name="author" value="<?= $_SESSION["user"]['id'] ?>">
                    <input type="submit" class="btn btn-secondary" value="add">
                </form>
            </div>
        </div>
        <!-- Fin d'onget 1 -->

        <!-- debut d'onglet 2 -->
        <div class="tab-pane fade active show" id="profile">
            <div>
                <form method="post" action="./data/addTitre.php" class="card-body">
                    <input type="text" class="form-control" placeholder="Name" name="name">
                    <select class="form-control" name="feat">
                        <option value="">-</option>
                        <?php foreach ($allArtiste as $key => $artiste) : ?>
                            <option value="<?= $artiste['id'] ?>"><?= $artiste['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <select class="form-control" name="album">
                        <option value="">-</option>
                        <?php foreach ($albumsUser as $key => $albumUser) : ?>
                            <option value="<?= $albumUser['album_id'] ?>"><?= $albumUser['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="text" class="form-control" placeholder="Lyrics" name="lyrics" >
                    <input type="text" class="form-control" placeholder="Image Url" name="image_url" >
                    <select class="form-control" name="genre">
                        <?php foreach ($allGenre as $key => $genre) : ?>
                            <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="hidden" name="author" value="<?= $_SESSION["user"]['id'] ?>">
                    <input type="submit" class="btn btn-secondary" value="add">
                </form>
            </div>
        </div>
        <!-- Fin d'onget 2 -->
    </div>
</section>






<!-- Modal album -->
<div class="modal fade" id="modalAlbum" tabindex="-1" role="dialog" aria-labelledby="modalAlbum" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="./data/update_album.php" class="card-body">
            <input type="hidden" name="id">
            <input type="text" class="form-control" placeholder="Name"  name="name" value="">
            <input type="text" class="form-control" placeholder="Image" name="image_url">
            <select class="form-control" name="genre">
                <?php foreach ($allGenre as $key => $genre) : ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                <?php endforeach ?>
            </select>
            <input type="hidden" name="author" value="<?= $_SESSION["user"]['id'] ?>">
            <input type="submit" class="btn btn-secondary" value="add">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal titre -->
<div class="modal fade" id="modalTitre" tabindex="-1" role="dialog" aria-labelledby="modalTitre" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="./data/update_titre.php" class="card-body">
            <input type="hidden" name="id">
            <input type="hidden" name="author" value="<?= $_SESSION["user"]['id'] ?>">

            <input type="text" class="form-control" placeholder="Name" name="name">
            <select class="form-control" name="feat">
                <option value="">-</option>
                <?php foreach ($allArtiste as $key => $artiste) : ?>
                    <option value="<?= $artiste['id'] ?>"><?= $artiste['name'] ?></option>
                <?php endforeach ?>
            </select>
            <select class="form-control" name="album">
                <option value="">-</option>
                <?php foreach ($albumsUser as $key => $albumUser) : ?>
                    <option value="<?= $albumUser['album_id'] ?>"><?= $albumUser['name'] ?></option>
                <?php endforeach ?>
            </select>
            <input type="text" class="form-control" placeholder="Lyrics" name="lyrics" >
            <input type="text" class="form-control" placeholder="Image Url" name="image_url" >
            <select class="form-control" name="genre">
                <?php foreach ($allGenre as $key => $genre) : ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                <?php endforeach ?>
            </select>
            <input type="hidden" name="author" value="<?= $_SESSION["user"]['id'] ?>">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>