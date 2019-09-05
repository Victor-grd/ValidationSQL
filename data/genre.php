<?php 
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

$allGenre = $connec->prepare('SELECT
    genre.id, genre.name, genre.color_text, genre.color_bck
    FROM genre');
   
    $allGenre->execute();
    $allGenre = $allGenre->fetchAll();

    //CREATE
    //TRIGGER name BEFORE INSERT
    //ON table
    //FOR EACH ROW BEGIN
    //    INSERT INTO name VALUE ('value')