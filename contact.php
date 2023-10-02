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
<section class="container">
    <h5 class="t">Fiche de renseignement</h5>
    <form action ="traitement.php" method="post"> 
        <label for="nom">nom</label>
        <input type="text" id="nom" name="nom" required ><br><br>

        <label for="prenom">prénom</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
   
        
        <label for="email">email</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">message</label><br><br>
       <textarea name="message" id="message" cols="30" rows="10"></textarea><br>
       <input type="submit" value = "envoyer">

    </form>
    </section>
    <?php include("footer.php"); ?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
