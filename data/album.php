<?php 
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$allAlbum = $connec->prepare('SELECT
    genre.name AS genre,
    artiste.name AS author,
    album.name, album.image
    FROM album 
    LEFT JOIN artiste ON album.author =  artiste.id
    LEFT JOIN genre ON album.genre = genre.id
    ORDER BY album.created_at DESC');
   
    $allAlbum->execute();
    $allAlbum = $allAlbum->fetchAll();