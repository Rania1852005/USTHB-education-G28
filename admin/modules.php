<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Gestion des Modules</title>
  <link rel="icon" type="image/png" href="../assets/img/logo_usthb.png">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --blue:#2341C8; --blue-dark:#1a2f9e; --blue-light:#EEF1FC; --text:#111827; --muted:#6B7280; --border:#E5E7EB; --bg:#F3F4F6; --white:#ffffff; --red:#EF4444; }
    body { font-family: 'Manrope', sans-serif; background: var(--bg); display: flex; min-height: 100vh; }
    .sidebar { width:240px; background:var(--white); border-right:1px solid var(--border); display:flex; flex-direction:column; padding:28px 16px; position:fixed; top:0; left:0; height:100vh; gap:6px; }
    .sidebar-logo { display:flex; align-items:center; gap:10px; padding:0 10px; margin-bottom:32px; text-decoration:none; }
    .sidebar-logo span { font-size:14px; font-weight:800; color:var(--blue); line-height:1.2; }
    .nav-item { display:flex; align-items:center; gap:12px; padding:11px 14px; border-radius:10px; text-decoration:none; color:var(--muted); font-size:14px; font-weight:600; transition:all .2s; }
    .nav-item:hover { background:var(--bg); color:var(--text); }
    .nav-item.active { background:var(--blue); color:var(--white); }
    .nav-item svg { width:18px; height:18px; flex-shrink:0; }
    .nav-logout { margin-top:auto; color:#EF4444 !important; }
    .nav-logout:hover { background:#FEE2E2 !important; color:#EF4444 !important; }
    .main { margin-left:240px; flex:1; padding:48px; }
    .page-title { font-size:32px; font-weight:800; color:var(--text); margin-bottom:6px; }
    .page-sub { font-size:14px; color:var(--muted); margin-bottom:32px; }
    .section-label { font-size:18px; font-weight:700; color:var(--text); margin-bottom:12px; }
    .search-bar { display:flex; align-items:center; gap:10px; background:var(--white); border:1.5px solid var(--border); border-radius:100px; padding:12px 20px; margin-bottom:20px; }
    .search-bar input { border:none; outline:none; font-size:14px; font-family:'Manrope',sans-serif; color:var(--text); width:100%; background:transparent; }
    .search-bar input::placeholder { color:#9CA3AF; }
    .actions-row { display:flex; gap:12px; margin-bottom:28px; }
    .btn-add { flex:1; background:var(--blue-dark); color:var(--white); border:none; border-radius:10px; padding:14px; font-size:15px; font-weight:700; font-family:'Manrope',sans-serif; cursor:pointer; text-decoration:none; display:flex; align-items:center; justify-content:center; gap:8px; transition:background .2s,transform .15s; }
    .btn-add:hover { background:var(--blue); transform:translateY(-1px); }
    .btn-edit { background:var(--white); color:var(--blue-dark); border:1.5px solid var(--border); border-radius:10px; padding:14px 24px; font-size:14px; font-weight:700; font-family:'Manrope',sans-serif; cursor:pointer; text-decoration:none; display:flex; align-items:center; gap:8px; transition:all .2s; }
    .btn-edit:hover { border-color:var(--blue); background:var(--blue-light); }
    .btn-delete { background:var(--white); border:1.5px solid #FECACA; border-radius:10px; padding:14px 16px; cursor:pointer; display:flex; align-items:center; justify-content:center; transition:all .2s; }
    .btn-delete:hover { background:#FEE2E2; border-color:var(--red); }
    .btn-delete svg { color:var(--red); width:18px; height:18px; }
    .table-label { font-size:18px; font-weight:700; color:var(--text); margin-bottom:16px; }
    .table-wrap { background:var(--white); border-radius:16px; border:1px solid var(--border); overflow:hidden; }
    table { width:100%; border-collapse:collapse; }
    thead tr { background:#F9FAFB; }
    th { padding:14px 16px; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; text-align:left; }
    td { padding:16px 16px; font-size:14px; color:var(--text); border-top:1px solid var(--border); font-weight:500; }
    tr:hover td { background:#F9FAFB; }
    .td-name { font-weight:700; }
    .pagination { display:flex; align-items:center; justify-content:center; gap:6px; padding:20px; }
    .page-btn { width:34px; height:34px; border-radius:8px; border:1.5px solid var(--border); background:var(--white); font-size:13px; font-weight:600; font-family:'Manrope',sans-serif; color:var(--muted); cursor:pointer; display:flex; align-items:center; justify-content:center; transition:all .2s; text-decoration:none; }
    .page-btn.active { background:var(--blue); color:var(--white); border-color:var(--blue); }
    .page-btn:hover:not(.active) { border-color:var(--blue); color:var(--blue); }
    .page-dots { color:var(--muted); font-size:13px; font-weight:600; }
  </style>
</head>
<body>
  <aside class="sidebar">
    <a href="dashboard.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect width="36" height="36" rx="8" fill="#2341C8"/><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text></svg>
      <span>USTHB<br>EDUCATION</span>
    </a>
    <a href="dashboard.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Dashboard</a>
    <a href="etudiants.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>Étudiants</a>
    <a href="enseignants.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>Enseignants</a>
    <a href="modules.php" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>Modules</a>
    <a href="notes.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Notes</a>
    <a href="inscriptions.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>Inscriptions</a>
    <a href="../login.php" class="nav-item nav-logout"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" y1="12" x2="9" y2="12"/></svg>Déconnexion</a>
  </aside>
  <main class="main">
    <h1 class="page-title">Gestion des Modules</h1>
    <p class="page-sub">Gérez les informations des modules : ajout, modification, suppression et consultation.</p>
    <p class="section-label">Recherche ton Module</p>
    <div class="search-bar">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input type="text" placeholder="Rechercher Modules" id="searchInput" onkeyup="searchTable()"/>
    </div>
    <div class="actions-row">
      <a href="ajouter_module.php" class="btn-add">+ &nbsp; Ajouter Modules</a>
      <a href="modifier_module.php" class="btn-edit">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"/><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"/></svg>
        Modifier Modules
      </a>
      <button class="btn-delete"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6M14 11v6"/><path d="M9 6V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2"/></svg></button>
    </div>
    <p class="table-label">Liste des Modules :</p>
    <div class="table-wrap">
      <table id="modulesTable">
        <thead><tr><th>Code</th><th>Intitulé</th><th>Coefficient</th><th>Crédit</th><th>Type</th><th>Enseignant</th></tr></thead>
        <tbody>
          <tr><td>INF101</td><td class="td-name">Programation Web</td><td>3</td><td>4</td><td>Cours + TP</td><td>Dr. Laachemi</td></tr>
          <tr><td>INF102</td><td class="td-name">Génie Logiciel</td><td>3</td><td>5</td><td>Cours + TD + TP</td><td>Dr. Meziane</td></tr>
          <tr><td>INF103</td><td class="td-name">Base de données</td><td>3</td><td>6</td><td>Cours + TD + TP</td><td>Dr. Khelil</td></tr>
          <tr><td>INF104</td><td class="td-name">Programmation Web</td><td>3</td><td>5</td><td>Cours + TP</td><td>Dr. Benali</td></tr>
          <tr><td>INF105</td><td class="td-name">Systèmes d'exploitation</td><td>3</td><td>4</td><td>Cours + TD + TP</td><td>Dr. Guebli</td></tr>
          <tr><td>INF106</td><td class="td-name">Architecture des ordinateurs</td><td>3</td><td>5</td><td>Cours + TD + TP</td><td>Dr. Got</td></tr>
        </tbody>
      </table>
      <div class="pagination">
        <a href="#" class="page-btn">←</a>
        <a href="#" class="page-btn active">1</a>
        <a href="#" class="page-btn">2</a>
        <a href="#" class="page-btn">3</a>
        <span class="page-dots">...</span>
        <a href="#" class="page-btn">67</a>
        <a href="#" class="page-btn">68</a>
        <a href="#" class="page-btn">→</a>
      </div>
    </div>
  </main>
  <script>
    function searchTable() {
      const input = document.getElementById('searchInput').value.toLowerCase();
      document.querySelectorAll('#modulesTable tbody tr').forEach(row => {
        row.style.display = row.textContent.toLowerCase().includes(input) ? '' : 'none';
      });
    }
  </script>
</body>
</html>
