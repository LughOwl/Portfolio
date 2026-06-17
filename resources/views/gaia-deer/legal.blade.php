@extends('layouts.gaia-deer')

@section('title', $locale === 'en' ? 'Legal Notice — Gaïa-Deer' : 'Mentions légales — Gaïa-Deer')

@section('content')
<div class="gd-static">
    @if($locale === 'en')
    <p class="gd-static-sub">$ cat legal.md</p>
    <h1>Legal Notice</h1>

    <h2>Publisher</h2>
    <p>This website is published by Nicolas BISAGA, individual, France.</p>

    <h2>Hosting</h2>
    <p>This site is hosted on a personal server.</p>

    <h2>Disclaimer</h2>
    <p>The content published on Gaïa-Deer (health, nutrition, investing) reflects exclusively the personal opinions and experiences of the author. It does not constitute medical, nutritional or financial advice.</p>
    <p>No content on this site should be taken as a recommendation to follow a specific diet, exercise programme or investment strategy. Every individual has different needs, health conditions and financial situations. Always consult a qualified professional before making significant decisions in these areas.</p>
    <p>The author accepts no liability for any consequence resulting from the use of the information published on this site.</p>

    <h2>Intellectual property</h2>
    <p>All content on this site (texts, design, code) is the exclusive property of Nicolas BISAGA. Any reproduction, even partial, without prior written authorisation is prohibited.</p>

    <h2>Personal data</h2>
    <p>This site does not collect personal data and does not use cookies for commercial or tracking purposes.</p>

    @else
    <p class="gd-static-sub">$ cat legal.md</p>
    <h1>Mentions légales</h1>

    <h2>Éditeur</h2>
    <p>Ce site est édité par Nicolas BISAGA, particulier, France.</p>

    <h2>Hébergement</h2>
    <p>Ce site est hébergé sur un serveur personnel.</p>

    <h2>Avertissement</h2>
    <p>Le contenu publié sur Gaïa-Deer (santé, nutrition, investissement) reflète exclusivement les opinions et expériences personnelles de l'auteur. Il ne constitue pas un conseil médical, nutritionnel ou financier.</p>
    <p>Aucun contenu de ce site ne doit être interprété comme une recommandation à suivre un régime alimentaire spécifique, un programme d'exercice ou une stratégie d'investissement. Chaque individu a des besoins, des conditions de santé et des situations financières différentes. Consultez toujours un professionnel qualifié avant de prendre des décisions importantes dans ces domaines.</p>
    <p>L'auteur décline toute responsabilité pour toute conséquence résultant de l'utilisation des informations publiées sur ce site.</p>

    <h2>Propriété intellectuelle</h2>
    <p>L'ensemble du contenu de ce site (textes, design, code) est la propriété exclusive de Nicolas BISAGA. Toute reproduction, même partielle, sans autorisation écrite préalable est interdite.</p>

    <h2>Données personnelles</h2>
    <p>Ce site ne collecte pas de données personnelles et n'utilise pas de cookies à des fins commerciales ou de suivi.</p>
    @endif
</div>
@endsection
