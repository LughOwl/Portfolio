@extends('layouts.janus-bee')

@section('title', $locale === 'en' ? 'Origins & Goals - Janus-Bee' : 'Origines et Objectifs - Janus-Bee')

@section('content')
<div class="content-origines">
    <div>
        @if($locale === 'en')
        <h1>Origins & Goals</h1>

        <h2>Welcome to my site</h2>
        <p>
            The purpose of this site is to showcase works that have marked and inspired me,
            drawn from different media such as anime, films, books, video games
            and short films.
        </p>

        <h2>Origins of the name Janus Bee</h2>
        <p>
            The name Janus Bee combines two complementary symbols.
            Janus, in Roman mythology, is the god of beginnings and transitions.
            Depicted with two faces looking toward the past and the future,
            he embodies accumulated experience, reflection, and the ability to anticipate.
        </p>
        <p>
            Bee evokes an organised and methodical insect, capable of building
            a coherent structure. This image corresponds to the idea of gathering
            and structuring content in a clear way.
        </p>
        <p>
            Janus Bee therefore represents a space where works carrying meaningful messages,
            born from their authors' experience and reflection, are gathered and organised
            so as to draw useful lessons for acting in the present and envisioning
            the future more clearly.
        </p>

        <h2>About the content</h2>
        <p>
            The site does not directly contain the works presented. It offers
            information, descriptions and, where possible, links to the platforms
            on which they are available (particularly YouTube for short films).
        </p>

        <h2>Why this project?</h2>
        <p>
            This project is above all an opportunity for me to practise and develop
            my web development skills. It also allows me to share works that have
            inspired me and that I hope will inspire others.
        </p>
        <p>Technologies used:</p>
        <ul>
            <li>HTML, CSS and JavaScript for structure and interface</li>
            <li>PHP (Laravel) for data management and dynamic features</li>
        </ul>

        <h2>A remark or question?</h2>
        <p>You can contact me:</p>
        <ul>
            <li>nicolas.bisaga@gmail.com</li>
            <li><a href="{{ route('fr.sites') }}">Main website</a></li>
        </ul>
        <p>
            Thank you for taking the time to visit Janus Bee. I hope this site
            will offer you interesting works.
        </p>

        @else
        <h1>Origines et Objectifs</h1>

        <h2>Bienvenue sur mon site</h2>
        <p>
            L'objectif du site est de proposer des œuvres qui m'ont marqué et inspiré,
            issues de différents médias comme les animés, films, livres, jeux vidéo
            ou encore les courts métrages.
        </p>

        <h2>Origines du nom Janus Bee</h2>
        <p>
            Le nom Janus Bee repose sur l'association de deux symboles complémentaires.
            Janus, dans la mythologie romaine, est le dieu des commencements et des
            transitions. Représenté avec deux visages tournés vers le passé et l'avenir,
            il incarne l'expérience acquise, la réflexion et la capacité à anticiper.
        </p>
        <p>
            Bee, qui signifie abeille en anglais, évoque un insecte organisé et
            méthodique, capable de construire une structure cohérente. Cette image
            correspond à l'idée de rassembler et de structurer des contenus de manière claire.
        </p>
        <p>
            Janus Bee représente ainsi un espace où des œuvres porteuses de messages,
            issues de l'expérience et de la réflexion de leurs auteurs, sont réunies et
            organisées afin d'en tirer des enseignements utiles pour agir dans le
            présent et envisager l'avenir de façon plus lucide.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Le site ne contient pas directement les œuvres présentées. Il propose
            plutôt des informations, des descriptions et, lorsque c'est possible,
            des liens vers les plateformes sur lesquelles elles sont disponibles
            (notamment youtube pour les courts métrages).
        </p>

        <h2>Pourquoi ce projet ?</h2>
        <p>
            Ce projet est avant tout une occasion pour moi de mettre en pratique et de
            développer mes compétences en développement web. Il me permet également
            de partager des œuvres qui m'ont inspiré et qui, je l'espère, pourront
            inspirer d'autres personnes.
        </p>
        <p>Pour sa réalisation, j'ai utilisé plusieurs technologies :</p>
        <ul>
            <li>HTML, CSS et JavaScript pour la structure et l'interface</li>
            <li>PHP (Laravel) pour la gestion des données et les fonctionnalités dynamiques</li>
        </ul>

        <h2>Une remarque ou une question ?</h2>
        <p>Vous pouvez me contacter :</p>
        <ul>
            <li>nicolas.bisaga@gmail.com</li>
            <li><a href="{{ route('fr.sites') }}">Site web principal</a></li>
        </ul>
        <p>
            Merci de prendre le temps de visiter Janus Bee, et j'espère que ce site
            saura vous proposer des œuvres intéressantes.
        </p>
        @endif
    </div>
</div>
@endsection
