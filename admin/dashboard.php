<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Dashboard Admin</title>
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
      --border:    #E5E7EB;
      --bg:        #F3F4F6;
      --white:     #ffffff;
    }
    body {
      font-family: 'Manrope', sans-serif;
      background: var(--bg);
      display: flex;
      min-height: 100vh;
    }

    /* ── SIDEBAR ── */
    .sidebar {
      width: 240px;
      background: var(--white);
      border-right: 1px solid var(--border);
      display: flex;
      flex-direction: column;
      padding: 28px 16px;
      position: fixed;
      top: 0; left: 0;
      height: 100vh;
      gap: 6px;
    }
    .sidebar-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 0 10px;
      margin-bottom: 32px;
      text-decoration: none;
    }
    .sidebar-logo svg { flex-shrink: 0; }
    .sidebar-logo span {
      font-size: 14px;
      font-weight: 800;
      color: var(--blue);
      line-height: 1.2;
    }
    .nav-item {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 11px 14px;
      border-radius: 10px;
      text-decoration: none;
      color: var(--muted);
      font-size: 14px;
      font-weight: 600;
      transition: all .2s;
    }
    .nav-item:hover { background: var(--bg); color: var(--text); }
    .nav-item.active { background: var(--blue); color: var(--white); }
    .nav-item svg { width: 18px; height: 18px; flex-shrink: 0; }

    /* ── MAIN ── */
    .main {
      margin-left: 240px;
      flex: 1;
      padding: 48px 48px;
    }
    .page-title { font-size: 32px; font-weight: 800; color: var(--text); margin-bottom: 6px; }
    .page-sub { font-size: 14px; color: var(--muted); margin-bottom: 36px; }

    /* ── STAT CARDS ── */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 28px;
    }
    .stat-card {
      background: var(--white);
      border-radius: 16px;
      padding: 24px 28px;
      border: 1px solid var(--border);
    }
    .stat-label {
      font-size: 11px;
      font-weight: 700;
      color: var(--muted);
      letter-spacing: .08em;
      text-transform: uppercase;
      display: flex;
      align-items: center;
      gap: 8px;
      margin-bottom: 12px;
    }
    .stat-label svg { width: 18px; height: 18px; color: var(--muted); }
    .stat-value {
      font-size: 36px;
      font-weight: 800;
      color: var(--text);
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .stat-badge {
      font-size: 12px;
      font-weight: 700;
      padding: 4px 10px;
      border-radius: 100px;
      border: 1.5px solid #22C55E;
      color: #22C55E;
    }
    .stat-badge.stable { border-color: #6B7280; color: #6B7280; }

    /* ── BOTTOM ROW ── */
    .bottom-row {
      display: grid;
      grid-template-columns: 1fr 1.4fr;
      gap: 20px;
    }

    /* Performance card */
    .perf-card {
      background: var(--blue);
      border-radius: 16px;
      padding: 32px 28px;
      color: var(--white);
    }
    .perf-card h3 {
      font-size: 18px;
      font-weight: 800;
      margin-bottom: 12px;
      line-height: 1.3;
    }
    .perf-card p {
      font-size: 13px;
      opacity: .85;
      line-height: 1.6;
      margin-bottom: 28px;
    }
    .perf-bar-label {
      display: flex;
      justify-content: space-between;
      font-size: 11px;
      font-weight: 700;
      letter-spacing: .08em;
      text-transform: uppercase;
      margin-bottom: 6px;
      opacity: .9;
    }
    .perf-bar-track {
      background: rgba(255,255,255,0.25);
      border-radius: 100px;
      height: 6px;
      margin-bottom: 18px;
      overflow: hidden;
    }
    .perf-bar-fill {
      height: 100%;
      background: var(--white);
      border-radius: 100px;
    }

    /* Chart card */
    .chart-card {
      background: var(--white);
      border-radius: 16px;
      padding: 28px;
      border: 1px solid var(--border);
    }
    .chart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 24px;
    }
    .chart-header h3 { font-size: 16px; font-weight: 700; color: var(--text); }
    .chart-filter {
      font-size: 13px;
      color: var(--muted);
      font-weight: 600;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 4px;
    }
    .chart-bars {
      display: flex;
      align-items: flex-end;
      gap: 12px;
      height: 160px;
      padding-bottom: 28px;
      position: relative;
      border-bottom: 1px solid var(--border);
    }
    .bar-wrap {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 8px;
      height: 100%;
      justify-content: flex-end;
    }
    .bar {
      width: 100%;
      border-radius: 6px 6px 0 0;
      background: var(--blue-light);
      transition: background .2s;
    }
    .bar.active { background: var(--blue); }
    .bar-wrap:hover .bar { background: var(--blue); }
    .bar-month {
      font-size: 11px;
      color: var(--muted);
      font-weight: 600;
      margin-top: 8px;
    }

    /* Logout */
    .nav-logout {
      margin-top: auto;
      color: #EF4444 !important;
    }
    .nav-logout:hover { background: #FEE2E2 !important; color: #EF4444 !important; }
  </style>
</head>
<body>

  <!-- SIDEBAR -->
  <aside class="sidebar">
    <a href="dashboard.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <rect width="36" height="36" rx="8" fill="#2341C8"/>
        <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text>
      </svg>
      <span>USTHB<br>EDUCATION</span>
    </a>

    <a href="dashboard.php" class="nav-item active">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
      Dashboard
    </a>
    <a href="etudiants.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
      Étudiants
    </a>
    <a href="enseignants.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
      Enseignants
    </a>
    <a href="modules.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
      Modules
    </a>
    <a href="notes.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
      Notes
    </a>
    <a href="inscriptions.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
      Inscriptions
    </a>

    <a href="../login.php" class="nav-item nav-logout">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>
      Déconnexion
    </a>
  </aside>

  <!-- MAIN CONTENT -->
  <main class="main">
    <h1 class="page-title">Bonjour, Administrateur</h1>
    <p class="page-sub">Aperçu global de l'activité académique pour le semestre en cours.</p>

    <!-- STAT CARDS -->
    <div class="stats-row">
      <div class="stat-card">
        <div class="stat-label">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>
          Nombre d'étudiants
        </div>
        <div class="stat-value">
          24,512
          <span class="stat-badge">+4.2%</span>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-label">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          Nombre de modules
        </div>
        <div class="stat-value">
          842
          <span class="stat-badge stable">Stable</span>
        </div>
      </div>
      <div class="stat-card">
        <div class="stat-label">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
          Nombre d'enseignants
        </div>
        <div class="stat-value">
          1,240
          <span class="stat-badge">+12 Recrues</span>
        </div>
      </div>
    </div>

    <!-- BOTTOM ROW -->
    <div class="bottom-row">

      <!-- Performance card -->
      <div class="perf-card">
        <h3>Performance Globale des etudiants lors de ce semestre</h3>
        <p>Le taux de réussite moyen a augmenté de 5.4% par rapport au semestre précédent, reflétant une amélioration globale des performances académiques des étudiants.</p>
        <div class="perf-bar-label"><span>LICENCE</span><span>78%</span></div>
        <div class="perf-bar-track"><div class="perf-bar-fill" style="width:78%"></div></div>
        <div class="perf-bar-label"><span>MASTER</span><span>92%</span></div>
        <div class="perf-bar-track"><div class="perf-bar-fill" style="width:92%"></div></div>
      </div>

      <!-- Chart card -->
      <div class="chart-card">
        <div class="chart-header">
          <h3>Évolution des Inscriptions</h3>
          <span class="chart-filter">Derniers 6 mois ▾</span>
        </div>
        <div class="chart-bars">
          <div class="bar-wrap"><div class="bar" style="height:55%"></div><span class="bar-month">Jan</span></div>
          <div class="bar-wrap"><div class="bar" style="height:65%"></div><span class="bar-month">Fév</span></div>
          <div class="bar-wrap"><div class="bar" style="height:60%"></div><span class="bar-month">Mar</span></div>
          <div class="bar-wrap"><div class="bar" style="height:78%"></div><span class="bar-month">Avr</span></div>
          <div class="bar-wrap"><div class="bar active" style="height:95%"></div><span class="bar-month">Mai</span></div>
          <div class="bar-wrap"><div class="bar" style="height:80%"></div><span class="bar-month">Juin</span></div>
        </div>
      </div>

    </div>
  </main>

</body>
</html>