<nav class="navbar navbar-expand-lg bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FASO-TOUR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="" href="acceuil.php">Acceuil</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            site
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="LAONGO.php">LAONGO</a></li>
            <li><a class="dropdown-item" href="Tiébélé.php">TIEBELE</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Ziniaré.php">ZINIARE</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">contact</a>
        </li>
      </ul>
      <?php
      if(isset($_SESSION['user']))
      {
        ?>
        <?php echo '<h1>'.''.$_SESSION['user'].''.'</h1>' ?>
        <?php
       echo '<a href="deconnexion.php" class="btn btn-danger btn-lg">Deconnexion</a>';
      }
      else{
        ?>
       
      
      <!-- <form class="d-flex" role="search"> -->
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
       <a href="inscription.php"><button class="btn btn-outline-success text-white"  type="submit">inscription</button></a> 
       <a href="index.php"> <button class="btn btn-outline-success text-white" type="submit">connexion</button></a>
     <?php
      }
?>
      <!-- </form> -->
    </div>
  </div>
</nav>