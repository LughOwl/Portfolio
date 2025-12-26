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
                "MHW",
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
        )
    );
?>