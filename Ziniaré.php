
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
  <section class="navimage1" style="height: 100vh;">
    <?php include("navbar.php"); ?>
    <h1 class="titre">WELCOME to Ziniaré</h1>
    <h1 class="titre0">Viviez un safari inoubliable </h1>
    </section> <br>
    <h1 class="title">Une faune en permanente évolution </h1> <br>
    <section class="container">
    <div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo afficherNomTexteparID(1) ?></h5>
        <p class="card-text"> <?php echo afficherTexteParNom("Le lion : roi de la savane")?> </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"> <?php echo afficherNomTexteparID(2) ?></h5>
        <p class="card-text"><?php echo afficherTexteParNom("les plus grands Hyppopotammes")?></p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</section>
    <section class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <div class="col">
        <div class="card">
          <?php echo afficherImageParID(5)?>
          <div class="card-body">
            <h5 class="card-title"><?php echo afficherNomSiteParID(5) ?></h5>
            <p class="card-text"><?php echo afficherDescriptionSiteParID(6)?></p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo afficherImageParID(6)?>
          <div class="card-body">
            <h5 class="card-title"><?php echo afficherNomSiteParID(6) ?></h5>
            <p class="card-text"><?php echo afficherDescriptionSiteParID(6)?></p>
          </div>
        </div>
      </div>
      </div>
      
        
    </section><br>
    <h1 class="zo">Découvrez les différentes espèces protégées</h1>
    <section class="cv">
            <div class="cvtext">
              <br>
             
             <!-- <p> <i class="fas fa-circle"></i> <strong class="civil"> Etat CIVIL</strong></p> -->
<h2 class="zo0">les zèbres à rayure large</h2>    <br>         

<p> <strong>le zèbre à rayure noir Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas blanditiis aut quod voluptate quis cumque  corporis minima, earum ipsam harum?</strong></p>
<p></p>
<p></p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti nemo eveniet blanditiis voluptates quia earum perferendis quidem! Temporibus, autem excepturi velit ipsum corrupti dicta quis ex libero sit sed dolore eos blanditiis maiores sunt neque commodi. Eaque nobis ipsa, dolore possimus optio non, a at quis saepe adipisci ipsum libero.</p>


<button class="bouton">More Info</button> 
            </div> <br><br>
            <div class="cvimg" >
             
              <img src="zèbre.jpg" alt=""height="300px">
              <button class="bouton2"> <br> <strong class="p1"> ziniaré</strong></button>
            </div>
          </section><br><br>
          <section>
            <h2 class="zo"> Différents espèces se partagent la savane</h2><br>
            <div class="étudiant">
                <div>
                <img src="African.jpg" alt="">
                <p class="text-center">Elephant <button class="bouton">voir plus</button></p>
            </div>
            <div>
                <img src="antilope.jpg" alt="">
                <p class="text-center">Antilope  <button class="bouton">voir plus</button></p>
            </div>
            <div>
                <img src="dindon.jpg" alt="">
                <p class="text-center">Dindon <button class="bouton">voir plus</button> </p>
            </div>
            <div>
                <img src="girafe.jpg" alt="">
                <p class="text-center">Girafe <button class="bouton">voir plus</button> </p>
            </div>
           

            </div>
          </section> <br><br>
    
    <?php include("footer.php"); ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>