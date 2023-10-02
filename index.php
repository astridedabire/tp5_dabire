<?php include("fonctions.php"); ?>
<?php session_start(); 
include("config.php");
?>

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
    <div class="login-form">
  <?php
  if(isset($_GET['login_err']))
  {
    $err = htmlspecialchars($_GET['login_err']);
    switch($err)
    {
      case'password':
        ?>
        <div class="alert alert-danger">
<strong>Erreur</strong>mot de passe incorrect
        </div>
        <?php
        break;
    }
  }
  ?>
  <form action="connexion.php" method= "post">
    <h2 class="text-center">Connexion</h2>
    <div class="form-group">
      <input type="text" name="email"class="form-control"placeholder="Email" required="required"autocomplete="off">
    </div>

    <div class="form-group">
      <input type="password" name="password"class="form-control"placeholder="Mot de passe" required="required"autocomplete="off">
    </div>
    <div class="form-group">
<button type="submit" class="btn btn-primary btn-block">Connexion</button>
    </div>
  </form>
<p class="text-center"><a href="inscription.php">Inscription</a></p>
</div>
<style>
  .login form{
    width: 340px;
    margin:50px auto;
  }
  .login form form{
    margin-bottom:15px;  
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0,0,0,0.3);
    padding:30px;                                  
  }
  .login form h2{
    margin: 0 0 15px;
    
  }
  .form-control, .btn{
    min-height: 38px;
    border-radius:2px;
  }
</style>
<?php include("footer.php"); ?>
    <script src="bootstrap.bundle.min.js"></script>

</body>

</html>