<?php
    include('data.php');
    // Fonction pour convertir en majuscules avec accents français
    function strtoupper_fr_simple($string) {
        $search = array(
            'à', 'â', 'ä', 'é', 'è', 'ê', 'ë', 'î', 'ï', 'ô', 'ö', 'ù', 'û', 'ü', 'ÿ', 'ç', 'æ', 'œ'
        );
        
        $replace = array(
            'À', 'Â', 'Ä', 'É', 'È', 'Ê', 'Ë', 'Î', 'Ï', 'Ô', 'Ö', 'Ù', 'Û', 'Ü', 'Ÿ', 'Ç', 'Æ', 'Œ'
        );
        
        return str_replace($search, $replace, strtoupper($string));
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janus-Bee</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen">
    <link rel="icon" href="../../../assets/Janus-Bee/1.logo.png">
</head>
<body>
    <nav class="nav-menu">
        <div class="logo-container">
            <a href="index.php?p=accueil">
                <div class="logo-container-size">
                    <img src="../../../assets/Janus-Bee/1.logo.png" width="50" alt="logo-JB">
                    <div class="logo-text-part">Janus-<span>Bee</span></div> 
                </div>  
            </a>
        </div>
        <div class="zone-recherche">
            <form action="index.php" method="GET">
                <input type="hidden" name="p" value="catalogue">
                <input type="search" id="recherche-input" name="texteRecherche" placeholder="Rechercher..." class="recherche-input" value="<?php
                    if (isset($_GET["texteRecherche"])) {
                        echo htmlspecialchars($_GET["texteRecherche"]);
                    } else {
                        echo '';
                    }
                ?>">
                <button type="submit" name="submit-recherche" class="recherche-bouton">
                    <img src="../../../assets/loupe.png" alt="image loupe">
                </button>
            </form>
        </div>
        <div class="catalogue-container">
            <a href="index.php?p=catalogue">
                <div class="catalogue-texte">
                    Catalogue
                </div>
                <div class="catalogue-icone">
                    <img src="../../../assets/catalogue.png" alt="icone catalogue">
                </div>
            </a>
        </div>
    </nav>

    <main class="site-content">
        <?php
            if (isset($_GET['p'])) {
                if(file_exists($_GET['p'].'.php'))
                    include($_GET['p'].'.php');
                else if (file_exists($_GET['p'].'.html'))
                    include($_GET['p'].'.html');
                else
                    echo '<img src="../../../assets/construction.png" alt="image en construction" width="300">';
                }
            else include('accueil.php');
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
            <img src="../../../assets/Janus-Bee/1.logo.png" width="100" alt="Logo">
        </div>
        <div class="f-info">
            <div>Informations utiles :</div>
            <ul>
                <li><a href="index.php?p=legale">Mentions Légales</a></li>
                <li><a href="index.php?p=plan">Plan du site</a></li>
            </ul>
        </div>
        <div class="f-copyr">
            Tous Droits Réservés © Janus-Bee | 2026 / 2026
        </div>
    </footer>
</body>
</html>
