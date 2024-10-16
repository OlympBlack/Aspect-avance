<?php
ob_start();
require('db.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['mail']) AND !empty($_POST['password'])){

        //recuperation des donnees du formulaire
        //$mail = htmlspecialchars($_POST['mail']);
        $password = ($_POST['password']);

        //selection des informations depuis la base de donnees
        $selection = $db->query('SELECT * FROM utilisateur WHERE mail="' . $_POST['mail'] . '"');
        $row = $selection->fetch(PDO::FETCH_OBJ);

        if($row){
            if($password == $row->password){
                //echo "Connexion etablie";
                //session_start();
                $_SESSION['nom'] = $row->nom;
                header('Location: acceuil.php');
                //exit(); 
            }else{
                $error = "Mot de passe incorrect";
            }
        }else{
            $error = "Utilisateur non trouvé";
        }
    }else{
        $error = "Veuillez fournir toutes les informations";
    }
}

ob_end_flush(); // Libérer le tampon de sortie et envoyer tout contenu restant

?>