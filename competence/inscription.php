
<?php 
require("config.php"); 

  //session_start();
  /*if(!isset($_SESSION['nom'])){
    header('Location: ../index.php');
  }*/
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forlulaire</title>
    <link rel="stylesheet" href="../adhesion/static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../adhesion/static/css/style.css">
    <style>
        fieldset input{
            margin-left: 15px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
        <div class="form-container mx-auto" style="max-width: 700px;">
            <h2 class="text-center mb-4">Ajouter un Etudiant  </h2>

            <?php if(isset($error)){echo '<p class="text-center alert alert-danger">' . $error . '</p>';}?>

            <form action="" method="post">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" required value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" required value="<?php if(isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="matricule" class="form-label">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matricule" required value="<?php if(isset($_POST['matricule'])){echo $_POST['matricule'];} ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control" id="age" name="age" required value="<?php if(isset($_POST['age'])){echo $_POST['age'];} ?>">
                    </div>
                </div>

                

                <div class="mt-5 mb-4">
                    <fieldset>
                        <h5>Langues parlés</h5>
                        <input type="checkbox" name="langue[]" id="Français" value="Français">
                        <label for="Français" class="">Français</label>

                        <input type="checkbox" name="langue[]" id="Anglais" value="Anglais">
                        <label for="Anglais" class="form-label">Anglais</label>

                        <input type="checkbox" name="langue[]" id="Espayol" value="Espayol">
                        <label for="Espayol" class="form-label">Espayol</label>

                        <input type="checkbox" name="langue[]" id="Lantin" value="Lantin">
                        <label for="Lantin" class="form-label">Lantin</label>

                        <input type="checkbox" name="langue[]" id="Yoruba" value="Yoruba">
                        <label for="Yoruba" class="form-label">Yoruba</label>
                    </fieldset>
                </div>

                <div class="mt-5 mb-4">
                    <fieldset>
                        <h5>Compétences</h5>
                        <input type="checkbox" name="competence[]" id="html" value="HTML">
                        <label for="html" class="">HTML</label>

                        <input type="checkbox" name="competence[]" id="css" value="CSS">
                        <label for="css" class="form-label">CSS</label>

                        <input type="checkbox" name="competence[]" id="js" value="JS">
                        <label for="js" class="form-label">JS</label>

                        <input type="checkbox" name="competence[]" id="php" value="PHP">
                        <label for="php" class="form-label">PHP</label>

                        <input type="checkbox" name="competence[]" id="python" value="PYTHON">
                        <label for="python" class="form-label">PYTHON</label>
                    </fieldset>
                </div>

                
                <button type="submit" class="btn btn-primary w-100" name="submit">Envoyer</button>
            </form>
        </div>
    </div>

    <script src="../adhesion/static/js/bundle.min.js"></script>
    <script src="../adhesion/static/js/script.js"></script>
</body>
</html>