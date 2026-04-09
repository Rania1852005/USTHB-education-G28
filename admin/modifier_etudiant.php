<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>USTHB Education — Modifier Étudiant</title>
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
    .nav-logout { margin-top: auto; color: #EF4444 !important; }
    .nav-logout:hover { background: #FEE2E2 !important; color: #EF4444 !important; }
    .main {
      margin-left: 240px;
      flex: 1;
      padding: 48px;
    }
    .page-title { font-size: 32px; font-weight: 800; color: var(--text); margin-bottom: 6px; }
    .page-sub { font-size: 14px; color: var(--muted); margin-bottom: 36px; }
    .form-group {
      margin-bottom: 24px;
      max-width: 560px;
    }
    .form-group label {
      display: block;
      font-size: 14px;
      font-weight: 600;
      color: var(--text);
      margin-bottom: 8px;
    }
    .form-group input,
    .form-group select {
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
      appearance: none;
    }
    .form-group input::placeholder { color: #9CA3AF; }
    .form-group input:focus,
    .form-group select:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(35,65,200,0.1);
    }
    .date-row {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 12px;
    }
    .select-wrap { position: relative; }
    .select-wrap::after {
      content: '';
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      width: 0; height: 0;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-top: 6px solid var(--muted);
      pointer-events: none;
    }
    .btn-row {
      display: flex;
      gap: 16px;
      max-width: 560px;
      margin-top: 8px;
    }
    .btn-submit {
      flex: 1;
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
    }
    .btn-submit:hover { background: var(--blue); transform: translateY(-1px); }
    .btn-cancel {
      flex: 1;
      background: var(--white);
      color: var(--blue-dark);
      border: 2px solid var(--blue-dark);
      border-radius: 8px;
      padding: 15px;
      font-size: 15px;
      font-weight: 700;
      font-family: 'Manrope', sans-serif;
      cursor: pointer;
      text-decoration: none;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all .2s;
    }
    .btn-cancel:hover { background: var(--blue-light); }
  </style>
</head>
<body>

  <aside class="sidebar">
    <a href="dashboard.php" class="sidebar-logo">
      <svg width="36" height="36" viewBox="0 0 36 36" fill="none">
        <rect width="36" height="36" rx="8" fill="#2341C8"/>
        <text x="50%" y="55%" dominant-baseline="middle" text-anchor="middle" fill="white" font-size="8" font-family="Manrope" font-weight="800">USTHB</text>
      </svg>
      <span>USTHB<br>EDUCATION</span>
    </a>
    <a href="dashboard.php" class="nav-item">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
      Dashboard
    </a>
    <a href="etudiants.php" class="nav-item active">
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

  <main class="main">
    <h1 class="page-title">Modifier Étudiant</h1>
    <p class="page-sub">Remplissez ce formulaire pour modifier étudiant en renseignant ses informations personnelles et académiques.</p>

    <form action="modifier_etudiant.php" method="POST">

      <div class="form-group">
        <label for="matricule">Matricule</label>
        <input type="text" id="matricule" name="matricule" placeholder="Entrer Matricule" required/>
      </div>

      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrer Nom" required/>
      </div>

      <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer Prénom" required/>
      </div>

      <div class="form-group">
        <label>Date de naissance</label>
        <div class="date-row">
          <input type="text" name="jour" placeholder="DD" maxlength="2"/>
          <input type="text" name="mois" placeholder="MM" maxlength="2"/>
          <input type="text" name="annee" placeholder="YYYY" maxlength="4"/>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Entrer Email" required/>
      </div>

      <div class="form-group">
        <label for="niveau">Niveau</label>
        <div class="select-wrap">
          <select id="niveau" name="niveau" required>
            <option value="" disabled selected>Choisis Niveau</option>
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="M1">M1</option>
            <option value="M2">M2</option>
          </select>
        </div>
      </div>

      <div class="btn-row">
        <button type="submit" class="btn-submit">Enregistrer</button>
        <a href="etudiants.php" class="btn-cancel">Annuler</a>
      </div>

    </form>
  </main>

</body>
</html>