@extends('layouts.inari-fox')
@section('title', $locale === 'en' ? 'Origins - Inari-Fox' : 'Origines - Inari-Fox')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="if-content if-content-narrow" style="padding-top:52px;">
    <div class="if-prose">

@if($isEn)

        <h2>Welcome</h2>
        <p>
            This site is a personal collection of recipes, organised by ingredient, category and
            filter. Not a food magazine or a cooking school — a practical reference built around the
            dishes I cook and want to find easily.
        </p>

        <h2>Origins of the name</h2>
        <p>
            Inari is one of the most widely venerated deities in Japan, with shrines to Inari
            numbering over 32,000 across the country — roughly a third of all Shinto shrines.
            Inari is the deity of food, rice, agriculture and worldly success. The vermilion torii
            gates of Inari shrines, most famously at Fushimi Inari in Kyoto, stand as thresholds
            between the everyday world and the sacred — an appropriate image for a site about the
            daily ritual of cooking.
        </p>
        <p>
            The fox — <em>kitsune</em> in Japanese — is Inari's sacred messenger. Kitsune are
            not ordinary animals in Japanese mythology: they are intelligent, shape-shifting beings
            who grow in wisdom and power as they age. A fox with many tails is an ancient, knowing
            creature. The fox brings the cunning to adapt a recipe, the precision to get the
            balance right, and the knowledge that improves with each repetition.
        </p>
        <p>
            Inari-Fox is a shrine to good food: the deity who grows it, and the messenger
            who knows how to prepare it.
        </p>

        <h2>About the content</h2>
        <p>
            The recipes here are organised by ingredients, categories and filters to make them easy
            to find. Each one includes the ingredients, steps, and any notes worth keeping.
            The collection grows as I cook and test.
        </p>

        <h2>A learning project</h2>
        <p>
            Inari-Fox is also part of my web development portfolio. Building it gives me the
            opportunity to work on complex filtering, ingredient management, and a full recipe
            CRUD system with Laravel.
        </p>

        <h2>Contact</h2>
        <p>
            You can reach me at <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a>
            or via the <a href="{{ route('en.websites') }}">main website</a>.
        </p>

@else

        <h2>Bienvenue</h2>
        <p>
            Ce site est une collection personnelle de recettes, organisées par ingrédients,
            catégories et filtres. Pas un magazine culinaire ni une école de cuisine : une
            référence pratique construite autour des plats que je cuisine et que je veux
            retrouver facilement.
        </p>

        <h2>Origines du nom</h2>
        <p>
            Inari est l'une des divinités les plus vénérées du Japon, avec plus de 32 000 sanctuaires
            dédiés à travers le pays, environ un tiers de tous les sanctuaires shinto. Inari est
            la divinité de la nourriture, du riz, de l'agriculture et de la prospérité. Les torii
            vermillons des sanctuaires d'Inari, les plus célèbres étant ceux de Fushimi Inari à
            Kyoto, marquent le seuil entre le monde ordinaire et le sacré : une image juste pour
            un site sur le rituel quotidien de cuisiner.
        </p>
        <p>
            Le renard, le <em>kitsune</em> en japonais, est le messager sacré d'Inari. Les kitsune
            ne sont pas des animaux ordinaires dans la mythologie japonaise : ce sont des êtres
            intelligents et métamorphes qui grandissent en sagesse et en puissance avec l'âge.
            Un renard à plusieurs queues est une créature ancienne et savante. Le renard apporte
            la ruse pour adapter une recette, la précision pour trouver le bon équilibre, et le
            savoir qui s'améliore à chaque répétition.
        </p>
        <p>
            Inari-Fox est un sanctuaire dédié à la bonne nourriture : la divinité qui la fait
            pousser, et le messager qui sait la préparer.
        </p>

        <h2>À propos du contenu</h2>
        <p>
            Les recettes sont organisées par ingrédients, catégories et filtres pour les retrouver
            facilement. Chacune comprend les ingrédients, les étapes, et les notes qui valent la
            peine d'être gardées. La collection s'enrichit au fil des préparations.
        </p>

        <h2>Un projet d'apprentissage</h2>
        <p>
            Inari-Fox fait aussi partie de mon portfolio de développement web. Le construire me
            permet de travailler sur un filtrage complexe, la gestion des ingrédients, et un
            système CRUD de recettes complet avec Laravel.
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
