<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education</title>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --blue:       #2341C8;
      --blue-dark:  #1a2f9e;
      --blue-light: #EEF1FC;
      --text:       #111827;
      --muted:      #6B7280;
      --border:     #E5E7EB;
      --white:      #ffffff;
      --bg:         #ffffff;
    }

    body {
      font-family: 'Manrope', sans-serif;
      color: var(--text);
      background: var(--bg);
    }

    /* ── NAVBAR ── */
    nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 60px;
      border-bottom: 1px solid var(--border);
      position: sticky;
      top: 0;
      background: var(--white);
      z-index: 100;
    }

    .nav-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      text-decoration: none;
    }

    .nav-logo img {
      height: 44px;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 40px;
      list-style: none;
    }

    .nav-links a {
      text-decoration: none;
      color: var(--text);
      font-weight: 500;
      font-size: 15px;
      transition: color .2s;
    }

    .nav-links a:hover { color: var(--blue); }
    .nav-links a.active {
      text-decoration: underline;
      text-underline-offset: 4px;
      font-weight: 600;
    }

    .btn-connect {
      background: var(--blue-dark);
      color: var(--white);
      border: none;
      border-radius: 8px;
      padding: 12px 28px;
      font-size: 15px;
      font-weight: 600;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: background .2s, transform .15s;
    }
    .btn-connect:hover { background: var(--blue); transform: translateY(-1px); }

    /* ── HERO ── */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 70px 60px 60px;
      gap: 40px;
      max-width: 1280px;
      margin: 0 auto;
    }

    .hero-text { flex: 1; max-width: 560px; }

    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: 1.5px solid var(--blue);
      color: var(--blue);
      border-radius: 100px;
      padding: 6px 16px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 24px;
    }

    .hero-badge svg { width: 14px; height: 14px; }

    .hero-title {
      font-size: 64px;
      font-weight: 800;
      color: var(--blue);
      line-height: 1.05;
      margin-bottom: 24px;
      letter-spacing: -1px;
    }

    .hero-desc {
      font-size: 16px;
      line-height: 1.7;
      color: var(--blue-dark);
      font-weight: 500;
      margin-bottom: 36px;
      max-width: 500px;
    }

    .hero-actions { display: flex; gap: 16px; align-items: center; }

    .btn-primary {
      background: var(--blue-dark);
      color: var(--white);
      border: none;
      border-radius: 8px;
      padding: 14px 30px;
      font-size: 15px;
      font-weight: 700;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: background .2s, transform .15s;
    }
    .btn-primary:hover { background: var(--blue); transform: translateY(-2px); }

    .btn-outline {
      background: transparent;
      color: var(--blue-dark);
      border: 2px solid var(--blue-dark);
      border-radius: 8px;
      padding: 13px 28px;
      font-size: 15px;
      font-weight: 600;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: all .2s;
    }
    .btn-outline:hover { background: var(--blue-light); }

    .hero-image {
      flex: 1;
      max-width: 520px;
      display: flex;
      justify-content: center;
    }

    .hero-image img { width: 100%; max-width: 500px; }

    /* Placeholder illustration if no image */
    .hero-illustration {
      width: 460px;
      height: 380px;
      background: var(--blue-light);
      border-radius: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    /* ── SERVICES SECTION ── */
    .services {
      background: var(--blue);
      padding: 60px;
      display: flex;
      gap: 60px;
      align-items: flex-start;
    }

    .services-left {
      flex: 1;
      max-width: 380px;
      color: var(--white);
    }

    .services-left h2 {
      font-size: 42px;
      font-weight: 800;
      margin-bottom: 16px;
      line-height: 1.15;
    }

    .services-left p {
      font-size: 15px;
      line-height: 1.6;
      opacity: .85;
      margin-bottom: 32px;
    }

    .btn-start {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background: var(--white);
      color: var(--blue);
      border: none;
      border-radius: 8px;
      padding: 14px 24px;
      font-size: 15px;
      font-weight: 700;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: transform .15s;
    }
    .btn-start:hover { transform: translateY(-2px); }

    .services-grid {
      flex: 1.4;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 16px;
    }

    .service-card {
      background: var(--white);
      border-radius: 16px;
      padding: 24px;
    }

    .service-card .icon {
      width: 48px;
      height: 48px;
      margin-bottom: 14px;
    }

    .service-card h3 {
      font-size: 16px;
      font-weight: 700;
      margin-bottom: 8px;
      color: var(--text);
    }

    .service-card p {
      font-size: 13px;
      line-height: 1.6;
      color: var(--muted);
    }

    /* ── FOOTER ── */
    footer {
      padding: 32px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-top: 1px solid var(--border);
    }

    .footer-left {
      display: flex;
      flex-direction: column;
      gap: 6px;
    }

    .footer-left img { height: 36px; }

    .footer-left p {
      font-size: 12px;
      color: var(--muted);
    }

    .footer-links {
      display: flex;
      gap: 32px;
      list-style: none;
    }

    .footer-links a {
      text-decoration: none;
      font-size: 14px;
      color: var(--muted);
      font-weight: 500;
      transition: color .2s;
    }
    .footer-links a:hover { color: var(--blue); }

    .footer-icons {
      display: flex;
      gap: 12px;
    }

    .footer-icon-btn {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      border: 1.5px solid var(--border);
      background: transparent;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--muted);
      transition: border-color .2s, color .2s;
    }
    .footer-icon-btn:hover { border-color: var(--blue); color: var(--blue); }

    /* ── ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    .hero-badge  { animation: fadeUp .5s ease both; }
    .hero-title  { animation: fadeUp .5s .1s ease both; }
    .hero-desc   { animation: fadeUp .5s .2s ease both; }
    .hero-actions{ animation: fadeUp .5s .3s ease both; }
    .hero-image  { animation: fadeUp .6s .15s ease both; }

  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav>
    <a class="nav-logo" href="index.php">
      <!-- Replace src with real logo path -->
      <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="44" height="44" rx="8" fill="#2341C8"/>
        <text x="50%" y="58%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="11" font-family="Manrope" font-weight="800">USTHB</text>
      </svg>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="active">Accueil</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
    <a href="login.php" class="btn-connect">Se connecter</a>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-text">
      <div class="hero-badge">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Academic Platform
      </div>
      <h1 class="hero-title">USTHB<br>EDUCATION</h1>
      <p class="hero-desc">
        Gérez efficacement les étudiants, les notes et les performances grâce à une solution centralisée, conçue pour simplifier les tâches administratives et améliorer la communication entre enseignants et étudiants. Accédez à vos données académiques en temps réel, en toute sécurité.
      </p>
      <div class="hero-actions">
        <a href="login.php" class="btn-primary">Se connecter</a>
        <a href="#services" class="btn-outline">Découvrir plus</a>
      </div>
    </div>
    <div class="hero-image">
      <!-- SVG Illustration matching the Figma design -->
      <svg width="480" height="380" viewBox="0 0 480 380" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Background shapes -->
        <rect x="60" y="40" width="320" height="240" rx="20" fill="#EEF1FC"/>
        <rect x="20" y="160" width="80" height="100" rx="12" fill="#2341C8" opacity="0.15"/>
        <rect x="360" y="60" width="80" height="80" rx="12" fill="#2341C8" opacity="0.1"/>

        <!-- Screen/board element -->
        <rect x="110" y="60" width="200" height="140" rx="12" fill="white" stroke="#CBD5E1" stroke-width="1.5"/>
        <rect x="125" y="80" width="160" height="10" rx="5" fill="#E2E8F0"/>
        <rect x="125" y="98" width="120" height="10" rx="5" fill="#E2E8F0"/>
        <rect x="125" y="116" width="140" height="10" rx="5" fill="#E2E8F0"/>
        <rect x="125" y="134" width="100" height="10" rx="5" fill="#2341C8" opacity="0.3"/>
        <rect x="125" y="152" width="80" height="28" rx="6" fill="#2341C8"/>
        <text x="165" y="171" fill="white" font-size="10" font-family="Manrope" font-weight="600">Accéder</text>

        <!-- Hexagon accent -->
        <polygon points="370,180 395,165 420,180 420,210 395,225 370,210" fill="#2341C8" opacity="0.2"/>
        <polygon points="370,183 393,169 416,183 416,207 393,221 370,207" fill="#2341C8" opacity="0.4"/>

        <!-- Person 1 (left, standing) -->
        <circle cx="120" cy="210" r="22" fill="#1a2f9e"/>
        <rect x="100" y="232" width="40" height="60" rx="10" fill="#2341C8"/>
        <rect x="90" y="240" width="18" height="40" rx="9" fill="#2341C8"/>
        <rect x="112" y="288" width="16" height="30" rx="8" fill="#1a2f9e"/>

        <!-- Person 2 (center) -->
        <circle cx="240" cy="230" r="20" fill="#374151"/>
        <rect x="222" y="250" width="36" height="55" rx="10" fill="#4B5563"/>
        <rect x="255" y="258" width="16" height="38" rx="8" fill="#4B5563"/>
        <rect x="226" y="300" width="14" height="28" rx="7" fill="#374151"/>
        <rect x="244" y="300" width="14" height="28" rx="7" fill="#374151"/>

        <!-- Person 3 (right, sitting) -->
        <circle cx="360" cy="260" r="19" fill="#1a2f9e"/>
        <rect x="343" y="278" width="34" height="40" rx="10" fill="#2341C8"/>
        <rect x="327" y="285" width="16" height="30" rx="8" fill="#2341C8"/>
        <rect x="343" y="315" width="14" height="25" rx="7" fill="#1a2f9e"/>

        <!-- Floating elements -->
        <rect x="60" y="100" width="36" height="36" rx="8" fill="white" stroke="#CBD5E1" stroke-width="1.5"/>
        <text x="78" y="123" text-anchor="middle" font-size="16">📋</text>

        <rect x="380" y="280" width="36" height="36" rx="8" fill="white" stroke="#CBD5E1" stroke-width="1.5"/>
        <text x="398" y="303" text-anchor="middle" font-size="16">⭐</text>
      </svg>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="services" id="services">
    <div class="services-left">
      <h2>Nos Services</h2>
      <p>Une plateforme complète pour gérer efficacement les étudiants, les notes et le suivi académique au sein de l'USTHB.</p>
      <a href="login.php" class="btn-start">
        Commencer maintenant
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

    <div class="services-grid">
      <!-- Card 1 -->
      <div class="service-card">
        <svg class="icon" viewBox="0 0 48 48" fill="none">
          <rect width="48" height="48" rx="10" fill="#EEF1FC"/>
          <circle cx="24" cy="18" r="7" fill="#2341C8"/>
          <path d="M10 38c0-7.732 6.268-14 14-14s14 6.268 14 14" stroke="#2341C8" stroke-width="2.5" stroke-linecap="round"/>
        </svg>
        <h3>Gestion des utilisateurs</h3>
        <p>Centralisez la gestion des étudiants et des enseignants : ajout, modification, suppression et suivi des profils.</p>
      </div>

      <!-- Card 2 -->
      <div class="service-card">
        <svg class="icon" viewBox="0 0 48 48" fill="none">
          <rect width="48" height="48" rx="10" fill="#E8F5E9"/>
          <rect x="12" y="12" width="10" height="24" rx="3" fill="#2E7D32"/>
          <rect x="26" y="18" width="10" height="18" rx="3" fill="#4CAF50"/>
        </svg>
        <h3>Gestion des modules</h3>
        <p>Créez et organisez les modules avec leurs coefficients et affectez les enseignants responsables.</p>
      </div>

      <!-- Card 3 -->
      <div class="service-card">
        <svg class="icon" viewBox="0 0 48 48" fill="none">
          <rect width="48" height="48" rx="10" fill="#FFF3E0"/>
          <rect x="10" y="14" width="28" height="20" rx="4" fill="#E65100" opacity=".8"/>
          <rect x="16" y="20" width="6" height="8" rx="2" fill="white"/>
          <rect x="26" y="20" width="6" height="8" rx="2" fill="white"/>
        </svg>
        <h3>Gestion des notes</h3>
        <p>Saisissez et modifiez les notes, avec calcul automatique des moyennes et suivi des performances.</p>
      </div>

      <!-- Card 4 -->
      <div class="service-card">
        <svg class="icon" viewBox="0 0 48 48" fill="none">
          <rect width="48" height="48" rx="10" fill="#EEF1FC"/>
          <rect x="12" y="10" width="24" height="28" rx="4" fill="#2341C8" opacity=".15"/>
          <rect x="16" y="16" width="16" height="2.5" rx="1.25" fill="#2341C8"/>
          <rect x="16" y="22" width="12" height="2.5" rx="1.25" fill="#2341C8"/>
          <rect x="16" y="28" width="14" height="2.5" rx="1.25" fill="#2341C8"/>
        </svg>
        <h3>Suivi académique &amp; relevés</h3>
        <p>Visualisez les statistiques globales et générez les relevés de notes pour chaque étudiant.</p>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="contact">
    <div class="footer-left">
      <svg width="80" height="32" viewBox="0 0 80 32" fill="none">
        <rect width="80" height="32" rx="6" fill="#2341C8"/>
        <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="9" font-family="Manrope" font-weight="800">USTHB</text>
      </svg>
      <p>© 2026 All Rights Belongs To Usthb Education.</p>
    </div>

    <ul class="footer-links">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="#services">Services</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <div class="footer-icons">
      <button class="footer-icon-btn" title="Langue">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
      </button>
      <button class="footer-icon-btn" title="Partager">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"/><circle cx="6" cy="12" r="3"/><circle cx="18" cy="19" r="3"/><path d="m8.59 13.51 6.83 3.98M15.41 6.51l-6.82 3.98"/></svg>
      </button>
    </div>
  </footer>

</body>
</html>