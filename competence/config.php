<?php
require('../db.php');

if(isset($_POST['submit'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['matricule']) AND !empty($_POST['competence']) AND !empty($_POST['langue']) AND !empty($_POST['competence']) AND !empty($_POST['age'])){
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $matricule = htmlspecialchars($_POST['matricule']);
        $age = htmlspecialchars($_POST['age']);
        $competences = ($_POST['competence']);
        $langues = ($_POST['langue']);

        $comp = ' ';
        $lang = ' ';
        foreach($competences as $competence){
            $comp = $comp . ',' . $competence;
        }

        foreach($langues as $langue){
            $lang = $lang . ',' . $langue;
        }

        //insertin des donnees
        $insert = $db->prepare('INSERT INTO competence(nom, prenom, age, matricule, competence, langue) VALUES (?, ?, ?, ?, ?, ?)');
        $insert->execute(array($nom, $prenom, $age, $matricule, $comp, $lang));

        header('Location: index.php');

    }else{
        $error = "veuillez remplir tous les champs";
    }
}

//selection des donnees depuis la base de donnees
$selection = $db->prepare('SELECT * FROM competence');
$selection->execute();

$resultats = $selection->fetchAll(PDO::FETCH_OBJ);
?>