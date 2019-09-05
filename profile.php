<?php 
include_once('./layout/header.php');
include_once('./data/connexion/connexion.php');

if(isset($_SESSION["user"])){
    include_once('./layout/elements/user.php');
    include_once('./layout/elements/page_profile.php');
} else {
    include_once('./layout/elements/page_error.php');
}

include_once('./layout/footer.php')?>
