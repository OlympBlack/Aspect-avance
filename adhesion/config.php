<?php
session_start();
try{
    $db = new PDO('mysql:host=localhost; dbname=ifri_aspect; charset=utf8', 'root', '' );
}catch(Exception $e){
    die("Une erreur s'est produite " . $e);
}

if(isset($_POST['submit'])){
    //verifier si un champ est vide
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['naissance']) && !empty($_POST['telephone']) && !empty($_POST['adresse'])
    && !empty($_POST['mail']) && !empty($_POST['profession']) && !empty($_POST['interet'])  && !empty($_POST['motivations'])){

        //recuperer des donnees de l'utilisateur
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $naissance = htmlspecialchars($_POST['naissance']);
        $telephone = htmlspecialchars($_POST['telephone']);
        $mail = htmlspecialchars($_POST['mail']);
        $adresse = htmlspecialchars($_POST['adresse']);
        $professsion = htmlspecialchars($_POST['profession']);
        $interets = ($_POST['interet']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $motivations = htmlspecialchars($_POST['motivations']);

        //recuperer le champ interet
        foreach($interets as $interet){
            $int = $int . ',' . $interet;
            //$int = $interet . ',';
        }
        //var_dump($int);


        //inserer les donnees dans lan base de donnees
        $insert = $db->prepare('INSERT INTO adhesion(nom, prenom, naissance, telephone, mail, adresse, profession, interet, niveau, motivations)
                 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        $insert->execute(array($nom, $prenom, $naissance, $telephone, $mail, $adresse, $professsion, $int, $niveau, $motivations));

        //les sessions
        //$_SESSION['nom'] = $nom;
        //$_SESSION['prenom'] = $prenom;

        header('Location: index.php');
    }else{
        $error = "Veuillez remplir tous les champs";
    }
}

//selection des donnees depuis la base de donnees
$select = $db->prepare('SELECT * FROM adhesion');
$select->execute();
$resultats = $select->fetchAll(PDO::FETCH_OBJ);
      
?>