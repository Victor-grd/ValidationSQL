<?php 
   $connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');

   $allTitre = $connec->prepare('SELECT *,
      genre.name AS genre_name,
      genre.color_bck AS genre_color_bck,
      genre.color_text AS genre_color_text,
      titre.name AS name
      FROM titre 
      LEFT JOIN genre ON titre.genre=genre.id 
      ORDER BY created_at DESC');
   
    $allTitre->execute();
    $allTitre = $allTitre->fetchAll();

    // SELECT
    // genre.name AS genre,
    // album.name AS album,
    // artiste.name AS author,
    // artiste.name AS feat,
    // titre.name, titre.image
    // FROM titre 

    // JOIN genre ON titre.genre=genre.id
    // JOIN album ON titre.album=album.id
    // LEFT JOIN artiste ON titre.author=artiste.id AND titre.feat=artiste.id

    // LIMIT 10