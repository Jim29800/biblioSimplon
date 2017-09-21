<?php
if(!empty($_SESSION["login"])){
    //le code pour la modification ici





}else{
    //redirige la personne sur l'index si elle n'est pas connecté
    header("Location: index.php");
}