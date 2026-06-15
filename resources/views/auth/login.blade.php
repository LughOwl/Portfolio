<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin — Nicolas BISAGA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: #0a0a0a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'JetBrains Mono', monospace;
            color: #e0e0e0;
        }

        .login-wrap {
            width: 100%;
            max-width: 420px;
            padding: 24px;
        }

        .login-brand {
            text-align: center;
            margin-bottom: 36px;
        }

        .login-brand .prefix { color: #00ff88; font-size: 1.5em; }
        .login-brand .title  { color: #e0e0e0; font-size: 1.3em; font-weight: 700; margin-left: 8px; }
        .login-brand .sub    { color: #555; font-size: 0.78em; margin-top: 6px; }

        .login-box {
            background: #111;
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            padding: 36px 32px;
        }

        .form-title {
            font-size: 0.72em;
            color: #00ff88;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            margin-bottom: 28px;
        }

        .form-group { margin-bottom: 20px; }

        label {
            display: block;
            font-size: 0.75em;
            color: #888;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            background: #0d0d0d;
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            padding: 11px 14px;
            color: #e0e0e0;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.9em;
            outline: none;
            transition: border-color 0.2s;
        }

        input:focus { border-color: #00ff88; }

        .pwd-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        .pwd-wrapper input { padding-right: 44px; }

        .pwd-toggle {
            position: absolute;
            right: 12px;
            background: none;
            border: none;
            cursor: pointer;
            color: #555;
            padding: 4px;
            display: flex;
            align-items: center;
            transition: color 0.2s;
        }

        .pwd-toggle:hover { color: #00ff88; }

        .btn-login {
            width: 100%;
            background: #00ff88;
            color: #0a0a0a;
            border: none;
            border-radius: 8px;
            padding: 13px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.88em;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px;
            transition: background 0.2s, transform 0.1s;
        }

        .btn-login:hover  { background: #00e07a; }
        .btn-login:active { transform: scale(0.99); }

        .login-error {
            background: rgba(255, 87, 87, 0.1);
            border: 1px solid rgba(255, 87, 87, 0.3);
            border-radius: 8px;
            padding: 12px 14px;
            color: #ff5757;
            font-size: 0.82em;
            margin-bottom: 20px;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.72em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="login-wrap">
        <div class="login-brand">
            <div>
                <span class="prefix">//</span>
                <span class="title">Admin Panel</span>
            </div>
            <div class="sub">root@nicolas-bisaga:~$</div>
        </div>

        <div class="login-box">
            <div class="form-title">// Connexion requise</div>

            @if ($errors->any())
            <div class="login-error">
                Identifiants incorrects. Veuillez réessayer.
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email"
                           value="{{ old('email') }}" required autofocus autocomplete="username">
                </div>

                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="pwd-wrapper">
                        <input type="password" id="password" name="password"
                               required autocomplete="current-password">
                        <button type="button" class="pwd-toggle" id="togglePwd" aria-label="Afficher/masquer le mot de passe">
                            <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            <svg id="eyeOffIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:none">
                                <path d="M17.94 17.94A10.07 10.07 0 0112 20c-7 0-11-8-11-8a18.45 18.45 0 015.06-5.94M9.9 4.24A9.12 9.12 0 0112 4c7 0 11 8 11 8a18.5 18.5 0 01-2.16 3.19m-6.72-1.07a3 3 0 11-4.24-4.24"/>
                                <line x1="1" y1="1" x2="23" y2="23"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-login">Connexion →</button>
            </form>
        </div>

        <div class="login-footer">Accès réservé</div>
    </div>

    <script>
        const toggleBtn = document.getElementById('togglePwd');
        const pwdInput  = document.getElementById('password');
        const eyeOn     = document.getElementById('eyeIcon');
        const eyeOff    = document.getElementById('eyeOffIcon');

        toggleBtn.addEventListener('click', () => {
            const isHidden = pwdInput.type === 'password';
            pwdInput.type  = isHidden ? 'text' : 'password';
            eyeOn.style.display  = isHidden ? 'none'  : 'block';
            eyeOff.style.display = isHidden ? 'block' : 'none';
        });
    </script>
</body>
</html>
