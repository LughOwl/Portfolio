@extends('layouts.portfolio')

@section('title', 'Mentions Légales — Nicolas BISAGA')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Mentions Légales</h1>
        <p class="page-subtitle">$ cat legal.txt — Informations légales du site</p>
    </div>

    <div class="legal-content">
        <h2>1. Éditeur du site</h2>
        <p>Nom : Nicolas BISAGA</p>
        <p>E-mail : nicolas.bisaga@gmail.com</p>
        <p>Statut : Particulier</p>

        <h2>2. Hébergement</h2>
        <p>Hébergeur : OVH</p>
        <p>Adresse : 2 rue Kellermann, 59100 Roubaix, France</p>
        <p>Site web : <a href="https://www.ovh.com/">ovh.com</a></p>

        <h2>3. Propriété intellectuelle</h2>
        <p>Tout le contenu présent sur ce site (textes, images, graphismes, logos, etc.) est protégé par le
        droit d'auteur et la propriété intellectuelle. Toute reproduction, modification ou diffusion sans
        autorisation préalable est strictement interdite.</p>

        <h2>4. Données personnelles &amp; cookies</h2>
        <p>Ce site ne collecte aucune donnée personnelle à des fins commerciales et n'utilise aucun cookie de
        traçage. Les informations transmises via le formulaire de contact sont uniquement utilisées pour répondre
        à votre demande.</p>

        <h2>5. Responsabilité</h2>
        <p>L'éditeur du site décline toute responsabilité quant aux éventuelles erreurs ou omissions dans les
        informations affichées et aux conséquences de leur utilisation.</p>

        <h2>6. Droit applicable</h2>
        <p>Ces mentions légales sont soumises au droit français. En cas de litige, les tribunaux compétents
        seront ceux de la Moselle (57).</p>
    </div>
</div>
@endsection
