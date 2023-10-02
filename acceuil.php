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
  <section class="navimage" style="height: 100vh;">
    <?php include("navbar.php"); ?> 

    <p class="titre">Trouvez votre prochain séjour</p>
   
   



   <h1 class="title">Découvrez la diversité Touristique du Burkina Faso</h1>
  
  <section class="container">
  <div class="card-group">
    <div class="card">
      
        <?php echo  afficherImageVilleParNom("LAONGO")?>
      
      
      <div class="card-body">
        <h5 class="card-title"><?php echo afficherNomVilleParID(1)?></h5>
        <p class="card-text"> <?php echo afficherDescriptionVilleParNom("LAONGO")?> </p>
      </div>
      <div class="card-footer">
        <a href="LAONGO.php"><button type="button" class="btn btn-warning">visitez le site</button></a>

      </div>
    </div>
    
    <div class="card">
      
      <?php echo  afficherImageVilleParNom("TIEBELE")?>
    
    
    <div class="card-body">
      <h5 class="card-title"><?php echo afficherNomVilleParID(2)?></h5>
      <p class="card-text"> <?php echo afficherDescriptionVilleParNom("TIEBELE")?> </p>
    </div>
    <div class="card-footer">
      <a href="Tiébélé.php"><button type="button" class="btn btn-warning">visitez le site</button></a>

    </div>
  </div>
  <div class="card">
      
    <?php echo  afficherImageVilleParNom("ZINIARE")?>
  
  
  <div class="card-body">
    <h5 class="card-title"><?php echo afficherNomVilleParID(3)?></h5>
    <p class="card-text"> <?php echo afficherDescriptionVilleParNom("ZINIARE")?> </p>
  </div>
  <div class="card-footer">
    <a href="Ziniaré.php"><button type="button" class="btn btn-warning">visitez le site</button></a>

  </div>
</div>
  </div>
</section>
  <section>
    <marquee behavior="" direction="left">
      <div class="bande0">
        <img src="danse.jpg" alt="">
        <img src="img10.jpg" alt="">
        <img src="img11.jpg" alt="">
        <img src="img12.jpg" alt="">
        <img src="img19.jpg" alt="">
        <img src="img2.jpg" alt="">
        <img src="img3.jpg" alt="">
        <img src="img19.jpg" alt="">
        <img src="danse1.jpg" alt="">
        <img src="img6.jpg" alt="">
        <img src="img8.jpg" alt="">
        <img src="img9.jpg" alt="">
        <img src="touriste.jpg" alt="">
      </div>
    </marquee>
  </section><br>
 



  <section>


    <div class="container">
        <div class="row">
            <h1 class="text-center">Beneficiez des meilleurs services .</h1>
        </div>
        <div class="row">
            <div class="card col-lg-4 col-sm-12 border-0">
                <img src="transport.jpg" alt="" class="im"><br>
                <div class="card-body">
                    <h5 class="card-title text-center">Transport et Tourisme
                    </h5>

                    <p class="card-text text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
                        incidunt
                        cumque molestias! Quo expedita omnis aliquam placeat consequuntur deleniti doloribus!

                    </p>
                </div>
            </div>
            <div class="card col-lg-4 col-sm-12 border-0">
              <?php echo  afficherPhotoParID(30)?>
                <div class="card-body">
                    <h5 class="card-title text-center">Hotellerie
                    </h5>

                    <p class="card-text text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab
                        incidunt
                        cumque molestias! Quo expedita omnis aliquam placeat consequuntur deleniti doloribus!

                    </p>
                </div>
            </div>
            <div class="card col-lg-4 col-sm-12 border-0">
              <?php echo  afficherPhotoParID(31)?>

                <div class="card-body">
                    <h5 class="card-title text-center">Restauration
                    </h5>

                    <p class="card-text text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Ab
                        incidunt
                        cumque molestias! Quo expedita omnis aliquam placeat consequuntur deleniti doloribus!

                    </p>
                </div>

            </div>

</section><br>
<h1 class="title">quelques sites Touristique du Burkina Faso</h1><br><br> 
<section class="destination">

  <div class="content">
  
      
      <div class="box">
        <?php echo  afficherPhotoParID(1)?>
          
          <div class="content">
              <h1>LAONGO</h1>
              <p>Mami wata le génie des eaux </p>
              <a href="LAONGO.php">lire plus</a>


          </div>
  </div>
      <div class="box">
        <?php echo  afficherPhotoParID(2)?>
          <div class="content">
              <h1>Cascade de banfora</h1>
              <p>
                  </p>



          </div>

      </div>
      <div class="box">
        <?php echo  afficherPhotoParID(3)?>
          <div class="content">
              <h1>les pan  d'arly</h1>
              <p>
                </p>
                <a href="Ziniaré.php">lire plus</a>

              


      </div>

  </div>
      <div class="box">
        <?php echo  afficherPhotoParID(4)?>
          <div class="content">
              <h1>Les crocodiles de sabou</h1>
              <p> </p>
              <a href="Ziniaré.php">lire plus</a>

             


          </div>

      </div>
      <div class="box">
        <?php echo  afficherPhotoParID(5)?>
          <div class="content">
              <h1>les éléphants de Pô</h1>
              <p>
                 </p>
                 <a href="Ziniaré.php">lire plus</a>



          </div>

      </div>
      <div class="box">
        <?php echo  afficherPhotoParID(6)?>
          <div class="content">
              <h1>les Zèbres de Tansila</h1>
              <p>
                <a href="Ziniaré.php">lire plus</a>



          </div>

      </div>
      <div class="box">
        <?php echo  afficherPhotoParID(7)?>
          <div class="content">
              <h1>l'architecture de tiébélé</h1>
              <p>
                 </p>
              <a href="Tiébélé.php"></a>


          </div>

      </div>
      <div class="box">
        <?php echo  afficherPhotoParID(8)?>
          <div class="content">
              <h1>les girafes de fada</h1>
<p></p>                      
<a href="Ziniaré.php">lire plus</a>
       </div>

      </div>

  </div> 
</section> <br><br>


    <?php include("footer.php"); ?>
    <script src="bootstrap.bundle.min.js"></script>

</body>

</html>