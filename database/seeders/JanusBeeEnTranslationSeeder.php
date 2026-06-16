<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Oeuvre;
use App\Models\Type;
use Illuminate\Database\Seeder;

class JanusBeeEnTranslationSeeder extends Seeder
{
    public function run(): void
    {
        // --- TYPES ---
        $types = [
            "Série d'animation" => 'Animated Series',
            "Film d'animation"  => 'Animated Film',
            'Film live'         => 'Live-Action Film',
            'Court métrage'     => 'Short Film',
            'Livre'             => 'Book',
            'Jeu vidéo'         => 'Video Game',
            'Série live'        => 'Live-Action Series',
        ];
        foreach ($types as $fr => $en) {
            Type::where('nom', $fr)->update(['nom_en' => $en]);
        }

        // --- GENRES ---
        $genres = [
            'Action'         => 'Action',
            'Aventure'       => 'Adventure',
            'Combat'         => 'Combat',
            'Comédie'        => 'Comedy',
            'Cuisine'        => 'Cooking',
            'Drame'          => 'Drama',
            'Espace'         => 'Space',
            'Fantastique'    => 'Dark Fantasy',
            'Fantasy'        => 'Fantasy',
            'Guerre'         => 'War',
            'Historique'     => 'Historical',
            'Horreur'        => 'Horror',
            'Médical'        => 'Medical',
            'Mystère'        => 'Mystery',
            'Policier'       => 'Crime',
            'Politique'      => 'Political',
            'Psychologie'    => 'Psychological',
            'Romance'        => 'Romance',
            'Science-fiction' => 'Science Fiction',
            'Société'        => 'Society',
            'Sport'          => 'Sports',
            'Super-héros'    => 'Superhero',
            'Surnaturel'     => 'Supernatural',
            'Thriller'       => 'Thriller',
            'Tranche de vie' => 'Slice of Life',
        ];
        foreach ($genres as $fr => $en) {
            Genre::where('nom', $fr)->update(['nom_en' => $en]);
        }

        // --- OEUVRES ---
        $oeuvres = [
            '1984' => [
                'titre_en'    => 'Nineteen Eighty-Four',
                'synopsis_en' => 'In a world divided into three superstates, London is the capital of Oceania, a totalitarian state ruled by Big Brother. Winston Smith, a low-ranking Party member, works at the Ministry of Truth rewriting history. Tormented by the gap between propaganda and reality, he begins a secret act of rebellion — a diary — which will drag him into a doomed struggle for truth and human dignity.',
            ],
            '300' => [
                'titre_en'    => '300',
                'synopsis_en' => 'In 480 BC, the Spartan king Leonidas refuses to submit to the vast Persian empire led by Xerxes I. With only 300 elite warriors, he sets out to hold the narrow pass of Thermopylae against hundreds of thousands of Persian soldiers, buying time for Greece to mount its defence.',
            ],
            '91 Days' => [
                'titre_en'    => '91 Days',
                'synopsis_en' => 'During Prohibition in the United States, the town of Lawless is ruled by the mafia and alcohol trafficking. Angelo Lagusa witnessed the slaughter of his family by the Vanetti clan as a child and has been hiding ever since. When he receives an anonymous letter years later, he returns to Lawless under a false identity to carry out a meticulous revenge.',
            ],
            'A Brief Disagreement' => [
                'titre_en'    => 'A Brief Disagreement',
                'synopsis_en' => 'Across the ages — from the Stone Age to an apocalyptic future — two men argue over a trivial matter. A darkly humorous short film showing that stubbornness and petty conflicts are timeless, regardless of era or civilisation.',
            ],
            'À l\'Ouest, rien de nouveau' => [
                'titre_en'    => 'All Quiet on the Western Front',
                'synopsis_en' => 'In 1917, Paul Bäumer, 17, enlists with enthusiasm in the German Imperial Army, driven by patriotic propaganda. On the front, the brutal reality of trench warfare quickly shatters his ideals. This unflinching anti-war film follows his gradual disillusionment as he watches his comrades die one by one in a senseless conflict.',
            ],
            'Ameku Takao\'s Detective Karte' => [
                'titre_en'    => "Ameku Takao's Detective Karte",
                'synopsis_en' => 'At the diagnostic department of Tenma General Hospital, director Takao Ameku is a medical genius but a social disaster. Eccentric and seemingly indifferent, she possesses a remarkable gift for diagnosis. Each episode, she unravels a medical mystery while a series of interpersonal dramas unfold around her.',
            ],
            'American Sniper' => [
                'titre_en'    => 'American Sniper',
                'synopsis_en' => 'Adapted from the true story of Chris Kyle, the most lethal sniper in US Navy SEAL history. Deployed four times to Iraq, he becomes a legend among his fellow soldiers but is haunted by the weight of his actions once back home. The film portrays his struggle to reconcile the battlefield with family life.',
            ],
            'Animation vs. Addiction' => [
                'titre_en'    => 'Animation vs. Addiction',
                'synopsis_en' => 'In a minimalist universe, the blue stickman discovers a mysterious glowing button representing a dopamine rush. What begins as a moment of pleasure quickly becomes an obsession, pulling him deeper into an addictive spiral. A striking short film that illustrates the mechanisms of addiction through animation.',
            ],
            'ARK: Survival Evolved' => [
                'titre_en'    => 'ARK: Survival Evolved',
                'synopsis_en' => 'You wake up naked and starving on the shores of a mysterious island called ARK, populated by dinosaurs and other prehistoric creatures. You must gather resources, craft tools and weapons, build shelters, and tame creatures to survive — alone or with others — while unravelling the island\'s dark secrets.',
            ],
            'As a Reincarnated Aristocrat, I\'ll Use My Appraisal Skill to Rise in the World' => [
                'titre_en'    => "As a Reincarnated Aristocrat, I'll Use My Appraisal Skill to Rise in the World",
                'synopsis_en' => 'An ordinary Japanese office worker dies and is reincarnated as Ars Louvent, the young heir of a minor noble family in a medieval fantasy world. Gifted with an "Appraisal" skill that lets him discern the true potential of those around him, he recruits talented people to strengthen his domain and restore his family\'s glory.',
            ],
            'Avatar (Saga)' => [
                'titre_en'    => 'Avatar (Saga)',
                'synopsis_en' => 'On the lush moon of Pandora, the Na\'vi — tall blue-skinned beings deeply connected to their world — live in harmony with nature. The RDA Corporation arrives to extract a precious mineral, displacing the Na\'vi from their ancestral lands. Jake Sully, a paraplegic former marine, is sent as an avatar to negotiate with them, but gradually crosses to their side.',
            ],
            'Babylon' => [
                'titre_en'    => 'Babylon',
                'synopsis_en' => 'Zen Seizaki, a prosecutor in Tokyo\'s newly established Shinzen district, investigates a pharmaceutical fraud case. His inquiry leads him to a mysterious woman named Ai Magase who seems to be at the centre of a conspiracy tied to the creation of a new "suicide law". A dark political thriller that questions the nature of good and evil.',
            ],
            'Baldur\'s Gate 3' => [
                'titre_en'    => "Baldur's Gate 3",
                'synopsis_en' => 'Captured by Mind Flayers, a destructive parasite is inserted into your brain. You manage to escape, but the parasite is slowly transforming you into one of them. You must find a cure before the transformation is complete, while uncovering a vast conspiracy threatening the city of Baldur\'s Gate and the entire Forgotten Realms.',
            ],
            'Berserk : L\'Âge d\'Or (Trilogie)' => [
                'titre_en'    => "Berserk: The Golden Age Arc (Trilogy)",
                'synopsis_en' => 'Guts is a lone mercenary whose life changes when he crosses paths with Griffith, the charismatic leader of the Band of the Hawk. Together they forge a legendary bond on the battlefield. But Griffith\'s boundless ambition will lead to a catastrophic betrayal that will forever mark Guts\'s fate.',
            ],
            'Bienvenue à Gattaca' => [
                'titre_en'    => 'Gattaca',
                'synopsis_en' => 'In the near future, society practises strict genetic eugenics: social success is determined by one\'s DNA from birth. Vincent Freeman, born naturally and therefore deemed inferior, dreams of becoming an astronaut. He assumes the identity of Jerome Morrow, a genetically perfect man, to infiltrate the elite Gattaca space programme.',
            ],
            'Breaking Bad' => [
                'titre_en'    => 'Breaking Bad',
                'synopsis_en' => 'Walter White is an overqualified but underpaid high school chemistry teacher in New Mexico. Diagnosed with terminal lung cancer, he teams up with former student Jesse Pinkman to cook and sell methamphetamine in order to secure his family\'s financial future. His gradual moral descent transforms him from a desperate father into a ruthless drug lord.',
            ],
            'Carmen' => [
                'titre_en'    => 'Carmen',
                'synopsis_en' => 'Inspired by the aria from Bizet\'s opera Carmen, this short film follows the rise and fall of a young woman who refuses to be controlled. An elegantly choreographed visual poem that explores themes of freedom, obsession, and the fatal consequences of passion.',
            ],
            'Celeste' => [
                'titre_en'    => 'Celeste',
                'synopsis_en' => 'Madeline is a determined young woman who sets out to climb Mount Celeste, a legendary mountain said to be cursed. What she doesn\'t expect is to confront a physical manifestation of her own self-doubt and anxiety. A precision platformer with a powerful narrative about mental health and self-acceptance.',
            ],
            'Clair Obscur: Expedition 33' => [
                'titre_en'    => 'Clair Obscur: Expedition 33',
                'synopsis_en' => 'Each year, an entity known as the Paintress awakens and paints a cursed number on her monolith — and everyone of that age dies. As she approaches the number 33, Gustave leads Expedition 33, a group determined to reach the Paintress and destroy her before humanity is wiped out entirely.',
            ],
            'Cloud Atlas' => [
                'titre_en'    => 'Cloud Atlas',
                'synopsis_en' => 'Across six different eras — from 1849 to a post-apocalyptic future — the destinies of several individuals are interwoven. Their choices, mistakes, and courage ripple across time, shaping lives and societies centuries apart. An ambitious film about reincarnation, freedom, and the irreversible consequences of our actions.',
            ],
            'Cyberpunk 2077' => [
                'titre_en'    => 'Cyberpunk 2077',
                'synopsis_en' => 'In the sprawling megalopolis of Night City, you play as V, a mercenary whose mind is colonised by the digital ghost of legendary rock star Johnny Silverhand. To save yourself, you must navigate the city\'s warring factions and corporations in a cyberpunk world where power, identity, and survival are constantly at stake.',
            ],
            'Death Billiards' => [
                'titre_en'    => 'Death Billiards',
                'synopsis_en' => 'An arrogant young man and a calm elderly man find themselves in a strange bar with no memory of how they arrived. A mysterious bartender tells them they must play billiards — and the loser will face an unknown fate. This short film raises questions about judgment, mortality, and human nature.',
            ],
            'Death Note' => [
                'titre_en'    => 'Death Note',
                'synopsis_en' => 'Light Yagami is a brilliant high school student who views the world as rotten and corrupt. His life is upended when he discovers a supernatural notebook: anyone whose name is written in it dies. Believing himself to be a god of justice, he embarks on a mission to rid the world of criminals — but a mysterious detective named L is on his trail.',
            ],
            'Death Parade' => [
                'titre_en'    => 'Death Parade',
                'synopsis_en' => 'After death, humans arrive at the Quindecim, a mysterious bar run by Decim, a cold arbitrator. Here, the recently deceased must play a game — billiards, darts, or chess — to determine whether their soul will be reincarnated or cast into the void. But the truth behind the system is more ambiguous than it first appears.',
            ],
            'Demon Slayer' => [
                'titre_en'    => 'Demon Slayer: Kimetsu no Yaiba',
                'synopsis_en' => 'In early Taisho-era Japan, Tanjiro, a kind-hearted young charcoal seller, returns home to find his family slaughtered by demons — all except his sister Nezuko, who has been turned into one. Determined to find a cure and avenge his family, he trains to become a Demon Slayer and joins an elite corps of warriors hunting the demons.',
            ],
            'Detroit: Become Human' => [
                'titre_en'    => 'Detroit: Become Human',
                'synopsis_en' => 'In 2038 Detroit, androids have become an integral part of daily life. Three android protagonists — Connor, Kara, and Markus — find themselves questioning their programming as a growing movement for android rights emerges. Every player decision shapes the story\'s outcome in this branching narrative about consciousness and freedom.',
            ],
            'Discours de la servitude volontaire' => [
                'titre_en'    => 'Discourse on Voluntary Servitude',
                'synopsis_en' => 'In this revolutionary text, La Boétie poses a simple but terrifying question: why do millions obey a single tyrant? He argues that tyranny is not sustained by force alone but by the voluntary compliance of the governed. Written in the 16th century, this essay remains one of the most radical political texts ever composed.',
            ],
            'Dokkōdō' => [
                'titre_en'    => 'The Dokkōdō',
                'synopsis_en' => 'Written by the legendary samurai Miyamoto Musashi just days before his death, the Dokkōdō is a set of twenty-one precepts for living alone. A radical and austere guide to detachment, self-discipline, and the acceptance of death, it encapsulates the philosophy of a man who devoted his entire life to the way of the sword.',
            ],
            'Dorohedoro' => [
                'titre_en'    => 'Dorohedoro',
                'synopsis_en' => 'In a dilapidated city known as The Hole, sorcerers use its inhabitants as test subjects for their spells. Caiman, a man with a reptilian head and no memory of his former life, hunts these sorcerers alongside his friend Nikaido, searching for the one who transformed him. A bizarre, violent, and darkly comedic series set in a world where magic and brutality collide.',
            ],
            'Dragon\'s Dogma' => [
                'titre_en'    => "Dragon's Dogma",
                'synopsis_en' => 'After more than a century of absence, a devastating dragon reappears and attacks the village of Cassardis, tearing out the heart of the warrior who dares confront it. That warrior — the Arisen — survives without a heart and sets off to reclaim it, accompanied by powerful companions called Pawns, in a vast and perilous open world.',
            ],
            'Dungeon Meshi' => [
                'titre_en'    => 'Delicious in Dungeon',
                'synopsis_en' => 'After being routed by a dragon in the depths of a dungeon and losing all their provisions — including the mage Falin, who was devoured — Laios and his party must venture back down with no money for food. Their only solution: cook and eat the monsters they defeat along the way. A unique adventure that blends culinary creativity with dungeon exploration.',
            ],
            'Dying Light' => [
                'titre_en'    => 'Dying Light',
                'synopsis_en' => 'Kyle Crane, an undercover agent for the GRE, is parachuted into the quarantined city of Harran, overrun by a zombie virus. His mission: retrieve a stolen file. But the reality on the ground forces him to question his loyalties as he fights to survive among survivors and the infected in this open-world parkour action game.',
            ],
            'Dying Light 2: Stay Human' => [
                'titre_en'    => 'Dying Light 2: Stay Human',
                'synopsis_en' => 'Twenty years after the events of Harran, humanity has nearly disappeared. You play as Aiden, a wandering pilgrim searching for his lost sister in The City — one of the last bastions of civilisation, torn apart by warring factions. Your choices directly shape the city\'s future in this parkour-driven open-world sequel.',
            ],
            'El Empleo' => [
                'titre_en'    => 'The Employment',
                'synopsis_en' => 'In a world where inanimate objects have been replaced by human beings, a man prepares for his workday. An Oscar-nominated animated short that offers a sharp satirical critique of labour, dehumanisation, and the systems that reduce people to mere functions.',
            ],
            'Elden Ring' => [
                'titre_en'    => 'Elden Ring',
                'synopsis_en' => 'In the Lands Between, the Elden Ring — source of the Erdtree — has been shattered. The demigod children of Queen Marika each claim a shard, plunging the world into conflict. You are a Tarnished, exiled and now called back to become Elden Lord. Explore a vast open world, battle formidable bosses, and unravel the deep lore crafted by Hidetaka Miyazaki and George R.R. Martin.',
            ],
            'Elysium' => [
                'titre_en'    => 'Elysium',
                'synopsis_en' => 'In 2154, humanity is split into two classes: the wealthy live on Elysium, a pristine space station where disease and ageing are cured in minutes, while the rest struggle on an overcrowded and polluted Earth. Max, a factory worker exposed to lethal radiation, must reach Elysium to save his life — and may spark a revolution in the process.',
            ],
            'Ergo Proxy' => [
                'titre_en'    => 'Ergo Proxy',
                'synopsis_en' => 'In the dome city of Romdo, one of humanity\'s last refuges after an ecological catastrophe, AutoReiv androids are infected by a virus that grants them consciousness. Inspector Re-l Mayer investigates the murders they commit and uncovers a deeply buried secret: the existence of mysterious beings called Proxies, key to humanity\'s survival.',
            ],
            'Fight Club' => [
                'titre_en'    => 'Fight Club',
                'synopsis_en' => 'An insomniac office worker, enslaved by consumer society, searches for meaning in his empty life. He meets Tyler Durden, a charismatic soap salesman, and together they create an underground fight club that gives men an outlet for their frustration. But their movement quickly spirals into something far more dangerous and ideologically extreme.',
            ],
            'Forrest Gump' => [
                'titre_en'    => 'Forrest Gump',
                'synopsis_en' => 'Sitting on a bench in Savannah, Forrest Gump recounts his extraordinary life to passersby. Though of below-average intelligence, he unwittingly witnesses and participates in many pivotal moments of 20th-century American history — from Elvis Presley to Vietnam, Watergate, and the ping-pong diplomacy with China — all while searching for his childhood sweetheart Jenny.',
            ],
            'Forts' => [
                'titre_en'    => 'Forts',
                'synopsis_en' => 'In a future where natural resources are scarce, rival factions battle for control using enormous armoured fortresses mounted on wheels. Build and customise your fort in real time, then unleash it against the enemy in physics-driven combat. A strategic action game that blends base-building with direct, destructive confrontation.',
            ],
            'Fullmetal Alchemist: Brotherhood' => [
                'titre_en'    => 'Fullmetal Alchemist: Brotherhood',
                'synopsis_en' => 'In the country of Amestris, alchemy is governed by the Law of Equivalent Exchange. The Elric brothers, Edward and Alphonse, broke this law in a failed attempt to resurrect their dead mother: Edward lost an arm and a leg, and Alphonse his entire body. Now they seek the Philosopher\'s Stone to restore themselves, uncovering a vast conspiracy that threatens the entire nation.',
            ],
            'Gachiakuta' => [
                'titre_en'    => 'Gachiakuta',
                'synopsis_en' => 'In a floating city, everything deemed trash is thrown into the Abyss below. Rudo, an inhabitant of the lower districts, is falsely accused of murder and cast into the Abyss. He discovers that discarded objects there hold latent power, and must survive among the outcasts while seeking the truth about his origins and the corrupt society above.',
            ],
            'God of War' => [
                'titre_en'    => 'God of War',
                'synopsis_en' => 'Having destroyed the gods of Olympus, Kratos now lives hidden in the Norse wilderness with his young son Atreus. When they set out to scatter the ashes of Atreus\'s mother from the highest peak, their journey draws the attention of the Norse gods — and reveals a destiny neither of them is ready to face.',
            ],
            'Golden Kamui' => [
                'titre_en'    => 'Golden Kamuy',
                'synopsis_en' => 'At the dawn of the 20th century, after the Russo-Japanese War, Saichi Sugimoto — nicknamed "the Immortal" — survives on Hokkaido. He learns of a legendary Ainu gold treasure whose location is encoded in tattoos scattered across the bodies of escaped prisoners. Alongside a young Ainu girl named Asirpa, he embarks on a perilous hunt across the frozen north.',
            ],
            'Grand Theft Auto V' => [
                'titre_en'    => 'Grand Theft Auto V',
                'synopsis_en' => 'In Los Santos, a fictional Californian metropolis, three career criminals with radically different profiles cross paths: retired bank robber Michael, volatile street gangster Trevor, and ambitious young Franklin. Caught up in increasingly dangerous heists for a corrupt government agency, they must outmanoeuvre enemies on all sides in this vast open-world crime epic.',
            ],
            'Happiness' => [
                'titre_en'    => 'Happiness',
                'synopsis_en' => 'In a teeming metropolis, thousands of rats jostle to get to work, consume, and compete. One rat manages to escape the frantic crowd and discovers a peaceful garden full of life. A wordless animated short that delivers a sharp critique of the rat race and our collective pursuit of the wrong kind of happiness.',
            ],
            'Harry Potter (Saga)' => [
                'titre_en'    => 'Harry Potter (Saga)',
                'synopsis_en' => 'A young orphan discovers on his 11th birthday that he has magical powers and that he is famous in the wizarding world as the boy who survived the killing curse of the dark lord Voldemort. He enrols at Hogwarts School of Witchcraft and Wizardry, makes lifelong friends, and gradually learns the truth about his past — and his destiny.',
            ],
            'Hell\'s Paradise' => [
                'titre_en'    => "Hell's Paradise: Jigokuraku",
                'synopsis_en' => 'At the end of the Edo period, Gabimaru "the Hollow", a legendary ninja assassin, survives every execution. He is offered a deal: if he retrieves an elixir of immortality from the mysterious island of Shinsekyo, he will be pardoned and reunited with his wife. Together with the executioner Sagiri, he sets out for an island that defies all natural law.',
            ],
            'Horizon Zero Dawn' => [
                'titre_en'    => 'Horizon Zero Dawn',
                'synopsis_en' => 'In a future where humanity has regressed to a tribal age, Earth is dominated by mechanical creatures. Aloy, a young outcast, sets out to discover the truth about her origins and the ancient catastrophe that reshaped the world. A stunning open-world action RPG that weaves together prehistoric survival and sci-fi mystery.',
            ],
            'Hunter x Hunter' => [
                'titre_en'    => 'Hunter x Hunter',
                'synopsis_en' => 'Gon Freecss is a young boy who dreams of becoming a Hunter — an elite adventurer — in order to find his father Ging, who abandoned him to pursue that life. After passing the gruelling Hunter Exam, he meets Killua, Kurapika, and Leorio, and together they face increasingly dangerous opponents in a world full of wonder and peril.',
            ],
            'I Origins' => [
                'titre_en'    => 'I Origins',
                'synopsis_en' => 'Ian Gray is a molecular biologist specialising in the evolution of the human eye and a committed atheist. After meeting a mysterious young woman, Sofi, whose unique eyes captivate him, he faces a series of coincidences that challenge his scientific worldview. Years later, a startling discovery forces him to question everything he believes about consciousness and the soul.',
            ],
            'In Shadow' => [
                'titre_en'    => 'In Shadow',
                'synopsis_en' => 'Without a single word of dialogue, this film is a dark odyssey through the collective psyche of modern society. Skyscrapers, smartphones, social media, and consumerism are depicted as a suffocating system — until one man dares to look deeper. A visually stunning short film that invites profound reflection.',
            ],
            'In the Fall' => [
                'titre_en'    => 'In the Fall',
                'synopsis_en' => 'A middle-aged man sitting on his balcony accidentally falls from a great height. As he plummets, his entire life flashes before him in a flood of memories, regrets, and tender moments. A moving and introspective animated short about the weight of time and the value of what we leave behind.',
            ],
            'Interstellar' => [
                'titre_en'    => 'Interstellar',
                'synopsis_en' => 'In the near future, Earth has become hostile to human life: crop blights and dust storms are rendering the planet uninhabitable. Cooper, a former NASA pilot, is recruited for a last-chance mission: travel through a wormhole near Saturn to find a new home for humanity. He must choose between saving the world and returning to his daughter.',
            ],
            'Into the Wild' => [
                'titre_en'    => 'Into the Wild',
                'synopsis_en' => 'Fresh out of university, Christopher McCandless, 22, with a bright future ahead of him, donates his savings to charity, abandons his car, burns his cash, and sets out alone into the American wilderness. Seeking authenticity and freedom from a society he rejects, he heads for Alaska — where he will learn the true price of absolute solitude.',
            ],
            'Ishura' => [
                'titre_en'    => 'Ishura',
                'synopsis_en' => 'The Demon King has been defeated, but no one knows who did it. In a world now without a common enemy, countless individuals claim the title of the strongest. Six extraordinary warriors — each capable of ending the world alone — converge in a conflict that will determine who truly deserves to be called invincible.',
            ],
            'Je suis une légende' => [
                'titre_en'    => 'I Am Legend',
                'synopsis_en' => 'Robert Neville is a brilliant scientist who failed to stop a deadly man-made virus that wiped out most of humanity and turned the survivors into bloodthirsty mutants. The last immune human in New York City, he spends his days searching for a cure while fending off the creatures that hunt him by night.',
            ],
            'Joker' => [
                'titre_en'    => 'Joker',
                'synopsis_en' => 'In 1980s Gotham City, Arthur Fleck is a man despised by society — a failed comedian with a neurological condition that causes him to laugh uncontrollably. After a series of humiliations and acts of violence, he gradually embraces a nihilistic identity that will transform him into the Joker, a symbol of chaos for the city\'s discontented masses.',
            ],
            'Jujutsu Kaisen' => [
                'titre_en'    => 'Jujutsu Kaisen',
                'synopsis_en' => 'In a world where human negative emotions — fear, hatred, regret — manifest as cursed spirits, Yuji Itadori is an ordinary high school student with extraordinary physical abilities. After swallowing a finger belonging to the most powerful cursed spirit, Ryomen Sukuna, he is enrolled in Tokyo Jujutsu High to train as an exorcist — while a ticking clock counts down to his death.',
            ],
            'Kaiju No. 8' => [
                'titre_en'    => 'Kaiju No. 8',
                'synopsis_en' => 'Japan has the world\'s highest rate of Kaiju appearances — giant monsters that devastate the country. Kafka Hibino, a 32-year-old working in monster cleanup, dreams of joining the Defence Force to fight them. His life changes when he is infected by a small monster and gains the ability to transform into a Kaiju himself, becoming the mysterious and powerful "Kaiju No. 8".',
            ],
            'Kekkai Sensen' => [
                'titre_en'    => 'Blood Blockade Battlefront',
                'synopsis_en' => 'Three years ago, a breach between Earth and the beyond opened above New York, trapping humans and supernatural beings together in a chaotic city now called Hellsalem\'s Lot. Leonardo Watch, a young man gifted with "The All-Seeing Eyes of the Gods", joins Libra, a secret organisation working to maintain order in this impossible city.',
            ],
            'Kengan Ashura' => [
                'titre_en'    => 'Kengan Ashura',
                'synopsis_en' => 'Since the Edo period, disputes between Japan\'s major corporations have been settled in gladiatorial arenas called Kengan matches, where each company hires a fighter to battle on their behalf. Ohma Tokita, a mysterious and devastatingly powerful fighter, is hired by the Nogi Corporation\'s president, drawing him into the brutal world of these underground tournaments.',
            ],
            'Kijin Gentoushou' => [
                'titre_en'    => 'Kijin Gentoushou',
                'synopsis_en' => 'During the Edo period, in the village of Kadono, Jinta is tasked with protecting the shrine\'s priestess from demons. He is aided by a half-demon girl named Asa, whose dual nature gives her unique powers but also makes her an outcast. Together they confront supernatural threats in a story that blends folklore, action, and questions of identity.',
            ],
            'Kung Fu Panda (Saga)' => [
                'titre_en'    => 'Kung Fu Panda (Saga)',
                'synopsis_en' => 'Po is a clumsy, kung-fu-obsessed panda who works in his father\'s noodle restaurant in the Valley of Peace. When he is unexpectedly chosen as the legendary Dragon Warrior, he must train under the stern Master Shifu to fulfil his destiny and defend the valley. A saga that blends comedy, action, and heartfelt messages about self-belief and inner peace.',
            ],
            'L\'Alchimiste' => [
                'titre_en'    => 'The Alchemist',
                'synopsis_en' => 'Santiago, a young Andalusian shepherd, repeatedly has the same dream: a treasure awaits him at the foot of the Egyptian pyramids. He sets out on a journey that will take him across continents, guided by omens and a mysterious alchemist. A universal fable about following one\'s destiny and the courage to pursue one\'s Personal Legend.',
            ],
            'L\'Archipel du Goulag' => [
                'titre_en'    => 'The Gulag Archipelago',
                'synopsis_en' => 'The product of ten years of work drawing on the testimonies of 227 survivors and Solzhenitsyn\'s own experience as a prisoner, this monumental work meticulously documents the Soviet forced labour camp system. Part historical chronicle, part literary masterpiece, it is an indictment of totalitarianism and a testament to the resilience of the human spirit.',
            ],
            'L\'Art de la Guerre' => [
                'titre_en'    => 'The Art of War',
                'synopsis_en' => 'The oldest known treatise on military strategy, this work far exceeds the battlefield in its scope. Sun Tzu\'s thirteen chapters distil timeless principles of strategy, intelligence, adaptability, and deception. Studied for over 2,500 years by military commanders, political leaders, and business strategists alike, it remains one of the most influential texts ever written.',
            ],
            'L\'Attaque des Titans' => [
                'titre_en'    => 'Attack on Titan',
                'synopsis_en' => 'In a world ravaged by man-eating Titans, the last survivors of humanity live behind three concentric walls. When a Colossal Titan breaches the outer wall, young Eren Yeager watches his mother being devoured and vows to exterminate every Titan. He enlists in the military\'s elite Survey Corps — only to discover that the truth behind the Titans is far more terrifying than anyone imagined.',
            ],
            'L\'Odyssée de Kino' => [
                'titre_en'    => "Kino's Journey",
                'synopsis_en' => 'Kino is a young traveller who journeys through a world dotted with unique city-states, accompanied by her talking motorrad Hermes. She follows a rule: never stay in any country for more than three days. Each episode presents a new society with its own laws and customs, serving as a philosophical meditation on freedom, morality, and the nature of happiness.',
            ],
            'La Belle Verte' => [
                'titre_en'    => 'The Green Beautiful',
                'synopsis_en' => 'Somewhere in the universe exists a planet whose inhabitants live in total harmony with nature, having abandoned technology, money, and hierarchy. One woman volunteers to visit Earth — and is horrified by what she finds. A cult French comedy that uses science fiction as a vehicle for radical social critique, targeting consumerism, medicine, television, and the school system.',
            ],
            'La Ligne Verte' => [
                'titre_en'    => 'The Green Mile',
                'synopsis_en' => 'Paul Edgecomb, chief guard on death row at a Louisiana penitentiary in the 1930s, works in Block E — nicknamed "the Green Mile". The arrival of John Coffey, a giant, gentle Black man convicted of murdering two girls, upends everything Paul thought he knew about justice, miracles, and the nature of good and evil.',
            ],
            'La Société du Spectacle' => [
                'titre_en'    => 'The Society of the Spectacle',
                'synopsis_en' => 'Debord analyses the modern world as a permanent mise en scène in which lived experience has been replaced by its representation. In a society dominated by commodities and images, human relationships are mediated by spectacle. This foundational text of Situationist theory offers a radical critique of consumer capitalism and mass media that remains urgently relevant today.',
            ],
            'La Trilogie des Fourmis' => [
                'titre_en'    => 'The Ants Trilogy',
                'synopsis_en' => 'The narrative weaves between two worlds. Among humans, Jonathan Wells inherits an apartment and a mysterious encyclopaedia dedicated entirely to ants. Among the insects, a young worker ant sets out on an extraordinary journey. A unique literary odyssey that blends entomological science, social allegory, and adventure to challenge our perspective on civilisation.',
            ],
            'Là-haut' => [
                'titre_en'    => 'Up',
                'synopsis_en' => 'Carl Fredricksen, a 78-year-old retired balloon salesman, decides to fulfil his late wife Ellie\'s lifelong dream by tying thousands of balloons to his house and flying it to the lost paradise of Paradise Falls in South America. But he has an unexpected passenger: Russell, an enthusiastic young Wilderness Explorer scout who changes his journey entirely.',
            ],
            'Last Hero Inuyashiki' => [
                'titre_en'    => 'Inuyashiki: Last Hero',
                'synopsis_en' => 'Ichiro Inuyashiki is a frail, 58-year-old man despised by his family and diagnosed with terminal cancer. His life transforms when an alien spacecraft accidentally destroys his body and rebuilds it as a powerful weapon. He chooses to use this power to save lives and atone. But the same accident also gave powers to a young man who chooses to use them to kill.',
            ],
            'Lazarus' => [
                'titre_en'    => 'Lazarus',
                'synopsis_en' => 'In 2052, the world enjoys an unprecedented era of peace and health thanks to "Hapuna", a miracle drug that cures all known diseases. Revira, a former soldier, is sent to investigate a research facility that has gone dark. What she discovers there will shatter everything she believed about the drug, its creator, and the nature of the utopia she serves.',
            ],
            'Le Château Ambulant' => [
                'titre_en'    => "Howl's Moving Castle",
                'synopsis_en' => 'Sophie, a quiet young woman working in a hat shop, finds her life upended when she is transformed into a 90-year-old woman by a witch\'s curse. She seeks refuge in the magical moving castle of the mysterious wizard Howl, who is caught between a war and his own inner demons. A Miyazaki masterpiece about courage, love, and the dangers of war.',
            ],
            'Le Château dans le ciel' => [
                'titre_en'    => 'Castle in the Sky',
                'synopsis_en' => 'Sheeta is the keeper of a mysterious stone coveted by sky pirates, a ruthless government agent, and a young boy named Pazu who dreams of finding the legendary floating city of Laputa. Together, they must reach Laputa before it falls into the wrong hands in this breathtaking Studio Ghibli adventure.',
            ],
            'Le Garçon et la Bête' => [
                'titre_en'    => 'The Boy and the Beast',
                'synopsis_en' => 'Ren, a lonely nine-year-old runaway, wanders into the streets of Shibuya and crosses into Jutten Town, a world inhabited by anthropomorphic creatures. He becomes the apprentice of Kumatetsu, a powerful but ill-tempered bear warrior seeking a successor. Their unlikely bond forges them both — but Ren must ultimately choose between the human world and the beast world.',
            ],
            'Le Hobbit (Trilogie)' => [
                'titre_en'    => 'The Hobbit (Trilogy)',
                'synopsis_en' => 'Sixty years before the events of The Lord of the Rings, Bilbo Baggins, a comfort-loving hobbit, is swept into an unexpected adventure by the wizard Gandalf and a company of thirteen dwarves. Their goal: reclaim the Lonely Mountain and its treasure from the dragon Smaug. The journey will change Bilbo — and the fate of Middle-earth — forever.',
            ],
            'Le Kybalion' => [
                'titre_en'    => 'The Kybalion',
                'synopsis_en' => 'Based on the teachings of Hermes Trismegistus, this treatise expounds seven Hermetic principles that are said to govern all of existence: Mentalism, Correspondence, Vibration, Polarity, Rhythm, Cause and Effect, and Gender. An esoteric classic that bridges ancient Egyptian philosophy and New Thought, exploring the hidden laws of the universe.',
            ],
            'Le Meilleur des mondes' => [
                'titre_en'    => 'Brave New World',
                'synopsis_en' => 'In a distant future, the World State has achieved stability through the elimination of family, religion, and individuality. Citizens are engineered and conditioned from birth to fulfil their social caste and consume endlessly. Bernard Marx, a misfit Alpha, and John the Savage — raised outside this system — question whether happiness built on conditioning is worth the cost of humanity.',
            ],
            'Le Monde de Némo' => [
                'titre_en'    => 'Finding Nemo',
                'synopsis_en' => 'Marlin, an overprotective clownfish who lost his mate, is devastated when his son Nemo is taken by a scuba diver and ends up in a fish tank in a Sydney dentist\'s office. Marlin embarks on an epic journey across the ocean, aided by the forgetful but endearing Dory, to bring his son home.',
            ],
            'Le Prince' => [
                'titre_en'    => 'The Prince',
                'synopsis_en' => 'Breaking with the moralistic tradition of political philosophy, Machiavelli\'s masterwork offers a brutally pragmatic guide to acquiring and maintaining power. Written for a Medici prince, it counsels rulers to be both lion and fox — using force and cunning as the situation demands. Controversial for five centuries, it remains the founding text of modern political realism.',
            ],
            'Le Règne de la quantité et les signes des temps' => [
                'titre_en'    => 'The Reign of Quantity and the Signs of the Times',
                'synopsis_en' => "René Guénon presents a radical critique of modernity. He argues that humanity has entered its darkest age, defined by an obsession with quantity, materialism, and the denial of spiritual truth. This Traditionalist masterwork diagnoses the West's civilisational crisis and points towards a metaphysical order that transcends the material world.",
            ],
            'Le Seigneur des Anneaux (Trilogie)' => [
                'titre_en'    => 'The Lord of the Rings (Trilogy)',
                'synopsis_en' => 'In Middle-earth, young hobbit Frodo Baggins inherits the One Ring, a malevolent artefact forged by the Dark Lord Sauron to enslave all free peoples. To destroy it, Frodo and his companions must journey to the fires of Mount Doom in the heart of Mordor. An epic tale of friendship, sacrifice, and the struggle against overwhelming evil.',
            ],
            'Le Tombeau des Lucioles' => [
                'titre_en'    => 'Grave of the Fireflies',
                'synopsis_en' => 'Japan, summer 1945. After the firebombing of Kobe, teenage Seita and his little sister Setsuko are left alone, rejected by a distant relative who resents their presence. Forced to fend for themselves in an abandoned bomb shelter, they struggle to survive on the fringes of a society consumed by war. One of the most devastating anti-war films ever made.',
            ],
            'Le Voyage de Chihiro' => [
                'titre_en'    => 'Spirited Away',
                'synopsis_en' => "As she's about to move with her family to a new town, ten-year-old Chihiro stumbles into a mysterious spirit world. Her parents are transformed into pigs, and she must work in a bathhouse for spirits run by the witch Yubaba to survive and find a way to free them. Miyazaki's most celebrated film — a journey of growth, courage, and identity.",
            ],
            'Legend of the Galactic Heroes' => [
                'titre_en'    => 'Legend of the Galactic Heroes',
                'synopsis_en' => 'In a distant future, humanity is torn by a civil war lasting 150 years between the authoritarian Galactic Empire and the democratic Free Planets Alliance. Two military prodigies rise on opposing sides: Reinhard von Lohengramm, who seeks to unify the galaxy under his rule, and Yang Wen-li, a reluctant but brilliant Alliance strategist. A sweeping space opera about history, governance, and idealism.',
            ],
            'Les Carnets de l\'Apothicaire' => [
                'titre_en'    => 'The Apothecary Diaries',
                'synopsis_en' => 'In a fictional imperial Chinese court, Maomao, a young apothecary from the pleasure district, is kidnapped and made a low-ranking court lady. Using her extensive knowledge of medicine and poisons, she discreetly solves the mysteries plaguing the inner palace — catching the eye of the enigmatic eunuch official Jinshi in the process.',
            ],
            'Les Contes de Terremer' => [
                'titre_en'    => 'Tales from Earthsea',
                'synopsis_en' => "In the world of Earthsea, the balance of nature is collapsing: harvests are failing, dragons are going mad, and magic is disappearing. Archmage Sparrowhawk sets out to find the source of this unravelling and encounters Arren, a young prince haunted by a shadow. Based on Ursula K. Le Guin's Earthsea cycle, directed by Gorō Miyazaki.",
            ],
            'Limitless' => [
                'titre_en'    => 'Limitless',
                'synopsis_en' => 'Eddie Morra is a failed writer spiralling into depression. His life is transformed when an old friend offers him NZT-48, an experimental drug that grants access to 100% of brain capacity. He becomes a financial genius overnight — but the drug\'s suppliers, rivals, and a shadowy conspiracy will stop at nothing to get the secret back.',
            ],
            'Lucy' => [
                'titre_en'    => 'Lucy',
                'synopsis_en' => 'Through circumstances beyond her control, Lucy, a young student in Taipei, becomes an unwilling drug mule for a Korean mob. When the synthetic substance she is forced to carry leaks into her system, it unlocks ever-increasing percentages of her brain capacity, granting her superhuman abilities — and a rapidly approaching physical limit.',
            ],
            'Made in Abyss' => [
                'titre_en'    => 'Made in Abyss',
                'synopsis_en' => 'On an isolated island lies the Abyss — a vast, mysterious chasm filled with ancient relics and terrifying creatures. Riko, the orphaned daughter of a legendary Cave Raider, dreams of following in her mother\'s footsteps. When she discovers Reg, a strange robot boy who came from the depths, the two descend together into an abyss that grows ever more wondrous and deadly with each layer.',
            ],
            'Matrix' => [
                'titre_en'    => 'The Matrix',
                'synopsis_en' => 'Thomas Anderson leads a double life as a programmer by day and hacker named Neo by night. When the mysterious Morpheus contacts him with a mind-shattering truth — that the world he knows is a simulated reality called the Matrix — Neo must choose between the comfortable lie and the dangerous truth, and ultimately fulfil his destiny as "the One".',
            ],
            'Megalo Box' => [
                'titre_en'    => 'Megalo Box',
                'synopsis_en' => 'In a near-future where society is split between wealthy citizens and stateless drifters, boxing has evolved: fighters use mechanical exoskeletons called Gear to deliver devastating blows. Joe, a rigged-fight participant from the slums, seizes a chance to compete in Megalonia, the world\'s greatest Megalo Box tournament — without using any Gear at all.',
            ],
            'Metro Exodus' => [
                'titre_en'    => 'Metro Exodus',
                'synopsis_en' => 'In 2036, a quarter-century after nuclear war devastated the Earth, a few thousand survivors eke out an existence in the tunnels beneath Moscow. Artyom discovers that the surface may be inhabitable, and leads a group of Rangers on a desperate journey east aboard a locomotive called the Aurora, seeking a place to rebuild civilisation.',
            ],
            'Minecraft' => [
                'titre_en'    => 'Minecraft',
                'synopsis_en' => 'Dropped into an infinite world made entirely of blocks, you must survive by mining resources, crafting tools, and building shelters. From simple wooden cabins to sprawling castles and complex machines, the only limit is your imagination. Explore biomes, fight monsters by night, and farm by day in the game that defined a generation of creative gaming.',
            ],
            'Mob Psycho 100' => [
                'titre_en'    => 'Mob Psycho 100',
                'synopsis_en' => 'Shigeo Kageyama, nicknamed "Mob", is a middle school student with devastating psychic powers. Convinced that his abilities make him abnormal, he suppresses them completely and pursues a normal life under the mentorship of the self-proclaimed psychic conman Reigen. But when his emotions reach 100%, the consequences can be catastrophic.',
            ],
            'Mon Voisin Totoro' => [
                'titre_en'    => 'My Neighbor Totoro',
                'synopsis_en' => 'In 1950s Japan, two young girls — Satsuki and her little sister Mei — move to the countryside with their father to be closer to their hospitalised mother. They discover that the surrounding forest is home to magical creatures, including the enormous, gentle forest spirit Totoro. A timeless Miyazaki masterpiece celebrating childhood, nature, and wonder.',
            ],
            'Monster' => [
                'titre_en'    => 'Monster',
                'synopsis_en' => 'Kenzo Tenma is a brilliant Japanese neurosurgeon working in Germany. One night, faced with a choice between saving a German mayor or a shot boy, he chooses the child — and his career is destroyed as a result. Years later, he discovers that the boy he saved has grown into a serial killer. Tenma hunts him across Europe, questioning his own sense of justice.',
            ],
            'Monster Hunter Wilds' => [
                'titre_en'    => 'Monster Hunter Wilds',
                'synopsis_en' => 'As a Hunter with the Research Commission, you explore the Forbidden Lands — a region of untamed ecosystems locked in a violent natural cycle. Hunt enormous monsters, craft weapons and armour from their remains, and unravel the secrets of this rich and dangerous world in this next evolution of the Monster Hunter series.',
            ],
            'Monster Hunter: World' => [
                'titre_en'    => 'Monster Hunter: World',
                'synopsis_en' => 'As a member of the Fifth Fleet, you arrive on the New World — a vast, untamed continent teeming with colossal monsters locked in their own ecological balance. Your mission: study these creatures and understand the phenomenon that draws the elder dragon Zorah Magdaros on its migration. Hunt, craft, and survive in a living, breathing ecosystem.',
            ],
            'Mr. Wolff' => [
                'titre_en'    => 'The Accountant',
                'synopsis_en' => 'Christian Wolff is an autistic accountant with extraordinary mathematical intelligence — and a deadly second career. He uncooks the books for dangerous criminal organisations worldwide, staying one step ahead of a determined Treasury investigator. When he takes on a seemingly routine job for a legitimate robotics firm, he uncovers a conspiracy that puts a target on his back.',
            ],
            'Mushishi' => [
                'titre_en'    => 'Mushishi',
                'synopsis_en' => 'Mushi are primitive life forms existing between the worlds of the living and the dead, beyond the human senses. Ginko is a wandering Mushishi — an expert on these creatures — who travels across feudal Japan helping people whose lives have been touched, afflicted, or transformed by Mushi. Each episode is a quiet, haunting meditation on nature, existence, and the invisible forces shaping our lives.',
            ],
            'Nausicaä de la Vallée du Vent' => [
                'titre_en'    => 'Nausicaä of the Valley of the Wind',
                'synopsis_en' => "A thousand years after industrial civilisation's collapse in the \"Seven Days of Fire\", Earth is covered by the Toxic Jungle, a vast forest of poisonous fungi. Nausicaä, the princess of the Valley of the Wind, can communicate with the giant insects called Ohmu. When a war between human kingdoms threatens to destroy everything, she alone seeks to understand the truth of the Jungle.",
            ],
            'Negative Positive Angler' => [
                'titre_en'    => 'Negative Positive Angler',
                'synopsis_en' => 'Tsunehiro Sasaki is a student at rock bottom: terminally ill, deep in debt, and recently dumped. On impulse, he decides to spend his remaining time fishing. Through this unexpectedly meditative hobby, he begins reconnecting with life and with the people around him — a quiet, bittersweet story about finding meaning in the simplest moments.',
            ],
            'NieR: Automata' => [
                'titre_en'    => 'NieR: Automata',
                'synopsis_en' => 'In a distant future, humanity has fled to the Moon after Earth was invaded by machine lifeforms created by an alien force. Android soldiers 2B, 9S, and A2, created by YoRHa, wage a proxy war on Earth to reclaim it. But as the conflict deepens, the nature of machines, androids, and humanity becomes increasingly blurred in this existential action RPG.',
            ],
            'Ni no Kuni II : L\'Avènement d\'un Nouveau Royaume' => [
                'titre_en'    => 'Ni no Kuni II: Revenant Kingdom',
                'synopsis_en' => 'After a coup d\'état in his kingdom of Ding Dong Dell, young king Evan Pettiwhisker Tildrum is forced to flee. Accompanied by Roland, a mysterious man from another world, he sets out to build a new kingdom — Evermore — and forge alliances with other realms to reclaim his throne and bring peace to the world.',
            ],
            'Nuggets' => [
                'titre_en'    => 'Nuggets',
                'synopsis_en' => 'A small bird walks along a horizontal line and discovers a shiny golden nugget on the ground. Eating it produces an instant rush of pleasure. The bird returns for another, and another — until addiction takes over entirely. This BAFTA-winning animated short depicts the mechanics of addiction with striking simplicity and visual ingenuity.',
            ],
            'One Piece' => [
                'titre_en'    => 'One Piece',
                'synopsis_en' => 'Monkey D. Luffy, a boy whose body became elastic after eating a Devil Fruit, sets out to sea to become the Pirate King and claim the legendary treasure known as the "One Piece". Gathering a crew of unique companions, he navigates a vast ocean of dangerous pirates, corrupt marines, and world governments — all while uncovering the truth of the world\'s hidden history.',
            ],
            'One Punch Man' => [
                'titre_en'    => 'One-Punch Man',
                'synopsis_en' => 'Saitama is an unemployed young man who, after a gruelling three-year training regimen, became so powerful that he defeats any enemy with a single punch. His overwhelming strength has left him profoundly bored. Registering as a professional hero, he navigates the Hero Association\'s bureaucratic world alongside his cyborg disciple Genos, searching for an opponent who can give him a real fight.',
            ],
            'Orb: On the Movements of the Earth' => [
                'titre_en'    => 'Orb: On the Movements of the Earth',
                'synopsis_en' => 'In 15th-century Europe, any theory contradicting the Church\'s doctrine is punishable as heresy. Yet Rafal, a young theological scholar, meets a mysterious astronomer who claims the Earth revolves around the Sun. Compelled by an obsessive thirst for truth, Rafal dedicates his life to proving this heliocentric theory in a world that wants him silenced.',
            ],
            'Ori and the Blind Forest' => [
                'titre_en'    => 'Ori and the Blind Forest',
                'synopsis_en' => 'The forest of Nibel is dying after a devastating catastrophe. After a storm kills a small guardian spirit named Ori, it is restored to life by a Spirit Tree. Guided by Sein, the light and eyes of the Spirit Tree, Ori must journey through a beautiful and treacherous world to restore the forest — and uncover the truth behind the catastrophe that struck it.',
            ],
            'Outer Wilds' => [
                'titre_en'    => 'Outer Wilds',
                'synopsis_en' => 'You are the newest recruit of Outer Wilds Ventures, a modest space programme. As you prepare for your first launch, the universe ends — and you wake up at the same moment, twenty-two minutes earlier. Trapped in a time loop, you must explore a handcrafted solar system full of mysteries to discover what happened and whether anything can be done to stop it.',
            ],
            'Overlord' => [
                'titre_en'    => 'Overlord',
                'synopsis_en' => 'In 2138, the virtual reality game Yggdrasil is shutting down. Momonga, the all-powerful leader of the guild Ainz Ooal Gown, decides to remain logged in until the servers go dark. But the shutdown never happens — and he finds himself truly transported into the game\'s world, with his avatar\'s skeleton form and all NPCs now fully conscious. He decides to conquer this new world.',
            ],
            'Parasyte: The Maxim' => [
                'titre_en'    => 'Parasyte: The Maxim',
                'synopsis_en' => 'Mysterious spheres fall to Earth, releasing parasites that take over human brains. One such parasite fails to reach Shinichi Izumi\'s brain and instead takes control of his right hand, calling itself Migi. Forced to coexist, Shinichi and Migi must work together to survive in a world where other parasites are hunting and killing humans — while Shinichi\'s own humanity slowly changes.',
            ],
            'Pensées pour moi-même' => [
                'titre_en'    => 'Meditations',
                'synopsis_en' => 'Written as private notes by the Roman emperor Marcus Aurelius during his military campaigns, these twelve books were never intended for publication. They record his daily practice of Stoic philosophy — reflections on duty, impermanence, reason, and the inner life. Two thousand years later, they remain one of the most intimate and universally resonant works of Western philosophy.',
            ],
            'Princesse Mononoké' => [
                'titre_en'    => 'Princess Mononoke',
                'synopsis_en' => 'In medieval Japan, young prince Ashitaka is cursed after slaying a demon-possessed boar. Seeking a cure, he travels west and finds himself caught between the humans of Irontown, led by the indomitable Lady Eboshi, and the gods of the forest, including San — a feral girl raised by wolf gods. A powerful epic about humanity\'s destructive relationship with nature.',
            ],
            'Professeur Layton (Saga)' => [
                'titre_en'    => 'Professor Layton (Saga)',
                'synopsis_en' => 'The renowned archaeologist and gentleman Hershel Layton and his enthusiastic apprentice Luke Triton travel the world solving intricate puzzles and uncovering elaborate mysteries. Each game weaves hundreds of logic puzzles into a richly animated narrative filled with eccentric characters, unexpected twists, and themes of truth, memory, and human connection.',
            ],
            'Propaganda' => [
                'titre_en'    => 'Propaganda',
                'synopsis_en' => 'Edward Bernays, considered the father of public relations and nephew of Sigmund Freud, explains in this landmark 1928 book how elites can — and do — manipulate the beliefs, desires, and behaviours of the masses. A foundational text of modern advertising and political communication, as unsettling in its candour today as it was a century ago.',
            ],
            'Psycho-Pass' => [
                'titre_en'    => 'Psycho-Pass',
                'synopsis_en' => 'In the near future, the Sibyl System governs Japanese society by instantly measuring the mental state of every citizen and predicting criminality before it occurs. Inspector Akane Tsunemori begins her career believing in the system — but as she investigates increasingly complex cases, she begins to question whether a society built on pre-emptive justice can ever truly be just.',
            ],
            'Psychologie des foules' => [
                'titre_en'    => 'The Crowd: A Study of the Popular Mind',
                'synopsis_en' => 'In this visionary treatise, Gustave Le Bon analyses how individuals lose their autonomy and critical faculties when they become part of a crowd. United by emotion rather than reason, crowds become suggestible, impulsive, and capable of both heroism and atrocity. Written in 1895, it anticipated the rise of mass politics and remains essential reading on the psychology of social influence.',
            ],
            'Ranking of Kings' => [
                'titre_en'    => 'Ranking of Kings',
                'synopsis_en' => 'Bojji is the eldest prince of a kingdom ruled by his father, King Bosse, but he is deaf, mute, and physically weak — mocked by all and ranked last among the world\'s princes. Yet he carries a gentle heart and an iron determination. With his only friend Kage, a shadow-clan outcast, Bojji sets out to become the greatest king the world has ever seen.',
            ],
            'Ratatouille' => [
                'titre_en'    => 'Ratatouille',
                'synopsis_en' => 'Rémy is a young rat with an extraordinary sense of smell and taste who dreams of becoming a great French chef — despite the obvious obstacles. When he ends up in the kitchen of the legendary Gusteau\'s restaurant in Paris, he secretly guides the hapless garbage boy Linguini to cook, forging an unlikely partnership that will challenge everyone\'s assumptions about who can be an artist.',
            ],
            'Saga of Tanya the Evil' => [
                'titre_en'    => 'The Saga of Tanya the Evil',
                'synopsis_en' => 'A cold, pragmatic Japanese salary man, about to be killed by a fired employee, is confronted by a being claiming to be God and reincarnated as Tanya Degurechaff, a young girl in a world at war. Armed with tactical brilliance and magic, Tanya rises through the ranks of a WWI-inspired military — while her cynical lack of faith draws the attention of the divine.',
            ],
            'Sakuna: Of Rice and Ruin' => [
                'titre_en'    => 'Sakuna: Of Rice and Ruin',
                'synopsis_en' => 'Sakuna is a capricious harvest goddess living a life of comfort in the celestial realm. After causing a catastrophe, she is banished to a demon-infested island with a group of humans and must reclaim it. Alongside side-scrolling combat, the game features a deeply detailed rice cultivation system in which the quality of your harvest directly enhances your power.',
            ],
            'Satisfactory' => [
                'titre_en'    => 'Satisfactory',
                'synopsis_en' => 'As an employee of FICSIT Inc., you are parachuted onto a lush alien planet with minimal equipment and a mandate: build a factory of unprecedented scale. Gather resources, research technologies, and construct increasingly automated production lines to harvest and process the planet\'s materials. A first-person factory builder that rewards obsessive optimisation.',
            ],
            'Sea of Thieves' => [
                'titre_en'    => 'Sea of Thieves',
                'synopsis_en' => 'Become the pirate you always dreamed of being in a vast shared world. Sail your ship, hunt for treasure, engage rival crews in cannon battles, and unravel the myths of the Sea of the Damned. Whether sailing solo or with a crew, every voyage in this open-world multiplayer adventure is a story waiting to be told.',
            ],
            'Sengoku Youko' => [
                'titre_en'    => 'Sengoku Youko',
                'synopsis_en' => 'During the Sengoku period, the world is divided between humans and Katawara — supernatural beings. Tama is a half-fox spirit who loves humans, and her brother Jinka despises them. Together with the timid human swordsman Hyoudou Shinsuke, they travel through a war-torn Japan, confronting prejudice, identity, and the question of what truly separates humans from monsters.',
            ],
            'Shoushimin Series' => [
                'titre_en'    => 'The Smalltown Socrates Series',
                'synopsis_en' => 'Jougorou Kobato and Yuki Osanai are two high school students who share a secret from their past. Osanai wants to live a quiet, ordinary life — her ideal is to be a "petite bourgeois". But whenever small mysteries arise in their daily lives, Kobato\'s relentless curiosity pulls them both into investigations that threaten their carefully guarded normalcy.',
            ],
            'Siddhartha' => [
                'titre_en'    => 'Siddhartha',
                'synopsis_en' => "In ancient India, at the time of the Buddha, Siddhartha, a Brahmin's son, leaves his comfortable life in search of spiritual truth. Rejecting both asceticism and materialism, he passes through the worlds of wandering ascetics, merchants, and courtesans before ultimately finding enlightenment beside a river. Hermann Hesse's luminous novel about the universal journey toward self-discovery.",
            ],
            'Solo Leveling' => [
                'titre_en'    => 'Solo Leveling',
                'synopsis_en' => 'For more than a decade, "gates" have connected our world to dungeons filled with monsters. Hunters have emerged — humans with special abilities who can enter and clear these dungeons. Sung Jinwoo is considered the weakest Hunter alive, barely surviving each mission. After a near-death experience in a double dungeon, he alone receives a mysterious quest system that lets him level up without limit.',
            ],
            'Sousou no Frieren' => [
                'titre_en'    => 'Frieren: Beyond Journey\'s End',
                'synopsis_en' => 'The elven mage Frieren and her companions return victorious after defeating the Demon King. But for Frieren, who is centuries old, the fifty years she spent with them are but an instant. As her human friends age and die, she is left alone with her memories — and sets out on a new journey to understand what it truly meant to share those years with them.',
            ],
            'Star Wars (Saga)' => [
                'titre_en'    => 'Star Wars (Saga)',
                'synopsis_en' => 'In a galaxy far, far away, this epic follows the fate of the Skywalker family across generations. From young Anakin\'s fall to the dark side as Darth Vader, to Luke\'s rise as a Jedi Knight, to Rey\'s discovery of her own lineage — the saga chronicles an eternal struggle between the Jedi Order and the Sith, between hope and despair, across a universe of unforgettable worlds and characters.',
            ],
            'Takopi\'s Sin' => [
                'titre_en'    => "Takopi's Original Sin",
                'synopsis_en' => "Takopi is a cheerful little alien from the planet Happy, sent to Earth to spread happiness. He meets Shizuka, a girl who seems deeply unhappy, and decides to befriend her at all costs. But Takopi's cheerful naivety leads to catastrophic misunderstandings, as he uses his alien gadgets without understanding the real darkness that surrounds Shizuka's life.",
            ],
            'Taxi Driver' => [
                'titre_en'    => 'Taxi Driver',
                'synopsis_en' => 'Travis Bickle, a Vietnam veteran suffering from chronic insomnia, becomes a night-shift taxi driver in 1970s New York City. Disgusted by what he sees as the moral filth of the city\'s streets, he begins to crack. His obsession with a presidential campaign worker and his encounter with a young prostitute named Iris drive him toward a violent personal reckoning.',
            ],
            'Terraria' => [
                'titre_en'    => 'Terraria',
                'synopsis_en' => 'Dig, fight, explore, build! In this procedurally generated 2D world, you begin with nothing but basic tools and must mine resources, craft weapons and armour, construct shelters, and battle over 400 bosses and enemies. From humble wooden shacks to elaborate mechanical fortresses, Terraria rewards curiosity and creativity at every depth.',
            ],
            'Texhnolyze' => [
                'titre_en'    => 'Texhnolyze',
                'synopsis_en' => 'In the sunless underground city of Lukuss, three factions battle for control: the criminal Organo, the idealistic Union, and the mysterious Racan. Ichise, a prize fighter who loses his arm and leg in a punishment mutilation, is given prosthetic Texhnolyze limbs — and is dragged into the city\'s doomed power struggles. A bleak, deliberately paced meditation on decay and futility.',
            ],
            'The Batman' => [
                'titre_en'    => 'The Batman',
                'synopsis_en' => 'Two years into his crusade as Batman, Bruce Wayne haunts Gotham\'s shadows as a figure of vengeance more than justice. When a methodical serial killer called the Riddler begins targeting the city\'s elite, leaving clues addressed to Batman himself, Bruce must confront the dark legacy of his own family and his role in the corruption he fights.',
            ],
            'The Fable' => [
                'titre_en'    => 'The Fable',
                'synopsis_en' => 'Fable is a legendary assassin, feared throughout the Japanese underworld for his perfect efficiency and emotionless kills. His boss orders him to take a year off in Osaka — without killing anyone. Adopting a false identity as a graphic designer, Fable must navigate ordinary life while the world around him seems determined to drag him back to violence.',
            ],
            'The Irishman' => [
                'titre_en'    => 'The Irishman',
                'synopsis_en' => "Frank Sheeran, a WWII veteran turned truck driver, meets the Bufalino crime family and rises within the mob as a hitman. His closest bond is with Teamsters leader Jimmy Hoffa, whose loyalty he ultimately cannot protect. Scorsese's elegiac epic spans decades to reflect on loyalty, complicity, and the loneliness of a life lived in violence.",
            ],
            'The Legend of Zelda: Breath of the Wild' => [
                'titre_en'    => 'The Legend of Zelda: Breath of the Wild',
                'synopsis_en' => 'After a 100-year sleep, Link awakens with amnesia in a Hyrule devastated and reclaimed by the monstrous Calamity Ganon. With only ancient technology and his wits, Link must explore an open world of breathtaking scope — climbing mountains, solving shrines, and uncovering his lost memories — to build the strength to face Ganon and save Princess Zelda.',
            ],
            'The Promised Neverland' => [
                'titre_en'    => 'The Promised Neverland',
                'synopsis_en' => 'Emma, Norman, and Ray are the three most brilliant children at Grace Field House orphanage, living happily under their caretaker Mom. But when they stumble upon the truth of their existence — they are livestock, raised to be harvested by demons — they must plan an escape without alerting Mom, while protecting all of their younger siblings.',
            ],
            'The Revenant' => [
                'titre_en'    => 'The Revenant',
                'synopsis_en' => 'In 19th-century wild America, frontiersman Hugh Glass is savagely mauled by a bear during a fur-trapping expedition. Left for dead and robbed by a fellow trapper who kills his son before his eyes, Glass endures the frozen wilderness alone, driven purely by the will to survive and take revenge in this visceral tale of resilience.',
            ],
            'The Truman Show' => [
                'titre_en'    => 'The Truman Show',
                'synopsis_en' => "Truman Burbank leads a quiet, predictable life in the coastal town of Seahaven — unaware that he has lived his entire existence as the star of the world's most-watched reality TV show. His friends, family, and the town itself are all actors and sets. As small inconsistencies accumulate, Truman begins to question the reality he has always taken for granted.",
            ],
            'The Weakest Tamer Began a Journey to Pick Up Trash' => [
                'titre_en'    => 'The Weakest Tamer Began a Journey to Pick Up Trash',
                'synopsis_en' => "In a world where a person's worth is defined by their stars and skills, Ivy is born with zero stars — labelled worthless by society. Her only skill is taming slimes, the weakest creature imaginable. Fleeing those who want her dead, she wanders the world's outskirts, finding beauty in discarded things and slowly building a life from nothing.",
            ],
            'The Witcher 3: Wild Hunt' => [
                'titre_en'    => 'The Witcher 3: Wild Hunt',
                'synopsis_en' => 'In a war-ravaged, monster-haunted medieval world, Geralt of Rivia is a Witcher — a mutant monster-hunter for hire. He searches for Ciri, his adopted daughter and a key figure in an ancient prophecy, while the terrifying spectral army known as the Wild Hunt closes in. One of the most acclaimed RPGs ever made, with hundreds of hours of richly written content.',
            ],
            'To Be Hero X' => [
                'titre_en'    => 'To Be Hero X',
                'synopsis_en' => 'In a futuristic metropolis, heroes are no longer simple vigilantes but full-blown celebrities classified by power level. Xiao Zhan Ci, an ordinary young man, is inexplicably granted tremendous power and thrown into a world of professional heroism, corporate conspiracy, and media spectacle — where the line between saving the world and performing for the cameras is dangerously thin.',
            ],
            'To Your Eternity' => [
                'titre_en'    => 'To Your Eternity',
                'synopsis_en' => 'An immortal, amorphous entity is cast onto Earth. It can take the form of anything that makes a strong impression on it — rocks, wolves, humans. Wandering through time and civilisations, it forms deep bonds with the humans it meets, only to lose them repeatedly. A moving and often devastating exploration of mortality, loneliness, and what it means to be alive.',
            ],
            'Tokyo Ghoul' => [
                'titre_en'    => 'Tokyo Ghoul',
                'synopsis_en' => 'In Tokyo, creatures called Ghouls live among humans while feeding on them. Ken Kaneki, an ordinary college student, barely survives an attack by a ghoul and wakes up to find he has become a half-ghoul himself. Forced to navigate between two worlds — human and ghoul — he must discover his identity in a city where neither side will ever fully accept him.',
            ],
            'Tu ne tueras point' => [
                'titre_en'    => 'Hacksaw Ridge',
                'synopsis_en' => 'During WWII, Desmond Doss, a young American Seventh-day Adventist, enlists in the Army but refuses to carry a weapon due to his religious convictions. Despite contempt from his unit and attempts to discharge him, he deploys as a combat medic to the Battle of Okinawa — where he single-handedly saves 75 wounded soldiers without ever firing a shot.',
            ],
            'Tunic' => [
                'titre_en'    => 'Tunic',
                'synopsis_en' => 'A small fox washes ashore on a mysterious land filled with ancient ruins and hostile creatures. Armed with little more than a stick, you must explore this beautifully hostile world, piece together the scattered pages of an in-game manual written in an unknown language, and uncover a secret far deeper than the dungeon you thought you were exploring.',
            ],
            'Vinland Saga' => [
                'titre_en'    => 'Vinland Saga',
                'synopsis_en' => 'In 11th-century Europe, the Vikings extend their dominion across the world. Young Thorfinn enlists in the mercenary band of Askeladd — the man who murdered his father — driven by a burning thirst for revenge. As he fights his way through battles and betrayals, he begins to question whether revenge and war are truly the path to the life his father envisioned: a land of peace called Vinland.',
            ],
            'Violet Evergarden' => [
                'titre_en'    => 'Violet Evergarden',
                'synopsis_en' => "After four years of bloody conflict, the Great War comes to an end. Violet, a young girl who was raised as a weapon and knows only war, loses both her arms in the final battle. With prosthetic arms, she becomes an Auto Memory Doll — a professional letter writer — and begins the painful process of learning what it means to be human, and to understand the last words her major said to her: \"I love you\".",
            ],
            'Wall-E' => [
                'titre_en'    => 'WALL·E',
                'synopsis_en' => 'In a future where Earth has become an abandoned landfill, WALL·E is the last functioning waste-compactor robot, spending his days sorting through the ruins of human civilisation. His routine is shattered by the arrival of EVE, a sleek robot sent to scan for plant life. A wordless love story becomes a commentary on consumerism, environmental recklessness, and the resilience of hope.',
            ],
            'Warhammer 40,000: Space Marine 2' => [
                'titre_en'    => 'Warhammer 40,000: Space Marine 2',
                'synopsis_en' => 'Lieutenant Titus of the Ultramarines returns to service to defend Humanity against the overwhelming Tyranid swarms threatening to consume an entire world. A brutal third-person action game set in the grimdark universe of Warhammer 40,000, where superhuman warriors wage endless war in the Emperor\'s name against the galaxy\'s most terrifying horrors.',
            ],
            'Your Name' => [
                'titre_en'    => 'Your Name',
                'synopsis_en' => 'Mitsuha, a high school girl in a rural mountain town, dreams of life in Tokyo. Taki, a high school boy in Tokyo, dreams of a girl he has never met. One morning they discover they have been inexplicably swapping bodies during their sleep. As they piece together clues about each other\'s lives, a deeper connection emerges — one that transcends time itself.',
            ],
            'Zankyou no Terror' => [
                'titre_en'    => 'Terror in Resonance',
                'synopsis_en' => 'On a summer\'s day, a terrorist explosion rocks Tokyo. The culprits are two teenagers who call themselves "Sphinx": the cold Nine and the impulsive Twelve. They leave cryptic video messages challenging the police, drawing veteran detective Shibazaki into their game. But their true motive is not destruction — it is a cry to be heard by a world that abandoned them.',
            ],
        ];

        foreach ($oeuvres as $titreFr => $data) {
            Oeuvre::where('titre', (string) $titreFr)->update([
                'titre_en'    => $data['titre_en'],
                'synopsis_en' => $data['synopsis_en'],
            ]);
        }
    }
}
