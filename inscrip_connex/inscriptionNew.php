

<?php require("configAjoutNew.php"); 

  /*session_start();
  if(!isset($_SESSION['nom'])){
    header('Location: ../index.php');
  }*/
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css">
    <link rel="stylesheet" href="../static/css/style.css">
</head>
<body>
<div class="container mt-5">
        <div class="form-container mx-auto" style="max-width: 640px;">
            <h2 class="text-center mb-4">Ajouter nouveau User</h2>

            <?php if(isset($error)){echo '<p class="text-center alert alert-danger">' . $error . '</p>';}?>


            <form action="" method="post">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" required value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];} ?>">
                </div>

                <div class="mb-3">
                    <label for="mail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" required value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>">
                </div>

                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1" name="password1" required  value="<?php if(isset($_POST['password1'])){echo $_POST['password1'];} ?>">
                </div>
                
                <div class="mb-3">
                    <label for="password2" class="form-label">Confirm password</label>
                    <input type="password" class="form-control" id="password2" name="password2" required value="<?php if(isset($_POST['password2'])){echo $_POST['password2'];} ?>">
                </div>


                <button type="submit" class="btn btn-success w-100" name="submit">S'inscrire</button>
            </form>
            <!--<p class="text-center mt-3">J'ai déjà un compte <a href="../index.php">Me connecter</a></p>-->
        </div>
    </div>

    <script src="../static/js/bundle.min.js"></script>
    <script src="../static/js/script.js"></script>
</body>
</html>