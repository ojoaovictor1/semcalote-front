<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sem Calote</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <style>
    /* ── RESET & BASE ── */
    *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

    :root {
      --bg:        #0a0a0f;
      --bg2:       #111118;
      --bg3:       #18181f;
      --bg4:       #1e1e28;
      --border:    rgba(255,255,255,0.07);
      --border2:   rgba(255,255,255,0.13);
      --accent:    #c8f135;
      --accent2:   #7effd4;
      --text:      #f0efeb;
      --muted:     rgba(240,239,235,0.45);
      --muted2:    rgba(240,239,235,0.2);
      --danger:    #ff5e5e;
      --info:      #8ab4ff;
      --sidebar-w: 230px;
      --topbar-h:  54px;
    }

    html, body {
      height: 100%;
      overflow: hidden;
    }

    body {
      font-family: 'Syne', sans-serif;
      background: var(--bg);
      color: var(--text);
      display: flex;
      height: 100vh;
    }

    /* ── SCROLLBAR ── */
    ::-webkit-scrollbar { width: 4px; height: 4px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: var(--border2); border-radius: 2px; }

    /* ──────────────────────────────────────
       SIDEBAR
    ────────────────────────────────────── */
    .sidebar {
      width: var(--sidebar-w);
      min-width: var(--sidebar-w);
      background: var(--bg2);
      border-right: 1px solid var(--border);
      display: flex;
      flex-direction: column;
      height: 100vh;
      overflow: hidden;
    }

    /* Brand */
    .brand {
      padding: 20px 18px 16px;
      border-bottom: 1px solid var(--border);
      flex-shrink: 0;
    }

    .brand-logo {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 5px;
    }

    .brand-icon {
      width: 32px;
      height: 32px;
      background: var(--accent);
      border-radius: 7px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .brand-icon svg { width: 17px; height: 17px; }

    .brand-name {
      font-size: 16px;
      font-weight: 800;
      letter-spacing: -0.4px;
    }

    .brand-name span { color: var(--accent); }

    .brand-sub {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--muted);
      letter-spacing: 0.8px;
      text-transform: uppercase;
      padding-left: 42px;
    }

    /* Section label */
    .section-label {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      text-transform: uppercase;
      letter-spacing: 1.2px;
      color: var(--muted);
      padding: 16px 18px 8px;
      flex-shrink: 0;
    }

    /* Game list */
    .game-list {
      padding: 0 10px;
      display: flex;
      flex-direction: column;
      gap: 2px;
      overflow-y: auto;
      flex: 1;
    }

    .game-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 9px 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.15s, border-color 0.15s;
      border: 1px solid transparent;
      user-select: none;
      text-decoration: none;
      color: inherit;
    }

    .game-item:hover { background: var(--bg3); border-color: var(--border); }

    .game-item.active {
      background: rgba(200,241,53,0.08);
      border-color: rgba(200,241,53,0.2);
    }

    .game-emoji {
      font-size: 17px;
      width: 26px;
      text-align: center;
      line-height: 1;
      flex-shrink: 0;
    }

    .game-info { flex: 1; min-width: 0; }

    .game-name {
      font-size: 13px;
      font-weight: 600;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    .game-item.active .game-name { color: var(--accent); }

    .game-count {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      color: var(--muted);
    }

    .game-badge {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      background: rgba(200,241,53,0.15);
      color: var(--accent);
      padding: 2px 7px;
      border-radius: 4px;
      flex-shrink: 0;
    }

    .game-add .game-name { color: var(--muted); }

    /* Sidebar footer */
    .sidebar-footer {
      padding: 14px;
      border-top: 1px solid var(--border);
      flex-shrink: 0;
    }

    .btn-new-game {
      width: 100%;
      background: var(--accent);
      color: #0a0a0f;
      border: none;
      border-radius: 8px;
      padding: 11px;
      font-family: 'Syne', sans-serif;
      font-size: 13px;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      transition: opacity 0.15s, transform 0.1s;
      letter-spacing: -0.2px;
    }

    .btn-new-game:hover { opacity: 0.88; }
    .btn-new-game:active { transform: scale(0.97); }

    /* ──────────────────────────────────────
       MAIN AREA
    ────────────────────────────────────── */
    .main {
      flex: 1;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      min-width: 0;
    }

    /* Top navigation bar */
    .topbar {
      background: var(--bg2);
      border-bottom: 1px solid var(--border);
      padding: 0 24px;
      height: var(--topbar-h);
      display: flex;
      align-items: center;
      gap: 0;
      flex-shrink: 0;
    }

    .nav-link {
      padding: 0 14px;
      height: var(--topbar-h);
      display: flex;
      align-items: center;
      font-size: 13px;
      font-weight: 600;
      color: var(--muted);
      cursor: pointer;
      border-bottom: 2px solid transparent;
      transition: color 0.15s, border-color 0.15s;
      white-space: nowrap;
      user-select: none;
    }

    .nav-link:first-child { padding-left: 0; }
    .nav-link:hover { color: var(--text); }
    .nav-link.active { color: var(--accent); border-bottom-color: var(--accent); }

    .topbar-right {
      margin-left: auto;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .balance-pill {
      display: flex;
      align-items: center;
      gap: 8px;
      background: var(--bg3);
      border: 1px solid var(--border2);
      padding: 6px 14px;
      border-radius: 20px;
    }

    .balance-label {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .balance-val {
      font-family: 'Space Mono', monospace;
      font-size: 12px;
      font-weight: 700;
    }

    .balance-val.negative { color: var(--danger); }
    .balance-val.positive { color: var(--accent2); }

    .avatar {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: rgba(200,241,53,0.12);
      border: 1px solid rgba(200,241,53,0.3);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      color: var(--accent);
      cursor: pointer;
      flex-shrink: 0;
    }

    /* ── PAGE CONTENT ── */
    .content {
      flex: 1;
      overflow-y: auto;
      padding: 26px 28px;
      display: flex;
      flex-direction: column;
      gap: 22px;
    }

    /* Page header */
    .page-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      gap: 12px;
    }

    .page-title {
      font-size: 24px;
      font-weight: 800;
      letter-spacing: -0.6px;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .page-title-emoji { font-size: 22px; }

    .page-sub {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      color: var(--muted);
      margin-top: 5px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .live-badge {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      color: var(--accent);
    }

    .dot-live {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--accent);
      display: inline-block;
      animation: pulse 1.4s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50%       { opacity: 0.25; }
    }

    /* ── STATS ── */
    .stats-row {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 10px;
    }

    .stat-card {
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 15px 17px;
      transition: border-color 0.15s;
    }

    .stat-card:hover { border-color: var(--border2); }

    .stat-label {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: 0.8px;
      margin-bottom: 7px;
    }

    .stat-val {
      font-size: 23px;
      font-weight: 800;
      letter-spacing: -1px;
    }

    .stat-val.green  { color: var(--accent); }
    .stat-val.teal   { color: var(--accent2); }
    .stat-val.red    { color: var(--danger); }

    .stat-change {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--muted);
      margin-top: 5px;
    }

    /* ── SECTION HEADER ── */
    .section-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 10px;
    }

    .section-title {
      font-size: 13px;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 9px;
    }

    .section-title::before {
      content: '';
      display: block;
      width: 3px;
      height: 14px;
      background: var(--accent);
      border-radius: 2px;
    }

    .btn-sm {
      font-family: 'Syne', sans-serif;
      font-size: 11px;
      font-weight: 600;
      padding: 5px 13px;
      border-radius: 6px;
      border: 1px solid var(--border2);
      background: transparent;
      color: var(--muted);
      cursor: pointer;
      transition: border-color 0.15s, color 0.15s;
    }

    .btn-sm:hover { border-color: var(--accent); color: var(--accent); }

    /* ── ROUNDS TABLE ── */
    .rounds-table {
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: 10px;
      overflow: hidden;
    }

    .round-row {
      display: grid;
      grid-template-columns: 32px 1fr 110px 85px 85px 90px;
      align-items: center;
      padding: 11px 18px;
      border-bottom: 1px solid var(--border);
      gap: 10px;
      cursor: pointer;
      transition: background 0.12s;
    }

    .round-row:last-child { border-bottom: none; }
    .round-row:hover:not(.header) { background: var(--bg3); }

    .round-row.header {
      background: var(--bg3);
      cursor: default;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .col-label {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--muted);
      text-transform: uppercase;
      letter-spacing: 0.8px;
    }

    .col-label.right { text-align: right; }
    .col-label.center { text-align: center; }

    .round-num {
      font-family: 'Space Mono', monospace;
      font-size: 11px;
      color: var(--muted);
    }

    .round-game { font-size: 13px; font-weight: 600; }

    .players-faces {
      display: flex;
      align-items: center;
    }

    .mini-avatar {
      width: 24px;
      height: 24px;
      border-radius: 50%;
      border: 1.5px solid var(--bg2);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 8px;
      font-weight: 700;
      margin-right: -7px;
      flex-shrink: 0;
    }

    .mini-avatar:last-child { margin-right: 0; }

    .a-green { background: rgba(126,255,212,0.18); color: var(--accent2); }
    .a-yellow { background: rgba(200,241,53,0.18); color: var(--accent); }
    .a-red    { background: rgba(255,94,94,0.18);  color: var(--danger); }
    .a-blue   { background: rgba(138,180,255,0.18); color: var(--info); }

    .round-val {
      font-family: 'Space Mono', monospace;
      font-size: 12px;
      font-weight: 700;
      text-align: right;
    }

    .round-val.green { color: var(--accent2); }
    .round-val.red   { color: var(--danger); }

    .status-pill {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      padding: 4px 9px;
      border-radius: 5px;
      text-align: center;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
    }

    .status-pill.done { background: rgba(126,255,212,0.08); color: var(--accent2); }
    .status-pill.live { background: rgba(200,241,53,0.08);  color: var(--accent); }
    .status-pill.open { background: var(--bg3); color: var(--muted); border: 1px solid var(--border); }

    /* ── BOTTOM GRID ── */
    .bottom-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    /* Players card */
    .players-card {
      background: var(--bg2);
      border: 1px solid var(--border);
      border-radius: 10px;
      padding: 16px 18px;
    }

    .player-item {
      display: flex;
      align-items: center;
      gap: 11px;
      padding: 9px 0;
      border-bottom: 1px solid var(--border);
    }

    .player-item:last-child { border-bottom: none; }

    .player-ava {
      width: 34px;
      height: 34px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 11px;
      font-weight: 700;
      flex-shrink: 0;
    }

    .player-name { font-size: 13px; font-weight: 600; flex: 1; min-width: 0; }

    .player-wins {
      font-family: 'Space Mono', monospace;
      font-size: 10px;
      color: var(--muted);
      white-space: nowrap;
    }

    .player-balance {
      font-family: 'Space Mono', monospace;
      font-size: 12px;
      font-weight: 700;
      white-space: nowrap;
    }

    /* Pix card */
    .pix-card {
      background: var(--bg2);
      border: 1px solid rgba(126,255,212,0.15);
      border-radius: 10px;
      padding: 16px 18px;
      position: relative;
      overflow: hidden;
    }

    .pix-glow {
      position: absolute;
      top: -40px;
      right: -40px;
      width: 160px;
      height: 160px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(126,255,212,0.06) 0%, transparent 70%);
      pointer-events: none;
    }

    .pix-title {
      font-family: 'Space Mono', monospace;
      font-size: 9px;
      color: var(--accent2);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 14px;
      opacity: 0.75;
    }

    .pix-debt-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 0;
      border-bottom: 1px solid rgba(126,255,212,0.07);
    }

    .pix-debt-item:last-of-type { border-bottom: none; }

    .pix-from  { font-size: 12px; font-weight: 600; }
    .pix-arrow { font-family: 'Space Mono', monospace; font-size: 9px; color: var(--muted); margin-top: 2px; }
    .pix-to    { font-size: 12px; font-weight: 600; color: var(--accent2); text-align: right; }

    .pix-val {
      font-family: 'Space Mono', monospace;
      font-size: 13px;
      font-weight: 700;
      color: var(--accent2);
      text-align: right;
    }

    .pix-btn {
      width: 100%;
      margin-top: 13px;
      background: rgba(126,255,212,0.08);
      color: var(--accent2);
      border: 1px solid rgba(126,255,212,0.22);
      border-radius: 8px;
      padding: 10px;
      font-family: 'Syne', sans-serif;
      font-size: 12px;
      font-weight: 700;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 7px;
      transition: background 0.15s;
    }

    .pix-btn:hover { background: rgba(126,255,212,0.15); }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .stats-row { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (max-width: 720px) {
      :root { --sidebar-w: 200px; }
      .bottom-row { grid-template-columns: 1fr; }
      .round-row  { grid-template-columns: 28px 1fr 80px 75px; }
      .round-row > *:nth-child(5),
      .round-row > *:nth-child(6) { display: none; }
    }

    @media (max-width: 560px) {
      .sidebar { display: none; }
      .stats-row { grid-template-columns: repeat(2, minmax(0, 1fr)); }
      .content { padding: 18px; }
    }
  </style>
</head>
<body>

  <!-- ═══════════════════════════════
       SIDEBAR
  ═══════════════════════════════ -->
  <aside class="sidebar">

    <div class="brand">
      <div class="brand-logo">
        <div class="brand-icon">
          <!-- domino icon -->
          <svg viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1.5" y="1.5" width="6" height="6" rx="1.2" fill="#0a0a0f"/>
            <rect x="9.5" y="1.5" width="6" height="6" rx="1.2" fill="#0a0a0f"/>
            <rect x="1.5" y="9.5" width="6" height="6" rx="1.2" fill="#0a0a0f"/>
            <circle cx="12.5" cy="12.5" r="2.8" fill="#0a0a0f"/>
          </svg>
        </div>
        <span class="brand-name">Sem <span>Calote</span></span>
      </div>
      <div class="brand-sub">apostas em família</div>
    </div>

    <div class="section-label">Jogos</div>

    <nav class="game-list" aria-label="Lista de jogos">

      <a class="game-item active" href="#" aria-current="page">
        <span class="game-emoji">🁣</span>
        <div class="game-info">
          <div class="game-name">Dominó</div>
          <div class="game-count">4 rodadas</div>
        </div>
        <span class="game-badge">ativo</span>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">🃏</span>
        <div class="game-info">
          <div class="game-name">21</div>
          <div class="game-count">12 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">🎱</span>
        <div class="game-info">
          <div class="game-name">Sinuca</div>
          <div class="game-count">7 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">🎴</span>
        <div class="game-info">
          <div class="game-name">Uno</div>
          <div class="game-count">3 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">♠️</span>
        <div class="game-info">
          <div class="game-name">Sueca</div>
          <div class="game-count">5 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">✊</span>
        <div class="game-info">
          <div class="game-name">Purrinha</div>
          <div class="game-count">9 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">🎲</span>
        <div class="game-info">
          <div class="game-name">Truco</div>
          <div class="game-count">6 rodadas</div>
        </div>
      </a>

      <a class="game-item" href="#">
        <span class="game-emoji">🀄</span>
        <div class="game-info">
          <div class="game-name">Mahjong</div>
          <div class="game-count">1 rodada</div>
        </div>
      </a>

      <a class="game-item game-add" href="#">
        <span class="game-emoji" style="color:var(--muted);font-size:16px;font-weight:700">+</span>
        <div class="game-info">
          <div class="game-name">Novo jogo</div>
        </div>
      </a>

    </nav>

    <div class="sidebar-footer">
      <button class="btn-new-game" type="button">
        <svg width="13" height="13" viewBox="0 0 13 13" fill="none">
          <path d="M6.5 1v11M1 6.5h11" stroke="#0a0a0f" stroke-width="2" stroke-linecap="round"/>
        </svg>
        Nova Rodada
      </button>
    </div>

  </aside>

  <!-- ═══════════════════════════════
       MAIN
  ═══════════════════════════════ -->
  <div class="main">

    <!-- Top nav bar -->
    <header class="topbar" role="banner">
      <nav aria-label="Navegação principal" style="display:flex;align-items:center;">
        <a class="nav-link active" href="#" aria-current="page">Visão Geral</a>
        <a class="nav-link" href="#">Rodadas</a>
        <a class="nav-link" href="#">Jogadores</a>
        <a class="nav-link" href="#">Histórico</a>
        <a class="nav-link" href="#">Relatório</a>
      </nav>

      <div class="topbar-right">
        <div class="balance-pill" title="Seu saldo na jogatina">
          <span class="balance-label">Saldo</span>
          <span class="balance-val negative">− R$ 2,40</span>
        </div>
        <div class="avatar" title="João Vítor" aria-label="Perfil de João Vítor">JV</div>
      </div>
    </header>

    <!-- Page content -->
    <main class="content" id="main-content">

      <!-- Page header -->
      <div class="page-header">
        <div>
          <h1 class="page-title">
            <span class="page-title-emoji" aria-hidden="true">🁣</span>
            Dominó
          </h1>
          <p class="page-sub">
            Jogatina de hoje · 4 rodadas ·
            <span class="live-badge">
              <span class="dot-live" aria-hidden="true"></span>
              1 ao vivo
            </span>
          </p>
        </div>
        <button class="btn-sm" type="button">+ Rodada</button>
      </div>

      <!-- Stats -->
      <section aria-label="Resumo da jogatina">
        <div class="stats-row">

          <div class="stat-card">
            <div class="stat-label">Apostas hoje</div>
            <div class="stat-val green">R$3,80</div>
            <div class="stat-change">4 rodadas disputadas</div>
          </div>

          <div class="stat-card">
            <div class="stat-label">Meu saldo</div>
            <div class="stat-val red">− R$2,40</div>
            <div class="stat-change">preciso pagar</div>
          </div>

          <div class="stat-card">
            <div class="stat-label">Maior ganho</div>
            <div class="stat-val teal">R$1,60</div>
            <div class="stat-change">Maria Alice · rodada 2</div>
          </div>

          <div class="stat-card">
            <div class="stat-label">Jogadores</div>
            <div class="stat-val">4</div>
            <div class="stat-change">na mesa hoje</div>
          </div>

        </div>
      </section>

      <!-- Rounds table -->
      <section aria-label="Rodadas">
        <div class="section-header">
          <h2 class="section-title">Rodadas</h2>
          <button class="btn-sm" type="button">Ver todas</button>
        </div>

        <div class="rounds-table" role="table" aria-label="Lista de rodadas">

          <!-- Header -->
          <div class="round-row header" role="row">
            <div class="col-label" role="columnheader">#</div>
            <div class="col-label" role="columnheader">Jogo</div>
            <div class="col-label" role="columnheader">Jogadores</div>
            <div class="col-label right" role="columnheader">Aposta</div>
            <div class="col-label right" role="columnheader">Pot</div>
            <div class="col-label center" role="columnheader">Status</div>
          </div>

          <!-- Row 4 — live -->
          <div class="round-row" role="row" tabindex="0">
            <div class="round-num" role="cell">04</div>
            <div class="round-game" role="cell">Dominó</div>
            <div class="players-faces" role="cell" aria-label="Jogadores: JV, MA, BI, RA">
              <div class="mini-avatar a-green" title="João Vítor">JV</div>
              <div class="mini-avatar a-yellow" title="Maria Alice">MA</div>
              <div class="mini-avatar a-red" title="Bia">BI</div>
              <div class="mini-avatar a-blue" title="Rafael">RA</div>
            </div>
            <div class="round-val" role="cell">R$0,50</div>
            <div class="round-val green" role="cell">R$2,00</div>
            <div role="cell">
              <span class="status-pill live">
                <span class="dot-live" aria-hidden="true"></span>
                ao vivo
              </span>
            </div>
          </div>

          <!-- Row 3 -->
          <div class="round-row" role="row" tabindex="0">
            <div class="round-num" role="cell">03</div>
            <div class="round-game" role="cell">Dominó</div>
            <div class="players-faces" role="cell" aria-label="Jogadores: JV, MA, BI, RA">
              <div class="mini-avatar a-green" title="João Vítor">JV</div>
              <div class="mini-avatar a-yellow" title="Maria Alice">MA</div>
              <div class="mini-avatar a-red" title="Bia">BI</div>
              <div class="mini-avatar a-blue" title="Rafael">RA</div>
            </div>
            <div class="round-val" role="cell">R$0,20</div>
            <div class="round-val green" role="cell">R$0,80</div>
            <div role="cell"><span class="status-pill done">finalizada</span></div>
          </div>

          <!-- Row 2 -->
          <div class="round-row" role="row" tabindex="0">
            <div class="round-num" role="cell">02</div>
            <div class="round-game" role="cell">Dominó</div>
            <div class="players-faces" role="cell" aria-label="Jogadores: JV, MA, BI">
              <div class="mini-avatar a-green" title="João Vítor">JV</div>
              <div class="mini-avatar a-yellow" title="Maria Alice">MA</div>
              <div class="mini-avatar a-red" title="Bia">BI</div>
            </div>
            <div class="round-val" role="cell">R$0,50</div>
            <div class="round-val green" role="cell">R$1,50</div>
            <div role="cell"><span class="status-pill done">finalizada</span></div>
          </div>

          <!-- Row 1 -->
          <div class="round-row" role="row" tabindex="0">
            <div class="round-num" role="cell">01</div>
            <div class="round-game" role="cell">Dominó</div>
            <div class="players-faces" role="cell" aria-label="Jogadores: MA, BI, RA">
              <div class="mini-avatar a-yellow" title="Maria Alice">MA</div>
              <div class="mini-avatar a-red" title="Bia">BI</div>
              <div class="mini-avatar a-blue" title="Rafael">RA</div>
            </div>
            <div class="round-val" role="cell">R$0,50</div>
            <div class="round-val red" role="cell">R$1,50</div>
            <div role="cell"><span class="status-pill done">finalizada</span></div>
          </div>

        </div>
      </section>

      <!-- Bottom grid -->
      <div class="bottom-row">

        <!-- Players -->
        <section class="players-card" aria-label="Jogadores na mesa">
          <div class="section-header">
            <h2 class="section-title">Jogadores na mesa</h2>
            <button class="btn-sm" type="button">Gerenciar</button>
          </div>

          <div class="player-item">
            <div class="player-ava a-yellow" aria-hidden="true">MA</div>
            <div class="player-name">Maria Alice</div>
            <div class="player-wins">2 vitórias</div>
            <div class="player-balance" style="color:var(--accent2)">+R$2,00</div>
          </div>

          <div class="player-item">
            <div class="player-ava a-blue" aria-hidden="true">RA</div>
            <div class="player-name">Rafael</div>
            <div class="player-wins">1 vitória</div>
            <div class="player-balance" style="color:var(--accent2)">+R$0,50</div>
          </div>

          <div class="player-item">
            <div class="player-ava a-red" aria-hidden="true">BI</div>
            <div class="player-name">Bia</div>
            <div class="player-wins">0 vitórias</div>
            <div class="player-balance" style="color:var(--danger)">−R$1,10</div>
          </div>

          <div class="player-item">
            <div class="player-ava a-green" aria-hidden="true">JV</div>
            <div class="player-name">João Vítor <span style="color:var(--muted);font-weight:400">(você)</span></div>
            <div class="player-wins">1 vitória</div>
            <div class="player-balance" style="color:var(--danger)">−R$2,40</div>
          </div>

        </section>

        <!-- Pix -->
        <section class="pix-card" aria-label="Acerto via Pix">
          <div class="pix-glow" aria-hidden="true"></div>
          <div class="pix-title">⚡ Acerto via Pix — em breve</div>

          <div class="pix-debt-item">
            <div>
              <div class="pix-from">João Vítor</div>
              <div class="pix-arrow">deve para</div>
            </div>
            <div style="text-align:right">
              <div class="pix-to">Maria Alice</div>
              <div class="pix-val">R$1,60</div>
            </div>
          </div>

          <div class="pix-debt-item">
            <div>
              <div class="pix-from">João Vítor</div>
              <div class="pix-arrow">deve para</div>
            </div>
            <div style="text-align:right">
              <div class="pix-to">Rafael</div>
              <div class="pix-val">R$0,80</div>
            </div>
          </div>

          <div class="pix-debt-item">
            <div>
              <div class="pix-from">Bia</div>
              <div class="pix-arrow">deve para</div>
            </div>
            <div style="text-align:right">
              <div class="pix-to">Maria Alice</div>
              <div class="pix-val">R$1,10</div>
            </div>
          </div>

          <button class="pix-btn" type="button">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" aria-hidden="true">
              <path d="M6.5 1L12 6.5L6.5 12M1 6.5H12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Quitar tudo via Pix
          </button>
        </section>

      </div>

    </main>
  </div>

  <!-- ── MINIMAL JS: nav active state ── -->
  <script>
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', e => {
        e.preventDefault();
        document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
        link.classList.add('active');
      });
    });

    document.querySelectorAll('.game-item').forEach(item => {
      item.addEventListener('click', e => {
        e.preventDefault();
        document.querySelectorAll('.game-item').forEach(i => {
          i.classList.remove('active');
          i.querySelector('.game-badge') && i.querySelector('.game-badge').remove();
        });
        item.classList.add('active');
        if (!item.classList.contains('game-add')) {
          const badge = document.createElement('span');
          badge.className = 'game-badge';
          badge.textContent = 'ativo';
          item.appendChild(badge);
        }
      });
    });
  </script>

</body>
</html>