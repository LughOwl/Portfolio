@extends('layouts.portfolio')

@section('title', 'Terms of Use — Nicolas BISAGA')

@section('content')
<div class="container">
    <div class="page-header">
        <h1 class="page-title"><span class="prefix">//</span> Terms of Use</h1>
        <p class="page-subtitle">$ cat legal.txt</p>
    </div>

    <div style="max-width: 720px; padding-bottom: 60px; display: flex; flex-direction: column; gap: 20px;">

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">1. Site editor</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                Name: Nicolas BISAGA<br>
                E-mail: <a href="mailto:nicolas.bisaga@gmail.com" style="color:var(--accent-green);">nicolas.bisaga@gmail.com</a><br>
                Status: Individual
            </p>
        </div>

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">2. Hosting</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                Host: OVH — 2 rue Kellermann, 59100 Roubaix, France<br>
                <a href="https://www.ovh.com/" style="color:var(--accent-green);">ovh.com</a>
            </p>
        </div>

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">3. Intellectual property</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                All content on this site is protected by copyright. Any unauthorised reproduction, modification or distribution is prohibited.
            </p>
        </div>

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">4. Personal data & cookies</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                This site does not collect personal data and does not use tracking cookies.
            </p>
        </div>

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">5. Liability</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                The site editor declines all responsibility for any errors or omissions in the information displayed.
            </p>
        </div>

        <div class="cyber-card">
            <div style="font-family:'JetBrains Mono',monospace; font-size:0.78em; color:var(--accent-green); text-transform:uppercase; letter-spacing:.1em; margin-bottom:12px;">6. Applicable law</div>
            <p style="color:var(--text-secondary); font-size:0.9em; line-height:1.7;">
                This legal notice is governed by French law. In the event of a dispute, the competent courts will be those of Moselle (57).
            </p>
        </div>

    </div>
</div>
@endsection
