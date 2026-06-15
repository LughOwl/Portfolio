<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: sans-serif; color: #222; line-height: 1.6; }
        .header { background: #252525; color: #fefefe; padding: 20px; }
        .body { padding: 24px; }
        .field { margin-bottom: 16px; }
        .label { font-weight: 600; color: #555; font-size: 0.85em; text-transform: uppercase; }
        .value { margin-top: 4px; }
        .message { background: #f4f4f4; padding: 16px; border-radius: 6px; white-space: pre-line; }
        .footer { border-top: 1px solid #ddd; padding: 16px 24px; font-size: 0.85em; color: #888; }
    </style>
</head>
<body>
    <div class="header">
        <strong>Nouveau message — Portfolio Nicolas BISAGA</strong>
    </div>
    <div class="body">
        <div class="field">
            <div class="label">Nom</div>
            <div class="value">{{ $data['nom'] }}</div>
        </div>
        <div class="field">
            <div class="label">Email</div>
            <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
        </div>
        <div class="field">
            <div class="label">Sujet</div>
            <div class="value">{{ $data['sujet'] }}</div>
        </div>
        <div class="field">
            <div class="label">Message</div>
            <div class="value message">{{ $data['message'] }}</div>
        </div>
    </div>
    <div class="footer">
        Message envoyé via le formulaire de contact du portfolio.
    </div>
</body>
</html>
