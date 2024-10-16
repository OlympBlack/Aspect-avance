
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acceuil</title>
  <!-- Bootstrap CSS -->
  <link href="static/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="static/css/acceuil.css">

</head>
<body>

  <!-- Navbar -->
  <?php 
  session_start();
  if(!isset($_SESSION['nom'])){
    header('Location: index.php');
  }
  include('head.php'); 
  ?>

  <!-- Main Content -->
  <div class="main-content">
    <div class="custom-box col-md-6">
      <h2 class="text-center;">Accès rapides</h2>
      <a href="inscrip_connex/index.php"><h5>. Liste des Utilisateurs</h5></a>
      <a href="adhesion/index.php"><h5>. Adhésion à l'association d'échecs</h5></a>
      <a href="competence/index.php"><h5>. Inscription, compétence et langue des Etudiants</h5></a>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="static/js/bootstrap.bundle.min.js"></script>
</body>
</html>
