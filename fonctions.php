<?php
function afficherNomVilleParID($idVille) {
    $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, nom_ville FROM ville WHERE id = $idVille";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idVille = $row['id'];
        $nomVille = $row['nom_ville'];

        $conn->close();

        return $nomVille;
    } else {
        $conn->close();
        return "Aucun nom de ville n'a été trouvé dans la base de données pour l'ID spécifié.";
    }
}


function afficherImageVilleParNom($nomVille) {
    $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $nomVille = $conn->real_escape_string($nomVille);

    $sql = "SELECT image FROM ville WHERE nom_ville = '$nomVille'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuImage = $row['image'];

        $conn->close();

        $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" class="card-img-top" alt="..."style="height: 20rem;"' . $nomVille . '" >';

        echo $html;
    } else {
        $conn->close();
        echo "Aucune image de ville n'a été trouvée dans la base de données pour le nom de ville spécifié.";
    }
}
function afficherDescriptionVilleParNom($nomVille) {
    $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $nomVille = $conn->real_escape_string($nomVille);
    

    $sql = "SELECT description FROM ville WHERE nom_ville = '$nomVille'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $description = $row['description'];

        $conn->close();

        return $description;
    } else {
        $conn->close();
        return "Aucune description de ville n'a été trouvée dans la base de données pour le nom de ville spécifié.";
    }
}



    function afficherImageParID($idImage) {
        $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, image, nom_site FROM sites WHERE id = $idImage";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idImage = $row['id'];
            $contenuImage = $row['image'];
            $nomImage = $row['nom_site'];
            $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" class="card-img-top" alt="..."style="height: 20rem;"'  . $idImage . '" >';

            $conn->close();

            return $html;
        } else {
            $conn->close();
            return "Aucune image n'a été trouvée dans la base de données pour l'ID spécifié.";
        }
    }


    function afficherDescriptionSiteParID($idSite) {
        $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, description, nom_site FROM sites WHERE id = $idSite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idSite = $row['id'];
            $description = $row['description'];
            $nomSite = $row['nom_site'];

            $conn->close();

            return $description;
        } else {
            $conn->close();
            return "Aucune description n'a été trouvée dans la base de données pour l'ID spécifié.";
        }
    }

    function afficherNomSiteParID($idSite) {
        $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }

        $sql = "SELECT id, nom_site FROM sites WHERE id = $idSite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $idSite = $row['id'];
            $nomSite = $row['nom_site'];

            $conn->close();

            return $nomSite;
        } else {
            $conn->close();
            return "Aucun nom de site n'a été trouvé dans la base de données pour l'ID spécifié.";
        }
    }

    function afficherTexteParNom($nomTexte) {
   
        $conn = new mysqli('localhost', 'root', '', 'sitetouristique');
    
        if ($conn->connect_error) {
            die("La connexion à la base de données a échoué : " . $conn->connect_error);
        }
    
        $nomTexteEchappe = $conn->real_escape_string($nomTexte);
    
    
        $sql = "SELECT contenu FROM texte WHERE nomtexte = '$nomTexteEchappe'";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $contenuTexte = $row['contenu'];
    
          
            echo '<div class="texte">' . $contenuTexte . '</div>';
        } else {
            echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
        }
    
       
        $conn->close();
    }
    
   
    
    
    function afficherNomTexteparID($idTexte) {
   
   $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

   if ($conn->connect_error) {
       die("La connexion à la base de données a échoué : " . $conn->connect_error);
   }



   $sql = "SELECT id , nomtexte FROM texte WHERE id= '$idTexte'";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       $row = $result->fetch_assoc();
       $idTexte= $row['id'];
       $nomTexte = $row['nomtexte'];

     
       echo '<div class="texte">' . $nomTexte . '</div>';
   } else {
       echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
   }

  
   $conn->close();
}
function afficherPhotoParID($idImage) {
    $conn = new mysqli('localhost', 'root', '', 'sitetouristique');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $sql = "SELECT id, contenu, nom_image FROM image WHERE id = $idImage";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $idImage = $row['id'];
        $contenuImage = $row['contenu'];
        $nomImage = $row['nom_image'];
        $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" "'  . $idImage . '" >';

        $conn->close();

        return $html;
    } else {
        $conn->close();
        return "Aucune image n'a été trouvée dans la base de données pour l'ID spécifié.";
    }
}


?>

    
