<?php
session_start();
try{
    $db = new PDO('mysql:host=localhost; dbname=ifri_aspect; charset=utf8', 'root', '' );
}catch(Exception $e){
    die("Une erreur s'est produite " . $e);
}

?>