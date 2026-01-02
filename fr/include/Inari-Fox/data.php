<?php
    $Categories=array(
        "Petit-déjeuner / Goûter",
        "Apéritif",
        "Entrée",
        "Plat principal",
        "Composant de plat (protéine)",
        "Composant de plat (légume)",
        "Composant de plat (féculent)",
        "Dessert",
    );

    $Unites=array(
        "g",
        "kg",
        "ml",
        "cl",
        "l",
        "unite",
        "cas",
        "cac"
    );

    $Difficultes=array(
        "Facile",
        "Moyen",
        "Difficile"
    );

    $NiveauxNutritionnels=array(
        "A",
        "B",
        "C",
        "D",
        "E"
    );

    $Ingredients=array(

    );

    $Recettes=array(
        #Petit-déjeuner
        #Apéritif / Amuse-bouche
        #Entrée
        #Plat principal
        #Composant de plat (protéine)
        #Composant de plat (légume)
        #Composant de plat (féculent)
        array(
            "nom" => "Gratin Dauphinois",
            "categorie" => "Composant de plat (féculent)",
            "difficulte" => "Facile",
            "niveau_nutritionnel" => "C",
            "nb_personnes" => 4,
            "quantite_modifiable" => true,
            "temps_prepa" => 20,
            "temps_cuisson" => 50,
            "image" => "img/gratin.jpg",
            "ingredients" => array(
                array("nom" => "Pommes de terre", "qte" => 1, "unite" => "kg"),
                array("nom" => "Crème liquide", "qte" => 400, "unite" => "ml"),
                array("nom" => "Gousse d'ail", "qte" => 1, "unite" => "unite")

            ),
            "etapes" => array(
                "Éplucher les pommes de terre...",
                "Frotter le plat avec l'ail...",
                "Verser la crème et enfourner..."
            )
        )
        
        #Dessert
        #Goûter / Encas
    );

?>