<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Sem Calote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <!-- Header -->
    <header class="top-header">
        <div class="container-fluid">
            <div class="row align-items-center py-3">
                <div class="col-md-4 d-flex align-items-center gap-4">
                    <div class="logo-text">
                        <i class="fas fa-trophy"></i> Sem Calote
                    </div>
                    <nav class="d-none d-md-flex gap-3">
                        <a href="#" class="nav-link-custom active">Início</a>
                        <a href="jogadores/jogadores.php" class="nav-link-custom">Jogadores</a>
                        <a href="#" class="nav-link-custom">Pagamento</a>
                    </nav>
                </div>
                
                <div class="col-md-8 d-flex align-items-center justify-content-end gap-3">
                    <button class="btn btn-primary-custom">
                        <i class="fas fa-plus me-2"></i> Novo Jogo
                    </button>
                    <div class="user-balance d-none d-sm-block">
                        <div class="text-muted small">Saldo Acumulado</div>
                        <div class="text-success fw-bold">R$ 127,50</div>
                    </div>
                    
                    <div class="user-avatar d-flex align-items-center justify-content-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Sidebar -->
            <div class="col-lg-2 d-none d-lg-block p-0">
                <div class="sidebar">
                    <div class="sidebar-title">Minhas Partidas</div>
                    <div class="sidebar-item active">
                        <i class="fas fa-fire text-danger"></i>
                        <span>Agora</span>
                        <span class="sidebar-badge">2</span>
                    </div>
                    <div class="sidebar-item">
                        <i class="fas fa-check-circle text-success"></i>
                        <span>Finalizadas</span>
                    </div>
                    
                    <div class="sidebar-title mt-4">Jogos Favoritos</div>
                    <div class="sidebar-item">
                        <span>UNO</span>
                    </div>
                    <div class="sidebar-item">
                        <span>21</span>
                    </div>
                    <div class="sidebar-item">
                        <span>Sinuca</span>
                    </div>
                    <div class="sidebar-item">
                        <span>Bingo</span>
                    </div>

                    
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-7">
                <div class="main-content">

                    <!-- Jogos Ao Vivo -->
                    <div class="section-title">
                        <i class="fas fa-circle text-danger" style="font-size: 0.6rem; animation: pulse 2s infinite;"></i>
                        Jogos Ao Vivo
                    </div>

                    <div class="game-card">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="d-flex gap-3">
                                <div class="game-icon bg-gradient" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                                    🃏
                                </div>
                                <div>
                                    <h5 class="text-white fw-bold mb-1">UNO - Família Silva</h5>
                                    <div class="text-muted small">Iniciado há 45 minutos</div>
                                </div>
                            </div>
                            <span class="game-status status-live">
                                <i class="fas fa-circle me-1"></i> Ao Vivo
                            </span>
                        </div>
                        
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3 bg-dark rounded text-center">
                                    <div class="text-muted small">Rodadas</div>
                                    <div class="text-white fw-bold fs-5">8</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-dark rounded text-center">
                                    <div class="text-muted small">Premiação</div>
                                    <div class="text-warning fw-bold fs-5">R$ 4,00</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 d-flex gap-2">
                            <button class="btn btn-sm btn-success flex-fill">
                                <i class="fas fa-plus me-1"></i> Registrar Rodada
                            </button>
                            <button class="btn btn-sm btn-danger flex-fill">
                                <i class="fas fa-flag-checkered me-1"></i> Finalizar
                            </button>
                        </div>
                    </div>

                    <div class="game-card">
                        <div class="d-flex align-items-start justify-content-between mb-3">
                            <div class="d-flex gap-3">
                                <div class="game-icon" style="background: linear-gradient(135deg, #3b82f6, #2563eb);">
                                    ♠️
                                </div>
                                <div>
                                    <h5 class="text-white fw-bold mb-1">Poker - Galera do Bar</h5>
                                    <div class="text-muted small">Iniciado há 1h 20min</div>
                                </div>
                            </div>
                            <span class="game-status status-live">
                                <i class="fas fa-circle me-1"></i> Ao Vivo
                            </span>
                        </div>
                        
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="p-3 bg-dark rounded text-center">
                                    <div class="text-muted small">Rodadas</div>
                                    <div class="text-white fw-bold fs-5">12</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-3 bg-dark rounded text-center">
                                    <div class="text-muted small">Premiação</div>
                                    <div class="text-warning fw-bold fs-5">R$ 10,00</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 d-flex gap-2">
                            <button class="btn btn-sm btn-success flex-fill">
                                <i class="fas fa-plus me-1"></i> Registrar Rodada
                            </button>
                            <button class="btn btn-sm btn-danger flex-fill">
                                <i class="fas fa-flag-checkered me-1"></i> Finalizar
                            </button>
                        </div>
                    </div>

                    <!-- Jogos Recentes -->
                    <div class="section-title mt-5">
                        <i class="fas fa-history"></i>
                        Jogos Finalizados Recentemente
                    </div>

                    <div class="game-card">
                        <div class="d-flex align-items-start justify-content-between">
                            <div class="d-flex gap-3 flex-fill">
                                <div class="game-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
                                    🎲
                                </div>
                                <div class="flex-fill">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <h6 class="text-white fw-bold mb-1">Truco - Churrasco</h6>
                                            <div class="text-muted small">Ontem às 20:30</div>
                                        </div>
                                        <span class="game-status status-finished">Finalizado</span>
                                    </div>
                                    
                                    <div class="d-flex gap-3 mt-3">
                                        <div>
                                            <div class="text-muted small">🏆 Vencedor</div>
                                            <div class="text-warning fw-bold">João Silva</div>
                                        </div>
                                        <div>
                                            <div class="text-muted small">💰 Ganhou</div>
                                            <div class="text-success fw-bold">R$ 25,00</div>
                                        </div>
                                        <div>
                                            <div class="text-muted small">🎯 Rodadas</div>
                                            <div class="text-white fw-bold">15</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-3 d-none d-xl-block p-0">
                <div class="main-content">
                    
                    <!-- Ranking do Mês -->
                    <div class="stats-widget mb-4">
                        <h6 class="text-white fw-bold mb-3">
                            <i class="fas fa-trophy text-warning me-2"></i> Ranking do Mês
                        </h6>
                        
                        <div class="stat-item">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="badge bg-warning text-dark fw-bold">1º</div>
                                <div class="flex-fill">
                                    <div class="text-white fw-bold">João Silva</div>
                                </div>
                            </div>
                            <div class="text-success fw-bold">+ R$ 127,50</div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="badge bg-secondary fw-bold">2º</div>
                                <div class="flex-fill">
                                    <div class="text-white fw-bold">Maria Clara</div>
                                </div>
                            </div>
                            <div class="text-success fw-bold">+ R$ 85,00</div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <div class="badge bg-dark fw-bold">3º</div>
                                <div class="flex-fill">
                                    <div class="text-white fw-bold">Pedro Costa</div>
                                </div>
                            </div>
                            <div class="text-success fw-bold">+ R$ 62,00</div>
                        </div>
                    </div>

                    <!-- Estatísticas -->
                    <div class="stats-widget">
                        <h6 class="text-white fw-bold mb-3">
                            <i class="fas fa-chart-bar text-primary me-2"></i> Suas Estatísticas
                        </h6>
                        
                        <div class="stat-item">
                            <div class="stat-label">Total de Jogos</div>
                            <div class="stat-value">47</div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-label">Vitórias</div>
                            <div class="stat-value text-success">32</div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-label">Taxa de Vitória</div>
                            <div class="progress-bar-custom mt-2">
                                <div class="progress-fill" style="width: 68%"></div>
                            </div>
                            <div class="text-warning small mt-1">68%</div>
                        </div>
                        
                        <div class="stat-item">
                            <div class="stat-label">Lucro Total</div>
                            <div class="stat-value text-success">R$ 347,50</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Mobile Bottom Nav -->
    <div class="mobile-nav">
        <div class="mobile-nav-item active">
            <i class="fas fa-home fa-lg"></i>
        </div>
        <div class="mobile-nav-item">
            <i class="fas fa-search fa-lg"></i>
        </div>
        <div class="mobile-nav-item">
            <i class="fas fa-plus-circle fa-lg"></i>
        </div>
        <div class="mobile-nav-item">
            <i class="fas fa-chart-line fa-lg"></i>
        </div>
        <div class="mobile-nav-item">
            <i class="fas fa-user fa-lg"></i>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>