@extends('layouts.lugh-owl')

@section('title', ($locale === 'en') ? 'Legal Notice - Lugh-Owl' : 'Mentions Légales - Lugh-Owl')

@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp
<div class="lo-static-wrap">
    <div>
@if($isEn)
        <h1>Legal Notice</h1>

        <h2>Publisher and Site Manager:</h2>
        <p>
            Name: Bisaga Nicolas<br>
            Email: nicolas.bisaga@gmail.com
        </p>

        <h2>Hosting:</h2>
        <p>This website is hosted on a personal VPS managed by myself.</p>
        <ul>
            <li>Host name: OVH</li>
            <li>Address: 2 rue Kellermann, 59100 Roubaix, France</li>
            <li>Website: <a href="https://www.ovh.com/">https://www.ovh.com/</a></li>
        </ul>

        <h2>Intellectual Property:</h2>
        <p>
            All content published on this website, including texts, images, videos and other media,
            is protected by copyright and is the property of Nicolas Bisaga. You are permitted to use,
            reproduce, distribute and share this content for personal, educational and non-commercial purposes.
            Any commercial use is strictly prohibited.
        </p>

        <h2>Liability:</h2>
        <p>
            While I strive to provide accurate information, I cannot guarantee the accuracy, completeness
            or relevance of the information provided on this website. Use of the information available on
            this site is at your own risk. I cannot be held responsible for any direct or indirect damage
            resulting from the use of this website.
        </p>

        <h2>Hyperlinks:</h2>
        <p>
            This site may contain links to other websites. I am not responsible for the content of these
            third-party sites and cannot be held liable for any damage resulting from their use.
        </p>

        <h2>Applicable Law:</h2>
        <p>
            This website is governed by French law. Any dispute relating to the use of this website shall
            be subject to the jurisdiction of the French courts.
        </p>

        <h2>Contact:</h2>
        <p>
            If you have any questions or concerns regarding this legal notice, please contact me at:
            <em>nicolas.bisaga@gmail.com</em>.
        </p>
@else
        <h1>Mentions Légales</h1>

        <h2>Éditeur et Responsable du Site :</h2>
        <p>
            Nom et Prénom : Bisaga Nicolas<br>
            Adresse e-mail : nicolas.bisaga@gmail.com
        </p>

        <h2>Hébergement :</h2>
        <p>Ce site web est hébergé sur un VPS personnel géré par mes soins.</p>
        <ul>
            <li>Nom de l'hébergeur : OVH</li>
            <li>Adresse : 2 rue Kellermann, 59100 Roubaix, France</li>
            <li>Site web : <a href="https://www.ovh.com/">https://www.ovh.com/</a></li>
        </ul>

        <h2>Propriété Intellectuelle :</h2>
        <p>
            Tous les contenus publiés sur ce site web, y compris
            les textes, images, vidéos, et autres médias, sont
            protégés par le droit d'auteur et sont la propriété
            de Nicolas Bisaga. Vous êtes autorisé à utiliser, reproduire,
            distribuer et partager ces contenus à des fins
            personnelles, éducatives et non commerciales. Toute
            utilisation à des fins commerciales est strictement
            interdite.
        </p>

        <h2>Responsabilité :</h2>
        <p>
            Bien que je m'efforce de fournir des informations
            précises, je ne peux garantir l'exactitude, l'exhaustivité
            ou la pertinence des informations fournies sur ce site web.
            L'utilisation des informations disponibles sur ce site se fait
            à vos propres risques. Je ne peux être tenus responsables
            de tout dommage direct ou indirect résultant de l'utilisation
            de ce site web.
        </p>

        <h2>Liens Hypertextes :</h2>
        <p>
            Ce site peut contenir des liens vers d'autres sites web.
            Je ne suis pas responsables du contenu de ces sites tiers
            et ne peux en aucun cas être tenus responsables des
            dommages résultant de leur utilisation.
        </p>

        <h2>Loi Applicable :</h2>
        <p>
            Ce site web est régi par les lois françaises. Tout litige
            relatif à l'utilisation de ce site web sera soumis à la
            juridiction des tribunaux français.
        </p>

        <h2>Contact :</h2>
        <p>
            Si vous avez des questions ou des préoccupations concernant
            ces mentions légales, veuillez me contacter à l'adresse
            e-mail suivante : <em>nicolas.bisaga@gmail.com</em>.
        </p>
@endif
    </div>
</div>
@endsection
