<?php
// var_dump($_POST['name']);
// var_dump($_POST['feat']);
// var_dump($_POST['album']);
// var_dump($_POST['lyrics']);
// var_dump($_POST['image_url']);
// var_dump($_POST['author']);
// var_dump($_POST['genre']);die;

$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$request = $connec->prepare("INSERT INTO `titre` (name,feat,album,lyrics,image,genre, author) 
    VALUES(:name, :feat, :album, :lyrics, :image, :genre, :author)");

    $request->execute([
    ":name" => $_POST['name'],
    ":feat" => $_POST['feat'],
    ":album" => $_POST['album'],
    ":lyrics" => $_POST['lyrics'],
    ":image" => $_POST['image_url'],
    ":genre" => $_POST['genre'],
    ":author" => $_POST['author'],
]);

header("Location: /");