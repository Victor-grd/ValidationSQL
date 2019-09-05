<?php 

// var_dump($_POST['name']);
// var_dump($_POST['image_url']);
// var_dump($_POST['genre']);
// var_dump($_POST['login']);
// var_dump($_POST['password']);die;

$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$request = $connec->prepare("INSERT INTO `artiste` (name, image, genre, login, password) 
        VALUES(:name, :image, :genre, :login, :password)");
        $request->execute([
        ":name" => $_POST['name'],
        ":image" => $_POST['image_url'],
        ":genre" => $_POST['genre'],
        ":login" => $_POST['login'],
        ":password" => $_POST['password'],
    ]);
    header("Location: /index.php");