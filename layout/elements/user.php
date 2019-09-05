<section class="user">
    <img class="user__image" src="<?= $_SESSION["user"]['image'] ?>" alt="" srcset="">
    <h2 class="user__name"><?= $_SESSION["user"]['name'] ?></h2>
    <div class="user__actions">
        <button type="button" class="badge badge-info" data-toggle="modal" data-target="#exampleModal">Edit</button>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?= $_SESSION["user"]['id'] ?>">
            <button type="submit" class="badge badge-danger">Delete</button>
        </form>
    </div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="./data/update_user.php" class="form-group">
        <div class="modal-body">
            <input type="hidden" name="id" value="<?= $_SESSION["user"]['id'] ?>">

            <label class="col-form-label" for="inputDefault">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="<?= $_SESSION["user"]['name'] ?>">
            <label class="col-form-label" for="inputDefault">Image Url</label>
            <input type="text" name="image_url" class="form-control" placeholder="http://www.image..." value="<?= $_SESSION["user"]['image'] ?>">
            <label for="exampleSelect1">Genre</label>
            <select class="form-control" name="genre" value="<?= $_SESSION["user"]['genre'] ?>">
                <?php foreach ($allGenre as $key => $genre) : ?>
                    <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
                <?php endforeach ?>
            </select>
            <label class="col-form-label" for="inputDefault">Login</label>
            <input type="text" name="login" class="form-control" placeholder="Login" value="<?= $_SESSION["user"]['login'] ?>">
            <label class="col-form-label" for="inputDefault">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?= $_SESSION["user"]['password'] ?>">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save changes</button>
         </div>
        </form>
    </div>
  </div>
</div>