<?php
    if(empty($_SESSION['login'])){
        header('Location: ?p=home');
    }
?>