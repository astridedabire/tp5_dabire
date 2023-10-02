<?php
session_start('user')
header("Location:index.php");
?>
<?php include("fonctions.php"); ?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Headers · Bootstrap v5.3</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
  <link rel="stylesheet" href="style.css">


  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->

</head>

<body>
<?php include("navbar.php"); ?> <br>

<h1>Bonjour!<?php echo $_SESSION['user'];</h1>
<a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
<?php include("footer.php"); ?>
<script src="bootstrap.bundle.min.js"></script>

</body>

</html>