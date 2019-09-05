<?php
    // echo "<pre>",print_r($_POST['id'], true),"</pre>";

// var_dump($_POST['id']);
// var_dump($_POST['name']);
// var_dump($_POST['image_url']);
// var_dump($_POST['genre']);die;

$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$request = $connec->prepare("UPDATE `album`
SET name = :name,
image = :image,
genre = :genre
WHERE album.id = :id");

$request->execute([
  ":name" => $_POST['name'],
  ":image" => $_POST['image_url'],
  ":genre" => $_POST['genre'],
  ":id" => $_POST['id']
]);

header("Location: /profile.php");
