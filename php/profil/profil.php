<?php

  session_start(); 

  include('../../database/connexionDB.php'); 

  if(!isset($_SESSION['id'])){ 

    header('Location: ../../index'); 

    exit; 

  }

  $afficher_profil = $DB->query("SELECT * 

    FROM users

    WHERE id = ?", 

  array($_SESSION['id']));

  

  $afficher_profil = $afficher_profil->fetch(); 

?>

<html lang="fr">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil | Normandix</title>

  <head>

 <body>

   <h2>Voici le profil de <?= $afficher_profil['nom'] . " " . $afficher_profil['prénom']; ?></h2>

    <div>Quelques informations sur vous : </div>

    <ul>

      <li>Votre id est : <?= $afficher_profil['id'] ?></li>

      <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>

      <li>Votre compte a été crée le : <?= $afficher_profil['date_création_compte'] ?></li>

    </ul>

    <a href="../compte/déconnexion.php" class="header__navbar--menu-link"><i class="fas fa-id-badge"></i> Déconnexion</a>
    <a href="modifier-profil.php" class="header__navbar--menu-link"><i class="fas fa-id-badge"></i> Modifier Mon profil</a>

  </body>

</html>