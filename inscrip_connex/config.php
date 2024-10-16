<?php
require('../db.php');

if(isset($_POST['submit'])){
    //verifier si un champ est vide
    if(!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['password1'])  && !empty($_POST['password2'])){

        //recuperer des donnees de l'utilisateur
        $nom = htmlspecialchars($_POST['nom']);
        $mail = htmlspecialchars($_POST['mail']);
        $password1 = htmlspecialchars($_POST['password1']);
        $password2 = ($_POST['password2']);

        //verifier si les deux mot de passe sont les memes
        if($password1 !== $password2){
            $error = "les deux mots de passe sont différents";
        }else{
            $selection = $db->query('SELECT * FROM utilisateur WHERE mail=mail');
            $row = $selection->fetch(PDO::FETCH_OBJ);

            if($row){
                 //inserer les donnees dans lan base de donnees
                 $insert = $db->prepare('INSERT INTO utilisateur(nom, mail, password)
                 VALUES (?, ?, ?)');
                 $insert->execute(array($nom, $mail, $password1));
 
                 //les sessions
                 $_SESSION['nom'] = $nom;
 
                 header('Location: ../acceuil.php');
            }else{
                $error = "L'utilisateur" . ' ' . $mail . " exixite déjà";
               
            }
            
        }

    }else{
        $error = "Veuillez remplir tous les champs";
    }
}

//selection des donnees depuis la base de donnees
$select = $db->prepare('SELECT * FROM utilisateur');
$select->execute();
$resultats = $select->fetchAll(PDO::FETCH_OBJ);

?>