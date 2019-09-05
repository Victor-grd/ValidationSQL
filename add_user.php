<?php include_once('./layout/header.php') ?>
<div class="jumbotron">
  <h1 class="display-3">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">

    <form method="post" action="./data/connexion/add_user.php" class="form-group">
        <label class="col-form-label" for="inputDefault">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
        <label class="col-form-label" for="inputDefault">Image Url</label>
        <input type="text" name="image_url" class="form-control" placeholder="http://www.image...">
        <label for="exampleSelect1">Example select</label>
        <select class="form-control" name="genre">
            <?php foreach ($allGenre as $key => $genre) : ?>
                <option value="<?= $genre['id'] ?>"><?= $genre['name'] ?></option>
            <?php endforeach ?>
        </select>
        <label class="col-form-label" for="inputDefault">Login</label>
        <input type="text" name="login" class="form-control" placeholder="Default">
        <label class="col-form-label" for="inputDefault">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Default">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once('./layout/footer.php') ?>  
