
<div class="header">
    <div class="header__texture"></div>
    <div class="header__mask">
        <svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M0 100 L0 0 C 25 100 75 100 100 0 L 100 100" fill='#fff'></path>
        </svg>
    </div>
    <div class="container">
        <div class="header__navbar">
            <div class="header__navbar--logo">
                <h1 class="header__navbar--logo-title">Normandix | Accueil</h1>  
            </div>
            <div class="header__navbar--menu">
                <a href="../../Index.php" class="header__navbar--menu-link"><i class="fas fa-home"></i> Accueil</a>
                <a href="../pages/Ultimate/Ultimate.html" class="header__navbar--menu-link"><i class="fab fa-gripfire"></i> Ultimate</a>
                <a href="../pages/DiscGolf/DiscGolf.html" class="header__navbar--menu-link"><i class="fab fa-staylinked"></i> Disc Golf</a>
                <a href="../pages/Utilitaires/Boutique.html" class="header__navbar--menu-link"><i class="fas fa-shopping-bag"></i> Boutique</a>
                <a href="../pages/Utilitaires/Contact.html" class="header__navbar--menu-link"><i class="fas fa-phone"></i> Contact</a>

                <?php

                    if(!isset($_SESSION['id'])){

                ?>

                <a href="./php/compte/connexion.php" class="header__navbar--menu-link"><i class="fas fa-id-badge"></i> Connexion</a>

                <?php

                    }else{

                ?>

                <a href="./php/profil/profil.php" class="header__navbar--menu-link"><i class="fas fa-id-badge"></i> Profil</a>

                <?php

                    } 

                ?>

            </div>
            <div class="header__navbar-toggle">
                <span class="header__navbar-toggle-icons"></span>
            </div>
        </div>
        <div class="header__slogan">
            <h1 class="h__slogan--title">Le respect est notre spécialité</h1>
            <a href="../pages/Utilitaires/Contact.html" class="h__slogan--btn">Contactez-nous</a>  
        </div>
    </div> 
</div>