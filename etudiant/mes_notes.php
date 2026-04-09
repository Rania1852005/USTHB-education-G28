<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Mes Notes</title>
  <link rel="icon" type="image/png" href="../assets/img/logo_usthb.png">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --purple:#7C3AED; --purple-light:#F5F3FF; --text:#111827; --muted:#6B7280; --border:#E5E7EB; --bg:#F9FAFB; --white:#ffffff; --green:#22C55E; }
    body { font-family: 'Manrope', sans-serif; background: var(--bg); display: flex; min-height: 100vh; }
    .sidebar { width:220px; background:var(--bg); display:flex; flex-direction:column; padding:28px 16px; position:fixed; top:0; left:0; height:100vh; gap:6px; }
    .sidebar-logo { display:flex; align-items:center; gap:10px; padding:0 10px; margin-bottom:32px; text-decoration:none; }
    .sidebar-logo span { font-size:14px; font-weight:800; color:#2341C8; line-height:1.2; }
    .nav-item { display:flex; align-items:center; gap:12px; padding:11px 14px; border-radius:10px; text-decoration:none; color:var(--muted); font-size:14px; font-weight:600; transition:all .2s; }
    .nav-item:hover { background:#EDE9FE; color:var(--purple); }
    .nav-item.active { background:var(--purple); color:var(--white); }
    .nav-item svg { width:18px; height:18px; flex-shrink:0; }
    .main { margin-left:220px; flex:1; padding:48px; }
    .page-title { font-size:28px; font-weight:800; color:var(--text); margin-bottom:6px; }
    .page-sub { font-size:14px; color:var(--muted); margin-bottom:32px; }
    .section-header { display:flex; justify-content:space-between; align-items:center; margin-bottom:16px; }
    .section-header h2 { font-size:18px; font-weight:700; color:var(--text); }
    .btn-download { background:var(--purple); color:var(--white); border:none; border-radius:8px; padding:10px 20px; font-size:13px; font-weight:700; font-family:'Manrope',sans-serif; cursor:pointer; transition:background .2s; }
    .btn-download:hover { background:#6D28D9; }
    .table-wrap { background:var(--white); border-radius:16px; border:1px solid var(--border); overflow:hidden; margin-bottom:0; }
    table { width:100%; border-collapse:collapse; }
    thead tr { background:#F9FAFB; }
    th { padding:14px 16px; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; text-align:left; }
    td { padding:14px 16px; font-size:14px; color:var(--text); border-top:1px solid var(--border); font-weight:500; }
    .td-green { color:var(--green); font-weight:700; }
    .bottom-bar { display:flex; gap:12px; padding:16px; border-top:1px solid var(--border); }
    .btn-credits { flex:1; background:var(--white); color:var(--text); border:1.5px solid var(--border); border-radius:8px; padding:13px; font-size:14px; font-weight:700; font-family:'Manrope',sans-serif; cursor:pointer; }
    .btn-moy { flex:2; background:var(--white); color:var(--green); border:1.5px solid var(--green); border-radius:8px; padding:13px; font-size:15px; font-weight:800; font-family:'Manrope',sans-serif; cursor:pointer; }
    .historique { margin-top:40px; }
    .historique h2 { font-size:22px; font-weight:800; color:var(--text); margin-bottom:8px; }
    .historique p { font-size:14px; color:var(--muted); margin-bottom:12px; }
    .search-bar { display:flex; align-items:center; gap:10px; background:var(--white); border:1.5px solid var(--border); border-radius:100px; padding:12px 20px; margin-bottom:20px; }
    .search-bar input { border:none; outline:none; font-size:14px; font-family:'Manrope',sans-serif; color:var(--text); width:100%; background:transparent; }
    .search-bar input::placeholder { color:#9CA3AF; }
  </style>
</head>
<body>
  <aside class="sidebar">
    <a href="informations.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect width="36" height="36" rx="8" fill="#2341C8"/><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text></svg>
      <span>USTHB<br>EDUCATION</span>
    </a>
    <a href="mes_notes.php" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Mes notes</a>
    <a href="informations.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>informations</a>
  </aside>
  <main class="main">
    <h1 class="page-title">Bonjour, étudiant</h1>
    <p class="page-sub">Aperçu global de l'activité académique pour le semestre en cours.</p>

    <div class="section-header">
      <h2>Notes du semestre :</h2>
      <button class="btn-download">Télécharger relevé de notes</button>
    </div>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Module</th><th>Examen</th><th>Note TD</th><th>Note TP</th><th>Module/20</th></tr></thead>
        <tbody>
          <tr><td>INF101</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          <tr><td>INF102</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          <tr><td>INF103</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          <tr><td>INF104</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          <tr><td>INF105</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          <tr><td>INF106</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
        </tbody>
      </table>
      <div class="bottom-bar">
        <button class="btn-credits">30 credits</button>
        <button class="btn-moy">12/20</button>
      </div>
    </div>

    <div class="historique">
      <h2>Historique des Notes</h2>
      <p>Selectionne ton semestre</p>
      <div class="search-bar">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
        <input type="text" placeholder="Rechercher ton étudiant"/>
      </div>
      <div class="section-header">
        <h2>Notes du semestre :</h2>
        <button class="btn-download">Télécharger relevé de notes</button>
      </div>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Module</th><th>Examen</th><th>Note TD</th><th>Note TP</th><th>Module/20</th></tr></thead>
          <tbody>
            <tr><td>INF101</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
            <tr><td>INF102</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
            <tr><td>INF103</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
            <tr><td>INF104</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
            <tr><td>INF105</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
            <tr><td>INF106</td><td>12.00</td><td>12.00</td><td>12.00</td><td class="td-green">12/20</td></tr>
          </tbody>
        </table>
        <div class="bottom-bar">
          <button class="btn-credits">30 credits</button>
          <button class="btn-moy">12/20</button>
        </div>
      </div>
    </div>
  </main>
</body>
</html>