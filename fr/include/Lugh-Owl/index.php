<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lugh-Owl</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="icon" href="../../../assets/Lugh-Owl/1.logo.png">
</head>
<body>
    <header class="site-header">
        <div class="logo-container">
            <a href="index.php?p=accueil">
                <div class="logo-container-size">
                    <img src="../../../assets/Lugh-Owl/1.logo.png" width="50" alt="logo-LO">
                    <div>Lugh-<span>Owl</span></div> 
                </div>  
            </a>
        </div>
        <div class="menu-hamburger">
            <span></span>
        </div>
    </header>

    <nav class="nav-menu">
        <ul>
            <li><a href="index.php?p=modeles">Modèles philosophiques</a></li>
            <li><a href="index.php?p=vie">La vie est [...]</a></li>
            <li><a href="index.php?p=idees">Idées immuables</a></li>
        </ul>
        <div>
            <form role="search" method="get" class="search-form" action="index.php?p=accueil">
                <label for="Recherche"><p>Trouver un article&nbsp;:</p></label>
                <div>
                    <input type="search" class="search-field"
                    placeholder="Rechercher..." id="Recherche">
                    <button type="submit" aria-label="Rechercher">
                        <img src="../../../assets/loupe.png" width="40" alt="loupe">
                    </button>
                </div>
            </form>
        </div>
        <div class="nav-switch-container">
            <p>Mode clair/sombre :</p>
            <div class="theme-switch-wrapper">
                <label class="theme-switch" for="checkbox">
                    <input type="checkbox" id="checkbox"/>
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
        <div class="nav-lang-container">
            <p>Autre langue :</p>
            <div class="nav-lang">
                <a href="index.php?p=erreur404">
                    <img src="../../../assets/flag-gb.png" width="40" alt="drapeau anglais">
                    <p>EN</p>
                </a>
            </div>
        </div>
    </nav>

    <main class="site-content">
    <?php
        if (isset($_GET['p'])) {
            $fichier="include/".$_GET['p'].'.html';
            if(file_exists($fichier)) 
                include($fichier);
            else
                include('include/erreur404.html');
            }
        else include('include/accueil.html');
    ?>
    </main>
    
    <footer class="site-footer">
        <div class="f-contact">
            <div>Présentation et Contact :</div>
            <ul> 
                <li><a href="index.php?p=origines">Origines et Objectifs</a></li>
                <li><a href="../../index.php?p=sites">Site web principal</a></li>
            </ul>
        </div>
        <div class="f-img">
            <img src="../../../assets/Lugh-Owl/1.logo.png" width="100" alt="Logo">
        </div>
        <div class="f-info">
            <div>Informations utiles :</div>
            <ul>
                <li><a href="index.php?p=legale">Mentions Légales</a></li>
                <li><a href="index.php?p=plan">Plan du site</a></li>
            </ul>
        </div>
        <div class="f-copyr">
            Tous Droits Réservés ©  Lugh-Owl | 2023 / 2026
        </div>
    </footer>
</body>
<script src="app.js"></script>
</html>
