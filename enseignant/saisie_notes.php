<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Saisie des Notes</title>
  <link rel="icon" type="image/png" href="../assets/img/logo_usthb.png">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --orange:#F97316; --text:#111827; --muted:#6B7280; --border:#E5E7EB; --bg:#F3F4F6; --white:#ffffff; }
    body { font-family: 'Manrope', sans-serif; background: var(--bg); display: flex; min-height: 100vh; }
    .sidebar { width:240px; background:var(--white); border-right:1px solid var(--border); display:flex; flex-direction:column; padding:28px 16px; position:fixed; top:0; left:0; height:100vh; gap:6px; }
    .sidebar-logo { display:flex; align-items:center; gap:10px; padding:0 10px; margin-bottom:32px; text-decoration:none; }
    .sidebar-logo span { font-size:14px; font-weight:800; color:#2341C8; line-height:1.2; }
    .nav-item { display:flex; align-items:center; gap:12px; padding:11px 14px; border-radius:10px; text-decoration:none; color:var(--muted); font-size:14px; font-weight:600; transition:all .2s; }
    .nav-item:hover { background:var(--bg); color:var(--text); }
    .nav-item.active { background:var(--orange); color:var(--white); }
    .nav-item svg { width:18px; height:18px; flex-shrink:0; }
    .main { margin-left:240px; flex:1; padding:48px; }
    .page-title { font-size:32px; font-weight:800; color:var(--text); margin-bottom:6px; }
    .page-sub { font-size:14px; color:var(--muted); margin-bottom:32px; }
    .section-label { font-size:18px; font-weight:700; color:var(--text); margin-bottom:12px; }
    .search-bar { display:flex; align-items:center; gap:10px; background:var(--white); border:1.5px solid var(--border); border-radius:100px; padding:12px 20px; margin-bottom:28px; }
    .search-bar input { border:none; outline:none; font-size:14px; font-family:'Manrope',sans-serif; color:var(--text); width:100%; background:transparent; }
    .search-bar input::placeholder { color:#9CA3AF; }
    .table-label { font-size:18px; font-weight:700; color:var(--text); margin-bottom:16px; }
    .table-wrap { background:var(--white); border-radius:16px; border:1px solid var(--border); overflow:hidden; }
    table { width:100%; border-collapse:collapse; }
    thead tr { background:#F9FAFB; }
    th { padding:14px 16px; font-size:11px; font-weight:700; color:var(--muted); text-transform:uppercase; letter-spacing:.06em; text-align:left; }
    td { padding:14px 16px; font-size:14px; color:var(--text); border-top:1px solid var(--border); font-weight:500; }
    tr:hover td { background:#F9FAFB; }
    .note-select { padding:6px 10px; border:1.5px solid var(--border); border-radius:8px; font-size:13px; font-family:'Manrope',sans-serif; color:var(--text); background:var(--white); outline:none; cursor:pointer; width:90px; }
    .note-select:focus { border-color:var(--orange); }
    .moyenne-link { color:var(--orange); font-weight:700; text-decoration:underline; cursor:pointer; }
    .pagination { display:flex; align-items:center; justify-content:center; gap:6px; padding:20px; }
    .page-btn { width:34px; height:34px; border-radius:8px; border:1.5px solid var(--border); background:var(--white); font-size:13px; font-weight:600; font-family:'Manrope',sans-serif; color:var(--muted); cursor:pointer; display:flex; align-items:center; justify-content:center; transition:all .2s; text-decoration:none; }
    .page-btn.active { background:var(--orange); color:var(--white); border-color:var(--orange); }
    .page-btn:hover:not(.active) { border-color:var(--orange); color:var(--orange); }
    .page-dots { color:var(--muted); font-size:13px; }
  </style>
</head>
<body>
  <aside class="sidebar">
    <a href="dashboard.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect width="36" height="36" rx="8" fill="#2341C8"/><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text></svg>
      <span>USTHB<br>EDUCATION</span>
    </a>
    <a href="dashboard.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>Mes modules</a>
    <a href="saisie_notes.php" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Saisie des Notes</a>
    <a href="liste_etudiants.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>liste des étudiants</a>
  </aside>
  <main class="main">
    <h1 class="page-title">Gestion des Notes</h1>
    <p class="page-sub">Gérez les informations des étudiants : ajout, modification, suppression et consultation des profils en toute simplicité.</p>
    <p class="section-label">Selectionne ton Module</p>
    <div class="search-bar">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
      <input type="text" placeholder="Rechercher ton module"/>
    </div>
    <p class="table-label">Liste des etudiants du module :</p>
    <div class="table-wrap">
      <table>
        <thead><tr><th>Etudiants</th><th>Examen</th><th>Note TD</th><th>Note TP</th><th>Module/20</th></tr></thead>
        <tbody>
          <tr><td>INF101</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
          <tr><td>INF102</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
          <tr><td>INF103</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
          <tr><td>INF104</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
          <tr><td>INF105</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
          <tr><td>INF106</td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><select class="note-select"><option>00.00</option><option>10.00</option><option>12.00</option><option>14.00</option><option>16.00</option><option>18.00</option><option>20.00</option></select></td><td><span class="moyenne-link">Moyenne</span></td></tr>
        </tbody>
      </table>
      <div class="pagination">
        <a href="#" class="page-btn">←</a>
        <a href="#" class="page-btn active">1</a>
        <a href="#" class="page-btn">2</a>
        <a href="#" class="page-btn">3</a>
        <span class="page-dots">...</span>
        <a href="#" class="page-btn">→</a>
      </div>
    </div>
  </main>
</body>
</html>
