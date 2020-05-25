<?php
if(!isset($_GET["p"])) {

    require_once "files/header.php";
    require_once "files/accueil.php";
    require_once "files/footer.php";
}
else {
    $p= $_GET['p'];
    require_once "files/header.php";
    switch ($p){
        case "accueil":
            require_once "files/accueil.php";
            break;
        case "contact":
            require_once "files/contact.php";
            break;
        case "raccordement":
            require_once "files/raccordement.php";
            break;
        case "fossesseptiques":
            require_once "files/fosses-septiques.php";
            break;
        case "ministationepuration":
            require_once "files/mini-station-epuration.php";
            break;
        case "fondations":
            require_once "files/fondations.php";
            break;
        case "fosses":
            require_once "files/fosses.php";
            break;
        case "drainage":
            require_once "files/drainage.php";
            break;
        case "recuperationeaudepluie":
            require_once "files/recuperation-eau-de-pluie.php";
            break;
        case "demolition":
            require_once "files/demolition.php";
            break;
        case "piscines":
            require_once "files/piscines.php";
            break;
        default:
            require_once "files/404.php";
    }

    require_once "files/footer.php";
}
