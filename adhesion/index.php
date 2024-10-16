
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
    <title>Document</title>
    <style>
        body {
            background-color: #42e194;
        }
        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            margin-left: 4%;
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
            margin-left: 73%;
            color: green;
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
    <div class="container mt-5">
        <div class="table-container mx-auto" style="max-width: 1400px;">
<p><a href="../acceuil.php">Revenir à l'acceuil</a></p>

            <h2 class="text-center mb-4">Liste des player <a href="inscription.php">Ajouter un player</a></h2>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Numéro de téléphone</th>
                        <th>Adresse</th>
                        <th>Profession</th>
                        <th>Interet</th>
                        <th>Niveau</th>
                        <th>Motivations</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultats as $utilisateur): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($utilisateur->id); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->nom); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->prenom); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->mail); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->telephone); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->adresse); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->profession); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->interet); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->niveau); ?></td>
                        <td><?php echo htmlspecialchars($utilisateur->motivations); ?></td>

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