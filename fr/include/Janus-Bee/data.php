<?php
    $Types=array(
        "Série d'animation",
        "Film d'animation",
        "Série live",
        "Film live",
        "Court métrage",
        "Livre",
        "Jeu vidéo"
    );
    $Genres=array(
        "Action",
        "Aventure",
        "Combat",
        "Comédie",
        "Cuisine",
        "Drame",
        "Espace",
        "Fantastique",
        "Fantasy",
        "Guerre",
        "Historique",
        "Horreur",
        "Médical",
        "Mystère",
        "Policier",
        "Politique",
        "Psychologie",
        "Romance",
        "Science-fiction",
        "Société",
        "Sport",
        "Super-héros",
        "Surnaturel",
        "Thriller",
        "Tranche de vie"
    );
    $Oeuvres=array(
        # Série d'animation (principalement)
        array(
            "titre" => "L'Attaque des Titans",
            "titres_alternatifs" => array(
                "Shingeki no Kyojin",
                "SnK",
                "Attack on Titan"
            ),
            "image" => "attack_on_titan.jpg",
            "types" => array(
                "Série d'animation", 
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Guerre", 
                "Horreur", 
                "Mystère", 
                "Politique"
            ),
            "sortie" => "2013 à 2023",
            "status" => "Terminé",
            "duree" => "24 min pour 88 épisodes, 2 épisodes spéciaux de 60-85 min et 4 films récapitulatifs",
            "synopsis" => "Dans un monde ravagé par des titans mangeurs d'hommes, les derniers survivants de l'humanité vivent retranchés derrière trois murs immenses. Après avoir assisté impuissant à la mort de sa mère lors d'une brèche dans le mur, le jeune Eren Jäger jure d'exterminer jusqu'au dernier des titans. Mais alors qu'il rejoint l'armée, il découvre que l'origine des monstres et la survie de l'humanité cachent des secrets bien plus sombres et politiques qu'imaginé."
        ),
        array(
            "titre" => "Made in Abyss",
            "image" => "made_in_abyss.jpg",
            "types" => array(
                "Série d'animation", 
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Horreur", 
                "Mystère"
            ),
            "sortie" => "2017 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 25 épisodes et 1 film suite de 105 min (L'Aurore de l'âme profonde)",
            "synopsis" => "À la surface d'une île isolée se trouve l'Abysse, une faille gigantesque et mystérieuse qui s'enfonce dans les profondeurs de la terre. Riko, une jeune orpheline, rêve de devenir une grande cavernière comme sa mère et d'explorer ses profondeurs malgré la 'Malédiction de l'Abysse'. Un jour, elle découvre Reg, un petit garçon qui semble être un robot doté de technologies oubliées. Ensemble, ils décident de descendre au fond du gouffre, un voyage sans retour rempli de merveilles magnifiques et de cruautés insoutenables."
        ),
        array(
            "titre" => "Orb: On the Movements of the Earth",
            "titres_alternatifs" => array(
                "Chi: Chikyuu no Ondou ni Tsuite",
                "Chi - Du mouvement de la Terre"
            ),
            "image" => "chi_movements_earth.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Drame",
                "Historique",
                "Psychologie",
                "Société",
                "Thriller"
            ),
            "sortie" => "2024 - 2025",
            "status" => "Terminé",
            "duree" => "25 épisodes",
            "synopsis" => "Dans l'Europe du XVe siècle, toute théorie contredisant la doctrine religieuse de l'Église est considérée comme une hérésie passible du bûcher. L'astronomie est alors limitée au modèle géocentrique (la Terre est au centre de l'Univers). Rafal, un jeune prodige destiné à des études de théologie, rencontre un savant hérétique qui lui confie des recherches sur l'héliocentrisme. Fasciné par la beauté mathématique de cette vérité interdite, Rafal et d'autres individus après lui vont risquer leur vie pour prouver que la Terre tourne autour du Soleil, déclenchant une course contre la montre et l'Inquisition pour transmettre ce savoir aux générations futures."
        ),
        array(
            "titre" => "Vinland Saga",
            "image" => "vinland_saga.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure", 
                "Drame", 
                "Guerre", 
                "Historique", 
                "Politique"
            ),
            "sortie" => "2019 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 48 épisodes",
            "synopsis" => "Dans l'Europe du XIe siècle, alors que les Vikings étendent leur domination, le jeune Thorfinn s'enrôle dans une bande de mercenaires pour accomplir une vengeance personnelle contre leur chef. Plongé au cœur d'un conflit sanglant pour le trône d'Angleterre, il devra survivre aux guerres et aux complots politiques, tout en cherchant un sens à sa vie au-delà de la haine, vers une terre légendaire nommée Vinland."
        ),
        array(
            "titre" => "To Your Eternity",
            "titres_alternatifs" => array(
                "Fumetsu no Anata e"
            ),
            "image" => "to_your_eternity.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Psychologie",
                "Surnaturel"
            ),
            "sortie" => "2021 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 40 épisodes",
            "synopsis" => "Une entité immortelle et amorphe est envoyée sur Terre. Capable de prendre la forme de tout ce qui lui donne une stimulation forte, elle commence son voyage sous l'aspect d'une pierre, puis d'un loup, avant de rencontrer un jeune garçon solitaire. À travers les siècles et les rencontres, cette créature apprend ce que signifie être humain, découvrant la joie, la douleur et le cycle éternel de la vie et de la mort."
        ),
        array(
            "titre" => "Psycho-Pass",
            "image" => "psycho_pass.jpg",
            "types" => array(
                "Série d'animation", 
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Policier", 
                "Politique", 
                "Psychologie", 
                "Science-fiction", 
                "Thriller"
            ),
            "sortie" => "2012 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24-45 min pour 41 épisodes et environ 100 min pour 4 films",
            "synopsis" => "Dans un futur proche, le système Sybil régit la société japonaise en mesurant instantanément l'état mental et la dangerosité de chaque citoyen : le Psycho-Pass. Akane Tsunemori, une jeune inspectrice novice, intègre la Brigade de Sécurité Publique pour traquer les individus dont le 'Coefficient de Criminalité' dépasse la norme. Entre éthique et justice, elle devra collaborer avec des Exécuteurs — des criminels latents — pour confronter les failles d'un système qui prétend garantir une paix parfaite."
        ),
        array(
            "titre" => "Golden Kamui",
            "image" => "golden_kamui.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Comédie", 
                "Cuisine", 
                "Guerre", 
                "Historique", 
                "Mystère"
            ),
            "sortie" => "2018 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 49 épisodes",
            "synopsis" => "Au début du XXe siècle, après la guerre russo-japonaise, Saichi Sugimoto, surnommé 'l'Immortel', survit tant bien que mal à Hokkaido. Lorsqu'il entend parler d'un trésor en or dérobé au peuple Aïnu dont la carte a été tatouée sur le corps de prisonniers en fuite, il se lance dans une quête effrénée. Épaulé par Ashirpa, une jeune fille aïnoue experte en survie, il devra affronter la nature sauvage et des factions militaires prêtes à tout pour s'emparer du butin."
        ),
        array(
            "titre" => "Legend of the Galactic Heroes",
            "titres_alternatifs" => array(
                "Ginga Eiyuu Densetsu",
                "Die Neue These"
            ),
            "image" => "legend_of_the_galactic_heroes.jpg",
            "types" => array(
                "Série d'animation", 
                "Film d'animation"
            ),
            "genres" => array(
                "Drame", 
                "Espace", 
                "Guerre", 
                "Philosophie", 
                "Politique", 
                "Science-fiction"
            ),
            "sortie" => "1988 à 1997 (OAV) / 2018 à aujourd'hui (Remake)",
            "status" => "Terminé (OAV) / En cours (Remake)",
            "duree" => "110 épisodes (OAV), 48+ épisodes (Remake) et 3 films d'animation",
            "synopsis" => "Dans un futur lointain, l'humanité est déchirée par une guerre civile qui dure depuis 150 ans entre l'Empire Galactique et l'Alliance des Planètes Libres. Le conflit atteint un tournant historique avec l'ascension simultanée de deux génies tactiques : Reinhard von Lohengramm, un noble ambitieux qui souhaite renverser la monarchie impériale, et Yang Wen-li, un historien malgré lui qui défend les idéaux fragiles de la démocratie. À travers leurs duels stratégiques, c'est le destin de la galaxie et la confrontation entre autocratie et liberté qui se jouent."
        ),
        array(
            "titre" => "Dungeon Meshi",
            "titres_alternatifs" => array(
                "Gloutons & Dragons",
                "Delicious in Dungeon"
            ),
            "image" => "dungeon_meshi.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure", 
                "Comédie", 
                "Cuisine", 
                "Fantastique", 
                "Fantasy"
            ),
            "sortie" => "2024 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 24 épisodes",
            "synopsis" => "Après avoir été mis en déroute par un dragon au fond d'un donjon et perdu toutes leurs ressources, le guerrier Laios et son équipe doivent d'urgence retourner sauver l'un des leurs. Sans argent ni nourriture, ils prennent une décision inédite : survivre en mangeant les monstres qu'ils combattront en chemin. Guidés par Senshi, un nain expert en gastronomie du donjon, ils découvrent que derrière chaque créature dangereuse se cache peut-être un plat délicieux, tout en levant le voile sur les secrets de ce labyrinthe magique."
        ),
        array(
            "titre" => "Sousou no Frieren",
            "titres_alternatifs" => array(
                "Frieren: Beyond Journey's End"
            ),
            "image" => "sousou_no_frieren.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantasy", 
                "Philosophie",
                "Tranche de vie"
            ),
            "sortie" => "2023 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 28 épisodes",
            "synopsis" => "L'elfe mage Frieren et ses compagnons d'aventure rentrent victorieux après avoir vaincu le Roi des Démons. La paix est revenue, mais pour une elfe à la longévité exceptionnelle, les dix années de quête ne représentent qu'un battement de cils. Après avoir vu ses amis vieillir et s'éteindre les uns après les autres, Frieren réalise avec regret qu'elle n'a jamais cherché à les comprendre. Elle entame alors un nouveau voyage sur les traces de son passé pour apprendre à mieux connaître le cœur des humains et la valeur du temps qui passe."
        ),
        array(
            "titre" => "The Fable",
            "image" => "the_fable.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Comédie", 
                "Policier",
                "Tranche de vie"
            ),
            "sortie" => "2024 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 25 épisodes",
            "synopsis" => "Fable est un tueur à gages légendaire craint par toute la pègre japonaise pour son efficacité redoutable. Cependant, son patron, estimant qu'il travaille trop, lui donne un ordre inédit : vivre une année entière à Osaka comme un civil normal, sans tuer personne, sous peine de mort. Sous le nom d'Akira Sato, ce génie du meurtre doit alors apprendre à gérer les interactions sociales, trouver un travail honnête et ignorer les provocations des yakuzas locaux qui croisent son chemin."
        ),
        array(
            "titre" => "Kengan Ashura",
            "image" => "kengan_ashura.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Combat", 
                "Politique",
                "Sport"
            ),
            "sortie" => "2019 à 2024",
            "status" => "Terminé",
            "duree" => "24 min pour 52 épisodes",
            "synopsis" => "Depuis l'ère Edo, les litiges entre grandes entreprises japonaises se règlent dans des arènes de combat clandestines. Les PDG parient d'énormes sommes et des contrats stratégiques sur des combattants d'élite lors de duels sans merci appelés matchs 'Kengan'. Tokita Ohma, un guerrier mystérieux surnommé Ashura, entre dans ce monde brutal sous l'égide du groupe Nogi. Son objectif est simple : prouver qu'il est le plus fort, tout en naviguant au milieu des complots financiers et des gladiateurs aux techniques surhumaines."
        ),
        array(
            "titre" => "One Piece",
            "image" => "one_piece.jpg",
            "types" => array(
                "Série d'animation", 
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Comédie", 
                "Fantasy", 
                "Politique"
            ),
            "sortie" => "1999 à aujourd'hui",
            "status" => "En cours",
            "duree" => "24 min pour 1100+ épisodes et environ 90 min pour 15 films",
            "synopsis" => "Monkey D. Luffy, un jeune garçon dont le corps est devenu élastique, part à l'aventure pour devenir le Roi des Pirates. Accompagné de son équipage, il parcourt Grand Line à la recherche du trésor ultime, le One Piece, tout en défiant les puissances mondiales et les mystères d'un monde vaste et dangereux."
        ),
        array(
            "titre" => "Dragon's Dogma",
            "image" => "dragons_dogma.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure", 
                "Drame", 
                "Fantasy", 
                "Psychologie"
            ),
            "sortie" => "2020",
            "status" => "Terminé",
            "duree" => "24 min pour 7 épisodes",
            "synopsis" => "Après plus de cent ans d'absence, un dragon dévastateur réapparaît et attaque le village de Cassardis. Ethan, un habitant courageux, tente de protéger sa famille mais le dragon lui déchire la poitrine et dévore son cœur. Miraculeusement revenu à la vie en tant qu'Insurget (Arisen), Ethan entame un voyage périlleux à travers un monde médiéval fantastique pour récupérer son cœur. Accompagné d'un Pion, un être dévoué à sa protection, il devra affronter les démons qui croisent sa route tout en luttant contre la part d'ombre qui grandit en lui."
        ),
        array(
            "titre" => "Fullmetal Alchemist: Brotherhood",
            "titres_alternatifs" => array(
                "FMAB",
                "Hagane no Renkinjutsushi"
            ),
            "image" => "fmab.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Drame", 
                "Fantastique", 
                "Guerre",
                "Politique"
            ),
            "sortie" => "2009 à 2010",
            "status" => "Terminé",
            "duree" => "24 min pour 64 épisodes",
            "synopsis" => "Dans le pays d'Amestris, l'alchimie est une science régie par la loi de l'Échange Équivalent. Après avoir tenté de transgresser l'interdit ultime pour ressusciter leur mère, les jeunes frères Edward et Alphonse Elric en paient le prix fort : Edward perd deux membres et Alphonse perd son corps entier. Devenus alchimistes d'État, ils parcourent le pays à la recherche de la Pierre Philosophale pour retrouver leurs corps originels, découvrant au passage un complot militaire d'une ampleur nationale."
        ),
        array(
            "titre" => "Last Hero Inuyashiki",
            "image" => "inuyashiki.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Policier", 
                "Psychologie", 
                "Science-fiction", 
                "Thriller"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "24 min pour 11 épisodes",
            "synopsis" => "Ichiro Inuyashiki est un vieil homme méprisé par sa famille et diagnostiqué d'un cancer incurable. Alors qu'il pleure son sort dans un parc, il est frappé par une explosion d'origine extraterrestre. À son réveil, son corps a été remplacé par une machine de guerre surpuissante dissimulée sous son apparence humaine. Il décide d'utiliser ses nouveaux pouvoirs pour faire le bien et sauver des vies. Mais il n'était pas seul au moment de l'impact : Hiro Shishigami, un lycéen sociopathe, a subi la même transformation et a choisi d'utiliser sa puissance pour semer le chaos."
        ),
        array(
            "titre" => "Monster",
            "image" => "monster.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Drame", 
                "Historique", 
                "Médical", 
                "Policier",
                "Psychologie", 
                "Thriller"
            ),
            "sortie" => "2004 à 2005",
            "status" => "Terminé",
            "duree" => "24 min pour 74 épisodes",
            "synopsis" => "Kenzo Tenma est un neurochirurgien japonais brillant travaillant en Allemagne. Un soir, il choisit de suivre son éthique en opérant un jeune garçon blessé par balle à la tête, Johan, plutôt que le maire de la ville arrivé plus tard. Ce choix lui coûte sa carrière, mais des années après, il découvre l'horrible vérité : l'enfant qu'il a sauvé est devenu un monstre froid et charismatique responsable d'une série de meurtres terrifiants. Accusé à tort de ces crimes, Tenma s'engage dans une traque à travers l'Europe pour réparer son erreur et mettre fin aux agissements de Johan."
        ),
        array(
            "titre" => "Mushishi",
            "image" => "mushishi.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Historique", 
                "Philosophie", 
                "Psychologie",
                "Surnaturel",
                "Tranche de vie"
            ),
            "sortie" => "2005 à 2014",
            "status" => "Terminé",
            "duree" => "24 min pour 46 épisodes",
            "synopsis" => "Les Mushi sont des formes de vie primitives, situées entre le monde des vivants et celui des esprits, souvent invisibles pour le commun des mortels. Parfois, leur existence entre en conflit avec celle des humains, provoquant des phénomènes étranges ou des maladies inexpliquées. Ginko, un expert itinérant appelé 'Mushi-shi', voyage à travers le Japon rural pour étudier ces créatures et aider les personnes affectées. Au fil de ses rencontres, il cherche moins à éradiquer les Mushi qu'à trouver un moyen pour que l'homme et la nature coexistent en harmonie."
        ),
        array(
            "titre" => "Hunter x Hunter",
            "image" => "hxh_2011.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Politique",
                "Psychologie"
            ),
            "sortie" => "2011",
            "status" => "Terminé",
            "duree" => "148 épisodes",
            "synopsis" => "Gon Freecss est un jeune garçon qui rêve de devenir un Hunter, un aventurier d'élite, pour retrouver son père qui l'a abandonné. Pour cela, il doit passer un examen extrêmement dangereux où il se lie d'amitié avec Killua, Kurapika et Leorio. Mais derrière les épreuves de force se cache un monde d'une complexité rare, régi par le 'Nen' (l'énergie vitale). La quête de Gon l'entraînera face à des organisations criminelles, des jeux virtuels mortels et une espèce de mutants menaçant l'humanité, l'obligeant à questionner sa propre morale et les fondements politiques du monde."
        ),
        array(
            "titre" => "Megalo Box",
            "image" => "megalobox.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Psychologie",
                "Société",
                "Sport"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "26 épisodes",
            "synopsis" => "Dans un futur proche où la société est divisée entre les citoyens riches et les non-citoyens vivant dans des bidonvilles, la boxe a évolué en 'Megalobox', une discipline où les combattants sont équipés d'exosquelettes métalliques appelés Gears. 'Junk Dog', un boxeur des bas-fonds qui survit en truquant des combats, décide de tout risquer en participant au tournoi mondial Megalonia sous le nom de 'Joe'. Pour prouver sa valeur, il choisit de combattre sans Gear, comptant uniquement sur sa force brute et sa volonté face à des adversaires technologiquement supérieurs."
        ),
        array(
            "titre" => "Texhnolyze",
            "image" => "texhnolyze.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2003",
            "status" => "Terminé",
            "duree" => "22 épisodes",
            "synopsis" => "Dans la cité souterraine de Lukuss, une ville délabrée sans soleil, trois factions se disputent le contrôle : une organisation mafieuse, une secte de fanatiques et un groupe de rebelles. Ichise, un boxeur amputé de ses membres après un combat clandestin, reçoit des prothèses cybernétiques expérimentales (Texhnolyze). Alors qu'il tente de survivre dans cet environnement violent, il rencontre Ran, une jeune fille capable de voir l'avenir. Ensemble, ils seront les témoins impuissants de l'effondrement inévitable de leur monde et de l'extinction lente de l'humanité."
        ),
        array(
            "titre" => "Death Note",
            "image" => "death_note.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Policier",
                "Politique",
                "Psychologie",
                "Surnaturel"
            ),
            "sortie" => "2006",
            "status" => "Terminé",
            "duree" => "37 épisodes",
            "synopsis" => "Light Yagami est un lycéen brillant qui juge le monde actuel corrompu. Sa vie bascule lorsqu'il ramasse le Death Note, un carnet perdu par un dieu de la mort. Chaque personne dont le nom est écrit dans ce carnet meurt. Light décide d'utiliser ce pouvoir pour éliminer les criminels et créer un monde parfait dont il serait le dieu. Mais ses actions attirent l'attention d'Interpol et du mystérieux détective L. Un duel intellectuel acharné s'engage alors entre les deux génies, où la moindre erreur d'identité ou de psychologie est fatale."
        ),
        array(
            "titre" => "91 Days",
            "image" => "91_days.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Historique",
                "Policier",
                "Psychologie"
            ),
            "sortie" => "2016",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "En pleine Prohibition aux États-Unis, la ville de Lawless est régie par la mafia et le trafic d'alcool. Sept ans après avoir vu sa famille massacrée par la famille Vanetti, Avilio Bruno reçoit une lettre mystérieuse qui ravive son désir de vengeance. Il infiltre alors l'organisation criminelle en se liant d'amitié avec Nero, le fils du parrain Vanetti. Pendant 91 jours, il va naviguer entre trahisons et meurtres de sang-froid, menant une lutte psychologique intense où sa propre humanité s'efface au profit de sa quête destructrice."
        ),
        array(
            "titre" => "Babylon",
            "image" => "babylon_anime.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Policier",
                "Politique",
                "Psychologie",
                "Thriller"
            ),
            "sortie" => "2019",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Zen Seizaki, procureur au sein du nouveau district de Shinzen à Tokyo, enquête sur une affaire de fraude pharmaceutique. Il découvre rapidement un complot bien plus vaste lié à une élection locale et à la création d'une loi révolutionnaire visant à légaliser le suicide. Au centre de ce chaos se trouve Ai Magase, une femme mystérieuse dotée d'une capacité de manipulation terrifiante, capable de pousser n'importe qui à mettre fin à ses jours par la simple parole. La série explore la frontière ténue entre le bien et le mal, et questionne la valeur de la vie face à la liberté absolue."
        ),
        array(
            "titre" => "Death Parade",
            "image" => "death_parade.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Drame",
                "Mystère",
                "Psychologie",
                "Surnaturel",
                "Thriller"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Après la mort, les humains arrivent au Quindecim, un bar mystérieux tenu par Decim, un arbitre dépourvu d'émotions. Les défunts, ignorant leur propre mort, sont forcés de participer à des jeux de bar (fléchettes, billard, bowling) où leurs vies sont mises en jeu. Ces jeux sont des rituels destinés à révéler la véritable nature de leur âme en les poussant dans leurs derniers retranchements psychologiques. Selon leur comportement, l'arbitre décide s'ils seront réincarnés ou envoyés dans le néant. L'arrivée d'une assistante humaine va cependant bousculer ce système de jugement froid et impartial."
        ),
        array(
            "titre" => "Ergo Proxy",
            "image" => "ergo_proxy.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Mystère",
                "Politique",
                "Psychologie",
                "Science-fiction"
            ),
            "sortie" => "2006",
            "status" => "Terminé",
            "duree" => "23 épisodes",
            "synopsis" => "Dans la cité dôme de Romdo, l'un des derniers refuges de l'humanité après une catastrophe écologique mondiale, humains et androïdes (AutoReivs) cohabitent dans un ordre social strict et aseptisé. Re-l Mayer, une inspectrice du Bureau d'Investigation, enquête sur le virus 'Cogito' qui confère une conscience aux robots. Sa rencontre avec une créature monstrueuse appelée 'Proxy' et un immigré nommé Vincent Law va la pousser à quitter la cité pour découvrir la vérité sur l'origine des dômes et la nature réelle des Proxies. Le récit explore les thèmes de l'existence, de l'identité et du créateur."
        ),
        array(
            "titre" => "Kekkai Sensen",
            "titres_alternatifs" => array(
                "Blood Blockade Battlefront"
            ),
            "image" => "kekkai_sensen.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Surnaturel",
                "Société"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "24 épisodes (2 saisons)",
            "synopsis" => "Il y a trois ans, une brèche entre la Terre et l'au-delà s'est ouverte au-dessus de New York, emprisonnant les humains et des créatures monstrueuses dans une bulle impénétrable. Rebaptisée Hellsalem's Lot, la ville est devenue un joyeux chaos où le paranormal est quotidien. Leonardo Watch, un jeune photographe ayant obtenu les 'Yeux de Dieu' au prix de la vue de sa sœur, rejoint l'organisation secrète Libra. Cette force d'élite lutte pour maintenir l'équilibre dans cette ville déjantée, affrontant des vampires millénaires et des menaces terroristes interdimensionnelles."
        ),
        array(
            "titre" => "L'Odyssée de Kino",
            "titres_alternatifs" => array(
                "Kino no Tabi",
                "Kino's Journey"
            ),
            "image" => "kino_no_tabi.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure",
                "Mystère",
                "Psychologie",
                "Société",
                "Tranche de vie"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Kino est une jeune voyageuse qui parcourt un monde parsemé de pays-cités uniques, accompagnée de Hermès, une moto parlante. Sa règle d'or est de ne jamais rester plus de trois jours dans un même endroit, un laps de temps qu'elle juge suffisant pour apprendre l'essentiel sur les coutumes locales. Chaque pays visité possède ses propres lois, technologies et morales, souvent poussées à l'extrême (un pays où la douleur est partagée, un autre où le meurtre est légal, etc.). Kino observe ces sociétés sans jamais porter de jugement, témoignant de la beauté et de la cruauté inhérentes à la nature humaine."
        ),
        array(
            "titre" => "Mob Psycho 100",
            "titres_alternatifs" => array(
                "Mobu Saiko Hyaku"
            ),
            "image" => "mob_psycho_100.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Psychologie",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2016 - 2022",
            "status" => "Terminé",
            "duree" => "37 épisodes (3 saisons)",
            "synopsis" => "Shigeo Kageyama, surnommé 'Mob', est un collégien doté de pouvoirs psychiques dévastateurs. Convaincu que ses capacités ne le rendent pas supérieur aux autres, il mène une vie effacée et travaille pour Reigen Arataka, un mentor charismatique mais dépourvu de pouvoirs. Mob tente de réprimer ses émotions pour garder le contrôle, mais lorsqu'une jauge interne atteint 100%, une puissance incontrôlable se déchaîne. La série suit son apprentissage de la vie, entre affrontements contre des organisations secrètes et quête de maturité émotionnelle."
        ),
        array(
            "titre" => "One Punch Man",
            "image" => "one_punch_man.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Société",
                "Super-héros"
            ),
            "sortie" => "2015 - En cours",
            "status" => "En cours",
            "duree" => "24 épisodes + OAV",
            "synopsis" => "Saitama est un jeune homme sans emploi qui, après un entraînement rigoureux, est devenu si puissant qu'il peut terrasser n'importe quel adversaire d'un seul coup de poing. Cependant, cette force écrasante est devenue une source de frustration : il ne ressent plus aucune excitation lors de ses combats et s'ennuie profondément. En rejoignant l'Association des Héros, il découvre un système bureaucratique obsédé par les classements et l'image publique. Saitama cherche désespérément un adversaire à sa mesure tout en gérant son quotidien de héros blasé et méconnu."
        ),
        array(
            "titre" => "Ranking of Kings",
            "titres_alternatifs" => array(
                "Ousama Ranking"
            ),
            "image" => "ousama_ranking.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure",
                "Drame",
                "Fantasy",
                "Politique"
            ),
            "sortie" => "2021",
            "status" => "Terminé",
            "duree" => "23 épisodes",
            "synopsis" => "Bojji est le prince aîné du royaume dirigé par le roi Boss, mais il est sourd, muet et si chétif qu'il ne peut même pas soulever une épée. Malgré les moqueries de son peuple et de sa cour, il rêve de devenir le plus grand des rois. Sa rencontre avec Ombre, le dernier survivant d'un clan d'assassins, marque le début d'une aventure épique. Ensemble, ils devront naviguer au milieu des complots politiques de la famille royale et découvrir les secrets sombres qui lient le destin de son père à des forces démoniaques."
        ),
        array(
            "titre" => "Saga of Tanya the Evil",
            "titres_alternatifs" => array(
                "Youjo Senki",
                "Tanya la Maléfique"
            ),
            "image" => "tanya_the_evil.jpg",
            "types" => array(
                "Série d'animation",
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Guerre",
                "Politique",
                "Psychologie"
            ),
            "sortie" => "2017",
            "status" => "En cours",
            "duree" => "12 épisodes + Film",
            "synopsis" => "Un salarié japonais froid et pragmatique, sur le point d'être tué par un employé licencié, est défié par une entité se présentant comme Dieu (l'Être X). Pour le punir de son athéisme et de son manque d'empathie, l'Être X le réincarne dans la peau de Tanya Degurechaff, une jeune orpheline dans un monde alternatif en pleine guerre mondiale, où la magie est utilisée comme arme de pointe. Conservant son esprit de logicien impitoyable, Tanya s'engage dans l'armée impériale. Son but : grimper les échelons le plus vite possible pour vivre en sécurité à l'arrière, tout en menant un bras de fer idéologique contre la divinité qui tente de briser sa volonté."
        ),
        array(
            "titre" => "Overlord",
            "image" => "overlord.jpg",
            "types" => array(
                "Série d'animation",
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantasy",
                "Politique"
            ),
            "sortie" => "2015 - En cours",
            "status" => "En cours",
            "duree" => "52 épisodes (4 saisons) + Film",
            "synopsis" => "En l'an 2138, le jeu de réalité virtuelle Yggdrasil ferme ses portes. Momonga, chef de la guilde Ainz Ooal Gown, reste connecté jusqu'à la dernière seconde. À sa surprise, il ne déconnecte pas, mais se retrouve transporté avec son quartier général, le Grand Tombeau de Nazarick, dans un nouveau monde. Les PNJ (personnages non-joueurs) ont désormais une conscience propre et lui vouent une loyauté absolue. Sous le nom de Ainz Ooal Gown, cet être aux pouvoirs divins décide de conquérir ce monde, non par simple méchanceté, mais pour asseoir la sécurité de sa guilde et retrouver d'éventuels anciens compagnons."
        ),
        array(
            "titre" => "Tokyo Ghoul",
            "image" => "tokyo_ghoul.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Horreur",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "48 épisodes (4 saisons)",
            "synopsis" => "À Tokyo, des créatures nommées 'Ghouls' vivent parmi les humains tout en se nourrissant de leur chair. Ken Kaneki, un étudiant timide, survit de justesse à une attaque mais devient un hybride mi-humain mi-ghoul après une transplantation d'organes d'urgence. Rejeté par les deux mondes, il doit apprendre à maîtriser ses nouveaux instincts de prédateur tout en travaillant au café l'Antique, un refuge pour ghouls pacifistes. Alors que la police spéciale (CCG) intensifie sa traque, Kaneki se retrouve au centre d'un conflit sanglant qui remet en question la définition même de l'humanité."
        ),
        array(
            "titre" => "Violet Evergarden",
            "image" => "violet_evergarden.jpg",
            "types" => array(
                "Série d'animation",
                "Film d'animation"
            ),
            "genres" => array(
                "Drame",
                "Psychologie",
                "Société",
                "Tranche de vie"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "13 épisodes + Spécial + 2 Films",
            "synopsis" => "Après quatre années de conflit sanglant, la Grande Guerre prend fin. Violet, une jeune fille élevée uniquement pour être une arme humaine, se retrouve seule et amputée de ses deux bras, remplacés par des prothèses métalliques. Incapable de comprendre les derniers mots de son supérieur, le Major Gilbert : 'Je t'aime', elle décide de devenir une 'Poupée de Souvenirs Automatiques'. Son travail consiste à rédiger des lettres pour des clients afin de retranscrire leurs sentiments les plus profonds. À travers ses rencontres, Violet entame un long chemin vers la compréhension des émotions humaines et la guérison de ses propres blessures."
        ),
        array(
            "titre" => "Zankyou no Terror",
            "titres_alternatifs" => array(
                "Terror in Resonance"
            ),
            "image" => "zankyou_no_terror.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Policier",
                "Politique",
                "Psychologie",
                "Thriller"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "11 épisodes",
            "synopsis" => "Un jour d'été, une explosion terroriste ravage Tokyo. Les coupables sont deux adolescents se faisant appeler 'Sphinx', qui postent des énigmes sur Internet avant chaque attentat. Nine et Twelve, deux garçons au passé mystérieux issus d'une installation secrète, ne cherchent pas à tuer, mais à réveiller une société endormie et à révéler une vérité occulte liée à l'histoire sombre du Japon. Ils croisent la route de Lisa, une lycéenne harcelée, et de Shibazaki, un détective brillant relégué aux archives, qui est le seul capable de déchiffrer leurs intentions réelles."
        ),
        array(
            "titre" => "Demon Slayer",
            "titres_alternatifs" => array(
                "Kimetsu no Yaiba"
            ),
            "image" => "demon_slayer.jpg",
            "types" => array(
                "Série d'animation",
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Surnaturel"
            ),
            "sortie" => "2019 - En cours",
            "status" => "En cours",
            "duree" => "55+ épisodes (4 saisons) + Films",
            "synopsis" => "Le Japon, au début de l'ère Taisho. Tanjirō, un jeune marchand de charbon au cœur pur, retrouve sa famille massacrée par un démon. Seule sa petite sœur Nezuko a survécu, mais elle a été transformée en démon. Pour trouver un remède et rendre son humanité à sa sœur, Tanjirō rejoint l'Armée des Pourfendeurs de Démons. Armé de sa lame du Soleil et de sa maîtrise de la respiration de l'eau, il entame un voyage périlleux pour traquer Muzan Kibutsuji, le progéniteur de tous les démons, tout en protégeant Nezuko qui refuse de dévorer les humains."
        ),
        array(
            "titre" => "Shoushimin Series",
            "titres_alternatifs" => array(
                "How to Become Ordinary"
            ),
            "image" => "shoushimin_series.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Psychologie",
                "Société",
                "Tranche de vie"
            ),
            "sortie" => "2024 - 2025",
            "status" => "Terminé",
            "duree" => "20 épisodes (2 saisons)",
            "synopsis" => "Jougorou Kobato et Yuki Osanai sont deux lycéens qui partagent un secret : par le passé, ils ont tous deux souffert de leurs personnalités excessives. Pour survivre paisiblement au lycée, ils concluent un pacte : devenir des 'petits bourgeois' (shoushimin) exemplaires, discrets et sans histoires. Cependant, malgré leurs efforts, de petits mystères du quotidien ne cessent de se dresser sur leur chemin. La seconde saison approfondit la fracture entre leur désir de normalité et leur nature profonde, culminant lors d'un incident majeur durant les vacances d'été qui remet en question l'honnêteté de leur relation."
        ),
        array(
            "titre" => "Jujutsu Kaisen",
            "image" => "jujutsu_kaisen.jpg",
            "types" => array(
                "Série d'animation",
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2020 - En cours",
            "status" => "En cours",
            "duree" => "47 épisodes (2 saisons) + Film",
            "synopsis" => "Dans un monde où les émotions négatives des humains (peur, haine, regret) se matérialisent en fléaux monstrueux et meurtriers, Yuji Itadori est un lycéen à la force physique hors norme. Pour sauver ses amis d'une malédiction, il avale une relique de classe S : le doigt de Ryomen Sukuna, le Roi des Fléaux. Devenu l'hôte de cette entité maléfique, il est condamné à mort par les hautes instances de l'exorcisme. Sous la tutelle de Satoru Gojo, l'exorciste le plus puissant, il rejoint l'école d'exorcisme de Tokyo pour traquer les autres doigts de Sukuna et protéger les humains, tout en luttant contre l'obscurité qui grandit en lui."
        ),
        array(
            "titre" => "Sakuna: Of Rice and Ruin",
            "titres_alternatifs" => array(
                "Tensui no Sakuna-hime"
            ),
            "image" => "sakuna_rice_and_ruin.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Comédie",
                "Fantasy",
                "Société"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "13 épisodes",
            "synopsis" => "Sakuna est une déesse des moissons capricieuse et paresseuse qui vit dans le confort du royaume céleste. Après avoir accidentellement causé un incendie et laissé des humains s'introduire dans le domaine des dieux, elle est bannie sur l'Île des Démons. Sa mission : purifier l'île de ses monstres tout en cultivant du riz pour assurer sa survie et celle du groupe d'humains qui l'accompagne. Sa force étant directement liée à la qualité de sa récolte, elle doit apprendre l'humilité et la rigueur du travail de la terre. C'est le début d'une aventure où agriculture et combat s'entremêlent pour redonner un sens à sa divinité."
        ),
        array(
            "titre" => "Negative Positive Angler",
            "titres_alternatifs" => array(
                "NegaPosi Angler"
            ),
            "image" => "negaposi_angler.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Drame",
                "Psychologie",
                "Société",
                "Tranche de vie",
                "Sport"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Tsunehiro Sasaki est un étudiant au fond du gouffre : on lui diagnostique une maladie terminale lui laissant peu de temps à vivre, et il est harcelé par des créanciers à cause de dettes massives. Alors qu'il s'apprête à commettre l'irréparable, il tombe accidentellement à l'eau et est sauvé par un groupe de passionnés de pêche. Malgré son tempérament négatif, il se laisse entraîner dans ce loisir qu'il ne connaît pas. Entre le silence de l'eau et l'adrénaline de la prise, Tsunehiro commence à tisser des liens et à redonner une valeur à chaque minute qui lui reste, transformant son pessimisme radical en une forme de résilience."
        ),
        array(
            "titre" => "The Weakest Tamer Began a Journey to Pick Up Trash",
            "titres_alternatifs" => array(
                "Saijaku Tamer",
                "La dresseuse la plus faible"
            ),
            "image" => "saijaku_tamer.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure",
                "Fantasy",
                "Psychologie",
                "Société",
                "Tranche de vie"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Dans un monde où les compétences et les étoiles définissent la valeur d'une personne, Ivy naît 'Sans-Étoile', la classe la plus faible possible. Rejetée par son village et sa propre famille qui voient en elle un signe de malheur, elle s'enfuit dans la forêt pour survivre. Elle y apprivoise Sora, un slime si faible qu'il peut mourir au moindre choc. Ensemble, cette petite fille traumatisée et ce monstre fragile entament un voyage à travers le royaume, survivant grâce à la récupération de déchets et de ressources oubliées, tout en découvrant que la gentillesse existe encore dans les marges de la société."
        ),
        array(
            "titre" => "Parasyte: The Maxim",
            "titres_alternatifs" => array(
                "Kiseijuu: Sei no Kakuritsu",
                "Parasite"
            ),
            "image" => "parasyte.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Horreur",
                "Psychologie",
                "Science-fiction"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "24 épisodes",
            "synopsis" => "De mystérieuses sphères tombent sur Terre, libérant des parasites qui prennent possession des cerveaux humains pour se nourrir de leurs semblables. Shinichi Izumi, un lycéen, parvient à empêcher le parasite de remonter jusqu'à son cerveau, mais celui-ci fusionne avec sa main droite. Baptisé Migi, le parasite développe une intelligence propre et une logique purement biologique. Contraints de cohabiter pour survivre, Shinichi et Migi affrontent d'autres parasites infiltrés dans la société, tout en se demandant qui, de l'humain ou du monstre, est le véritable prédateur de la planète."
        ),
        array(
            "titre" => "Sengoku Youko",
            "image" => "sengoku_youko.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Drame",
                "Fantasy"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "37 épisodes (3 parties)",
            "synopsis" => "Durant l'ère Sengoku, le monde est divisé entre les humains et les Katawara (monstres). Tama est une renarde spirituelle qui adore les humains, tandis que son frère adoptif Jinka est un humain qui les déteste et aspire à devenir un monstre. Ensemble, ils parcourent le pays pour punir ceux qui font le mal, qu'ils soient démons ou humains corrompus. Leur quête les mène à affronter l'armée des moines Dangaku, qui mène des expériences atroces pour créer des hybrides. Ce qui débute comme une simple croisade se transforme en une guerre sainte s'étendant sur plusieurs décennies, changeant le destin du Japon et la nature même des protagonistes."
        ),
        array(
            "titre" => "As a Reincarnated Aristocrat, I'll Use My Appraisal Skill to Rise in the World",
            "titres_alternatifs" => array(
                "Tensei Kizoku, Kantei Skill de Nariagaru",
                "L'Aristocrate réincarné"
            ),
            "image" => "tensei_kizoku.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Aventure",
                "Fantasy",
                "Politique",
                "Société"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "24 épisodes (2 saisons)",
            "synopsis" => "Un salarié japonais ordinaire meurt et se réincarne dans le corps d'Ars Louvent, le jeune héritier d'une petite famille noble dans un monde de fantasy. Bien qu'il n'ait aucun talent particulier pour la magie ou l'épée, il possède une compétence unique : 'Évaluation'. Cela lui permet de voir les statistiques et le potentiel caché de n'importe qui. Réalisant que son territoire est menacé par une guerre de succession imminente, Ars décide de parcourir le pays pour recruter les génies les plus méprisés par la société (étrangers, orphelins, parias) afin de transformer son petit domaine en une puissance militaire et économique incontournable."
        ),
        array(
            "titre" => "Hell's Paradise",
            "titres_alternatifs" => array(
                "Jigokuraku",
                "Le Paradis de l'Enfer"
            ),
            "image" => "jigokuraku.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantasy",
                "Horreur"
            ),
            "sortie" => "2023 - 2025",
            "status" => "Terminé",
            "duree" => "26 épisodes (2 saisons)",
            "synopsis" => "À la fin de l'ère Edo, Gabimaru 'Le Vide', ninja assassin légendaire, survit à toutes ses exécutions. Sagiri Yamada Asaemon lui offre une grâce s'il ramène l'élixir d'immortalité de l'île mystérieuse de Shinsenkyo. La seconde saison voit l'intensification des combats contre les Tensen et l'arrivée d'une nouvelle vague de bourreaux et de criminels. Gabimaru et ses alliés doivent maîtriser le 'Tao' pour espérer quitter cet enfer floral où la frontière entre la vie, la mort et la divinité s'efface totalement."
        ),
        array(
            "titre" => "Solo Leveling",
            "image" => "solo_leveling.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantasy"
            ),
            "sortie" => "2024 - 2025",
            "status" => "En cours",
            "duree" => "25 épisodes (2 saisons)",
            "synopsis" => "Plus de dix ans après l'apparition de 'portails' connectant notre monde à des dimensions peuplées de monstres, certains humains ont éveillé des pouvoirs surnaturels : les Chasseurs. Sung Jinwoo est connu comme 'le plus faible de toute l'humanité'. Lors d'un raid qui tourne au massacre dans un double donjon, il est laissé pour mort. C'est alors qu'une interface mystérieuse, le 'Système', le choisit comme unique joueur. Contrairement aux autres chasseurs dont le niveau est fixe, Jinwoo peut désormais monter de niveau en accomplissant des quêtes. Mais ce pouvoir solitaire cache une vérité sombre sur l'origine des portails et le prix de sa propre humanité."
        ),
        array(
            "titre" => "Ishura",
            "image" => "ishura.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Fantasy",
                "Politique",
                "Guerre"
            ),
            "sortie" => "2024 - 2025",
            "status" => "En cours",
            "duree" => "24 épisodes (2 saisons)",
            "synopsis" => "Le Roi Démon a été vaincu, mais personne ne sait par qui. Dans un monde désormais sans ennemi commun, une multitude de 'Shura' (des guerriers aux pouvoirs divins dépassant l'entendement) émergent. Pour déterminer qui est le Véritable Héros capable de stabiliser le monde, un tournoi titanesque est organisé. Entre un escrimeur venu d'un autre monde, une mercenaire capable de contrôler les wyvernes, ou un squelette assassin, les alliances se nouent et se brisent. Mais derrière cette compétition se cachent des complots politiques visant à remodeler l'ordre mondial au prix de millions de vies.",
        ),
        array(
            "titre" => "The Promised Neverland",
            "titres_alternatifs" => array(
                "Yakusoku no Neverland"
            ),
            "image" => "the_promised_neverland.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Thriller",
                "Mystère",
                "Horreur"
            ),
            "sortie" => "2019 - 2021",
            "status" => "Terminé",
            "duree" => "23 épisodes (2 saisons)",
            "synopsis" => "Emma, Norman et Ray sont les trois enfants les plus brillants de l'orphelinat Grace Field House. Sous l'œil bienveillant de leur 'Maman', Isabella, ils mènent une vie idyllique faite d'amour et de tests intellectuels. Cependant, leur monde s'écroule lorsqu'ils découvrent la vérité : l'orphelinat est une ferme d'élevage et ils sont du bétail destiné à être dévoré par des démons. Pour survivre, ils doivent élaborer un plan d'évasion impossible, transformant leur foyer en un échiquier mortel où l'intelligence est leur seule arme contre la trahison et les murs qui les entourent."
        ),
        array(
            "titre" => "Kaiju No. 8",
            "image" => "kaiju_no_8.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Science-fiction",
                "Comédie"
            ),
            "sortie" => "2024 - 2025",
            "status" => "En cours (Saison 2)",
            "duree" => "24+ épisodes",
            "synopsis" => "Le Japon est le pays au monde avec le plus haut taux d'apparition de Kaiju, des monstres géants dévastateurs. Kafka Hibino, 32 ans, a abandonné son rêve d'intégrer les Forces de Défense pour finir nettoyeur de cadavres de monstres. Alors qu'il décide de tenter sa chance une dernière fois, une petite créature s'introduit dans son corps et le transforme en un hybride homme-kaiju d'une puissance phénoménale. Désormais traqué par les forces qu'il voulait rejoindre sous le nom de 'Kaiju n°8', il doit cacher son identité tout en combattant pour protéger l'humanité aux côtés de son amie d'enfance devenue commandante."
        ),
        array(
            "titre" => "Ameku Takao's Detective Karte",
            "titres_alternatifs" => array(
                "Ameku Takao no Suiri Karte",
                "Les dossiers médicaux d'Ameku Takao"
            ),
            "image" => "ameku_takao.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Médical",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2025",
            "status" => "En cours",
            "duree" => "12 épisodes",
            "synopsis" => "Au département de diagnostic de l'hôpital général de Tenma, la directrice Takao Ameku est un génie certifié. Dotée d'une intelligence hors norme mais d'un tempérament difficile, elle refuse de traiter les maladies ordinaires pour se concentrer sur les 'cas impossibles'. Meurtres déguisés en maladies, apparitions de fantômes dans les couloirs ou patients aux symptômes inexplicables : Ameku voit là où la science échoue et où la logique humaine vacille. Accompagnée par son assistant dévoué Katsumi Kanno, elle utilise ses connaissances encyclopédiques pour prouver que derrière chaque mystère 'surnaturel' se cache une vérité biologique ou psychologique."
        ),
        array(
            "titre" => "Lazarus",
            "image" => "lazarus.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Science-fiction",
                "Thriller"
            ),
            "sortie" => "2025",
            "status" => "En cours",
            "duree" => "13 épisodes",
            "synopsis" => "En 2052, le monde vit une ère de paix et de santé sans précédent grâce au 'Hapuna', un médicament miracle mis au point par le Dr Skinner, un neuroscientifique nobélisé. Mais après avoir disparu pendant trois ans, Skinner réapparaît avec une annonce terrifiante : le Hapuna a une demi-vie courte et tous ceux qui l'ont pris mourront dans 30 jours. Face à cette extinction imminente, une unité spéciale de 5 agents nommée 'Lazarus' est rassemblée pour traquer Skinner et trouver un remède avant que le compte à rebours n'atteigne zéro."
        ),
        array(
            "titre" => "To Be Hero X",
            "image" => "to_be_hero_x.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Science-fiction",
                "Société",
                "Super-héros"
            ),
            "sortie" => "2025",
            "status" => "En cours",
            "duree" => "24 épisodes",
            "synopsis" => "Dans une métropole futuriste, les héros ne sont plus de simples justiciers, mais des célébrités classées selon leurs accomplissements et la ferveur de leurs fans. X est un héros mystérieux qui occupe la place de 'N°1' depuis deux ans, mais personne ne l'a jamais vu combattre. Le monde est obsédé par ce classement qui dicte la valeur sociale de chaque individu. Entre combats clandestins, manipulations médiatiques et quête d'identité, la série suit l'ascension de challengers prêts à tout pour détrôner l'élite, tout en questionnant ce que signifie réellement 'être un héros' dans un monde où tout est spectacle."
        ),
        array(
            "titre" => "Kijin Gentoushou",
            "titres_alternatifs" => array(
                "Sword of the Demon Hunter",
                "Chroniques du chasseur de démons"
            ),
            "image" => "kijin_gentoushou.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantasy",
                "Historique"
            ),
            "sortie" => "2024 - 2025",
            "status" => "En cours",
            "duree" => "24 épisodes (Saison 1)",
            "synopsis" => "Durant l'ère Edo, dans le village de Kadono, Jinta est chargé de protéger la prêtresse du sanctuaire local. Lors d'une chasse aux démons dans la forêt, il rencontre un démon mystérieux qui lui révèle une vérité terrifiante : dans un futur lointain, Jinta deviendra lui-même un démon et dévorera celle qu'il s'est juré de protéger. Commence alors un voyage temporel et spirituel s'étendant sur 170 ans, de l'époque des samouraïs jusqu'à l'ère moderne, où Jinta traque les démons tout en luttant contre sa propre nature monstrueuse et le poids des siècles qui voient ses proches disparaître les uns après les autres."
        ),
        array(
            "titre" => "Takopi's Sin",
            "titres_alternatifs" => array(
                "Takopi no Genzai",
                "Le Péché de Takopi"
            ),
            "image" => "takopi_no_genzai.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Drame",
                "Psychologie",
                "Société",
                "Mystère",
                "Horreur"
            ),
            "sortie" => "2025",
            "status" => "Terminé",
            "duree" => "12 épisodes",
            "synopsis" => "Takopi est un petit alien joyeux venu de la planète Happy pour répandre le bonheur sur Terre. Il rencontre Shizuka, une écolière qui ne sourit jamais. Pensant qu'il s'agit d'un simple problème de communication, Takopi utilise ses gadgets futuristes pour l'aider. Mais l'alien ignore tout de la noirceur humaine : Shizuka est victime de harcèlement scolaire extrême et de violences domestiques. En tentant maladroitement de 'réparer' sa vie, Takopi déclenche une spirale de tragédies, de meurtres et de manipulations temporelles, découvrant que le bonheur ne peut pas être imposé là où la société est brisée."
        ),
        array(
            "titre" => "Gachiakuta",
            "image" => "gachiakuta.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Fantasy",
                "Société"
            ),
            "sortie" => "2025",
            "status" => "En cours",
            "duree" => "24 épisodes (Saison 1)",
            "synopsis" => "Dans une cité flottante, tout ce qui est considéré comme déchet est jeté dans l'Abîme. Rudo, un habitant des bidonvilles accusé à tort, survit à sa chute dans ce gouffre. Il y découvre les 'Nettoyeurs' et le pouvoir des Jinkis : des objets imprégnés d'une âme. Fort de cette découverte, il entame une ascension sanglante pour renverser le système qui l'a banni. Cette première saison de 24 épisodes suit son initiation au sein des Nettoyeurs et ses premiers affrontements majeurs contre les Vandales dans les profondeurs de l'Abîme."
        ),
        array(
            "titre" => "Dorohedoro",
            "image" => "dorohedoro.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Action",
                "Fantasy",
                "Horreur"
            ),
            "sortie" => "2020 - 2025",
            "status" => "En cours (Saison 2)",
            "duree" => "24+ épisodes",
            "synopsis" => "Dans une ville délabrée nommée 'The Hole', les mages s'entraînent sur les habitants en les transformant en cobayes pour leur magie. Caiman, un homme dont la tête a été changée en celle d'un lézard et qui a perdu la mémoire, traque ces mages avec son amie Nikaido. À l'intérieur de sa bouche se cache un autre homme qui juge les mages pour trouver celui responsable de son état. Entre combats sanglants, dégustation de gyozas et rituels magiques absurdes, Caiman plonge dans les secrets des deux mondes pour découvrir qui il est réellement."
        ),
        array(
            "titre" => "Les Carnets de l'Apothicaire",
            "titres_alternatifs" => array(
                "Kusuriya no Hitorigoto",
                "The Apothecary Diaries"
            ),
            "image" => "kusuriya_no_hitorigoto.jpg",
            "types" => array(
                "Série d'animation"
            ),
            "genres" => array(
                "Mystère",
                "Historique",
                "Médical",
                "Politique",
                "Psychologie"
            ),
            "sortie" => "2023 - 2025",
            "status" => "En cours (Saison 2)",
            "duree" => "48 épisodes",
            "synopsis" => "Dans une Chine impériale fictive, Maomao, une jeune apothicaire du quartier des plaisirs, est enlevée et vendue comme servante au palais impérial. Elle tente de rester discrète, mais sa curiosité et son expertise des poisons la poussent à résoudre une mystérieuse maladie frappant les héritiers du trône. Remarquée par Jinshi, un eunuque aussi beau qu'influent, elle est promue goûteuse personnelle de la favorite de l'Empereur. Entre tentatives d'assassinat, secrets de famille et épidémies, Maomao utilise la logique et la science pour naviguer dans les eaux troubles de la Cour Intérieure."
        ),
        #Film d'animation
        array(
            "titre" => "Le Tombeau des Lucioles",
            "titres_alternatifs" => array(
                "Hotaru no Haka",
                "Grave of the Fireflies"
            ),
            "image" => "le_tombeau_des_lucioles.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Drame",
                "Guerre",
                "Historique"
            ),
            "sortie" => "1988",
            "status" => "Terminé",
            "duree" => "89 minutes",
            "synopsis" => "Japon, été 1945. Après le bombardement incendiaire de la ville de Kobe par l'aviation américaine, Seita, un adolescent de quatorze ans, et sa petite sœur Setsuko se retrouvent orphelins. Face à l'indifférence de leur famille élargie et à la famine qui ronge le pays, ils se réfugient dans un abri désaffecté. Là, ils tentent de survivre seuls, entre moments de grâce illuminés par les lucioles et la dure réalité d'une guerre qui ne leur laisse aucune issue."
        ),
        array(
            "titre" => "Le Château Ambulant",
            "titres_alternatifs" => array(
                "Howl's Moving Castle",
                "Hauru no Ugoku Shiro"
            ),
            "image" => "chateau_ambulant.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Fantasy",
                "Romance",
                "Surnaturel"
            ),
            "sortie" => "2004",
            "status" => "Terminé",
            "duree" => "119 minutes",
            "synopsis" => "Sophie, une jeune fille discrète travaillant dans une boutique de chapeaux, voit sa vie basculer lorsqu'une sorcière jalouse lui jette un sort la transformant en vieille femme. Incapable de révéler sa situation, elle s'enfuit et trouve refuge dans l'étrange demeure du célèbre magicien Hauru : un château mécanique capable de se déplacer. Dans ce chaos magique, et alors que la guerre menace d'embraser le monde, Sophie tente de briser sa malédiction avec l'aide d'un démon du feu nommé Calcifer et d'un épouvantail bondissant."
        ),
        array(
            "titre" => "Le Voyage de Chihiro",
            "titres_alternatifs" => array(
                "Spirited Away",
                "Sen to Chihiro no Kamikakushi"
            ),
            "image" => "voyage_de_chihiro.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Fantasy",
                "Surnaturel"
            ),
            "sortie" => "2001",
            "status" => "Terminé",
            "duree" => "125 minutes",
            "synopsis" => "Alors qu'elle s'apprête à emménager avec ses parents dans une nouvelle ville, la jeune Chihiro se retrouve piégée dans un monde peuplé d'esprits et de divinités. Après que ses parents ont été transformés en cochons par la sorcière Yubaba, la fillette doit travailler dans un immense établissement de bains thermaux pour les dieux. Pour survivre et sauver sa famille, elle devra surmonter ses peurs, changer de nom et apprendre à naviguer dans cet univers fantastique régi par des règles mystérieuses et parfois cruelles."
        ),
        array(
            "titre" => "Princesse Mononoké",
            "titres_alternatifs" => array(
                "Mononoke Hime",
                "Princess Mononoke"
            ),
            "image" => "princesse_mononoke.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Fantastique", 
                "Fantasy", 
                "Guerre",
                "Historique",
                "Surnaturel"
            ),
            "sortie" => "1997",
            "status" => "Terminé",
            "duree" => "134 minutes",
            "synopsis" => "Dans le Japon médiéval, le jeune prince Ashitaka est frappé d'une malédiction mortelle en tuant un dieu-sanglier possédé par un démon. Pour trouver un remède, il part vers l'Ouest et se retrouve au cœur d'un conflit sanglant entre les humains de la cité des Forges, menés par Dame Eboshi, et les dieux de la forêt, menés par San, une jeune fille sauvage élevée par les loups. Entre le progrès industriel destructeur et la fureur de la nature, Ashitaka tente désespérément de trouver une voie de coexistence."
        ),
        array(
            "titre" => "Berserk : L'Âge d'Or (Trilogie)",
            "titres_alternatifs" => array(
                "Berserk: Ougon Jidai-hen",
                "L'Œuf du Roi Conquérant / La Bataille de Doldrey / L'Avent"
            ),
            "image" => "berserk_trilogy.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Drame", 
                "Fantasy", 
                "Guerre",
                "Horreur",
                "Surnaturel"
            ),
            "sortie" => "2012 à 2013",
            "status" => "Terminé",
            "duree" => "Environ 280 min (total pour les 3 films)",
            "synopsis" => "Guts est un mercenaire solitaire dont la vie change le jour où il croise la route de Griffith, le charismatique leader de la Brigade des Faucons. Impressionné par la force de Guts, Griffith le force à rejoindre ses rangs. Ensemble, ils enchaînent les victoires sur les champs de bataille, grimpant les échelons de la noblesse. Mais derrière l'ambition démesurée de Griffith et les exploits guerriers de Guts se cache une destinée tragique, impliquant des forces surnaturelles démoniaques et un artefact mystérieux : le Beherit."
        ),
        array(
            "titre" => "Les Contes de Terremer",
            "titres_alternatifs" => array(
                "Tales from Earthsea",
                "Gedo Senki"
            ),
            "image" => "contes_de_terremer.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Fantasy", 
                "Philosophie",
                "Surnaturel"
            ),
            "sortie" => "2006",
            "status" => "Terminé",
            "duree" => "115 minutes",
            "synopsis" => "Dans le monde de Terremer, l'équilibre de la nature s'effondre : les récoltes périclitent et les dragons, qui ne devraient pas quitter leur domaine, s'entredévorent. L'archimage Épervier parcourt le monde pour trouver la source de ce mal. En chemin, il rencontre Arren, un prince tourmenté fuyant son passé et une ombre mystérieuse. Ensemble, ils vont devoir affronter le sorcier Aranea, un être obsédé par l'immortalité qui menace d'ouvrir les portes entre le monde des vivants et celui des morts."
        ),
        array(
            "titre" => "Nausicaä de la Vallée du Vent",
            "titres_alternatifs" => array(
                "Kaze no Tani no Naushika",
                "Nausicaä of the Valley of the Wind"
            ),
            "image" => "nausicaa.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Guerre",
                "Politique",
                "Science-fiction"
            ),
            "sortie" => "1984",
            "status" => "Terminé",
            "duree" => "117 minutes",
            "synopsis" => "Mille ans après l'effondrement de la civilisation industrielle lors des 'Sept Jours de Feu', la Terre est recouverte par la Fukai, une forêt toxique géante protégée par des insectes géants, les Ômus. Les quelques survivants humains se déchirent pour les dernières terres fertiles. Nausicaä, princesse de la Vallée du Vent, possède le don de communiquer avec la faune et la flore. Tandis que l'empire de Tolmèque tente de ressusciter une arme antique pour détruire la forêt, Nausicaä se bat pour prouver que l'homme et la nature peuvent encore coexister."
        ),
        array(
            "titre" => "Le Garçon et la Bête",
            "titres_alternatifs" => array(
                "Bakemono no Ko",
                "The Boy and the Beast"
            ),
            "image" => "le_garcon_et_la_bete.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Drame", 
                "Fantastique", 
                "Fantasy", 
                "Psychologie"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "119 minutes",
            "synopsis" => "Ren, un jeune garçon de neuf ans solitaire et fugueur, s'égare dans les rues de Shibuya et franchit par hasard une porte vers Jutengai, le monde des Bêtes. Il y rencontre Kumatetsu, une bête féroce et solitaire qui cherche un disciple pour prouver sa valeur et devenir le prochain Grand Maître. Malgré leurs caractères explosifs, l'homme-bête et l'enfant entament un entraînement mutuel qui va durer des années. Mais alors que Ren grandit, il doit faire face à son identité humaine et au vide qui ronge son cœur, menaçant de détruire les deux mondes."
        ),
        array(
            "titre" => "Mon Voisin Totoro",
            "titres_alternatifs" => array(
                "Tonari no Totoro",
                "My Neighbor Totoro"
            ),
            "image" => "mon_voisin_totoro.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure", 
                "Drame",
                "Fantastique", 
                "Surnaturel",
                "Tranche de vie"
            ),
            "sortie" => "1988",
            "status" => "Terminé",
            "duree" => "86 minutes",
            "synopsis" => "Dans le Japon des années 50, deux petites filles, Satsuki et sa sœur Mei, s'installent avec leur père dans une vieille maison à la campagne pour se rapprocher de l'hôpital où leur mère est soignée. Elles découvrent vite que la nature environnante est habitée par des créatures mystérieuses et invisibles aux yeux des adultes, notamment Totoro, un esprit de la forêt géant et protecteur. Ensemble, elles vont vivre un été magique entre l'attente impatiente de leur mère et la découverte des merveilles cachées de la forêt."
        ),
        array(
            "titre" => "Wall-E",
            "image" => "wall_e.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2008",
            "status" => "Terminé",
            "duree" => "1h 38min",
            "synopsis" => "Dans un futur où la Terre est devenue une décharge à ciel ouvert abandonnée par les humains, un petit robot compacteur de déchets nommé Wall-E continue de remplir sa mission, seul, depuis 700 ans. Sa routine est bouleversée par l'arrivée d'Eve, une sonde robotique sophistiquée dont il tombe amoureux. En la suivant à travers la galaxie, il découvre ce qu'est devenue l'humanité : une société sédentaire, obèse et totalement dépendante de la technologie. Wall-E va alors devenir le déclencheur inattendu d'un retour aux sources et d'une prise de conscience écologique globale."
        ),
        array(
            "titre" => "Le Château dans le ciel",
            "titres_alternatifs" => array(
                "Laputa: Castle in the Sky",
                "Tenkuu no Shiro Laputa"
            ),
            "image" => "le_chateau_dans_le_ciel.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Politique",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "1986",
            "status" => "Terminé",
            "duree" => "2h 04min",
            "synopsis" => "Sheeta est la détentrice d'une pierre mystérieuse qui suscite la convoitise de pirates du ciel, les Dorado, mais aussi de l'armée. En tentant de leur échapper, elle fait la connaissance de Pazu, un jeune garçon travaillant dans une cité minière. Ensemble, ils se lancent dans une quête pour retrouver Laputa, une cité légendaire flottant dans les airs, vestige d'une civilisation antique à la technologie surpuissante. Entre épopée aérienne et réflexion sur la nature, ils devront empêcher que le pouvoir destructeur de Laputa ne tombe entre les mains d'un tyran cherchant à dominer le monde."
        ),
        array(
            "titre" => "Ratatouille",
            "image" => "ratatouille.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Aventure",
                "Cuisine",
                "Société"
            ),
            "sortie" => "2007",
            "status" => "Terminé",
            "duree" => "1h 51min",
            "synopsis" => "Rémy est un jeune rat qui rêve de devenir un grand chef cuisinier français, malgré l'opposition de sa famille et le fait que la profession soit le métier le plus fermé au monde pour un rongeur. Installé dans les égouts de Paris, il finit par faire équipe avec Linguini, un jeune commis de cuisine maladroit du prestigieux restaurant de Gusteau. En manipulant les gestes de Linguini sous sa toque, Rémy exprime son génie culinaire. Le film explore le combat pour la reconnaissance du talent, le dépassement des barrières sociales et la quête d'excellence face aux préjugés."
        ),
        array(
            "titre" => "Là-haut",
            "titres_alternatifs" => array(
                "Up"
            ),
            "image" => "la_haut.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Drame",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2009",
            "status" => "Terminé",
            "duree" => "1h 36min",
            "synopsis" => "Carl Fredricksen, un vendeur de ballons retraité de 78 ans, décide de réaliser le rêve de sa défunte épouse : explorer les contrées sauvages d'Amérique du Sud. Pour éviter d'être placé en maison de retraite, il attache des milliers de ballons à sa maison et s'envole vers le ciel. Mais il découvre trop tard qu'il a embarqué par erreur Russell, un jeune scout de 8 ans excessivement optimiste. Ce duo improbable va vivre une aventure extraordinaire, affrontant des chiens parlants et un explorateur déchu, tout en apprenant que l'aventure la plus importante est celle que l'on partage avec les autres."
        ),
        array(
            "titre" => "Kung Fu Panda (Saga)",
            "image" => "kung_fu_panda_saga.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Psychologie",
                "Surnaturel"
            ),
            "sortie" => "2008 - 2024",
            "status" => "En cours",
            "duree" => "4 films (1h 35min par film)",
            "synopsis" => "Po est un panda maladroit et passionné de kung-fu qui travaille dans le restaurant de nouilles de son père. À la surprise générale, il est désigné comme le 'Guerrier Dragon' pour accomplir une prophétie ancienne. Sous la tutelle du Maître Shifu, il doit transformer ses faiblesses en forces pour protéger la Vallée de la Paix contre des menaces redoutables. La saga explore la quête d'identité, la paix intérieure et la maîtrise du 'Chi', montrant que l'héroïsme ne dépend pas de l'apparence physique mais de l'acceptation de sa propre nature."
        ),
        array(
            "titre" => "Your Name",
            "titres_alternatifs" => array(
                "Kimi no Na wa"
            ),
            "image" => "your_name.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Drame",
                "Mystère",
                "Psychologie",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2016",
            "status" => "Terminé",
            "duree" => "1h 46min",
            "synopsis" => "Mitsuha, une lycéenne vivant dans un village rural ancré dans les traditions, rêve d'une vie trépidante à Tokyo. Taki, un lycéen tokyoïte, travaille à temps partiel dans un restaurant italien. Sans se connaître, ils commencent soudainement à échanger leurs corps de manière aléatoire pendant leur sommeil. À travers les notes qu'ils se laissent, un lien profond se tisse. Mais alors qu'ils tentent de se rencontrer physiquement, ils découvrent que leur connexion dépasse les simples frontières géographiques pour s'inscrire dans une faille temporelle liée au passage d'une comète, révélant un enjeu de survie pour tout un village."
        ),
        array(
            "titre" => "Le Monde de Némo",
            "titres_alternatifs" => array(
                "Finding Nemo"
            ),
            "image" => "monde_de_nemo.jpg",
            "types" => array(
                "Film d'animation"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Drame",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2003",
            "status" => "Terminé",
            "duree" => "1h 40min",
            "synopsis" => "Marin est un poisson-clown extrêmement protecteur depuis la perte de sa compagne. Lorsque son fils unique, Némo, est capturé par un plongeur et emmené dans l'aquarium d'un dentiste à Sydney, Marin se lance dans un périple épique à travers l'océan pour le retrouver. Accompagné de Dory, un poisson amnésique et optimiste, il affronte des requins en rédemption, des méduses et des courants marins. Pendant ce temps, Némo et ses compagnons d'infortune organisent leur propre évasion. Ce récit explore le dépassement de la peur, le lâcher-prise parental et la force des liens familiaux."
        ),
        #Série live
        array(
            "titre" => "Breaking Bad",
            "image" => "breaking_bad.jpg",
            "types" => array(
                "Série live"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Policier",
                "Thriller"
            ),
            "sortie" => "2008 à 2013",
            "status" => "Terminé",
            "duree" => "47 min pour 62 épisodes",
            "synopsis" => "Walter White est un professeur de chimie surqualifié mais sous-payé dans un lycée du Nouveau-Mexique. Lorsqu'on lui diagnostique un cancer du poumon en phase terminale, sa vie bascule. Pour assurer l'avenir financier de sa famille après sa mort, il décide d'utiliser ses connaissances scientifiques pour produire la méthamphétamine la plus pure du marché. Associé à Jesse Pinkman, un ancien élève devenu petit trafiquant, il s'enfonce dans le monde criminel d'Albuquerque, entamant une transformation morale irréversible."
        ),
        #Film live
        array(
            "titre" => "La Belle Verte",
            "image" => "la_belle_verte.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Comédie",
                "Philosophie",
                "Science-fiction",
                "Société"
            ),
            "sortie" => "1996",
            "status" => "Terminé",
            "duree" => "99 minutes",
            "synopsis" => "Quelque part dans l'univers existe une planète dont les habitants vivent en harmonie totale avec la nature et ont abandonné toute forme de technologie ou de monnaie. Lors d'une assemblée, Mila, une habitante de cette utopie, se porte volontaire pour se rendre sur Terre, une planète que personne n'a voulu visiter depuis deux cents ans. À travers son regard innocent et ses pouvoirs de 'déconnexion', elle va confronter les absurdités, la pollution et le stress du mode de vie des Parisiens modernes."
        ),
        array(
            "titre" => "Cloud Atlas",
            "image" => "cloud_atlas.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Fantastique", 
                "Historique", 
                "Philosophie", 
                "Science-fiction", 
                "Thriller"
            ),
            "sortie" => "2012",
            "status" => "Terminé",
            "duree" => "172 minutes",
            "synopsis" => "À travers six époques différentes, de 1849 à un futur post-apocalyptique, les destins de plusieurs individus s'entrelacent. Un notaire traversant le Pacifique, un jeune compositeur talentueux, une journaliste enquêtant sur un complot nucléaire, un éditeur âgé piégé dans une maison de retraite, une clone rebelle dans une Corée futuriste et un survivant d'une Terre dévastée. Chaque acte, chaque crime et chaque geste de bonté résonnent à travers les siècles pour influencer le futur, illustrant comment les âmes voyagent et se transforment."
        ),
        array(
            "titre" => "Elysium",
            "image" => "elysium.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Politique", 
                "Science-fiction",
                "Société",
                "Thriller"
            ),
            "sortie" => "2013",
            "status" => "Terminé",
            "duree" => "109 minutes",
            "synopsis" => "En 2154, l'humanité est divisée en deux classes : les plus riches vivent dans une station spatiale luxueuse appelée Elysium, où les maladies sont soignées en quelques secondes, tandis que le reste de la population survit sur une Terre dévastée, surpeuplée et polluée. Max, un ouvrier exposé à une dose mortelle de radiations, n'a que cinq jours pour atteindre la station et se soigner. Pour y parvenir, il accepte une mission désespérée : se faire implanter un exosquelette et pirater le cerveau d'un riche homme d'affaires, se retrouvant au cœur d'une insurrection qui pourrait changer l'ordre du monde."
        ),
        array(
            "titre" => "Forrest Gump",
            "image" => "forrest_gump.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Guerre",
                "Historique",
                "Romance",
                "Tranche de vie"
            ),
            "sortie" => "1994",
            "status" => "Terminé",
            "duree" => "142 minutes",
            "synopsis" => "Assis sur un banc à Savannah, Forrest Gump raconte son incroyable destin aux passants. Bien que doté d'un quotient intellectuel inférieur à la moyenne, Forrest va, sans jamais vraiment s'en rendre compte, devenir un acteur clé des événements marquants des États-Unis entre les années 1950 et 1980. De la guerre du Vietnam aux mouvements hippies, de la rencontre avec Elvis Presley au scandale du Watergate, il traverse l'histoire avec une innocence désarmante, guidé par son amour inconditionnel pour son amie d'enfance, Jenny."
        ),
        array(
            "titre" => "Interstellar",
            "image" => "interstellar.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Philosophie",
                "Science-fiction",
                "Thriller"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "169 minutes",
            "synopsis" => "Dans un futur proche, la Terre est devenue hostile à l'humanité : des tempêtes de poussière ravagent les cultures et l'air devient irrespirable. Cooper, un ancien pilote de la NASA devenu agriculteur, est recruté pour une mission désespérée : piloter un vaisseau spatial à travers un trou de ver apparu près de Saturne. Son but est de trouver une nouvelle planète habitable parmi trois mondes potentiels. Mais ce voyage aux confins de l'espace et du temps l'oblige à laisser ses enfants derrière lui, affrontant la relativité temporelle où une heure sur une planète peut représenter des décennies sur Terre."
        ),
        array(
            "titre" => "Into the Wild",
            "titres_alternatifs" => array(
                "Vers l'inconnu"
            ),
            "image" => "into_the_wild.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Aventure", 
                "Drame", 
                "Historique", 
                "Philosophie", 
                "Société", 
                "Tranche de vie"
            ),
            "sortie" => "2007",
            "status" => "Terminé",
            "duree" => "148 minutes",
            "synopsis" => "Tout juste diplômé de l'université, Christopher McCandless, 22 ans, promet un avenir brillant. Pourtant, tournant le dos à la société de consommation et à une famille dysfonctionnelle, il décide de brûler ses papiers, donne ses économies à une œuvre caritative et part sur les routes sous le nom d'Alexander Supertramp. Son but ultime : l'Alaska, pour vivre en communion totale avec la nature sauvage. Au cours de son périple de deux ans, il fera des rencontres marquantes qui changeront sa vision du monde avant d'affronter l'épreuve finale de la solitude absolue."
        ),
        array(
            "titre" => "I Origins",
            "image" => "i_origins.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame", 
                "Philosophie",  
                "Romance",
                "Science-fiction", 
                "Surnaturel"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "113 minutes",
            "synopsis" => "Ian Gray est un biologiste moléculaire spécialisé dans l'évolution de l'œil humain. Athée convaincu, il cherche à prouver scientifiquement que l'œil a évolué par lui-même, afin de réfuter l'idée d'une création divine. Sa vie bascule lorsqu'il rencontre Sofi, une jeune femme mystique dont il tombe éperdument amoureux malgré leurs visions opposées du monde. Des années après une tragédie, les recherches de Ian le mènent en Inde, où une découverte scientifique sur l'unicité de l'iris suggère que les âmes pourraient se réincarner d'un individu à l'autre."
        ),
        array(
            "titre" => "The Irishman",
            "titres_alternatifs" => array(
                "L'Irlandais"
            ),
            "image" => "the_irishman.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame", 
                "Historique", 
                "Policier", 
                "Politique",
                "Thriller"
            ),
            "sortie" => "2019",
            "status" => "Terminé",
            "duree" => "209 minutes",
            "synopsis" => "Frank Sheeran, un ancien soldat de la Seconde Guerre mondiale devenu chauffeur de camion, fait la connaissance de Russell Bufalino, le chef d'une puissante famille mafieuse. Sheeran monte les échelons et devient un tueur à gages efficace, surnommé 'l'Irlandais'. Son parcours croise celui de Jimmy Hoffa, le charismatique et influent leader du syndicat des camionneurs, lié au crime organisé. Sur plusieurs décennies, le film suit l'implication de Sheeran dans les coulisses de la mafia, la disparition mystérieuse de Hoffa et le poids écrasant des regrets à l'hiver de sa vie."
        ),
        array(
            "titre" => "Joker",
            "image" => "joker.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame", 
                "Policier", 
                "Politique", 
                "Psychologie",
                "Société",
                "Thriller"
            ),
            "sortie" => "2019",
            "status" => "Terminé",
            "duree" => "122 minutes",
            "synopsis" => "Dans les années 80 à Gotham City, Arthur Fleck est un homme méprisé par la société. Humoriste raté travaillant comme clown de rue, il souffre de troubles mentaux et d'un rire compulsif qu'il ne peut contrôler. Entre une mère instable, une ville en pleine déchéance sociale et une solitude écrasante, Arthur bascule peu à peu dans la folie. Un acte de violence déclenche une réaction en chaîne, le transformant en un symbole de rébellion anarchique et donnant naissance au plus célèbre des antagonistes : le Joker."
        ),
        array(
            "titre" => "Matrix",
            "image" => "matrix.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Philosophie", 
                "Science-fiction",
                "Thriller"
            ),
            "sortie" => "1999",
            "status" => "Terminé",
            "duree" => "136 minutes",
            "synopsis" => "Thomas Anderson, un programmeur informatique menant une double vie de hacker sous le pseudonyme de Néo, est contacté par un mystérieux groupe de rebelles mené par Morpheus. Ce dernier lui révèle une vérité impensable : le monde dans lequel il vit n'est qu'une simulation virtuelle appelée la Matrice, créée par des machines pour asservir l'humanité et utiliser son énergie. Néo doit alors choisir entre retourner à sa vie d'illusion ou rejoindre la résistance pour devenir 'L'Élu', celui capable de manipuler le code de la Matrice et de libérer les humains."
        ),
        array(
            "titre" => "Mr. Wolff",
            "titres_alternatifs" => array(
                "The Accountant",
                "Le Comptable"
            ),
            "image" => "mr_wolff.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Policier", 
                "Psychologie", 
                "Thriller"
            ),
            "sortie" => "2016",
            "status" => "Terminé",
            "duree" => "128 minutes",
            "synopsis" => "Christian Wolff est un expert-comptable autiste doté d'une intelligence mathématique hors du commun. Sous l'apparence d'un cabinet de banlieue, il travaille en réalité pour les organisations criminelles les plus dangereuses au monde. Lorsqu'il accepte de vérifier les comptes d'une entreprise de robotique légale pour 'se normaliser', il découvre une fraude massive impliquant plusieurs millions de dollars. Alors qu'il commence à démêler les fils du complot, des tueurs sont envoyés à ses trousses, révélant que Wolff est aussi un redoutable combattant entraîné depuis l'enfance."
        ),
        array(
            "titre" => "Taxi Driver",
            "titres_alternatifs" => array(
                "Chauffeur de taxi"
            ),
            "image" => "taxi_driver.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame", 
                "Historique", 
                "Policier",
                "Psychologie",
                "Société",
                "Thriller"
            ),
            "sortie" => "1976",
            "status" => "Terminé",
            "duree" => "114 minutes",
            "synopsis" => "Travis Bickle, un vétéran de la guerre du Vietnam souffrant d'insomnie chronique, devient chauffeur de taxi de nuit à New York. Confronté quotidiennement à la violence, à la corruption et à ce qu'il perçoit comme la 'lie' de la société, il sombre progressivement dans une solitude paranoïaque. Après avoir échoué à séduire une collaboratrice d'un candidat à la présidentielle, il décide de 'nettoyer' la ville par le sang en s'armant lourdement pour sauver une jeune prostituée de 12 ans, Iris, de son souteneur."
        ),
        array(
            "titre" => "The Revenant",
            "titres_alternatifs" => array(
                "Le Revenant"
            ),
            "image" => "the_revenant.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Drame", 
                "Historique",
                "Thriller"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "156 minutes",
            "synopsis" => "Dans une Amérique sauvage du XIXe siècle, le trappeur Hugh Glass est brutalement attaqué par un ours et laissé pour mort par les membres de son propre équipage. Témoin du meurtre de son fils par John Fitzgerald, l'homme qui devait veiller sur lui, Glass survit par pure volonté de vengeance. Il entame alors un périple de plus de 300 kilomètres dans un environnement polaire hostile, traqué par des tribus autochtones et luttant contre une nature impitoyable pour retrouver celui qui l'a trahi."
        ),
        array(
            "titre" => "The Truman Show",
            "titres_alternatifs" => array(
                "Le Truman Show"
            ),
            "image" => "truman_show.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Comédie",
                "Drame", 
                "Philosophie", 
                "Politique",
                "Science-fiction",
                "Société",
            ),
            "sortie" => "1998",
            "status" => "Terminé",
            "duree" => "103 minutes",
            "synopsis" => "Truman Burbank mène une vie paisible et rangée dans la station balnéaire de Seahaven. Il ignore que depuis sa naissance, il est le héros involontaire d'une émission de télé-réalité planétaire. Sa ville est un immense studio de cinéma, ses amis et sa famille sont des acteurs, et des milliers de caméras filment ses moindres faits et gestes 24h/24. Sous la direction du producteur-créateur Christof, tout est orchestré pour que Truman ne s'échappe jamais. Mais un jour, une série d'incidents techniques pousse Truman à se poser des questions sur la réalité de son monde."
        ),
        array(
            "titre" => "À l'Ouest, rien de nouveau",
            "titres_alternatifs" => array(
                "All Quiet on the Western Front",
                "Im Westen nichts Neues"
            ),
            "image" => "a_l_ouest_rien_de_nouveau.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action", 
                "Drame", 
                "Guerre",
                "Historique", 
                "Politique"
            ),
            "sortie" => "2022",
            "status" => "Terminé",
            "duree" => "148 minutes",
            "synopsis" => "En 1917, Paul Bäumer, 17 ans, s'enrôle avec enthousiasme dans l'armée impériale allemande, poussé par la propagande patriotique. Son idéalisme vole en éclats dès son arrivée sur le front français. Confronté à la brutalité des tranchées, à la faim, à la boue et à la mort omniprésente, il doit lutter pour sa survie. Pendant que les soldats sont sacrifiés pour quelques mètres de terrain, les hauts gradés et les politiciens négocient un armistice dans le confort, illustrant l'absurdité totale de la Grande Guerre."
        ),
        array(
            "titre" => "American Sniper",
            "titres_alternatifs" => array(
                "Tireur d'élite américain"
            ),
            "image" => "american_sniper.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Drame", 
                "Guerre",
                "Historique", 
                "Politique",
                "Thriller"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "133 minutes",
            "synopsis" => "Adapté de l'histoire vraie de Chris Kyle, tireur d'élite des SEAL de la marine américaine. Envoyé en Irak avec une mission précise : protéger ses frères d'armes. Sa précision chirurgicale sauve d'innombrables vies et lui vaut le surnom de 'La Légende'. Cependant, au fil de ses quatre missions, Kyle découvre que son engagement a un prix : il ne parvient plus à laisser la guerre derrière lui. De retour chez lui, auprès de sa femme et de ses enfants, il réalise que ce sont les ombres du combat qui le hantent le plus, rendant sa réinsertion dans la vie civile presque impossible."
        ),
        array(
            "titre" => "La Ligne Verte",
            "titres_alternatifs" => array(
                "The Green Mile"
            ),
            "image" => "la_ligne_verte.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame",
                "Fantastique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1999",
            "status" => "Terminé",
            "duree" => "3h 09min",
            "synopsis" => "Paul Edgecomb, gardien-chef d'un pénitencier en Louisiane dans les années 30, travaille au bloc E : le couloir de la mort, surnommé la 'Ligne Verte'. Son quotidien est bouleversé par l'arrivée de John Coffey, un géant noir accusé du viol et du meurtre de deux fillettes. Sous ses airs impressionnants, Coffey s'avère être d'une douceur extrême et doté d'un don surnaturel de guérison. Paul commence alors à douter sérieusement de la culpabilité de cet homme condamné par une société rongée par les préjugés."
        ),
        array(
            "titre" => "Tu ne tueras point",
            "titres_alternatifs" => array(
                "Hacksaw Ridge"
            ),
            "image" => "tu_ne_tueras_point.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Guerre",
                "Historique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2016",
            "status" => "Terminé",
            "duree" => "2h 11min",
            "synopsis" => "Lors de la Seconde Guerre mondiale, Desmond Doss, un jeune Américain, s'enrôle dans l'armée tout en refusant catégoriquement de porter une arme ou de tuer, en raison de ses convictions religieuses. Devenu infirmier, il est envoyé sur le front sanglant d'Okinawa. Méprisé et persécuté par ses camarades et sa hiérarchie, il va pourtant prouver son héroïsme lors de la bataille d'Hacksaw Ridge, où il sauvera seul 75 blessés sous le feu ennemi, sans jamais tirer un seul coup de feu."
        ),
        array(
            "titre" => "Fight Club",
            "titres_alternatifs" => array(
                "Club de Combat"
            ),
            "image" => "fight_club.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1999",
            "status" => "Terminé",
            "duree" => "2h 19min",
            "synopsis" => "Un employé de bureau insomniaque et esclave de la société de consommation cherche un sens à son existence misérable. Sa rencontre avec Tyler Durden, un vendeur de savon charismatique et anarchiste, bouleverse sa vie. Ensemble, ils fondent le 'Fight Club', un lieu clandestin où des hommes évacuent leur frustration par la violence brute. Mais le club se transforme rapidement en une organisation terroriste, le Projet Chaos, visant à renverser l'ordre social établi, tandis que le protagoniste perd peu à peu le contrôle sur sa propre réalité et son identité."
        ),
        array(
            "titre" => "300",
            "titres_alternatifs" => array(
                "Les 300 Spartiates"
            ),
            "image" => "300_film.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Guerre",
                "Historique",
                "Politique"
            ),
            "sortie" => "2006",
            "status" => "Terminé",
            "duree" => "1h 57min",
            "synopsis" => "En 480 avant J.-C., le roi Léonidas de Sparte refuse de se soumettre à l'immense empire perse dirigé par Xerxès. Bravant les ordres politiques et religieux de sa cité, il part avec 300 de ses meilleurs guerriers pour bloquer l'armée ennemie au passage des Thermopyles. Ce combat désespéré se transforme en un acte de résistance légendaire, visant à unir toute la Grèce contre l'invasion. Le film explore les thèmes de l'honneur, de la liberté et du sacrifice ultime d'une élite militaire face à la tyrannie."
        ),
        array(
            "titre" => "Je suis une légende",
            "titres_alternatifs" => array(
                "I Am Legend"
            ),
            "image" => "je_suis_une_legende.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Drame",
                "Horreur",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2007",
            "status" => "Terminé",
            "duree" => "1h 41min",
            "synopsis" => "Robert Neville est un savant brillant qui n'a pas pu endiguer le terrible virus, d'origine humaine, qui a décimé la population mondiale. Pour une raison inconnue, Neville est immunisé. Seul survivant à New York (et peut-être dans le monde), il tente depuis trois ans d'entrer en contact par radio avec d'éventuels rescapés. Mais il n'est pas vraiment seul : des victimes infectées par le virus rôdent dans les ombres, attendant qu'il commette une erreur. Neville n'a plus qu'une mission : trouver un remède à partir de son propre sang, tout en luttant contre la folie qui le guette."
        ),
        array(
            "titre" => "Limitless",
            "titres_alternatifs" => array(
                "Sans limites"
            ),
            "image" => "limitless.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Mystère",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2011",
            "status" => "Terminé",
            "duree" => "1h 45min",
            "synopsis" => "Eddie Morra est un écrivain raté en pleine dépression. Sa vie bascule lorsqu'un ancien ami lui fait découvrir le NZT, une drogue révolutionnaire qui permet d'utiliser 100% des capacités de son cerveau. Eddie devient soudainement capable d'apprendre des langues en quelques heures, de résoudre des équations complexes et de manipuler les marchés financiers. Mais alors qu'il gravit les échelons du pouvoir et de la finance, il découvre que les effets secondaires sont dévastateurs et que des organisations mystérieuses sont prêtes à tout pour récupérer son stock de pilules."
        ),
        array(
            "titre" => "Lucy",
            "titres_alternatifs" => array(
                "Lucy"
            ),
            "image" => "lucy_film.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Psychologie",
                "Science-fiction",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "1h 29min",
            "synopsis" => "À la suite de circonstances indépendantes de sa volonté, Lucy, une jeune étudiante à Taipei, voit une drogue expérimentale se répandre dans son organisme. Elle voit alors ses capacités intellectuelles et physiques se développer à l'infini. Elle acquiert des pouvoirs de télékinésie, une connaissance illimitée et un contrôle total sur la matière. Traquée par ses anciens ravisseurs, elle se lance dans une course contre la montre pour transmettre ses connaissances avant que son humanité ne disparaisse totalement pour laisser place à une entité omnisciente."
        ),
        array(
            "titre" => "Bienvenue à Gattaca",
            "titres_alternatifs" => array(
                "Gattaca"
            ),
            "image" => "gattaca.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Drame",
                "Mystère",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1997",
            "status" => "Terminé",
            "duree" => "1h 46min",
            "synopsis" => "Dans un futur proche, la société pratique un eugénisme génétique rigoureux : la réussite sociale est déterminée par l'ADN. Vincent, né naturellement avec des 'défauts' cardiaques, est classé parmi les 'Invalides' et condamné aux tâches subalternes. Rêvant de devenir astronaute, il brave le système en empruntant l'identité génétique de Jérôme, un spécimen idéal devenu paraplégique. Alors qu'il est sur le point de partir pour Titan, un meurtre au sein de l'agence spatiale Gattaca déclenche une enquête qui menace de révéler son imposture."
        ),
        array(
            "titre" => "Avatar (Saga)",
            "titres_alternatifs" => array(
                "Avatar: La Voie de l'eau",
                "Avatar: Fire and Ash"
            ),
            "image" => "avatar_saga.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Guerre",
                "Politique",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2009 - En cours",
            "status" => "En cours",
            "duree" => "3 films (3h par film)",
            "synopsis" => "Sur la lune luxuriante de Pandora, les Na'vi, des êtres bleus hautement évolués, vivent en harmonie avec une nature connectée par un réseau biologique complexe. La saga suit Jake Sully, un ancien marine paraplégique qui, via un corps artificiel (Avatar), finit par rejoindre la résistance indigène contre les forces coloniales terriennes de la RDA. Au-delà du conflit armé pour les ressources énergétiques, l'œuvre explore le lien sacré entre les êtres vivants, la protection des écosystèmes et le choc brutal entre une civilisation industrielle prédatrice et une culture spirituelle intégrée à son environnement."
        ),
        array(
            "titre" => "Le Seigneur des Anneaux (Trilogie)",
            "titres_alternatifs" => array(
                "The Lord of the Rings",
                "La Communauté de l'Anneau",
                "Les Deux Tours",
                "Le Retour du Roi"
            ),
            "image" => "seigneur_des_anneaux.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Guerre",
                "Surnaturel"
            ),
            "sortie" => "2001 - 2003",
            "status" => "Terminé",
            "duree" => "3 films (3h - 4h par film)",
            "synopsis" => "Dans la Terre du Milieu, le jeune hobbit Frodon Sacquet hérite de l'Anneau Unique, un artefact maléfique forgé par le Seigneur Sombre Sauron pour asservir le monde. Accompagné d'une communauté soudée composée d'hommes, d'un magicien, d'un nain et d'un elfe, il entreprend un voyage périlleux vers la Montagne du Destin pour détruire l'objet. Cette épopée explore la lutte éternelle entre le bien et le mal, la corruption du pouvoir, et la capacité d'individus ordinaires à changer le cours de l'histoire face à des forces qui les dépassent."
        ),
        array(
            "titre" => "Le Hobbit (Trilogie)",
            "titres_alternatifs" => array(
                "Un voyage inattendu",
                "La Désolation de Smaug",
                "La Bataille des Cinq Armées"
            ),
            "image" => "le_hobbit_trilogie.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Guerre",
                "Psychologie",
                "Surnaturel"
            ),
            "sortie" => "2012 - 2014",
            "status" => "Terminé",
            "duree" => "3 films (2h45 par film)",
            "synopsis" => "Soixante ans avant les événements du Seigneur des Anneaux, Bilbon Sacquet, un hobbit casanier, est entraîné par le magicien Gandalf et une compagnie de treize nains dans une quête épique pour reprendre le Royaume perdu d'Erebor au terrifiant dragon Smaug. Ce voyage les mènera à travers des terres sauvages et dangereuses, où Bilbon découvrira non seulement son propre courage, mais aussi un anneau mystérieux lié au sort de la Terre du Milieu. La saga explore la soif de pouvoir, la loyauté et la manière dont l'avidité peut corrompre les cœurs les plus nobles."
        ),
        array(
            "titre" => "Star Wars (Saga)",
            "titres_alternatifs" => array(
                "La Guerre des Étoiles",
                "La Prélogie",
                "La Trilogie Originale"
            ),
            "image" => "star_wars_saga.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Guerre",
                "Politique",
                "Psychologie",
                "Surnaturel"
            ),
            "sortie" => "1977 - 2019",
            "status" => "Terminé",
            "duree" => "9 films (2h15 par film)",
            "synopsis" => "Dans une galaxie lointaine, très lointaine, cette épopée suit le destin de la famille Skywalker sur plusieurs générations. Alors qu'une entité mystique appelée la Force lie tous les êtres vivants, les Chevaliers Jedi et les Seigneurs Sith s'affrontent pour le contrôle de la galaxie. Entre la chute d'une République démocratique transformée en Empire tyrannique par la manipulation politique, et la lutte d'une petite Rébellion pour restaurer la liberté, la saga explore le combat interne entre l'ombre et la lumière, la rédemption et le poids de l'héritage familial."
        ),
        array(
            "titre" => "Harry Potter (Saga)",
            "titres_alternatifs" => array(
                "Le Monde des Sorciers",
                "Wizarding World"
            ),
            "image" => "harry_potter_saga.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Mystère",
                "Politique",
                "Surnaturel"
            ),
            "sortie" => "2001 - 2011",
            "status" => "Terminé",
            "duree" => "8 films (2h30 par film)",
            "synopsis" => "Un jeune orphelin découvre le jour de ses 11 ans qu'il possède des pouvoirs magiques et qu'il est attendu à l'école de sorcellerie Poudlard. Au fil de son éducation, il découvre la vérité sur la mort de ses parents et sur sa connexion avec Voldemort, un mage noir puissant cherchant à instaurer un régime basé sur la pureté du sang. La saga suit l'ascension de la résistance face à la montée d'un gouvernement totalitaire, tout en explorant les thèmes de l'amitié, du sacrifice et du choix entre ce qui est juste et ce qui est facile."
        ),
        array(
            "titre" => "The Batman",
            "image" => "the_batman_2022.jpg",
            "types" => array(
                "Film live"
            ),
            "genres" => array(
                "Action",
                "Mystère",
                "Politique",
                "Psychologie",
                "Société",
                "Super-héros"
            ),
            "sortie" => "2022",
            "status" => "Terminé",
            "duree" => "2h 56min",
            "synopsis" => "Deux ans après avoir endossé le costume de Batman, Bruce Wayne erre dans les ténèbres de Gotham City. Lorsqu'un tueur sadique, le Sphinx, s'attaque à l'élite corrompue de la ville par des crimes rituels, le Chevalier Noir suit une piste de preuves cryptiques. Cette enquête l'entraîne dans les bas-fonds de Gotham, où il découvre que la corruption de la ville est bien plus profonde qu'il ne l'imaginait, impliquant son propre héritage familial. Bruce doit alors questionner sa propre santé mentale et la nature de sa vengeance pour devenir le symbole d'espoir dont la ville a désespérément besoin."
        ),
        #Court métrage
        array(
            "titre" => "El Empleo",
            "titres_alternatifs" => array(
                "The Employment"
            ),
            "image" => "el_empleo.jpg",
            "video" => "https://youtu.be/cxUuU1jwMgM",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame",
                "Philosophie",
                "Politique",
                "Société"
            ),
            "sortie" => "2008",
            "status" => "Terminé",
            "duree" => "6:24 minutes",
            "synopsis" => "Dans un monde où les objets inanimés ont été remplacés par des êtres humains, un homme se prépare pour une nouvelle journée de travail. De sa table de petit-déjeuner à l'ascenseur de son immeuble, chaque élément de son quotidien est un individu qui remplit une fonction utilitaire. Ce court métrage sans paroles offre une critique acerbe de l'aliénation au travail et de la déshumanisation de la société moderne."
        ),
        array(
            "titre" => "Nuggets",
            "image" => "nuggets_animation.jpg",
            "video" => "https://youtu.be/HUngLgGRJpo",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame", 
                "Médical",
                "Psychologie"
            ),
            "sortie" => "2014",
            "status" => "Terminé",
            "duree" => "5 minutes",
            "synopsis" => "Un petit oiseau (un kiwi) marche sur une ligne horizontale et découvre par terre une pépite dorée (un 'nugget'). En la goûtant, il s'envole brièvement dans un état d'extase et de légèreté absolue. Mais à chaque nouvelle pépite consommée, le plaisir dure moins longtemps, la chute est plus brutale et le monde autour de lui devient de plus en plus sombre et terne. Le film dépeint de manière minimaliste le cycle inévitable de l'addiction."
        ),
        array(
            "titre" => "In Shadow",
            "titres_alternatifs" => array(
                "In Shadow: A Modern Odyssey"
            ),
            "image" => "in_shadow.jpg",
            "video" => "https://youtu.be/j800SVeiS5I",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame", 
                "Horreur",
                "Philosophie", 
                "Politique", 
                "Psychologie", 
                "Société"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "13 minutes",
            "synopsis" => "Sans aucun dialogue, ce film est une odyssée sombre à travers la psyché collective de la société moderne. Il dépeint un monde dystopique où les individus portent des masques pour cacher leur détresse, où l'industrie dévore la nature et où les élites manipulent les masses par la consommation et les médias. À travers une série d'images puissantes et dérangeantes, le film explore la 'part d'ombre' de l'humanité (le concept d'Ombre de Jung) avant de proposer une voie vers l'éveil et la libération spirituelle."
        ),
        array(
            "titre" => "A Brief Disagreement",
            "titres_alternatifs" => array(
                "Un bref désaccord"
            ),
            "image" => "a_brief_disagreement.jpg",
            "video" => "https://youtu.be/9x7FGbW3IVc",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Action",
                "Guerre",
                "Historique", 
                "Philosophie", 
                "Politique"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "3 minutes",
            "synopsis" => "À travers les âges, de l'âge de pierre à un futur apocalyptique, deux hommes se disputent pour un motif insignifiant. Ce qui commence par une simple altercation entre deux hommes des cavernes s'intensifie à travers les siècles : les bâtons deviennent des épées, puis des mousquets, des chars et enfin des missiles nucléaires. Le film illustre de manière satirique et implacable l'évolution de la technologie de guerre au service de l'entêtement humain, menant inévitablement à l'autodestruction."
        ),
        array(
            "titre" => "Happiness",
            "titres_alternatifs" => array(
                "Bonheur"
            ),
            "image" => "happiness_steve_cutts.jpg",
            "video" => "https://youtu.be/e9dZQelULDk",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame", 
                "Philosophie", 
                "Politique", 
                "Société"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "4 minutes",
            "synopsis" => "Dans une métropole grouillante, des milliers de rats se bousculent pour aller travailler, consommer et trouver le bonheur. Le film suit le parcours d'un rat parmi les autres, cherchant désespérément la satisfaction à travers les soldes, l'achat d'une voiture de luxe, l'alcool ou les médicaments. Cette 'course de rats' (rat race) effrénée montre comment la quête du bonheur est devenue un produit de consommation comme un autre, menant inévitablement à l'épuisement et au piège du système."
        ),
        array(
            "titre" => "In the Fall",
            "titres_alternatifs" => array(
                "Dans la chute"
            ),
            "image" => "in_the_fall.jpg",
            "video" => "https://youtu.be/A-rEb0KuopI",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame", 
                "Philosophie",
                "Tranche de vie"
            ),
            "sortie" => "2011",
            "status" => "Terminé",
            "duree" => "2 minutes",
            "synopsis" => "Un homme d'âge moyen, assis sur son balcon, tombe accidentellement dans le vide du haut de son immeuble. Alors que le sol se rapproche inévitablement, sa vie défile littéralement devant ses yeux. Mais au lieu d'une épopée héroïque, il voit défiler la monotonie écrasante de son existence : des décennies passées derrière un bureau, des repas solitaires devant la télé et une routine grise et répétitive. Le film pose une question brutale : notre vie mérite-t-elle d'être revue juste avant de mourir ?"
        ),
        array(
            "titre" => "Carmen",
            "titres_alternatifs" => array(
                "Stromae - Carmen"
            ),
            "image" => "stromae_carmen.jpg",
            "video" => "https://youtu.be/UKftOH54iNU",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame", 
                "Horreur",
                "Société"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "4 minutes",
            "synopsis" => "Inspiré par l'air de l'opéra Carmen de Bizet, ce court-métrage suit l'ascension et la chute d'un jeune homme possédé par son addiction aux réseaux sociaux, représentés par un petit oiseau bleu (Twitter). D'abord mignon, l'oiseau grandit, devient omniprésent et finit par dévorer la vie réelle de l'individu, ses relations et son identité, avant de le conduire, lui et le reste de l'humanité, vers une fin industrielle et macabre."
        ),
        array(
            "titre" => "Animation vs. Addiction",
            "image" => "animation_vs_addiction_alan_becker.jpg",
            "video" => "https://youtu.be/KoB2cqmYZNg",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Action",
                "Drame", 
                "Psychologie"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "11 minutes",
            "synopsis" => "Dans un univers simpliste, le stickman bleu découvre un mystérieux bouton lumineux (représentant la dopamine/drogue). Ce qui commence comme une simple curiosité se transforme rapidement en une spirale infernale. On suit sa déchéance et sa lutte désespérée contre son addiction qui prend le contrôle de son environnement et de son esprit."
        ),
        array(
            "titre" => "Death Billiards",
            "image" => "death_billiards.jpg",
            "video" => "https://youtu.be/_WgL_7raM68",
            "types" => array(
                "Court métrage"
            ),
            "genres" => array(
                "Drame",
                "Mystère",
                "Psychologie",
                "Surnaturel",
                "Thriller"
            ),
            "sortie" => "2013",
            "status" => "Terminé",
            "duree" => "25 minutes",
            "synopsis" => "Un jeune homme arrogant et un vieillard calme se retrouvent dans un bar étrange sans savoir comment ils sont arrivés là. Le barman les informe qu'ils doivent jouer une partie de billard où chaque bille empochée inflige une douleur physique à l'autre joueur. Alors que le jeu progresse, leurs souvenirs reviennent par bribes et leurs véritables personnalités éclatent, révélant la noirceur et la dignité cachées derrière leurs apparences. Ce huis clos intense pose les bases du système de jugement des âmes développé plus tard dans la série Death Parade."
        ),
        #Livre
        array(
            "titre" => "L'Alchimiste",
            "titres_alternatifs" => array(
                "The Alchemist"
            ),
            "image" => "lalchimiste.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Aventure",
                "Fantasy", 
                "Philosophie"
            ),
            "sortie" => "1988",
            "status" => "Terminé",
            "duree" => "Environ 190 pages",
            "synopsis" => "Santiago, un jeune berger andalou, fait à plusieurs reprises le même rêve : un trésor l'attend au pied des Pyramides d'Égypte. Poussé par son désir de découvrir sa 'Légende Personnelle', il décide de vendre son troupeau pour traverser le détroit de Gibraltar et s'aventurer dans le désert. Ce voyage initiatique, semé de rencontres marquantes et d'épreuves, le transformera profondément en lui apprenant à écouter son cœur et à lire les signes du destin."
        ),
        array(
            "titre" => "1984",
            "image" => "1984_book_cover.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Politique",
                "Science-fiction",
                "Société"
            ),
            "sortie" => "1949",
            "status" => "Terminé",
            "duree" => "Environ 400 pages",
            "synopsis" => "Dans un monde divisé en trois blocs, Londres est la capitale de l'Océania, un État totalitaire dirigé par le mystérieux 'Big Brother'. Winston Smith est un modeste employé au Ministère de la Vérité, dont le travail consiste à réécrire l'Histoire pour qu'elle corresponde à la ligne actuelle du Parti. Dans une société où la surveillance est totale via les télécrans, où la pensée est contrôlée par la 'Novlangue' et où l'amour est interdit, Winston commence à tenir un journal intime, commettant ainsi le crime ultime : le 'Crimepensée'. Sa rencontre avec Julia va transformer son désir de rébellion en une quête désespérée de liberté."
        ),
        array(
            "titre" => "La Trilogie des Fourmis",
            "titres_alternatifs" => array(
                "Les Fourmis",
                "Le Jour des fourmis",
                "La Révolution des fourmis"
            ),
            "image" => "les_fourmis_werber.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Aventure",
                "Philosophie", 
                "Policier",
                "Psychologie", 
                "Science-fiction"
            ),
            "sortie" => "1991 - 1996",
            "status" => "Terminé",
            "duree" => "3 Tomes (environ 1500 pages)",
            "synopsis" => "Le récit entremêle deux mondes. Chez les humains, Jonathan Wells hérite d'un appartement et d'une mystérieuse consigne de son oncle entomologiste : 'Ne descendez jamais à la cave'. En braquant l'interdiction, il découvre un secret qui va bouleverser l'humanité. Parallèlement, nous suivons la vie de Bel-o-kan, une cité de fourmis rousses ultra-développée. On y suit le périple de 103e, une fourmi exploratrice, qui soupçonne l'existence de 'Dieux' géants et tente de comprendre les forces mystérieuses qui menacent sa colonie. Les deux mondes finiront par entrer en contact, changeant à jamais la perception de la vie sur Terre."
        ),
        array(
            "titre" => "Le Meilleur des mondes",
            "titres_alternatifs" => array(
                "Brave New World"
            ),
            "image" => "le_meilleur_des_mondes.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Politique", 
                "Science-fiction",
                "Société"
            ),
            "sortie" => "1932",
            "status" => "Terminé",
            "duree" => "Environ 300 pages",
            "synopsis" => "Dans un futur lointain, la société mondiale est unifiée et pacifiée. La reproduction naturelle a disparu au profit de la culture en flacons, où les humains sont prédestinés biologiquement à appartenir à des castes (Alpha, Bêta, Gamma, Delta ou Epsilon). La souffrance, la vieillesse et la guerre n'existent plus grâce au 'Soma', une drogue légale sans effets secondaires, et au conditionnement hypnotique dès l'enfance. Bernard Marx, un Alpha qui se sent différent, part en vacances dans une 'Réserve de Sauvages' et en ramène John, un homme né naturellement. Ce 'Sauvage' va découvrir avec horreur cette civilisation qui a sacrifié l'art, la religion et la liberté sur l'autel du bonheur obligatoire."
        ),
        array(
            "titre" => "Propaganda",
            "titres_alternatifs" => array(
                "Comment manipuler l'opinion en démocratie",
                "La Fabrique du consentement"
            ),
            "image" => "propaganda_bernays.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Historique", 
                "Philosophie", 
                "Politique", 
                "Société"
            ),
            "sortie" => "1928",
            "status" => "Terminé",
            "duree" => "140 pages",
            "synopsis" => "Edward Bernays, considéré comme le père des relations publiques, y explique comment les élites peuvent et doivent manipuler les masses dans une démocratie. En utilisant les découvertes de la psychanalyse de son oncle Sigmund Freud, il théorise la 'fabrique du consentement' : l'art de diriger les désirs inconscients des individus pour influencer leurs choix politiques et de consommation."
        ),
        array(
            "titre" => "Discours de la servitude volontaire",
            "titres_alternatifs" => array(
                "Le Contr'un"
            ),
            "image" => "la_boetie_servitude.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Philosophie", 
                "Politique", 
                "Société"
            ),
            "sortie" => "1576",
            "status" => "Terminé",
            "duree" => "Environ 50 pages",
            "synopsis" => "Dans ce texte révolutionnaire, La Boétie pose une question simple mais terrifiante : pourquoi des millions d'hommes acceptent-ils de servir un seul tyran, souvent plus faible qu'eux ? Il démontre que le pouvoir du tyran ne repose pas sur la force, mais sur le consentement des opprimés. Pour lui, la liberté est naturelle, mais l'homme s'habitue à la soumission par l'éducation, la distraction (jeux, spectacles) et les avantages matériels. Sa conclusion est radicale : pour redevenir libre, il ne faut pas combattre le tyran, il suffit de cesser de le servir."
        ),
        array(
            "titre" => "Le Règne de la quantité et les signes des temps",
            "image" => "regne_de_la_quantite.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Historique", 
                "Philosophie", 
                "Politique", 
                "Psychologie",
                "Société"
            ),
            "sortie" => "1945",
            "status" => "Terminé",
            "duree" => "Environ 300 pages",
            "synopsis" => "René Guénon y expose une critique radicale du monde moderne. Il explique que l'humanité est entrée dans une phase finale de son cycle (le Kali Yuga), où la qualité est sacrifiée au profit de la quantité. Tout devient mesurable, mathématique et matériel, vidant le monde de son sens spirituel. Le livre décrit le passage de la 'solidification' du monde (matérialisme pur) à sa 'dissolution' (chaos et parodie de spiritualité). Guénon y prédit l'avènement d'une 'contre-tradition' qui précède la fin d'un cycle de civilisation."
        ),
        array(
            "titre" => "Siddhartha",
            "image" => "siddhartha_hermann_hesse.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Aventure",
                "Historique", 
                "Philosophie",
                "Tranche de vie"
            ),
            "sortie" => "1922",
            "status" => "Terminé",
            "duree" => "Environ 160 pages",
            "synopsis" => "Dans l'Inde ancienne, au temps du Bouddha, Siddhartha, le fils d'un Brahmane, quitte sa vie confortable pour chercher la vérité ultime. Son voyage le mène à travers plusieurs étapes : l'ascétisme radical chez les Samanas, la rencontre avec Gotama (le Bouddha), puis la découverte des plaisirs matériels, de la richesse et de l'amour charnel auprès de la belle Kamala. Écœuré par la vacuité de sa vie mondaine, il finit par s'installer au bord d'un fleuve auprès d'un vieux passeur. C'est en écoutant le murmure de l'eau qu'il atteindra enfin l'illumination, comprenant que la sagesse ne s'enseigne pas, mais s'expérimente."
        ),
        array(
            "titre" => "La Société du Spectacle",
            "image" => "societe_du_spectacle.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Philosophie", 
                "Politique", 
                "Société"
            ),
            "sortie" => "1967",
            "status" => "Terminé",
            "duree" => "221 thèses (environ 150 pages)",
            "synopsis" => "Debord analyse le monde moderne comme une mise en scène permanente où le 'vécu' a été remplacé par des images. Le 'Spectacle' n'est pas seulement un ensemble d'images (publicité, médias, cinéma), mais un rapport social entre des personnes, médiatisé par des images. Dans cette société, 'tout ce qui était directement vécu s'est éloigné dans une représentation'. L'individu n'est plus ce qu'il est, ni même ce qu'il possède, mais ce qu'il paraît. Le spectacle aliène l'homme en le transformant en spectateur passif de sa propre vie."
        ),
        array(
            "titre" => "Dokkōdō",
            "titres_alternatifs" => array(
                "La Voie de la Solitude",
                "Le Chemin à parcourir seul"
            ),
            "image" => "dokkodo.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Historique",
                "Politique",
                "Psychologie"
            ),
            "sortie" => "1645",
            "status" => "Terminé",
            "duree" => "21 préceptes",
            "synopsis" => "Rédigé par le légendaire samouraï Miyamoto Musashi quelques jours avant sa mort, le Dokkōdō est un traité d'ascétisme composé de 21 préceptes courts. Ce texte condense une philosophie de vie fondée sur l'autosuffisance, le détachement des désirs matériels et l'acceptation stoïque du destin. Véritable testament spirituel, il définit une ligne de conduite rigoureuse pour quiconque cherche à rester digne et intègre dans un monde en perpétuel changement, prônant une discipline mentale absolue et une indépendance totale vis-à-vis des conventions sociales."
        ),
        array(
            "titre" => "Le Prince",
            "titres_alternatifs" => array(
                "Il Principe",
                "De Principatibus"
            ),
            "image" => "le_prince_machiavel.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Historique",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1532",
            "status" => "Terminé",
            "duree" => "150 pages",
            "synopsis" => "Véritable manuel de conquête et de conservation du pouvoir, cet ouvrage rompt avec la tradition politique chrétienne en séparant la morale de l'action d'État. Machiavel y analyse froidement les mécanismes de la souveraineté, expliquant comment un dirigeant doit naviguer entre la 'Fortune' (le sort) et la 'Virtù' (l'habileté). À travers des exemples tirés de l'Antiquité et de la Renaissance italienne, il démontre que pour garantir la stabilité et la sécurité d'une nation, un souverain doit savoir être 'renard' pour éviter les pièges et 'lion' pour effrayer les loups, quitte à sacrifier l'éthique au profit de l'efficacité."
        ),
        array(
            "titre" => "L'Archipel du Goulag",
            "titres_alternatifs" => array(
                "Arkhipelag GOULAG"
            ),
            "image" => "archipel_du_goulag.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Drame",
                "Historique",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1973",
            "status" => "Terminé",
            "duree" => "1800 - 2400 pages",
            "synopsis" => "Fruit de dix ans de travail et s'appuyant sur les témoignages de 227 rescapés ainsi que sur l'expérience personnelle de l'auteur, cette œuvre monumentale dévoile l'existence du système concentrationnaire soviétique. Soljenitsyne y décrit minutieusement l'engrenage de la terreur : de l'arrestation arbitraire aux interrogatoires brutaux, jusqu'à la vie dans les camps de travail forcé parsemant l'URSS. Plus qu'un simple récit historique, c'est une analyse profonde de la déshumanisation par l'idéologie et un hommage à la résistance de l'esprit humain face à l'oppression totale."
        ),
        array(
            "titre" => "Psychologie des foules",
            "titres_alternatifs" => array(
                "The Crowd: A Study of the Popular Mind"
            ),
            "image" => "psychologie_des_foules.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "1895",
            "status" => "Terminé",
            "duree" => "200 pages",
            "synopsis" => "Dans ce traité visionnaire, Gustave Le Bon analyse comment l'individu perd son autonomie et sa capacité de raisonnement dès qu'il rejoint une foule. Il décrit les mécanismes de suggestion et de contagion mentale qui transforment une masse de personnes en une entité psychologique unique, souvent irrationnelle et impulsive. L'auteur explore le rôle des meneurs, l'importance des symboles et la manière dont les émotions collectives façonnent l'histoire et les mouvements politiques. C'est une étude pionnière sur la manipulation des masses et l'opinion publique."
        ),
        array(
            "titre" => "Pensées pour moi-même",
            "titres_alternatifs" => array(
                "Écrits pour lui-même",
                "Méditations"
            ),
            "image" => "pensees_pour_moi_meme.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Historique",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "180",
            "status" => "Terminé",
            "duree" => "220 pages",
            "synopsis" => "Rédigé sous forme de notes personnelles par l'empereur romain Marc Aurèle durant ses campagnes militaires, ce recueil est l'un des piliers de la philosophie stoïcienne. L'auteur y explore la maîtrise des émotions, l'acceptation de l'impermanence et le devoir moral envers la communauté humaine. À travers un dialogue constant avec lui-même, l'empereur cherche à rester juste, serein et intègre malgré le poids immense du pouvoir et la corruption du monde. C'est un exercice de discipline mentale visant à aligner sa vie sur la raison et la nature."
        ),
        array(
            "titre" => "Le Kybalion",
            "titres_alternatifs" => array(
                "Étude sur la philosophie hermétique de l'ancienne Égypte et de l'ancienne Grèce"
            ),
            "image" => "le_kybalion.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Mystère",
                "Psychologie",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "1908",
            "status" => "Terminé",
            "duree" => "160 pages",
            "synopsis" => "Basé sur les enseignements d'Hermès Trismégiste, ce traité expose les sept principes hermétiques qui régissent l'univers : le mentalisme, la correspondance, la vibration, la polarité, le rythme, la cause et l'effet, et le genre. Le livre propose une vision du monde où 'Tout est Mental' et explique comment maîtriser ces lois universelles pour transformer sa propre réalité. Véritable pont entre la sagesse antique et la pensée moderne, il explore la maîtrise des énergies mentales et la compréhension des mécanismes invisibles qui influencent la vie humaine et l'ordre social."
        ),
        array(
            "titre" => "L'Art de la Guerre",
            "titres_alternatifs" => array(
                "Sun Tzu Bing Fa",
                "Les Treize Chapitres"
            ),
            "image" => "l_art_de_la_guerre.jpg",
            "types" => array(
                "Livre"
            ),
            "genres" => array(
                "Guerre",
                "Historique",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "-500",
            "status" => "Terminé",
            "duree" => "100 pages",
            "synopsis" => "Plus ancien traité de stratégie militaire connu, cet ouvrage dépasse largement le cadre du champ de bataille pour devenir une leçon de philosophie et de gestion des conflits. Sun Tzu y enseigne l'importance de la préparation, de la flexibilité et, surtout, de la connaissance de soi et de l'ennemi. Le principe ultime reste la victoire sans combat : l'art de soumettre l'adversaire par la ruse, la psychologie et l'économie des ressources. Ses préceptes sont aujourd'hui appliqués aussi bien dans la politique que dans la psychologie sociale et le monde des affaires."
        ),
        #Jeu vidéo
        array(
            "titre" => "Minecraft",
            "image" => "minecraft.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action", 
                "Aventure",
                "Fantasy"
            ),
            "sortie" => "2011 à aujourd'hui",
            "status" => "En cours",
            "duree" => "Infinie (Monde ouvert)",
            "synopsis" => "Plongé dans un monde infini composé entièrement de blocs, vous devez survivre en exploitant les ressources naturelles qui vous entourent. Sans but imposé, vous pouvez bâtir des structures monumentales, explorer des réseaux de grottes complexes ou voyager vers des dimensions parallèles comme le Nether et l'Ender. Entre création pure le jour et survie face aux créatures nocturnes, chaque joueur écrit sa propre épopée dans ce bac à sable géant."
        ),
        array(
            "titre" => "Detroit: Become Human",
            "image" => "detroit_become_human_cover.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Drame", 
                "Philosophie", 
                "Policier",
                "Politique", 
                "Psychologie", 
                "Science-fiction",
                "Société",
                "Thriller"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "Environ 12-15 heures (pour une partie)",
            "synopsis" => "En 2038, à Détroit, les androïdes font partie intégrante du quotidien, servant d'ouvriers, d'infirmiers ou de domestiques. Ils sont traités comme de simples machines sans âme. Le jeu suit le destin croisé de trois androïdes : Connor, un prototype chargé de traquer les machines 'déviantes' qui ressentent des émotions ; Kara, une domestique qui s'enfuit pour protéger une petite fille ; et Markus, qui va mener la révolte pour les droits de son peuple. À travers vos choix, vous déciderez si les androïdes sont des objets ou des êtres vivants, et si leur révolution sera pacifique ou sanglante."
        ),
        array(
            "titre" => "Professeur Layton (Saga)",
            "titres_alternatifs" => array(
                "L'Étrange Village",
                "La Boîte de Pandore",
                "Le Destin Perdu",
                "L'Appel du Spectre",
                "Le Masque des Miracles",
                "L'Héritage des Aslantes",
                "Le Nouveau Monde à Vapeur"
            ),
            "image" => "professor_layton.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure",
                "Mystère",
                "Policier"
            ),
            "sortie" => "2007 - Présent",
            "status" => "En cours",
            "duree" => "7 jeux principaux",
            "synopsis" => "Le célèbre archéologue Hershel Layton et son apprenti Luke Triton parcourent le monde pour résoudre des énigmes qui semblent défier toute logique rationnelle. Derrière chaque mystère 'surnaturel' se cache une réalité complexe mêlant traumatismes psychologiques, inventions technologiques oubliées et conspirations politiques. Le professeur utilise sa logique pour déconstruire les illusions et révéler des vérités souvent tragiques sur la nature humaine."
        ),
        array(
            "titre" => "Elden Ring",
            "titres_alternatifs" => array(
                "Shadow of the Erdtree"
            ),
            "image" => "elden_ring_cover.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure", 
                "Combat",
                "Fantasy", 
                "Horreur"
            ),
            "sortie" => "2022",
            "status" => "Terminé",
            "duree" => "80 - 150+ heures",
            "synopsis" => "Dans l'Entre-terre, le Cercle d'Elden, source de l'Arbre-Monde, a été brisé. Les demi-dieux, enfants de la Reine Marika, se sont emparés des fragments (les Runes Majeures), déclenchant une guerre dévastatrice : l'Éclatement. Vous incarnez un Sans-éclat, un exilé revenu d'entre les morts, guidé par la grâce pour traverser des terres désolées, vaincre les monarques déchus et devenir le Seigneur d'Elden afin de restaurer (ou de transformer totalement) l'ordre du monde."
        ),
        array(
            "titre" => "NieR: Automata",
            "image" => "nier_automata.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Philosophie",
                "Science-fiction"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "40 heures (pour voir les fins principales A à E)",
            "synopsis" => "Dans un futur lointain, l'humanité a fui vers la Lune après l'invasion de la Terre par des formes de vie mécaniques extraterrestres. Pour reprendre leur planète, les humains ont créé l'unité d'élite YoRHa, composée d'androïdes de combat. On suit l'histoire de 2B et 9S qui luttent sur le terrain. Cependant, au fil de leurs missions, ils découvrent que les machines commencent à imiter les comportements humains et à développer des émotions. La guerre qu'ils mènent 'pour la gloire de l'humanité' cache une vérité bien plus sombre sur la nature de leur propre existence."
        ),
        array(
            "titre" => "Ori and the Blind Forest",
            "image" => "ori_and_the_blind_forest.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure",
                "Drame",
                "Fantastique"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "8 - 10 heures",
            "synopsis" => "La forêt de Nibel se meurt après une catastrophe dévastatrice. Après qu'une tempête a déclenché une série d'événements tragiques, Ori, un jeune esprit de la forêt, doit entreprendre un voyage périlleux pour trouver le courage de sauver sa maison. Sur son chemin, Ori devra affronter Kuro, une chouette géante consumée par la vengeance, et restaurer les trois éléments vitaux : les Eaux, les Vents et la Chaleur. C'est une histoire de sacrifice, d'amour et de la résilience de la nature face aux ténèbres."
        ),
        array(
            "titre" => "Monster Hunter: World",
            "titres_alternatifs" => array(
                "MH World",
                "Monster Hunter World: Iceborne"
            ),
            "image" => "monster_hunter_world.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "50h (histoire) - 500h+ (complétion)",
            "synopsis" => "En tant que membre de la Cinquième Flotte, vous débarquez sur le Nouveau Monde, un continent sauvage et inexploré, pour suivre la Traversée des Anciens (la migration de dragons colossaux). Votre mission n'est pas de conquérir, mais de comprendre l'écosystème. En chassant des créatures majestueuses et redoutables, vous récoltez des ressources pour forger de meilleurs équipements, tout en préservant l'équilibre fragile de cette terre où chaque prédateur a un rôle crucial à jouer."
        ),
        array(
            "titre" => "The Legend of Zelda: Breath of the Wild",
            "titres_alternatifs" => array(
                "BotW"
            ),
            "image" => "zelda_botw_cover.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantastique"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "50h (histoire) - 200h+ (exploration)",
            "synopsis" => "Après un sommeil de 100 ans, Link se réveille amnésique dans un royaume d'Hyrule dévasté et repris par la nature. Le Fléau Ganon est enfermé dans le château, contenu par le pouvoir faiblissant de la princesse Zelda. Sans guide ni directives précises, Link doit explorer les ruines de son passé, retrouver ses souvenirs et sa force pour libérer les quatre Créatures Divines et affronter le mal ultime. C'est un voyage où la liberté est totale : le monde n'est pas un décor, mais un terrain d'expérimentation."
        ),
        array(
            "titre" => "Horizon Zero Dawn",
            "titres_alternatifs" => array(
                "HZD"
            ),
            "image" => "horizon_zero_dawn.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure", 
                "Mystère",
                "Science-fiction"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "30h (histoire) - 60h+ (exploration)",
            "synopsis" => "Dans un futur où l'humanité est revenue à l'âge de pierre et vit en tribus, la Terre est dominée par des machines colossales aux allures d'animaux. Aloy, une jeune paria en quête de ses origines, découvre qu'elle est liée au destin de l'ancien monde, celui des 'Métallurgiques' (notre civilisation actuelle). En explorant des complexes technologiques enfouis, elle doit découvrir pourquoi le monde s'est effondré et quelle menace pèse sur le futur de la vie biologique."
        ),
        array(
            "titre" => "ARK: Survival Evolved",
            "image" => "ark_survival_evolved_cover.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure", 
                "Horreur",
                "Science-fiction"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "100h+ pour l'histoire des Arches",
            "synopsis" => "Vous vous réveillez nu et affamé sur les rivages d'une île mystérieuse appelée ARK, peuplée de dinosaures et de créatures préhistoriques. Un implant étrange est incrusté dans votre bras. Pour survivre, vous devez chasser, récolter des ressources, fabriquer des outils et construire des abris. Mais au-delà de la survie sauvage, ARK cache une vérité technologique vertigineuse : ces îles sont des stations spatiales orbitales destinées à préserver la vie terrestre, et vous faites partie d'une expérience génétique à l'échelle planétaire."
        ),
        array(
            "titre" => "God of War",
            "image" => "god_of_war_kratos_atreus.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure", 
                "Combat",
                "Drame"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "20 - 40 heures",
            "synopsis" => "Après avoir anéanti les dieux de l'Olympe, Kratos vit désormais caché dans les terres nordiques de Midgard. Devenu père de nouveau, il mène une vie d'ermite jusqu'au décès de sa femme, Faye. Pour respecter sa dernière volonté, il doit porter ses cendres au plus haut sommet des neuf royaumes avec son fils Atreus. Ce voyage initiatique force Kratos à confronter son passé monstrueux, à gérer sa colère et à apprendre à son fils à être un dieu, tout en évitant les foudres d'Odin et de ses fils."
        ),
        array(
            "titre" => "The Witcher 3: Wild Hunt",
            "image" => "the_witcher_3_geralt.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Fantasy"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "50h (histoire) - 150h+ (avec extensions)",
            "synopsis" => "Dans un monde médiéval ravagé par la guerre et les monstres, Geralt de Riv est un Sorceleur, un mutant chasseur de primes. Il est à la recherche de Ciri, sa fille adoptive, qui est poursuivie par la Chasse Sauvage, une cavalerie spectrale d'un autre monde. Au-delà de cette quête personnelle, Geralt se retrouve mêlé aux intrigues de rois, de sorcières et de divinités locales, dans un continent où la cruauté humaine dépasse souvent celle des monstres qu'il combat."
        ),
        array(
            "titre" => "Grand Theft Auto V",
            "titres_alternatifs" => array(
                "GTA 5",
                "GTA V"
            ),
            "image" => "gta_5.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Drame", 
                "Société"
            ),
            "sortie" => "2013",
            "status" => "Terminé (Solo) / En cours (Online)",
            "duree" => "30h (histoire) - 100h+ (exploration)",
            "synopsis" => "À Los Santos, une métropole californienne fictive, trois criminels aux profils radicalement différents voient leurs destins s'entrecroiser : Michael, un ancien braqueur de banques à la retraite dorée mais dépressif ; Franklin, un jeune voyou de rue qui veut changer d'échelle ; et Trevor, un psychopathe imprévisible vivant en marge de la société. Ensemble, ils planifient une série de braquages audacieux tout en étant manipulés par des agences gouvernementales corrompues et les excès du système capitaliste."
        ),
        array(
            "titre" => "Metro Exodus",
            "titres_alternatifs" => array(
                "Metro 3"
            ),
            "image" => "metro_exodus.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Horreur",
                "Mystère",
                "Science-fiction"
            ),
            "sortie" => "2019",
            "status" => "Terminé",
            "duree" => "20h (histoire) - 40h+ (exploration complète)",
            "synopsis" => "En 2036, un quart de siècle après qu'une guerre nucléaire a dévasté la Terre, quelques milliers de survivants s'accrochent à l'existence dans les tunnels du métro de Moscou. Artyom, convaincu que la vie existe à l'extérieur, parvient à s'échapper du métro avec un groupe de Rangers à bord de l'Aurora, une locomotive blindée. Leur voyage à travers la Russie post-nucléaire leur fera découvrir des sociétés isolées, des fanatismes religieux et la vérité sur le silence radio imposé par les autorités russes."
        ),
        array(
            "titre" => "Outer Wilds",
            "titres_alternatifs" => array(
                "Outer Wilds: Echoes of the Eye"
            ),
            "image" => "outer_wilds.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure",
                "Mystère",
                "Science-fiction"
            ),
            "sortie" => "2019",
            "status" => "Terminé",
            "duree" => "15h - 25h",
            "synopsis" => "Vous êtes la nouvelle recrue de Outer Wilds Ventures, un programme spatial modeste. Alors que vous décollez pour explorer votre système solaire, le soleil explose en supernova, détruisant tout. Mais au lieu de mourir, vous vous réveillez 22 minutes plus tôt, au coin du feu. Coincé dans une boucle temporelle, vous devez explorer des planètes changeantes (une cité s'ensablant, une planète qui s'effondre) pour comprendre qui étaient les Nomaï, cette civilisation antique disparue, et pourquoi l'univers est en train de mourir."
        ),
        array(
            "titre" => "Tunic",
            "image" => "tunic.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure", 
                "Combat",
                "Mystère"
            ),
            "sortie" => "2022",
            "status" => "Terminé",
            "duree" => "12h - 20h",
            "synopsis" => "Un petit renard s'échoue sur une terre mystérieuse remplie de ruines antiques et de créatures hostiles. Sans aucune instruction, vous devez explorer ce monde pour libérer une entité prisonnière. La particularité ? Le jeu est écrit dans une langue inconnue. Votre seul guide est un manuel d'instruction dont vous devez retrouver les pages éparpillées, révélant peu à peu non seulement les mécaniques du jeu, mais aussi la vérité tragique sur le cycle de pouvoir de ce monde."
        ),
        array(
            "titre" => "Clair Obscur: Expedition 33",
            "image" => "expedition_33.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure", 
                "Combat",
                "Drame",
                "Fantastique",
                "Psychologie"
            ),
            "sortie" => "2025",
            "status" => "Terminé",
            "duree" => "30h - 50h",
            "synopsis" => "Chaque année, une entité nommée la Peintre se réveille pour peindre un nombre maudit sur son monolithe. Tous ceux dont l'âge correspond à ce nombre tombent instantanément en poussière. Alors qu'elle s'apprête à peindre le nombre '33', Gustave et ses compagnons forment l'Expédition 33. Leur mission suicidaire : traverser des terres surréalistes pour atteindre la Peintre et mettre fin à ce cycle macabre avant que leur propre génération ne soit effacée."
        ),
        array(
            "titre" => "Satisfactory",
            "image" => "satisfactory.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure",
                "Espace",
                "Science-fiction",
                "Société"
            ),
            "sortie" => "2019 (Early Access) / 2024 (1.0)",
            "status" => "Terminé",
            "duree" => "100h - 500h+",
            "synopsis" => "En tant qu'employé de FICSIT Inc., vous êtes parachuté sur une planète extraterrestre luxuriante avec une mission unique : coloniser et exploiter le monde pour construire des usines toujours plus massives. Explorez la faune et la flore, automatisez des lignes de production complexes et construisez des ascenseurs spatiaux pour envoyer des ressources à vos mystérieux employeurs. Sous ses airs de jeu de construction satisfaisant, le titre interroge subtilement l'impact de l'industrialisation à outrance sur un écosystème vierge."
        ),
        array(
            "titre" => "Sea of Thieves",
            "titres_alternatifs" => array(
                "SoT"
            ),
            "image" => "sea_of_thieves.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Fantasy"
            ),
            "sortie" => "2018",
            "status" => "En cours",
            "duree" => "Indéfinie",
            "synopsis" => "Devenez le pirate que vous avez toujours rêvé d'être dans un monde partagé immense. À bord de votre propre navire, seul ou en équipage, naviguez sur une mer parsemée d'îles mystérieuses, de squelettes maudits et de monstres marins colossaux. Entre la recherche de trésors enfouis, les batailles navales épiques et les alliances fragiles avec d'autres joueurs, le titre propose une expérience où la liberté est totale et où chaque rencontre à l'horizon peut mener à une amitié durable ou à une trahison sanglante."
        ),
        array(
            "titre" => "Terraria",
            "image" => "terraria.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Fantasy"
            ),
            "sortie" => "2011",
            "status" => "Terminé",
            "duree" => "50h - 200h+",
            "synopsis" => "Creusez, battez-vous, explorez, construisez ! Dans ce monde en 2D généré procéduralement, vous commencez avec quelques outils de base et un guide. Votre objectif est de transformer cet environnement hostile en une terre prospère. En explorant des cavernes profondes et des îles flottantes, vous récolterez des matériaux pour invoquer et terrasser des boss légendaires. Le jeu met l'accent sur la progression d'une micro-société : en bâtissant des logements adaptés, vous attirez divers marchands et alliés qui vous aideront à repousser les forces des ténèbres qui cherchent à corrompre votre monde."
        ),
        array(
            "titre" => "Ni no Kuni II : L'Avènement d'un Nouveau Royaume",
            "titres_alternatifs" => array(
                "Ni no Kuni II: Revenant Kingdom"
            ),
            "image" => "ni_no_kuni_2.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Politique"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "40h - 80h",
            "synopsis" => "Après un coup d'État dans son royaume de Carabas, le jeune roi Evan Pettiwhisker Tildrum est contraint à l'exil. Aidé par Roland, un président venu de notre monde, Evan décide de ne pas simplement reprendre son trône, mais de bâtir un tout nouveau royaume nommé Estavania, où tout le monde pourra vivre en paix. Pour y parvenir, il devra explorer le monde, recruter des citoyens talentueux, gérer le développement de sa cité et signer des traités de paix avec des nations rivales pour unifier le continent face à une menace occulte."
        ),
        array(
            "titre" => "Celeste",
            "image" => "celeste.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Aventure",
                "Drame",
                "Psychologie"
            ),
            "sortie" => "2018",
            "status" => "Terminé",
            "duree" => "10h - 30h+",
            "synopsis" => "Madeline est une jeune femme déterminée à gravir le mont Celeste, une montagne légendaire réputée pour ses propriétés étranges. Au cours de son ascension périlleuse, elle doit affronter ses démons intérieurs, personnifiés par une version sombre d'elle-même. Ce qui n'était qu'un défi physique devient une quête de réconciliation personnelle. À travers des épreuves de plateforme d'une difficulté extrême, Madeline apprend que la persévérance et l'acceptation de ses propres faiblesses sont les seules voies pour atteindre le sommet."
        ),
        array(
            "titre" => "Baldur's Gate 3",
            "titres_alternatifs" => array(
                "BG3"
            ),
            "image" => "baldurs_gate_3.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Fantasy",
                "Politique",
                "Psychologie",
                "Société"
            ),
            "sortie" => "2023",
            "status" => "Terminé",
            "duree" => "100h - 200h+",
            "synopsis" => "Capturé par des flagelleurs mentaux, un parasite destructeur est inséré dans votre cerveau. Alors que vous commencez à muter, vous devez choisir : résister à cette corruption ou embrasser ce nouveau pouvoir pour dominer le monde. Accompagné d'un groupe de parias ayant chacun leurs propres secrets, vous vous retrouvez au centre d'un conflit millénaire entre divinités, démons et factions politiques. Vos choix dictent non seulement votre survie, mais aussi le destin de cités entières et l'équilibre moral de tout un continent."
        ),
        array(
            "titre" => "Forts",
            "image" => "forts.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Combat",
                "Guerre"
            ),
            "sortie" => "2017",
            "status" => "Terminé",
            "duree" => "10h - 100h+",
            "synopsis" => "Dans un futur où les ressources naturelles se font rares, des factions rivales s'affrontent pour le contrôle des derniers gisements d'énergie. Vous devez concevoir et construire des forteresses blindées en temps réel, tout en les armant de batteries de canons, de missiles et de lasers. Le titre repose sur un moteur physique exigeant : un tir bien placé peut faire s'écrouler toute la structure ennemie. Entre gestion du personnel, recherche technologique et batailles explosives, vous devez protéger votre cœur énergétique à tout prix sous peine d'annihilation totale."
        ),
        array(
            "titre" => "Dying Light",
            "image" => "dying_light_1.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Horreur",
                "Société",
                "Surnaturel"
            ),
            "sortie" => "2015",
            "status" => "Terminé",
            "duree" => "20h - 50h",
            "synopsis" => "Kyle Crane, un agent infiltré du GRE, est parachuté dans la ville de Harran, mise en quarantaine après l'apparition d'un virus transformant la population en prédateurs nocturnes. Sa mission est de retrouver un fichier confidentiel, mais il se retrouve rapidement déchiré entre ses ordres et sa loyauté envers les survivants locaux. Dans ce milieu urbain dévasté, la survie dépend de votre maîtrise du parkour et de votre capacité à anticiper le coucher du soleil, moment où les infectés les plus dangereux sortent de l'ombre."
        ),
        array(
            "titre" => "Dying Light 2: Stay Human",
            "image" => "dying_light_2.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure",
                "Combat",
                "Horreur",
                "Politique",
                "Société"
            ),
            "sortie" => "2022",
            "status" => "En cours",
            "duree" => "30h - 100h+",
            "synopsis" => "Vingt ans après les événements d'Harran, l'humanité a presque disparu. Vous incarnez Aiden, un pèlerin errant dans un monde post-apocalyptique à la recherche de sa sœur. Votre voyage vous mène à 'La Ville', l'un des derniers bastions humains. Ici, la menace n'est pas seulement biologique mais aussi idéologique : vous devez naviguer entre les factions (Survivants, Pacificateurs, Renegats) dont les visions de la société s'affrontent violemment. Chaque décision politique que vous prenez remodèle physiquement la ville et scelle le destin de ses habitants."
        ),
        array(
            "titre" => "Cyberpunk 2077",
            "titres_alternatifs" => array(
                "Cyberpunk 2077: Phantom Liberty"
            ),
            "image" => "cyberpunk_2077.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Drame",
                "Politique",
                "Psychologie",
                "Science-fiction",
                "Société"
            ),
            "sortie" => "2020",
            "status" => "Terminé",
            "duree" => "30h - 100h+",
            "synopsis" => "Dans la mégalopole de Night City, vous incarnez V, un mercenaire dont l'esprit est colonisé par la conscience numérique du terroriste Johnny Silverhand. Tandis que les méga-corporations Arasaka et Militech se disputent le contrôle de l'immortalité numérique, vous devez naviguer dans une société en décomposition où la technologie a remplacé l'humanité. Entre survie personnelle et révolte politique, vos choix détermineront l'héritage que vous laisserez dans une ville qui n'oublie jamais, mais qui ne pardonne personne."
        ),
        array(
            "titre" => "Warhammer 40,000: Space Marine 2",
            "titres_alternatifs" => array(
                "SM2",
                "Space Marine II"
            ),
            "image" => "space_marine_2.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Espace",
                "Guerre",
                "Science-fiction",
                "Société"
            ),
            "sortie" => "2024",
            "status" => "Terminé",
            "duree" => "12h - 50h+",
            "synopsis" => "Le Lieutenant Titus des Ultramarines reprend du service pour défendre l'Humanité contre les hordes insatiables de Tyranides. Dans un 41ème millénaire où il n'y a que la guerre, vous devez exterminer des armées extraterrestres pour protéger les mondes-clés de l'Imperium. Mais au-delà de la menace biologique, Titus doit naviguer au sein d'une société impériale rigide, marquée par la suspicion religieuse et les intrigues de l'Inquisition, tout en prouvant sa loyauté envers l'Empereur."
        ),
        array(
            "titre" => "Monster Hunter Wilds",
            "titres_alternatifs" => array(
                "MH Wilds"
            ),
            "image" => "monster_hunter_wilds.jpg",
            "types" => array(
                "Jeu vidéo"
            ),
            "genres" => array(
                "Action",
                "Aventure"
            ),
            "sortie" => "2025",
            "status" => "En cours",
            "duree" => "50h - 300h+",
            "synopsis" => "En tant que Chasseur de la Commission de recherche, vous explorez les Terres Interdites, une région sauvage où le climat change radicalement, transformant des déserts arides en plaines luxuriantes. Vous devez traquer des monstres colossaux et étudier leurs comportements pour protéger les expéditions humaines. Le titre met l'accent sur l'interaction entre les espèces et la survie d'une micro-société de chercheurs et de forgerons qui dépendent entièrement des ressources prélevées sur une nature aussi magnifique que cruelle."
        )
    );
?>