@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Origins — Gaïa-Deer' : 'Origines — Gaïa-Deer')
@section('meta_description', $locale === 'en'
    ? 'Why Gaïa-Deer exists: a systemic vision linking physical health, nutrition and investing to mental well-being.'
    : 'Pourquoi Gaïa-Deer existe : une vision systémique qui relie santé physique, nutrition et investissement à la santé mentale.')

@section('content')
<div class="gd-static">
    @if($locale === 'en')
    <p class="gd-static-sub">$ cat origins.md</p>
    <h1>Origins</h1>

    <h2>Origins of the name Gaïa-Deer</h2>
    <p>
        The name Gaïa-Deer draws from two symbolic registers that are deeply connected to the site's themes.
    </p>
    <p>
        <strong>Gaïa</strong> is the primordial goddess of the Earth in Greek mythology, mother of all living things and the original nourishing force. She represents the ground beneath everything: the food that comes from the soil, the physical world in which the body moves, and the resources that sustain life. She is abundance, cycle, and rootedness.
    </p>
    <p>
        <strong>Deer</strong>, the stag or doe, is a universal symbol of vitality, agility and harmony with the natural world. It is an animal that lives alert, moves with precision, and exists in balance with its environment. It does not accumulate beyond its needs. It is the embodiment of a body that functions well: lean, responsive, enduring.
    </p>
    <p>
        Together, Gaïa-Deer evokes a simple idea: nourish well, move well, live in equilibrium. The earth that feeds and the body that acts. It is also, in a broader sense, a reminder that health, both physical and mental, is inseparable from the conditions we create for ourselves: what we eat, how we move, and how we manage our resources over time.
    </p>

    <h2>A system, not three separate subjects</h2>
    <p>Gaïa-Deer was born from a simple observation: physical health, nutrition and investing are treated as separate domains, each with its own experts, its own literature, its own community. But in practice, they form a single system, and neglecting one weakens the other two.</p>
    <p>A body that doesn't move regularly produces a mind that struggles to concentrate, to regulate its emotions, to resist stress. Poor nutrition, whether too abundant, too processed or too irregular, degrades energy, sleep and cognitive function. And financial instability, the anxiety of not knowing if you will make it to the end of the month, the absence of long-term perspective, is a chronic source of mental burden that colours everything else.</p>
    <p>The three pillars are not independent: they are interconnected. Working on one strengthens the others. This systemic view is the foundation of Gaïa-Deer.</p>

    <h2>The ultimate goal: mental clarity</h2>
    <p>What do you get when a body functions well, is properly nourished, and money works rather than causes worry? Mental clarity. The ability to think clearly, to act without being distorted by physical fatigue, chronic hunger or financial anxiety.</p>
    <p>Mental health is not built only in the mind. It is built through the body, through habits, through the concrete choices we make every day about how we eat, how we move and how we manage our resources.</p>
    <p>This site is not a guide to follow to the letter. It is a personal account of what I have built for myself, after testing, adapting, dropping what didn't work and keeping what did. Everything here is my opinion, based on my experience. Take what is useful for you, leave the rest.</p>

    @else
    <p class="gd-static-sub">$ cat origines.md</p>
    <h1>Origines</h1>

    <h2>Origines du nom Gaïa-Deer</h2>
    <p>
        Le nom Gaïa-Deer puise dans deux registres symboliques profondément liés aux thèmes du site.
    </p>
    <p>
        <strong>Gaïa</strong> est la déesse primordiale de la Terre dans la mythologie grecque, mère de tout le vivant et force nourricière originelle. Elle représente le socle de toute chose : la nourriture qui vient de la terre, le monde physique dans lequel le corps évolue, les ressources qui soutiennent la vie. Elle est abondance, cycle et enracinement.
    </p>
    <p>
        <strong>Deer</strong>, le cerf ou la biche, est un symbole universel de vitalité, d'agilité et d'harmonie avec le monde naturel. C'est un animal qui vit en état d'alerte, se déplace avec précision, et existe en équilibre avec son environnement. Il n'accumule pas au-delà de ses besoins. Il est l'incarnation d'un corps qui fonctionne bien : élancé, réactif, endurant.
    </p>
    <p>
        Ensemble, Gaïa-Deer évoque une idée simple : bien nourrir, bien bouger, vivre en équilibre. La terre qui nourrit et le corps qui agit. C'est aussi, dans un sens plus large, un rappel que la santé, physique et mentale, est inséparable des conditions que l'on se crée : ce que l'on mange, comment on se déplace, et comment on gère ses ressources dans le temps.
    </p>

    <h2>Un système, pas trois sujets séparés</h2>
    <p>Gaïa-Deer est né d'un constat simple : la santé physique, la nutrition et l'investissement sont traités comme des domaines séparés, chacun avec ses experts, sa littérature, sa communauté. Mais en pratique, ils forment un seul système, et négliger l'un fragilise les deux autres.</p>
    <p>Un corps qui ne bouge pas régulièrement produit un esprit qui peine à se concentrer, à réguler ses émotions, à résister au stress. Une alimentation médiocre, trop abondante, trop transformée ou trop irrégulière, dégrade l'énergie, le sommeil et les fonctions cognitives. Et l'instabilité financière, l'angoisse de ne pas savoir si on va finir le mois, l'absence de perspective à long terme, est une source chronique de charge mentale qui colore tout le reste.</p>
    <p>Les trois piliers ne sont pas indépendants : ils sont interconnectés. Travailler l'un renforce les autres. Cette vision systémique est le fondement de Gaïa-Deer.</p>

    <h2>L'objectif final : la clarté mentale</h2>
    <p>Qu'obtient-on quand un corps fonctionne bien, est correctement nourri, et que l'argent travaille plutôt qu'il n'inquiète ? De la clarté mentale. La capacité à penser clairement, à agir sans être déformé par la fatigue physique, la faim chronique ou l'anxiété financière.</p>
    <p>La santé mentale ne se construit pas seulement dans l'esprit. Elle se construit à travers le corps, à travers les habitudes, à travers les choix concrets que l'on fait chaque jour sur la façon dont on mange, dont on bouge et dont on gère ses ressources.</p>
    <p>Ce site n'est pas un guide à suivre à la lettre. C'est un témoignage personnel de ce que j'ai construit pour moi-même, après avoir testé, adapté, abandonné ce qui ne fonctionnait pas et conservé ce qui fonctionnait. Tout ici est mon avis, basé sur mon expérience. Prenez ce qui vous est utile, laissez le reste.</p>
    @endif
</div>
@endsection
