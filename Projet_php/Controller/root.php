<?php

$page = isset($_GET['page']) ? $_GET(['page']) : 'accueil';

switch($page){
    case 'accueil' :
        include_once 'View/accueil.php';
        break;
    case 'affiche' :
        include_once 'View/affiche.php';
        break;
    case 'us' : 
        include_once 'View/us.php';
        break;
    default : 
        include_once 'View/404.php';
        break;
}