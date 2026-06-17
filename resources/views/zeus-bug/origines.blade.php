@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Origins — Zeus-Bug' : 'Origines — Zeus-Bug')

@section('content')

<div class="zb-page-hero">
    <div class="zb-page-cat">{{ $locale === 'en' ? 'About' : 'À propos' }}</div>
    <h1 class="zb-page-title">{{ $locale === 'en' ? 'The Bug : a brief history' : 'Le Bug : une brève histoire' }}</h1>
    <p class="zb-page-intro">
        {{ $locale === 'en'
            ? 'Before it became a metaphor for every broken line of code, the bug had a real body, six legs, and wings.'
            : 'Avant de devenir la métaphore de chaque ligne de code cassée, le bug avait un vrai corps, six pattes et des ailes.' }}
    </p>
</div>

<div class="zb-content">

    {{-- Étymologie --}}
    <div class="zb-section">
        <div class="zb-section-title">{{ $locale === 'en' ? 'Before computers' : 'Avant les ordinateurs' }}</div>
        <div class="zb-text">
            <p>{{ $locale === 'en'
                ? 'The word "bug" to describe a technical defect is older than computing itself. As early as 1878, Thomas Edison described in a letter how, once an invention seemed to come together, difficulties would arise and Bugs, as he called these little faults and failures, would show themselves. The word was already in common use among 19th-century engineers to mean a hidden fault in a machine.'
                : 'Le mot « bug » pour désigner un défaut technique est antérieur à l\'informatique. Dès 1878, Thomas Edison décrivait dans une lettre comment, une fois qu\'une invention semblait aboutir, les difficultés surgissaient et les Bugs, comme il appelait ces petites pannes et difficultés, se manifestaient. Le mot était déjà d\'usage courant chez les ingénieurs du XIXe siècle pour désigner une défaillance cachée dans une machine.' }}
            </p>
        </div>
    </div>

    {{-- Le papillon --}}
    <div class="zb-section">
        <div class="zb-section-title">{{ $locale === 'en' ? 'September 9, 1947 : the moth' : '9 septembre 1947 : le papillon de nuit' }}</div>
        <div class="zb-text">
            <p>{{ $locale === 'en'
                ? 'At Harvard\'s Computation Laboratory, engineers were working on the Mark II electromechanical computer. The machine was misbehaving. After inspection, they found the culprit in Relay 70 of Panel F: a moth had lodged itself in the contacts and caused a short circuit. The team carefully removed the insect with tweezers and taped it into the logbook with the annotation: "First actual case of bug being found."'
                : 'Au laboratoire de calcul de Harvard, des ingénieurs travaillaient sur l\'ordinateur électromécanique Mark II. La machine dysfonctionnait. Après inspection, ils trouvèrent le coupable dans le relais 70 du panneau F : un papillon de nuit s\'était logé dans les contacts et provoquait un court-circuit. L\'équipe retira délicatement l\'insecte à la pince et le colla dans le journal de bord avec l\'annotation : « Premier cas réel d\'un bug trouvé. »' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'The logbook still exists today, preserved at the Smithsonian National Museum of American History in Washington D.C. Grace Hopper, mathematician, Navy rear admiral and pioneer of programming, was part of the Mark II team. She did not find the moth herself, but retold the story for 45 years, cementing the word "bug" and "debugging" into the vocabulary of every developer who followed.'
                : 'Le journal de bord existe encore aujourd\'hui, conservé au Smithsonian National Museum of American History à Washington D.C. Grace Hopper, mathématicienne, contre-amirale de la Marine et pionnière de la programmation, faisait partie de l\'équipe du Mark II. Elle n\'a pas trouvé le papillon elle-même, mais a raconté l\'histoire pendant 45 ans, gravant les mots « bug » et « debugging » dans le vocabulaire de tous les développeurs qui ont suivi.' }}
            </p>
        </div>
    </div>

    {{-- Bugs célèbres --}}
    <div class="zb-section">
        <div class="zb-section-title">{{ $locale === 'en' ? 'Bugs that changed history' : 'Des bugs qui ont changé l\'histoire' }}</div>
        <div class="zb-text" style="margin-bottom: 24px;">
            <p>{{ $locale === 'en'
                ? 'A bug is rarely just a line of wrong code. Sometimes it is a rocket, a spacecraft, a medical device, or a financial system. Here are five bugs whose consequences reached far beyond the screen.'
                : 'Un bug n\'est rarement qu\'une ligne de code incorrecte. Parfois, c\'est une fusée, une sonde spatiale, un appareil médical ou un système financier. Voici cinq bugs dont les conséquences ont dépassé l\'écran.' }}
            </p>
        </div>

        @php
        $bugs = [
            [
                'year'  => '1985–1987',
                'name'  => 'Therac-25',
                'color' => '#ef4444',
                'desc'  => $locale === 'en'
                    ? 'A race condition in the software controlling a radiation therapy machine caused it to deliver doses up to 100 times the intended level. Six patients were killed or seriously injured. The tragedy became a landmark case study in software safety and the dangers of removing hardware interlocks without compensating in software.'
                    : 'Une condition de course dans le logiciel contrôlant une machine de radiothérapie l\'amenait à délivrer des doses jusqu\'à 100 fois supérieures au niveau prévu. Six patients furent tués ou grièvement blessés. La tragédie devint une étude de cas emblématique sur la sécurité logicielle et les dangers de supprimer des verrous matériels sans les compenser dans le code.',
            ],
            [
                'year'  => '1994',
                'name'  => 'Pentium FDIV Bug',
                'color' => '#f97316',
                'desc'  => $locale === 'en'
                    ? 'Intel\'s Pentium processor contained a flaw in its floating-point division table : about five entries out of a thousand were missing, causing subtle but real rounding errors. A mathematics professor noticed his results were wrong. Intel initially downplayed the issue, then faced public outcry and had to recall and replace every affected chip. Final cost: $475 million.'
                    : 'Le processeur Pentium d\'Intel contenait une erreur dans sa table de division flottante : environ cinq entrées sur mille étaient manquantes, provoquant des erreurs d\'arrondi subtiles mais réelles. Un professeur de mathématiques remarqua que ses résultats étaient faux. Intel minimisa d\'abord le problème, puis fit face à un tollé public et dut rappeler et remplacer chaque puce concernée. Coût final : 475 millions de dollars.',
            ],
            [
                'year'  => '1996',
                'name'  => 'Ariane 5 – Vol 501',
                'color' => '#a855f7',
                'desc'  => $locale === 'en'
                    ? 'Thirty-seven seconds after launch, the Ariane 5 rocket veered off course and self-destructed. The cause: the guidance computer attempted to convert a 64-bit floating-point number (the rocket\'s lateral velocity) into a 16-bit integer. The value was too large; an overflow exception crashed the system. The code had been reused directly from Ariane 4, where the same velocity values were never that high. Cost: €370 million.'
                    : 'Trente-sept secondes après le décollage, la fusée Ariane 5 dévia de sa trajectoire et s\'autodétruisit. La cause : l\'ordinateur de guidage tenta de convertir un nombre flottant 64 bits (la vitesse latérale de la fusée) en entier 16 bits. La valeur était trop grande ; une exception d\'overflow planta le système. Le code avait été réutilisé directement depuis Ariane 4, où ces mêmes valeurs de vitesse n\'atteignaient jamais ce niveau. Coût : 370 millions d\'euros.',
            ],
            [
                'year'  => '1999',
                'name'  => 'Mars Climate Orbiter',
                'color' => '#ef4444',
                'desc'  => $locale === 'en'
                    ? 'NASA lost a $327 million spacecraft because one engineering team used metric units (newton-seconds) while another used imperial units (pound-force-seconds) for the thruster data. The navigation error went undetected for months. The orbiter entered Mars\'s atmosphere at the wrong angle and burned up. A single unit mismatch, an entire mission lost.'
                    : 'La NASA perdit une sonde de 327 millions de dollars parce qu\'une équipe d\'ingénierie utilisait des unités métriques (newton-secondes) tandis qu\'une autre utilisait des unités impériales (livre-force-secondes) pour les données des propulseurs. L\'erreur de navigation passa inaperçue pendant des mois. La sonde entra dans l\'atmosphère de Mars sous le mauvais angle et se désintégra. Une seule incohérence d\'unité, toute une mission perdue.',
            ],
            [
                'year'  => '1999–2000',
                'name'  => 'Y2K',
                'color' => '#22c55e',
                'desc'  => $locale === 'en'
                    ? 'For decades, software had stored years as two digits to save memory : "99" for 1999. When the year 2000 approached, "00" could be interpreted as 1900, threatening financial systems, infrastructure and aviation. Governments and companies worldwide spent an estimated $300–600 billion fixing the issue. Largely because of that effort, the disaster never materialised, making Y2K both the most expensive bug fix in history and the most successful.'
                    : 'Pendant des décennies, les logiciels stockaient les années sur deux chiffres pour économiser de la mémoire : « 99 » pour 1999. À l\'approche de l\'an 2000, « 00 » pouvait être interprété comme 1900, menaçant les systèmes financiers, les infrastructures et l\'aviation. Les gouvernements et entreprises du monde entier dépensèrent entre 300 et 600 milliards de dollars pour corriger le problème. En grande partie grâce à cet effort, la catastrophe ne se matérialisa jamais, faisant du Y2K à la fois la correction de bug la plus coûteuse de l\'histoire et la plus réussie.',
            ],
        ];
        @endphp

        <div style="display: flex; flex-direction: column; gap: 16px;">
            @foreach($bugs as $bug)
            <div style="background: var(--zb-bg2, #0c1a18); border: 1px solid rgba(0,240,210,.12); border-left: 3px solid {{ $bug['color'] }}; border-radius: 10px; padding: 20px 24px;">
                <div style="display: flex; align-items: baseline; gap: 12px; margin-bottom: 10px;">
                    <span style="font-family: 'JetBrains Mono', monospace; font-size: 0.72em; color: {{ $bug['color'] }}; font-weight: 700;">{{ $bug['year'] }}</span>
                    <span style="font-weight: 700; color: #dff0ee; font-size: 1em;">{{ $bug['name'] }}</span>
                </div>
                <p style="font-size: 0.88em; color: #527770; line-height: 1.75; margin: 0;">{{ $bug['desc'] }}</p>
            </div>
            @endforeach
        </div>
    </div>

    {{-- Philosophie Zeus-Bug --}}
    <div class="zb-section">
        <div class="zb-section-title">{{ $locale === 'en' ? 'Zeus & Bug' : 'Zeus & Bug' }}</div>
        <div class="zb-text">
            <p>{{ $locale === 'en'
                ? 'Zeus is the king of the gods, symbol of power, ambition and creation. He is also the master of lightning, the very force that makes every computer work. Without electricity, there is no processor, no memory, no bit flipping. In a sense, every machine that runs code does so because Zeus allows it.'
                : 'Zeus est le roi des dieux, symbole de la puissance, de l\'ambition et de la création. Il est aussi le maître de la foudre, la force même qui fait fonctionner chaque ordinateur. Sans électricité, pas de processeur, pas de mémoire, pas de bits qui s\'inversent. En un sens, chaque machine qui exécute du code le fait parce que Zeus le permet.' }}
            </p>
            <p>{{ $locale === 'en'
                ? 'Every project on this site was built, tested, broken, fixed, and broken again. That cycle, not the finished result, is what programming actually looks like. Zeus-Bug exists to document it honestly.'
                : 'Chaque projet de ce site a été construit, testé, cassé, corrigé, et cassé à nouveau. Ce cycle, et non le résultat final, c\'est à quoi ressemble vraiment la programmation. Zeus-Bug existe pour le documenter honnêtement.' }}
            </p>
        </div>
    </div>

</div>
@endsection
