
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
    <title>Forlulaire</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
<div class="container mt-5">
        <div class="form-container mx-auto" style="max-width: 700px;">
            <h2 class="text-center mb-4">Ajouter un player</h2>

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
                        <label for="date_naissance" class="form-label">Date de naissance</label>
                        <input type="date" class="form-control" id="date_naissance" name="naissance" required value="<?php if(isset($_POST['naissance'])){echo $_POST['naissance'];} ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="telephone" class="form-label">Numéro de téléphone</label>
                        <input type="number" class="form-control" id="telephone" name="telephone" required value="<?php if(isset($_POST['telephone'])){echo $_POST['telephone'];} ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse</label>
                    <input type="text" class="form-control" id="adresse" name="adresse" required value="<?php if(isset($_POST['adresse'])){echo $_POST['adresse'];} ?>">
                </div>

                <div class="mb-3">
                    <label for="mail" class="form-label">Adresse e-mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" required value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>">
                </div>

                <div class="mb-3">
                    <label for="profession" class="form-label">Profession</label>
                    <select class="form-select" id="profession" name="profession" required value="<?php if(isset($_POST['profession'])){echo $_POST['profession'];} ?>">
                        <option value="" selected disabled>Choisissez...</option>
                        <option value="Étudiant">Étudiant</option>
                        <option value="Employé">Employé</option>
                        <option value="Entrepreneur">Entrepreneur</option>
                        <option value="Retraité">Retraité</option>
                        <option value="Autres">Autres (préciser)</option>
                    </select>
                    <!-- Champ caché pour préciser "Autres" -->
                    <input type="text" class="form-control mt-2" id="profession_autre" name="profession_autre" placeholder="Précisez si autres" style="display: none;">
                </div>

                <div class="mb-3">
                    <label for="centres_interet" class="form-label">Centres d'intérêt</label>
                    <select class="form-select" id="centres_interet" name="interet[]" multiple required value="<?php if(isset($_POST['interet'])){echo $_POST['interet'];} ?>">
                        <option value="Échecs">Échecs</option>
                        <option value="Sports">Sports</option>
                        <option value="Technologie">Technologie</option>
                        <option value="Musique">Musique</option>
                        <option value="Arts">Arts</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="niveau_jeu" class="form-label">Niveau de jeu</label>
                    <select class="form-select" id="niveau_jeu" name="niveau" required value="<?php if(isset($_POST['niveau'])){echo $_POST['niveau'];} ?>">
                        <option value="" selected disabled>Choisissez...</option>
                        <option value="Débutant">Débutant</option>
                        <option value="Intermédiaire">Intermédiaire</option>
                        <option value="Avancé">Avancé</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="motivations" class="form-label">Motivations</label>
                    <textarea class="form-control" id="motivations" name="motivations" rows="4" required value="<?php if(isset($_POST['motivations'])){echo $_POST['motivations'];} ?>"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100" name="submit">Envoyer</button>
            </form>
        </div>
    </div>

    <script src="static/js/bundle.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>