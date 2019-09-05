<?php 
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$allArtiste = $connec->prepare('SELECT
    genre.name AS genre,
    artiste.name, artiste.image, artiste.id
    FROM artiste 
    JOIN genre ON artiste.genre=genre.id
    ORDER BY artiste.created_at DESC
');
   
    $allArtiste->execute();
    $allArtiste = $allArtiste->fetchAll();