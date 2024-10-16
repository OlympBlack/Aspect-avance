
<?php require("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
<div class="container mt-5">
        <div class="form-container mx-auto" style="max-width: 640px;">
            <h2 class="text-center mb-4">Connexion</h2>

            <?php if(isset($error)){echo '<p class="text-center alert alert-danger">' . $error . '</p>';}?>


            <form action="" method="post">

                <div class="mb-3">
                    <label for="mail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="mail" name="mail" required value="<?php if(isset($_POST['mail'])){echo $_POST['mail'];} ?>">
                </div>

                <div class="mb-3">
                    <label for="password1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password1" name="password" required  value="<?php if(isset($_POST['password1'])){echo $_POST['password1'];} ?>">
                </div>


                <button type="submit" class="btn btn-success w-100" name="submit">Se connecter</button>
            </form>
            <p class="text-center mt-3">Je n'ai pas encore de compte <a href="inscrip_connex/inscription.php">S'inscrire</a></p>
        </div>
    </div>

    <script src="static/js/bundle.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>