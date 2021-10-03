<?php

  session_start();

  include('../../database/connexionDB.php');

 

  if (!isset($_SESSION['id'])){

    header('Location: ../../index');

    exit;

  }

  

  // On récupère tous les utilisateurs sauf l'utilisateur en cours

  $afficher_profil = $DB->query("SELECT * 

    FROM users

    WHERE id <> ?",

    array($_SESSION['id']));

  $afficher_profil = $afficher_profil->fetchAll(); // fetchAll() permet de récupérer plusieurs enregistrements

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/utilisateurs.css">
    <link rel="stylesheet" href="../../css/base.css">
    <title>Utilisateurs du site | Normandix</title>
  </head>
  <body>  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="../../index.php">Accueil</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

        <?php

            if(!isset($_SESSION['id'])){

            }else{

            ?>

                <li class="nav-item">

                    <a class="nav-link" href="profil">Profil</a> 

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="utilisateurs">Voir les utilisateurs</a> 

                </li>

            <?php

            } 

        ?>

    </ul>

    <ul class="navbar-nav ml-md-auto">

        <?php

            if(!isset($_SESSION['id'])){

            ?>

                <li class="nav-item">

                    <a class="nav-link" href="../compte/inscription">Inscription</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="../compte/connexion">Connexion</a>

                </li>

            <?php

            }else{

            ?>

                <li class="nav-item">

                    <a class="nav-link" href="../compte/déconnexion">Déconnexion</a>

                </li>

            <?php

            } 

        ?>

    </ul>

</div>

</nav>

<div class="container">
<div class="articles">
</div>
    <div class="articles__title" >Utilisateurs</div>
    <table>
      <tr>
        <th>Nom</th> 
        <th>Prénom</th>
        <th>Voir le profil</th>
      </tr>
      <?php
        foreach($afficher_profil as $ap){
        ?>
          <tr>          
            <td><?= $ap['nom'] ?></td>
            <td><?= $ap['prénom'] ?></td>
            <td><a href="voir_profil.php?id=<?= $ap['id'] ?>">Voir Profil</a></td>
          </tr>
        <?php
        }
      ?>
      </table>
  </div>
</div>
</div>
  </body>
</html>