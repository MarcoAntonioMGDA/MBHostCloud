<?php
if ( isset( $_GET["path"] ) ) {

    switch ( $_GET["path"] ) {
        case "home":
        $PageName = "Inicio";
        $PageLocation = "pages/home.php";
        break;
        case "OswaldoP":
        $PageName = "Planes Programador | Código OswaldoP";
        $PageLocation = "pages/developer.php";
        break;
        default:
        $PageName = "Página no encontrada";
        $PageLocation = "pages/404.php";
    }
} else {
    $PageName = "Inicio";
    $PageLocation = "pages/home.php";
}
$FBLink = "https://www.facebook.com/MBHostCloud";
$TWLink = "https://twitter.com/MarbustTech";
$WALink = "https://api.whatsapp.com/send?phone=593963422236&text=%C2%A1Hola,%20te%20visito%20desde%20el%20sitio%20web%20de%20*MBHostCloud*%20%C2%A1Me%20gustar%C3%ADa%20tus%20servicios%20o%20productos!";
$PHLink = "tel:+593963422236";
$IGLink = "https://www.instagram.com/marbusttechnology/";
$YTLink  = "https://www.youtube.com/channel/UCdVLdxEW8STQq-IP8HTndag/";
$ELink = "mailto:support@mbhostcloud.xyz";

?>