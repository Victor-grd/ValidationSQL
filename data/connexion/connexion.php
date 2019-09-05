<?php
    $connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

    // GET USER
    if(isset($_POST['login']) && isset($_POST['password'])){
        $user = $connec->prepare('SELECT * FROM artiste
            WHERE `login` = :login AND `password` = :password
        ');
        
        $user->execute(
            array(
                ':login' => $_POST['login'],
                ':password' => $_POST['password']
            )
        );
        $user = $user->fetch();

        if (!$user) {
            session_destroy();
        } else {
            $_SESSION["user"]=$user;
        }
    }

    if (isset($_SESSION["user"])) {
        // GET ALBUMS
        $albumsUser = $connec->prepare('SELECT *,
            genre.id AS genre_id,
            genre.name AS genre_name,
            genre.color_bck AS genre_color_bck,
            genre.color_text AS genre_color_text,
            album.name AS name,
            album.id AS album_id
            FROM album
            LEFT JOIN genre ON album.genre = genre.id 
            WHERE author = :author
        ');
        $albumsUser->execute(
        array(
            ':author' => $_SESSION['user']['id'],
        )
        );
        $albumsUser = $albumsUser->fetchAll();

        // GET TITRES
        $titresUser = $connec->prepare('SELECT *,
        genre.id AS genre,
        genre.name AS genre_name,
        genre.color_bck AS genre_color_bck,
        genre.color_text AS genre_color_text,
        titre.name AS name,
        titre.image AS image,
        titre.id as id
        FROM titre
        LEFT JOIN genre ON titre.genre = genre.id
        LEFT JOIN album ON titre.album = album.id
       
        WHERE titre.author = :author
        ');
        $titresUser->execute(
        array(
            ':author' => $_SESSION['user']['id'],
        )
        );
        $titresUser = $titresUser->fetchAll();
    };
