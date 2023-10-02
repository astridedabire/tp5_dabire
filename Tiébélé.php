<?php include("fonctions.php"); ?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

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
<link rel="stylesheet" href="carousel.css">
<link rel="stylesheet" href="carousel.rtl.css">
<script src="bootstrap.bundle.min.js"></script>
    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
   
  </head>
  <body>
<?php include("navbar.php"); ?>


 <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-theme="light">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img2.jpg" alt="" class="ima">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>habitat kassena.</h1>
            <p class="opacity-75">des maison trationnelles construit par les hommes et décorées par les femmes</p>
            <p><a class="btn btn-lg btn-primary" href="#">découvrir</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img19.jpg" alt="" class="ima">
        <div class="container">
          <div class="carousel-caption">
            <h1>la chambre de la femme kassena.</h1>
            <p>Elle fait office de cuisine de salon et de chambre à coucher.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="danse1.jpg" alt="" class="ima">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Troupe kasséna.</h1>
            <p>La troupe à participé a plusieurs compétitions dont la Semaine nationale de la culture</p>
            <p><a class="btn btn-lg btn-primary" href="#">Palmarès</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  

<div class="band">
<h1 class="kassena"> <?php echo afficherNomSiteParID(7) ?></h1> 
</div>
<section class="fasoimg" style="height: 100vh;"><br><br>
    <h1 class="burkina">A la découverte de la culture Kassena
</h1><br>
    <div class="bf">
      <p> 
      <?php echo afficherDescriptionSiteParID(7) ?>

     

          
    </div> <br> <br>

    <section class="container">
        <div class="row">
            <h2 class="text-center">La cours royale de Tiébélé</h2>
        </div>
        <div class="row">
            <div class="card col-lg-6 col-sm-12 border-0">
                <img src="img3.jpg" alt="" class="habita">
                <div class="card-body">
                    <h3 class="card-title text-center">Maison en Réfection </h3>
                    <p class="card-text text-center">la peinture ainsi que les réprésentations graphiques  des maisons sont effectués par les femmes et la construction par les hommes</p>
                    
                </div>
            </div>
            <div class="card col-lg-6 col-sm-12 border-0">
                <img src="img2.jpg" alt="" class="habita">
                <div class="card-body">
                    <h3 class="card-title text-center">habitat royal</h3>
                    <p class="card-text text-center">
                    l'architecture particulière du village de tiébélé lui a value une place parmis les joyaux architecturale du patrimoine mondiale de l'UNESCO 

                    </p>

                </div>
            </div>
        </div>

    </section> <br>
    <h1 class="kassena">Le pic du Nahouri</h1><br>
    <section class="pic">
    
    <div><br><br>
    <h5 class="kassena">"le pic du nahouri"</h5>
    <p class="bf">le pic du Nahouri d'une altitude de 649m est le plus haut sommet de la région. situé à la périphérie de la ville de pô,<br> le pic fait l'objet de beaucoup de curiosité. Chaque année des sportifs nationaux et internationaux s'y donnent rendez vpous pour le "ALTITUDE NAHOURI" un Marathon qui recom <br>pense les meilleurs athèles. par ailleurs le pic du Nahouri a cependant  une connotation sacré car au dela d'être une actraction sportive et touristique  c'est une colline sacrée qui protège la localité. </p>
    </div>
    <div class="picimage">
        <img src="pic.jpg" alt="">
    </div>
   </section>
<?php include("footer.php"); ?>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>