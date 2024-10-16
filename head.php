
<?php
//require('config.php');
if($_SESSION['nom']){
  $nom = $_SESSION['nom'];
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .navbar-custom {
            background-color: #343a40;
            color: white;
        }
        
        .navbar-custom .navbar-brand {
            color: white;
        }

        .navbar-custom .nav-link {
            color: white;
        }

        .custom-box {
            background-color: #f8f9fa;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img{
            border-radius: 25px;
        }
        .deconnecter{
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom bg-primary">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <!-- Logo de gauche -->
            <img src="static/img/logo-ifri.png" alt="Logo Gauche" width="80" height="50">
        </a>
        <div class="mx-auto">
            <span class="navbar-text fs-4"> Utilisateur connecté: <strong><?php echo $nom; ?></strong></span>
        </div>
        <form action="loug-out.php" class="deconnecter">
            <input type="submit" value="Déconnecter">
        </form>
        <a class="navbar-brand" href="#">
            <!-- Logo de droite -->
            <img src="static/img/moi.jpg" alt="Logo Droit" width="60" height="50">
        </a>
        </div>
    </nav>