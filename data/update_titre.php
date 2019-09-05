<?php
    // echo "<pre>",print_r($_POST['id'], true),"</pre>";

// var_dump($_POST['id']);
// var_dump($_POST['name']);
// var_dump($_POST['author']);
// var_dump($_POST['feat']);
// var_dump($_POST['album']);
// var_dump($_POST['lyrics']);
// var_dump($_POST['image_url']);
// var_dump($_POST['genre']);die;
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$request = $connec->prepare("UPDATE `titre`
SET name = :name,
author = :author,
feat = :feat,
album = :album,
lyrics = :lyrics,
image = :image,
genre = :genre
WHERE titre.id = :id");

$request->execute([
  ":name" => $_POST['name'],
  ":author" => $_POST['author'],
  ":feat" => $_POST['feat'],
  ":album" => $_POST['album'],
  ":lyrics" => $_POST['lyrics'],
  ":image" => $_POST['image_url'],
  ":genre" => $_POST['genre'],
  ":id" => $_POST['id']
]);

header("Location: /profile.php");
