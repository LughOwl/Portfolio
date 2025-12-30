<?php
// Récupérer l'ID de l'oeuvre
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo '<div style="text-align: center; padding: 40px;">';
    echo '<h2>Oeuvre non trouvée</h2>';
    echo '<p><a href="index.php?p=accueil">Retour à l\'accueil</a></p>';
    echo '</div>';
    exit;
}

$id = intval($_GET['id']);

if (!isset($Oeuvres[$id])) {
    echo '<div style="text-align: center; padding: 40px;">';
    echo '<h2>Oeuvre non trouvée</h2>';
    echo '<p><a href="index.php?p=accueil">Retour à l\'accueil</a></p>';
    echo '</div>';
    exit;
}

$oeuvre = $Oeuvres[$id];
?>

<div class="oeuvre-detail-container">
    <a href="index.php?p=catalogue&types%5B%5D=<?php echo htmlspecialchars($oeuvre['types'][0]); ?>" class="bouton-accueil"><img src="../../../assets/fleche_gauche.png" alt="image aléatoire" class="accueil-icones"> Voir d'autres œuvres du type <?php echo htmlspecialchars($oeuvre['types'][0]); ?></a>
    <a href="index.php?p=oeuvre&id=<?php echo array_rand($Oeuvres); ?>" class="bouton-accueil"><img src="../../../assets/random.png" alt="image aléatoire" class="accueil-icones">Voir une autre œuvre</a>
    
    <div class="oeuvre-main-content">
        <div class="oeuvre-detail-image">
            <img src="../../../assets/Janus-Bee/<?php echo htmlspecialchars($oeuvre['image']); ?>" alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
        </div>
        
        <div class="oeuvre-detail-info">
            <h1><?php echo htmlspecialchars($oeuvre['titre']); ?></h1>
            
            <?php if (!empty($oeuvre['titres_alternatifs'])) { ?>
                <div class="titres-alternatifs">
                    <strong>Titres alternatifs :</strong>
                    <span><?php echo implode(', ', $oeuvre['titres_alternatifs']); ?></span>
                </div>
            <?php } ?>
            
            <div class="info-item-vertical">
                <strong>Types :</strong>
                <span><?php echo implode(', ', $oeuvre['types']); ?></span>
            </div>
            
            <div class="info-item-vertical">
                <strong>Genres :</strong>
                <span><?php echo implode(', ', $oeuvre['genres']); ?></span>
            </div>
            
            <div class="info-item-vertical">
                <strong>Sortie :</strong>
                <span><?php echo htmlspecialchars($oeuvre['sortie']); ?></span>
            </div>
            
            <div class="info-item-vertical">
                <strong>Statut :</strong>
                <span><?php echo htmlspecialchars($oeuvre['status']); ?></span>
            </div>
            
            <div class="info-item-vertical">
                <strong>Durée :</strong>
                <span><?php echo htmlspecialchars($oeuvre['duree']); ?></span>
            </div>
        </div>
    </div>
    
    <!-- Synopsis en dessous de tout, pleine largeur -->
    <div class="synopsis-full-width">
        <strong>Synopsis :</strong>
        <p><?php echo htmlspecialchars($oeuvre['synopsis']); ?></p>
    </div>
    
    <?php 
    $estCourtMetrage = in_array("Court métrage", $oeuvre['types']);
    if ($estCourtMetrage && !empty($oeuvre['video'])) {
        // Extraire l'ID de la vidéo YouTube
        preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $oeuvre['video'], $matches);
        if (isset($matches[1]) && !empty($matches[1])) {
            $videoId = $matches[1];
        } else {
            $videoId = '';
        }
        if ($videoId) {
            echo '<div class="oeuvre-video-section">';
            echo '<h2>Vidéo</h2>';
            echo '<iframe width="100%" height="600" src="https://www.youtube.com/embed/' . htmlspecialchars($videoId) . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 8px;"></iframe>';
            echo '</div>';
        }
    }
    ?>
</div>
