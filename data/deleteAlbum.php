<?php
$connec = new PDO('mysql:dbname=shop;charset=UTF8', 'victor', 'password01100');
$delete = $connec->prepare("DELETE FROM `album` WHERE id =  :id");
$delete->execute([
    ":id" => $_POST['id'],
]);
header("Location: /profile.php");