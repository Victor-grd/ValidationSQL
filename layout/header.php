<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/swiper.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/profile.css">
    
    <!-- js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Shop</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="test">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/titre.php">titre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/artiste.php">artiste</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/album.php">albums</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/genre.php">genres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile.php">Profile</a>
                </li>
            </ul>
            <?php if (!isset($_SESSION['user'])) : ?>
                <form method="post" action="./profile.php" class="form-inline my-2 my-lg-0">
                    <input name="login"class="form-control mr-sm-2" type="text" placeholder="login">
                    <input name="password" class="form-control mr-sm-2" type="password" placeholder="password">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">login</button>
                </form>
                <a class="btn btn-secondary my-2 my-sm-0" href="add_user.php">sign up</a>
            <?php else :?>
                <form method="post" action="./data/connexion/deconnexion.php" class="form-inline my-2 my-lg-0">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Déconnexion</button>
                </form>
            <?php endif ?>
        </div>
    </nav>
    <?php ?>
    <?php include_once('./data/album.php') ?> 
    <?php include_once('./data/artiste.php') ?>  
    <?php include_once('./data/titre.php') ?>  
    <?php include_once('./data/genre.php')?> 