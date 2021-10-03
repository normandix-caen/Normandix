<?php
    
    session_start();
    include('../../database/connexionDB.php');
    
    if (isset($_SESSION['id'])){
        header('Location: ../../Index.php');
        exit;
    }
 
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
 
        if (isset($_POST['connexion'])){
            $mail = htmlentities(strtolower(trim($mail)));
            $mdp = trim($mdp);
 
            if(empty($mail)){ 
                $valid = false;
                $er_mail = "Il faut mettre un mail";
            }
 
            if(empty($mdp)){
                $valid = false;
                $er_mdp = "Il faut mettre un mot de passe";
            }
 
            $req = $DB->query("SELECT * 
                FROM users 
                WHERE mail = ? AND mdp = ?",
                array($mail, crypt($mdp, "$6$rounds=5000$macleapersonnaliseretagardersecret$")));
            $req = $req->fetch();
 
            if ($req['id'] == ""){
                $valid = false;
                $er_mail = "Le mail ou le mot de passe est incorrecte";
            }

 
            if ($valid){
                $_SESSION['id'] = $req['id']; 
                $_SESSION['nom'] = $req['nom'];
                $_SESSION['prénom'] = $req['prénom'];
                $_SESSION['mail'] = $req['mail'];
 
                header('Location:  ../../Index.php');
                exit;
            } 

        }
    }
?>

<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/2ee5578a0d.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Roboto&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../../css/base.css">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="stylesheet" href="../../css/connexion.css">

        <title>Connexion</title>

    </head>

    <body>  
        
    <?php include('../../extensions/header.php') ?>
    <div class='corps'>
        <div class='connexion'>

            <h1>Connexion</h1>

            <form method="post">

            <?php

                if (isset($er_mail)){

            ?>

                <div><?= $er_mail ?></div>

            <?php   

                }

            ?>

            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if(isset($mail)){ echo $mail; }?>" required>

            <?php

                if (isset($er_mdp)){

            ?>

                <div><?= $er_mdp ?></div>

            <?php   

                }

            ?>

            <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if(isset($mdp)){ echo $mdp; }?>" required>

            <button type="submit" name="connexion">Se connecter</button> <br>
            <br>
            <br>
            <a href="inscription.php"> Inscription</a>

            </form>

        </div>
    </div>


        
    <?php include('../../extensions/footer.php') ?>

    </body>

</html>