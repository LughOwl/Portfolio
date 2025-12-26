<?php
// Initialiser les filtres
$typesFiltres = isset($_GET['types']) ? $_GET['types'] : array();
$genresFiltres = isset($_GET['genres']) ? $_GET['genres'] : array();
$texteRecherche = isset($_GET['texteRecherche']) ? trim($_GET['texteRecherche']) : '';

// Filtrer les œuvres
$oeuvresFiltrees = array();

foreach ($Oeuvres as $id => $oeuvre) {
    $matchType = true;
    $matchGenre = true;
    $matchTexte = true;
    
    // Vérifier le filtre type - LOGIQUE ET (tous les types sélectionnés doivent être présents)
    if (!empty($typesFiltres)) {
        $matchType = true; // On part du principe que ça match
        foreach ($typesFiltres as $typeFiltre) {
            if (!in_array($typeFiltre, $oeuvre['types'])) {
                $matchType = false; // Si un type sélectionné n'est pas présent, ça ne match pas
                break;
            }
        }
    }
    
    // Vérifier le filtre genre - LOGIQUE ET (tous les genres sélectionnés doivent être présents)
    if (!empty($genresFiltres)) {
        $matchGenre = true; // On part du principe que ça match
        foreach ($genresFiltres as $genreFiltre) {
            if (!in_array($genreFiltre, $oeuvre['genres'])) {
                $matchGenre = false; // Si un genre sélectionné n'est pas présent, ça ne match pas
                break;
            }
        }
    }
    
    // Vérifier le filtre texte
    if (!empty($texteRecherche)) {
        $matchTexte = false;
        $texteLower = strtolower($texteRecherche);
        
        // Rechercher dans le titre principal
        if (strpos(strtolower($oeuvre['titre']), $texteLower) !== false) {
            $matchTexte = true;
        }
        
        // Rechercher dans les titres alternatifs
        if (!$matchTexte && !empty($oeuvre['titres_alternatifs'])) {
            foreach ($oeuvre['titres_alternatifs'] as $titreAlt) {
                if (strpos(strtolower($titreAlt), $texteLower) !== false) {
                    $matchTexte = true;
                    break;
                }
            }
        }
    }
    
    // Ajouter l'œuvre si elle correspond à tous les filtres
    if ($matchType && $matchGenre && $matchTexte) {
        $oeuvresFiltrees[$id] = $oeuvre;
    }
}

// Trier les œuvres par titre alphabétique
uasort($oeuvresFiltrees, function($a, $b) {
    return strcasecmp($a['titre'], $b['titre']);
});

$nombreResultats = count($oeuvresFiltrees);
?>

<div class="catalogue-container-main">
    <h1>Catalogue des Œuvres</h1>
    
    <div class="catalogue-content">
        <!-- Section filtres à gauche -->
        <div class="filtres-section">
            <form method="GET" action="index.php" class="filtres-form" id="filtresForm">
                <input type="hidden" name="p" value="catalogue">
                
                <!-- Filtre Types -->
                <div class="filtre-groupe">
                    <div class="filtre-titre" onclick="toggleFiltre('types-filtre')">
                        <span>TYPES</span>
                        <span class="filtre-fleche">▲</span>
                    </div>
                    <div class="filtre-options" id="types-filtre">
                        <?php foreach ($Types as $type): ?>
                            <div class="checkbox-option">
                                <input type="checkbox" 
                                       id="type_<?php echo htmlspecialchars(str_replace(' ', '_', $type)); ?>" 
                                       name="types[]" 
                                       value="<?php echo htmlspecialchars($type); ?>"
                                       <?php if (in_array($type, $typesFiltres)) echo 'checked'; ?>
                                       onchange="document.getElementById('filtresForm').submit()">
                                <label for="type_<?php echo htmlspecialchars(str_replace(' ', '_', $type)); ?>">
                                    <?php echo htmlspecialchars($type); ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Filtre Genres -->
                <div class="filtre-groupe">
                    <div class="filtre-titre" onclick="toggleFiltre('genres-filtre')">
                        <span>GENRES</span>
                        <span class="filtre-fleche">▲</span>
                    </div>
                    <div class="filtre-options" id="genres-filtre">
                        <?php foreach ($Genres as $genre): ?>
                            <div class="checkbox-option">
                                <input type="checkbox" 
                                       id="genre_<?php echo htmlspecialchars(str_replace(' ', '_', $genre)); ?>" 
                                       name="genres[]" 
                                       value="<?php echo htmlspecialchars($genre); ?>"
                                       <?php if (in_array($genre, $genresFiltres)) echo 'checked'; ?>
                                       onchange="document.getElementById('filtresForm').submit()">
                                <label for="genre_<?php echo htmlspecialchars(str_replace(' ', '_', $genre)); ?>">
                                    <?php echo htmlspecialchars($genre); ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <!-- Bouton de réinitialisation -->
                <a href="index.php?p=catalogue" class="filtre-reset">Réinitialiser tous les filtres</a>
            </form>
        </div>
        
        <!-- Section résultats à droite -->
        <div class="resultats-section">
            <!-- Barre de recherche et validation -->
            <div class="recherche-validation">
                <form method="GET" action="index.php" class="recherche-form">
                    <input type="hidden" name="p" value="catalogue">
                    
                    <!-- Transmettre les filtres types -->
                    <?php foreach ($typesFiltres as $type): ?>
                        <input type="hidden" name="types[]" value="<?php echo htmlspecialchars($type); ?>">
                    <?php endforeach; ?>
                    
                    <!-- Transmettre les filtres genres -->
                    <?php foreach ($genresFiltres as $genre): ?>
                        <input type="hidden" name="genres[]" value="<?php echo htmlspecialchars($genre); ?>">
                    <?php endforeach; ?>
                    
                    <div class="recherche-input-container">
                        <input type="text" 
                               name="texteRecherche" 
                               class="recherche-input-catalogue" 
                               placeholder="Rechercher par titre ou titre alternatif..." 
                               value="<?php echo htmlspecialchars($texteRecherche); ?>">
                        <button type="submit" class="recherche-btn-catalogue">
                            Valider la recherche
                        </button>
                    </div>
                </form>
            </div>
            
            <!-- Nombre de résultats -->
            <div class="nombre-resultats">
                <strong><?php echo $nombreResultats; ?> œuvre(s) trouvée(s)</strong>
            </div>
            
            <!-- Liste des œuvres -->
            <div class="oeuvres-liste">
                <?php if ($nombreResultats > 0): ?>
                    <?php foreach ($oeuvresFiltrees as $id => $oeuvre): ?>
                        <a href="index.php?p=oeuvre&id=<?php echo $id; ?>" class="catalogue-lien-oeuvre">
                            <div class="catalogue-carte-oeuvre">
                                <div class="catalogue-image">
                                    <img src="../../../assets/Janus-Bee/<?php echo htmlspecialchars($oeuvre['image']); ?>" 
                                        alt="<?php echo htmlspecialchars($oeuvre['titre']); ?>">
                                </div>
                                <div class="catalogue-info">
                                    <h3 class="catalogue-titre"><?php echo strtoupper_fr_simple(strlen($oeuvre['titre']) > 23 ? substr($oeuvre['titre'], 0, 20) . '...' : $oeuvre['titre']); ?></h3>
                                    <?php if (isset($oeuvre['titres_alternatifs'][0])): ?>
                                        <p class="catalogue-titre-secondaire">
                                            <?php echo htmlspecialchars(strlen($oeuvre['titres_alternatifs'][0]) > 30 ? substr($oeuvre['titres_alternatifs'][0], 0, 27) . '...' : $oeuvre['titres_alternatifs'][0]); ?>
                                        </p>
                                    <?php endif; ?>
                                    <div class="catalogue-details">
                                        <div class="catalogue-detail-section">
                                            <div class="catalogue-detail-titre">GENRES</div>
                                            <div class="catalogue-detail-contenu"><?php 
                                                $genresText = implode(', ', $oeuvre['genres']);
                                                echo strlen($genresText) > 60 ? substr($genresText, 0, 57) . '...' : $genresText;
                                            ?></div>
                                        </div>
                                        <div class="catalogue-detail-section">
                                            <div class="catalogue-detail-titre">TYPES</div>
                                            <div class="catalogue-detail-contenu"><?php 
                                                $typesText = implode(', ', $oeuvre['types']);
                                                echo strlen($typesText) > 40 ? substr($typesText, 0, 37) . '...' : $typesText;
                                            ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="aucun-resultat">
                        <p>Aucune œuvre ne correspond à vos critères de recherche.</p>
                        <a href="index.php?p=catalogue" class="retour-catalogue">Voir toutes les œuvres</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<script>
function toggleFiltre(id) {
    const filtre = document.getElementById(id);
    const fleche = filtre.previousElementSibling.querySelector('.filtre-fleche');
    
    if (filtre.style.display === 'none' || filtre.style.display === '') {
        filtre.style.display = 'block';
        fleche.textContent = '▲';
    } else {
        filtre.style.display = 'none';
        fleche.textContent = '▼';
    }
}

// Initialiser les filtres (tout afficher par défaut)
document.addEventListener('DOMContentLoaded', function() {
    // Afficher tous les filtres par défaut
    document.getElementById('types-filtre').style.display = 'block';
    document.getElementById('genres-filtre').style.display = 'block';
});
</script>