<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Étudiant</title>
  <link rel="icon" type="image/png" href="../assets/img/logo_usthb.png">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    :root { --purple:#7C3AED; --purple-light:#F5F3FF; --text:#111827; --muted:#6B7280; --border:#E5E7EB; --bg:#F9FAFB; --white:#ffffff; }
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
    .page-sub { font-size:14px; color:var(--muted); margin-bottom:36px; }
    .form-group { margin-bottom:20px; max-width:680px; }
    .form-group label { display:block; font-size:13px; font-weight:600; color:var(--muted); margin-bottom:6px; }
    .form-group input { width:100%; padding:13px 16px; border:1.5px solid #DDD6FE; border-radius:8px; font-size:14px; font-family:'Manrope',sans-serif; color:var(--text); background:var(--white); outline:none; }
    .date-row { display:grid; grid-template-columns:1fr 1fr 1fr; gap:12px; }
  </style>
</head>
<body>
  <aside class="sidebar">
    <a href="informations.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none"><rect width="36" height="36" rx="8" fill="#2341C8"/><text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text></svg>
      <span>USTHB<br>EDUCATION</span>
    </a>
    <a href="mes_notes.php" class="nav-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>Mes notes</a>
    <a href="informations.php" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>informations</a>
  </aside>
  <main class="main">
    <h1 class="page-title">Bonjour, étudiant</h1>
    <p class="page-sub">Aperçu global de Vos informations.</p>
    <div class="form-group"><label>Matricule</label><input type="text" value="232331601509" readonly/></div>
    <div class="form-group"><label>Nom</label><input type="text" value="Hamiti" readonly/></div>
    <div class="form-group"><label>Prénom</label><input type="text" value="Sirine" readonly/></div>
    <div class="form-group">
      <label>Date de naissance</label>
      <div class="date-row">
        <input type="text" value="26" readonly/>
        <input type="text" value="12" readonly/>
        <input type="text" value="2004" readonly/>
      </div>
    </div>
    <div class="form-group"><label>Email</label><input type="text" value="sirinehm247@gmail.com" readonly/></div>
    <div class="form-group"><label>Niveau</label><input type="text" value="L2 ISIL" readonly/></div>
  </main>
</body>
</html>