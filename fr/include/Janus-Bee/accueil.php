<h1>Accueil</h1>
<?php
// Grouper les œuvres par type
$OeuvresParType = array();
foreach ($Types as $type) {
    $OeuvresParType[$type] = array();
}

foreach ($Oeuvres as $oeuvre) {
    $type = $oeuvre['types'][0]; // Prendre seulement le premier type
    if (isset($OeuvresParType[$type])) {
        $OeuvresParType[$type][] = $oeuvre;
    }
}

// Afficher les sliders
$typesAffichages = array("Série d'animation", "Film d'animation", "Film live", "Court métrage", "Livre", "Jeu vidéo");

foreach ($typesAffichages as $type) {
    if (count($OeuvresParType[$type]) > 0) {
        $oeuvresType = array_slice($OeuvresParType[$type], 0, 10); // Max 10 œuvres par type
        ?>
        <h2><?php echo htmlspecialchars($type); ?></h2>
        <div class="slider-wrapper">
            <button class="slider-btn slider-prev" onclick="slideCarousel(this, -1)">❮</button>
            <div class="slider-container">
                <div class="slider-track">
                    <?php foreach ($oeuvresType as $index => $oeuvre) { ?>
                        <a href="index.php?p=oeuvre&id=<?php echo array_search($oeuvre, $Oeuvres); ?>" style="text-decoration: none; color: inherit;">
                            <div class="slider-item">
                                <div class="oeuvre-card">
                                    <div class="oeuvre-image">
                                        <img src="../../../assets/Janus-Bee/<?php echo htmlspecialchars($oeuvre['image']); ?>" alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
                                    </div>
                                    <div class="oeuvre-info">
                                        <h3><?php echo strtoupper_fr_simple(strlen($oeuvre['titre']) > 23 ? substr($oeuvre['titre'], 0, 20) . '...' : $oeuvre['titre']); ?></h3>
                                        <?php if (isset($oeuvre['titres_alternatifs'][0])) { ?>
                                            <p class="titre-secondaire"><?php echo htmlspecialchars(strlen($oeuvre['titres_alternatifs'][0]) > 30 ? substr($oeuvre['titres_alternatifs'][0], 0, 27) . '...' : $oeuvre['titres_alternatifs'][0]); ?></p>
                                        <?php } ?>
                                        <div class="oeuvre-details">
                                            <div class="detail-section">
                                                <div class="detail-titre">GENRES</div>
                                                <div class="detail-contenu"><?php 
                                                    $genresText = implode(', ', $oeuvre['genres']);
                                                    echo strlen($genresText) > 60 ? substr($genresText, 0, 57) . '...' : $genresText;
                                                ?></div>
                                            </div>
                                            <div class="detail-section">
                                                <div class="detail-titre">TYPES</div>
                                                <div class="detail-contenu"><?php 
                                                    $typesText = implode(', ', $oeuvre['types']);
                                                    echo strlen($typesText) > 40 ? substr($typesText, 0, 37) . '...' : $typesText;
                                                ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            </div>
            <button class="slider-btn slider-next" onclick="slideCarousel(this, 1)">❯</button>
        </div>
        <?php
    }
}
?>
<div>
    <a href="index.php?p=catalogue" class="bouton-accueil">Accéder à l'ensemble des œuvres</a>
</div>

<script>
function slideCarousel(button, direction) {
    const wrapper = button.closest('.slider-wrapper');
    const track = wrapper.querySelector('.slider-track');
    const itemWidth = wrapper.querySelector('.slider-item').offsetWidth;
    const containerWidth = wrapper.querySelector('.slider-container').offsetWidth;
    const visibleItems = Math.floor(containerWidth / itemWidth);
    
    track.scrollBy({
        left: direction * itemWidth * visibleItems,
        behavior: 'smooth'
    });
}
</script>
