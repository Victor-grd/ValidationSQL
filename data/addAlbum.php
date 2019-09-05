<?php
//var_dump($_POST['name']);
//var_dump($_POST['image']);
//var_dump($_POST['genre']);
//var_dump($_POST['author']);die;
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$request = $connec->prepare("INSERT INTO `album` (name,image,genre, author) 
        VALUES(:name, :image, :genre, :author)");
        $request->execute([
        ":name" => $_POST['name'],
        ":image" => $_POST['image'],
        ":genre" => $_POST['genre'],
        ":author" => $_POST['author'],
    ]);
    header("Location: /index.php");