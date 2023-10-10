<?php 
session_start();
 include("config.php");
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Dashboard Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
<link href="bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
  <?php include("navbar.php"); ?>
    

    


<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="Acceuil.php">
                <svg class="bi"><use xlink:href="#house-fill"/></svg>
                Acceuil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="admin.php">
                <svg class="bi"><use xlink:href="#file-earmark"/></svg>
                Administrateur
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="ville.php">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Villes
              </a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2" href="sites.php">
                <svg class="bi"><use xlink:href="#cart"/></svg>
                Sites
              </a>
            </li>
          </ul>

         

          
        </div>
      </div>
    </div>
    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          
        </div>
      </div>


      <h2>Villes</h2>
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Ville</th>
            
          
              
              <th scope="col">action </th>

            </tr>
          </thead>
          <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "sitetouristique";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("La connexion a échoué : " . $conn->connect_error);
                }

                $sql = "SELECT id, nom_ville, description, image FROM ville";
                $result = $conn->query($sql);



                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["nom_ville"] . "</td>";
                        echo "<td>" . $row["description"] . "</td>";
                        echo '<td><img src="data:image/jpeg;base64,' . base64_encode($row["image"]) . '" alt="Image de la Ville" width="100"></td>';
                        echo '<td>
                        <form method="post" action="mod_villes.php">
                        <input type="hidden" name="id" value="' . $row["id"] . '">
                        <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                    </form>
                
                    <!-- Bouton Supprimer avec confirmation -->
                    <button class="btn btn-danger btn-sm" onclick="confirmDelete(' . $row["id"] . ')">Supprimer</button>
                
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Aucune ville touristique trouvée.</td></tr>";
                }
                ?>
            </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>
</html>
