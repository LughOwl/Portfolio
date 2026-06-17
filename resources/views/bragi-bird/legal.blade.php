@extends('layouts.bragi-bird')
@section('title', $locale === 'en' ? 'Legal Notice - Bragi-Bird' : 'Mentions légales - Bragi-Bird')
@section('content')
@php $isEn = ($locale ?? 'fr') === 'en'; @endphp

<div class="bb-content bb-content-narrow" style="padding-top:15px;">
    <div class="bb-prose">

@if($isEn)

        <h2>Legal Notice</h2>

        <h2>Publisher</h2>
        <p>Nicolas Bisaga<br>
        <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a></p>

        <h2>Hosting</h2>
        <p>This site is hosted on a personal VPS managed by myself.</p>
        <p>OVH — 2 rue Kellermann, 59100 Roubaix, France</p>

        <h2>Intellectual Property</h2>
        <p>All content published on this site is the property of Nicolas Bisaga and protected by
        copyright. You may use, reproduce or share it for personal, educational and non-commercial
        purposes. Any commercial use is strictly prohibited.</p>

        <h2>Liability</h2>
        <p>The information on this site is provided as is, without any guarantee of accuracy or
        completeness. Use of this site is at your own risk. I cannot be held liable for any direct
        or indirect damage resulting from its use.</p>

        <h2>Third-party Links</h2>
        <p>This site may contain links to external websites. I am not responsible for their content
        and cannot be held liable for any damage resulting from their use.</p>

        <h2>Applicable Law</h2>
        <p>This site is governed by French law. Any dispute will be subject to the jurisdiction of
        the French courts.</p>

        <h2>Contact</h2>
        <p><a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a></p>

@else

        <h2>Mentions légales</h2>

        <h2>Éditeur</h2>
        <p>Bisaga Nicolas<br>
        <a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a></p>

        <h2>Hébergement</h2>
        <p>Ce site est hébergé sur un VPS personnel géré par mes soins.</p>
        <p>OVH — 2 rue Kellermann, 59100 Roubaix, France</p>

        <h2>Propriété intellectuelle</h2>
        <p>Tous les contenus publiés sur ce site sont la propriété de Nicolas Bisaga et protégés
        par le droit d'auteur. Vous êtes autorisé à les utiliser, reproduire ou partager à des fins
        personnelles, éducatives et non commerciales. Toute utilisation commerciale est strictement
        interdite.</p>

        <h2>Responsabilité</h2>
        <p>Les informations de ce site sont fournies telles quelles, sans garantie d'exactitude ni
        d'exhaustivité. L'utilisation de ce site se fait à vos propres risques. Je ne saurais être
        tenu responsable de tout dommage direct ou indirect résultant de son utilisation.</p>

        <h2>Liens hypertextes</h2>
        <p>Ce site peut contenir des liens vers des sites externes. Je ne suis pas responsable de
        leur contenu et ne peux être tenu responsable des dommages résultant de leur utilisation.</p>

        <h2>Loi applicable</h2>
        <p>Ce site est régi par la loi française. Tout litige sera soumis à la juridiction des
        tribunaux français.</p>

        <h2>Contact</h2>
        <p><a href="mailto:nicola.bisaga@gmail.com">nicola.bisaga@gmail.com</a></p>

@endif
    </div>
</div>
@endsection
