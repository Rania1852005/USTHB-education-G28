<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Connexion</title>
  <link rel="icon" type="image/png" href="../assets/img/logo_usthb.png">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root {
      --blue:      #2341C8;
      --blue-dark: #1a2f9e;
      --blue-light:#EEF1FC;
      --text:      #111827;
      --muted:     #6B7280;
      --border:    #D1D5DB;
      --bg:        #F3F4F6;
      --white:     #ffffff;
      --error:     #EF4444;
    }
    body {
      font-family: 'Manrope', sans-serif;
      background: var(--bg);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      padding: 32px 40px;
    }
    .btn-back {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: 1.5px solid var(--border);
      background: var(--white);
      color: var(--blue-dark);
      border-radius: 8px;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: 600;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: all .2s;
      margin-bottom: 40px;
    }
    .btn-back:hover { background: var(--blue-light); border-color: var(--blue); }
    .card {
      background: var(--white);
      border-radius: 20px;
      display: flex;
      width: 100%;
      max-width: 900px;
      min-height: 500px;
      margin: 0 auto;
      overflow: hidden;
      box-shadow: 0 4px 32px rgba(0,0,0,0.07);
      animation: fadeUp .5s ease both;
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .card-left {
      flex: 1;
      padding: 56px 52px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
    .card-left h1 {
      font-size: 30px;
      font-weight: 800;
      color: var(--text);
      margin-bottom: 12px;
    }
    .card-left p {
      font-size: 14px;
      color: var(--muted);
      line-height: 1.6;
      margin-bottom: 36px;
      max-width: 340px;
    }
    .form-group {
      width: 100%;
      max-width: 380px;
      margin-bottom: 20px;
      text-align: left;
    }
    .form-group label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      color: var(--text);
      margin-bottom: 8px;
    }
    .form-group input {
      width: 100%;
      padding: 13px 16px;
      border: 1.5px solid var(--border);
      border-radius: 8px;
      font-size: 14px;
      font-family: 'Manrope', sans-serif;
      color: var(--text);
      background: var(--white);
      outline: none;
      transition: border-color .2s, box-shadow .2s;
    }
    .form-group input::placeholder { color: #9CA3AF; }
    .form-group input:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(35,65,200,0.1);
    }
    .error-msg {
      width: 100%;
      max-width: 380px;
      background: #FEE2E2;
      color: var(--error);
      border-radius: 8px;
      padding: 12px 16px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 16px;
      display: none;
    }
    .error-msg.show { display: block; }
    .btn-submit {
      width: 100%;
      max-width: 380px;
      background: var(--blue-dark);
      color: var(--white);
      border: none;
      border-radius: 8px;
      padding: 15px;
      font-size: 15px;
      font-weight: 700;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      transition: background .2s, transform .15s;
      margin-top: 4px;
    }
    .btn-submit:hover { background: var(--blue); transform: translateY(-1px); }
    .card-right {
      width: 420px;
      background: var(--blue-light);
      border-radius: 16px;
      margin: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

  <a href="index.php" class="btn-back">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
      <path d="M19 12H5M12 19l-7-7 7-7"/>
    </svg>
    Back
  </a>

  <div class="card">
    <div class="card-left">
      <h1>Welcome back !</h1>
      <p>Entrez vos identifiants pour accéder à votre espace personnel. Cette plateforme est destinée aux administrateurs, enseignants et étudiants de l'USTHB.</p>

      <div class="error-msg" id="errorMsg">
        ❌ Email ou mot de passe incorrect.
      </div>

      <form action="login.php" method="POST" style="width:100%; display:flex; flex-direction:column; align-items:center;">
        <div class="form-group">
          <label for="email">Email ou Nom d'utilisateur</label>
          <input type="text" id="email" name="email" placeholder="Email ou Nom d'utilisateur" required/>
        </div>
        <div class="form-group">
          <label for="password">Mot de passe</label>
          <input type="password" id="password" name="password" placeholder="Mot de passe" required/>
        </div>
        <button type="submit" class="btn-submit">Se connecter</button>
      </form>
    </div>

    <div class="card-right">
      <!-- 🖼️ REMPLACE ICI par ton image -->
      <svg width="340" height="320" viewBox="0 0 340 320" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="210" cy="60" r="28" fill="#2341C8" opacity="0.15"/>
        <circle cx="210" cy="60" r="16" fill="#2341C8" opacity="0.4"/>
        <line x1="210" y1="30" x2="210" y2="20" stroke="#2341C8" stroke-width="3" stroke-linecap="round"/>
        <line x1="232" y1="38" x2="240" y2="30" stroke="#2341C8" stroke-width="3" stroke-linecap="round"/>
        <line x1="188" y1="38" x2="180" y2="30" stroke="#2341C8" stroke-width="3" stroke-linecap="round"/>
        <circle cx="170" cy="130" r="26" fill="#1a2f9e"/>
        <ellipse cx="170" cy="112" rx="20" ry="10" fill="#111827"/>
        <rect x="148" y="156" width="44" height="70" rx="14" fill="#374151"/>
        <rect x="125" y="162" width="20" height="44" rx="10" fill="#374151"/>
        <rect x="195" y="162" width="20" height="44" rx="10" fill="#374151"/>
        <rect x="153" y="222" width="18" height="40" rx="9" fill="#1a2f9e"/>
        <rect x="169" y="222" width="18" height="40" rx="9" fill="#1a2f9e"/>
        <circle cx="88" cy="160" r="22" fill="#2341C8"/>
        <ellipse cx="88" cy="144" rx="16" ry="8" fill="#111827"/>
        <rect x="70" y="182" width="36" height="55" rx="12" fill="#4B5563"/>
        <rect x="54" y="188" width="16" height="36" rx="8" fill="#4B5563"/>
        <rect x="96" y="195" width="28" height="18" rx="4" fill="#2341C8"/>
        <rect x="96" y="210" width="28" height="18" rx="4" fill="#1a2f9e"/>
        <circle cx="258" cy="155" r="22" fill="#1a2f9e"/>
        <ellipse cx="258" cy="139" rx="16" ry="8" fill="#111827"/>
        <rect x="240" y="177" width="36" height="55" rx="12" fill="#6B7280"/>
        <rect x="270" y="184" width="16" height="36" rx="8" fill="#6B7280"/>
        <rect x="247" y="229" width="14" height="28" rx="7" fill="#4B5563"/>
        <rect x="265" y="229" width="14" height="28" rx="7" fill="#4B5563"/>
      </svg>
    </div>
  </div>

</body>
</html>