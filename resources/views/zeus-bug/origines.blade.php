@extends('layouts.zeus-bug')
@section('title', $locale === 'en' ? 'Origins - Zeus-Bug' : 'Origines - Zeus-Bug')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="zb-content" style="padding-top:15px;">
    <div class="zb-prose">

@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is a programming blog — articles about projects I have built, technologies
            I have explored, and problems I have worked through. It documents the process honestly:
            not just the finished results, but the building, breaking, and fixing that actually
            makes up development work.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Zeus is the king of the Olympian gods, master of the sky and lightning. That lightning
            is not just a symbol: electricity is the physical foundation of every computer, every
            processor, every bit stored or transmitted. Without it, there is no code, no machine,
            no program. In a very literal sense, every running process owes its existence to the
            force Zeus commands.
        </p>
        <p>
            The word "bug" to describe a technical defect predates computing itself. As early as 1878,
            Thomas Edison used it in letters to describe hidden faults in machines. But the most
            famous bug in history has a precise date: September 9, 1947. Engineers at Harvard's
            Computation Laboratory found a moth lodged in Relay 70 of the Mark II computer, causing
            a short circuit. They taped it into the logbook with the note: <em>"First actual case
            of bug being found."</em> That logbook still exists, preserved at the Smithsonian.
            Grace Hopper, who was part of the Mark II team, retold the story for 45 years and
            cemented the word into every developer's vocabulary.
        </p>
        <p>
            Zeus-Bug is where lightning meets the moth: ambition and imperfection, power and
            the small hidden flaw that brings everything down — until you find it.
        </p>

        <h2>About the content</h2>
        <p>
            The articles cover personal projects and development explorations: algorithms, data
            structures, web applications, tools. Some projects are complete; others are
            experiments that taught me more by breaking than by working. All of it is documented here.
        </p>

        <h2>A learning project</h2>
        <p>
            Zeus-Bug is also part of my web development portfolio. Building it gave me the
            opportunity to work on a complete article system with categories, multilingual content,
            and a full administration interface built with Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est un blog de programmation : des articles sur des projets que j'ai construits,
            des technologies que j'ai explorées, et des problèmes que j'ai résolus. Il documente
            le processus honnêtement : pas seulement les résultats finaux, mais la construction,
            la casse et la correction qui constituent réellement le travail de développement.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Zeus est le roi des dieux olympiens, maître du ciel et de la foudre. Cette foudre n'est
            pas seulement un symbole : l'électricité est le fondement physique de chaque ordinateur,
            chaque processeur, chaque bit stocké ou transmis. Sans elle, pas de code, pas de machine,
            pas de programme. Au sens le plus littéral, chaque processus en cours d'exécution doit
            son existence à la force que Zeus commande.
        </p>
        <p>
            Le mot "bug" pour désigner un défaut technique est antérieur à l'informatique. Dès 1878,
            Thomas Edison l'utilisait dans des lettres pour décrire des pannes cachées dans les
            machines. Mais le bug le plus célèbre de l'histoire a une date précise : le 9 septembre
            1947. Des ingénieurs du laboratoire de calcul de Harvard trouvèrent un papillon de nuit
            coincé dans le relais 70 de l'ordinateur Mark II, provoquant un court-circuit. Ils le
            collèrent dans le journal de bord avec la note : <em>« Premier cas réel d'un bug trouvé. »</em>
            Ce journal existe encore aujourd'hui, conservé au Smithsonian. Grace Hopper, qui faisait
            partie de l'équipe du Mark II, raconta l'histoire pendant 45 ans et grava le mot dans
            le vocabulaire de tous les développeurs.
        </p>
        <p>
            Zeus-Bug, c'est là où la foudre rencontre le papillon : l'ambition et l'imperfection,
            la puissance et le petit défaut caché qui fait tout tomber, jusqu'à ce qu'on le trouve.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Les articles couvrent des projets personnels et des explorations de développement :
            algorithmes, structures de données, applications web, outils. Certains projets sont
            complets ; d'autres sont des expériences qui m'ont appris plus en cassant qu'en
            fonctionnant. Tout est documenté ici.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Zeus-Bug fait aussi partie de mon portfolio de développement web. Le construire m'a
            permis de travailler sur un système d'articles complet avec catégories, du contenu
            multilingue, et une interface d'administration complète avec Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            Vous pouvez me contacter à <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            ou via le <a href="{{ route('fr.sites') }}">site principal</a>.
        </p>

@endif

    </div>
</div>
@endsection
