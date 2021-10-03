<?php
  session_start();
  include('../../database/connexionDB.php'); 
 
  if (!isset($_SESSION['id'])){
    header('Location: ../../index'); 
    exit;
  }
  
  // Récupèration de l'id passer en argument dans l'URL
  $id = (int) $_GET['id'];
  // On récupère les informations de l'utilisateur grâce à son ID
  $afficher_profil = $DB->query("SELECT * 
    FROM users
    WHERE id = ?",
    array($id));
  $afficher_profil = $afficher_profil->fetch();
  
  if(!isset($afficher_profil['id'])){
    header('Location: ../../index');
    exit;
  }

?>

<!DOCTYPE html>

<html lang="fr">

  <head>

<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Profil de <?= $afficher_profil['prénom']; ?> | Normandix</title>

</head>

<body>

<h2>Voici le profil de <?= $afficher_profil['nom'] . " " .  $afficher_profil['prénom']; ?></h2><div>Quelques informations sur lui : </div>         

    <ul>                

      <li>Son id est : <?= $afficher_profil['id'] ?></li>                        

      <li>Son mail est : <?= $afficher_profil['mail'] ?></li>                             

      <li>Son compte a été crée le : <?= $afficher_profil['date_création_compte'] ?></li>                                       

    </ul>                                                                                                     

  <body>                                                                                                  

</html>