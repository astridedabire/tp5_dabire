<?php include("fonctions.php"); ?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <title>Headers · Bootstrap v5.3</title>
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
  <link rel="stylesheet" href="headers.css">
  <link rel="stylesheet" href="style.css">


  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->

</head>

<body>
<section class="navimagi" style="height: 100vh;">
    <?php include("navbar.php"); ?> <br>

    <p class="titre">Laongo , un musé a ciel ouvert</p>
    </section>
    <h1 class="title">les scuptures sur granites de laongo</h1><br> <br>
  <section class="container">
  
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
        <?php echo afficherImageParID(1)?>
    
          <div class="card-body">
            <h5 class="card-title"> <?php echo afficherNomSiteParID(1) ?></h5>
            <p class="card-text">    <?php echo afficherDescriptionSiteParID(1) ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
        <?php echo afficherImageParID(2)?>
                  <div class="card-body">
            <h5 class="card-title"><?php echo afficherNomSiteParID(2) ?> </h5>
            <p class="card-text">    <?php echo afficherDescriptionSiteParID(2) ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
        <?php echo afficherImageParID(3)?>         
         <div class="card-body">
            <h5 class="card-title"><?php echo afficherNomSiteParID(3) ?></h5>
            <p class="card-text">    <?php echo afficherDescriptionSiteParID(3) ?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
        <?php echo afficherImageParID(4)?>
          <div class="card-body">
            <h5 class="card-title"><?php echo afficherNomSiteParID(4) ?></h5>
            <p class="card-text">    <?php echo afficherDescriptionSiteParID(4) ?></p>
          </div>
        </div>
      </div>
    </div>
    </section><br>

    <?php include("footer.php"); ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>