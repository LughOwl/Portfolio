@extends('layouts.lugh-owl')

@section('title', ($locale === 'en') ? 'Origins & Goals - Lugh-Owl' : 'Origines et Objectifs - Lugh-Owl')

@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp
<div class="lo-static-wrap">
    <div>
@if($isEn)
        <h1>Origins & Goals</h1>

        <h2>Welcome to my website</h2>
        <p>
            This site is dedicated to the exploration of philosophy and metaphysics.
            I hope it will spark your curiosity and offer you interesting perspectives
            on these great subjects. This project is the result of a blend between my
            personal ideas and modern technologies, designed to be both informative and
            enjoyable to browse.
        </p>

        <h2>Origins of the name Lugh-Owl</h2>
        <p>
            The name Lugh-Owl draws its inspiration from the symbolism of wisdom.
            Lugh, a major figure in Celtic mythology, is the god of light, craftsmanship
            and knowledge, embodying intelligence and ingenuity. The owl, for its part,
            is a universal symbol of wisdom and clear-sightedness, often associated with
            reflection and the pursuit of truth.
        </p>
        <p>
            By combining these two elements, Lugh-Owl becomes an invitation to explore the
            philosophical and metaphysical dimensions of existence, a space where the light
            of reason and the depth of thought meet.
        </p>

        <h2>About the content</h2>
        <p>
            A large portion of the articles and images on this site were created with the
            help of artificial intelligence. This reflects my desire to experiment and explore
            the possibilities offered by these tools. However, some elements are entirely personal:
        </p>
        <ul>
            <li>The article titles, which I crafted carefully to reflect a particular intention.</li>
            <li>The "Models" section, where the content is based on personal reflection.</li>
        </ul>
        <p>
            This blend of my creativity and digital tools is at the heart of my approach.
        </p>

        <h2>A passion and learning project</h2>
        <p>
            This site is above all an opportunity for me to put into practice and share my
            technical expertise in web development. Every detail has been worked on, even if
            not everything is perfect. I used various languages and technologies to build it, including:
        </p>
        <ul>
            <li>HTML, CSS and JavaScript for structure and design</li>
            <li>PHP (Laravel) and MySQL for data management</li>
        </ul>

        <h2>Why this project?</h2>
        <p>
            I created this site with two main ideas in mind:
        </p>
        <ol>
            <li>Share philosophical ideas</li>
            <li>Experiment with web creation, trying to balance technique, content and design.</li>
        </ol>
        <p>
            This project is a step in my learning journey, and I am aware there is always room
            for improvement. I am simply happy to be able to share this work with you.
        </p>

        <h2>A comment or a question?</h2>
        <p>
            You can contact me:
        </p>
        <ul>
            <li>nicolas.bisaga@gmail.com</li>
            <li><a href="{{ route('en.websites') }}">Main website</a></li>
        </ul>
        <p>
            Thank you for taking the time to visit my site, and I hope it will inspire you.
        </p>
@else
        <h1>Origines et Objectifs</h1>

        <h2>Bienvenue sur mon site</h2>
        <p>
            Ce site est dédié à l'exploration de la philosophie et de la métaphysique.
            J'espère qu'il saura éveiller votre curiosité et vous offrir des perspectives
            intéressantes sur ces grands sujets. Ce projet est le fruit d'un mélange
            entre mes idées personnelles et les technologies modernes, conçu pour être
            à la fois informatif et agréable à parcourir.
        </p>

        <h2>Origines du nom Lugh-Owl</h2>
        <p>
            Le nom Lugh-Owl puise son inspiration dans la symbolique de la sagesse.
            Lugh, figure majeure de la mythologie celtique, est le dieu de la lumière, de
            l'artisanat et de la connaissance, incarnant l'intelligence et l'ingéniosité.
            Le hibou (owl, en anglais), quant à lui, est un symbole universel de sagesse et
            de clairvoyance, souvent associé à la réflexion et à la quête de vérité.
        </p>
        <p>
            En associant ces deux éléments, Lugh-Owl devient une invitation à explorer les
            dimensions philosophiques et métaphysiques de l'existence, un espace où la lumière
            de la raison et la profondeur de la pensée se rencontrent.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Une grande partie des articles et des images présents sur ce site a été
            créée avec l'aide de l'intelligence artificielle. Cela reflète mon envie
            d'expérimenter et d'explorer les possibilités offertes par ces outils.
            Cependant, certains éléments sont entièrement personnels :
        </p>
        <ul>
            <li>Les titres des articles, que j'ai conçus avec soin pour refléter une intention.</li>
            <li>La rubrique "Modèles", où les contenus reposent sur une réflexion personnelle.</li>
        </ul>
        <p>
            Ce mélange entre ma créativité et les outils numériques est au cœur de ma démarche.
        </p>

        <h2>Un projet de passion et d'apprentissage</h2>
        <p>
            Ce site est avant tout une occasion pour moi de mettre en pratique et de
            partager mon savoir-faire technique dans le domaine du développement web.
            Chaque détail a été travaillé, même si tout n'est pas parfait.
            J'ai utilisé différents langages et technologies pour le créer, notamment :
        </p>
        <ul>
            <li>HTML, CSS et JavaScript pour la structure et le design</li>
            <li>PHP (Laravel) et SQLite pour la gestion des données</li>
        </ul>

        <h2>Pourquoi ce projet ?</h2>
        <p>
            J'ai créé ce site avec deux idées principales en tête :
        </p>
        <ol>
            <li>Partager des idées philosophiques</li>
            <li>Expérimenter avec la création web, en essayant d'équilibrer technique, contenu et design.</li>
        </ol>
        <p>
            Ce projet est une étape dans mon parcours d'apprentissage, et je suis conscient qu'il
            y a toujours des choses à améliorer. Je suis simplement heureux de pouvoir partager
            ce travail avec vous.
        </p>

        <h2>Une remarque ou une question ?</h2>
        <p>
            Vous pouvez me contacter :
        </p>
        <ul>
            <li>nicolas.bisaga@gmail.com</li>
            <li><a href="{{ route('fr.sites') }}">Site web principal</a></li>
        </ul>
        <p>
            Merci de prendre le temps de visiter mon site, et j'espère qu'il saura vous inspirer.
        </p>
@endif
    </div>
</div>
@endsection
