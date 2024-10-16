
<?php require("config.php"); 

  //session_start();
  if(!isset($_SESSION['nom'])){
    header('Location: ../index.php');
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des etudiants</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #42e194;
        }
        .table-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            margin-left: 11%;
            margin-top: 45px;
        }
        h2 {
            color: #343a40;
        }
        table {
            width: 100%;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        h2 a{
            margin-left: 65%;
            color: green;
            /*font-family: arial;*/
        }
        .print-btn {
            margin-top: 20px;
            text-align: right;
        }
        .print-btn button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .print-btn button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<?php 
    //require('../head.php');
 ?>
    <div class="container mt-5">
        <div class="table-container mx-auto " style="max-width: 1200px;">

<p><a href="../acceuil.php">Revenir à l'acceuil</a></p>

            <h2 class="text-center mb-4">Liste des Etudiants  <a href="inscription.php">Ajouter un etudiant</a></h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Matricule</th>
                        <th>Age</th>
                        <th>Langues</th>
                        <th>Compétences</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $etudiant): ?>
                    <tr>
                        <td><?=  ($etudiant->id); ?></td>
                        <td><?=  ($etudiant->nom  ); ?></td>
                        <td><?=  ($etudiant->prenom); ?></td>
                        <td><?=  ($etudiant->matricule); ?></td>
                        <td><?=  ($etudiant->age  ); ?></td>
                        <td><?=  ($etudiant->langue); ?></td>
                        <td><?=  ($etudiant->competence); ?></td>
                    
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="print-btn">
                <button id="imprimer">Imprimer</button>
            </div>
        </div>
    </div>

<script src="../static/js/imprimer.js"></script>

</body>
</html>