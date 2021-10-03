<?php
    
    session_start();
    include('database/connexionDB.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2ee5578a0d.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Roboto&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index-articles.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Normandix | Accueil</title>
</head>
<body>

<?php include('extensions/header.php') ?>

<div class="articles">
    <div class="container">
        <h2 class="articles__title">Présentation</h2>
        <div class="articles__items">
            <div class="article" style="background: url('img/ArticleUltimate1.jpg');background-size: cover;">
                <div class="article__filtre"></div>
                <div class="article__name">Ultimate Frisbee | Accueil</div>
                <a href="Ultimate.html"><div class="article__icon" href=><i class="fas fa-play"></i></div> </a>
            </div>
            <div class="article" style="background: url('img/ultimate.jpg');background-size: cover;">
                <div class="article__filtre"></div> 
                <div class="article__name">Et le club...</div>
                <a href="Apropos.html"><div class="article__icon"><i class="fas fa-play"></i></div> </a> 
            </div>
            <div class="article" style="background: url('img/ArticleDiscGolf1.jpg');background-size: cover;">
                <div class="article__filtre"></div>
                <div class="article__name">DiscGolf | Accueil</div> 
                <a href="DiscGolf.html"><div class="article__icon"><i class="fas fa-play"></i></div> </a>
            </div>
            </div>
        </div>  
    </div>  
</div>

<?php include('extensions/footer.php') ?>

<script
	 src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous">
</script>
    <script src="js/app.js"></script>
</body>
</html>
