<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Sem Calote</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-[#0f1923] text-gray-200 font-sans">

    <header class="bg-[#1a242d] border-b border-gray-700 sticky top-0 z-50">
        <div class="max-w-[1400px] mx-auto px-4 h-16 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <h1 class="text-2xl font-black text-[#ff7324] uppercase tracking-tighter">Sem Calote</h1>
                <nav class="hidden md:flex gap-6 text-sm font-bold uppercase">
                    <a href="#" class="text-white border-b-2 border-[#ff7324] pb-5 mt-5">Resumo</a>
                    <a href="#" class="hover:text-[#ff7324] transition">Devedores</a>
                    <a href="#" class="hover:text-[#ff7324] transition">Histórico</a>
                </nav>
            </div>
            
            <div class="flex items-center gap-4">
                <div class="hidden sm:block text-right">
                    <p class="text-xs text-gray-400">Saldo a Receber</p>
                    <p class="text-sm font-bold text-green-400">R$ 4.250,00</p>
                </div>
                <button class="bg-[#ff7324] hover:bg-[#e66720] text-white px-4 py-2 rounded font-bold text-sm uppercase transition">
                    Nova Cobrança
                </button>
                <div class="w-10 h-10 bg-gray-600 rounded-full flex items-center justify-center border border-gray-500">
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
        </div>
    </header>

    <div class="max-w-[1400px] mx-auto flex">
        
        <aside class="hidden lg:block w-64 p-4 space-y-6 border-r border-gray-800 min-h-screen">
            <div>
                <h3 class="text-xs font-bold text-gray-500 uppercase mb-4">Categorias</h3>
                <ul class="space-y-2">
                    <li class="bg-[#26323e] p-2 rounded text-white flex justify-between items-center cursor-pointer">
                        <span><i class="fa-solid fa-fire text-orange-500 mr-2"></i> Urgentes</span>
                        <span class="text-xs bg-red-600 px-2 rounded-full">3</span>
                    </li>
                    <li class="p-2 hover:bg-[#26323e] rounded transition cursor-pointer">
                        <i class="fa-solid fa-clock text-blue-400 mr-2"></i> Próximos Vencimentos
                    </li>
                    <li class="p-2 hover:bg-[#26323e] rounded transition cursor-pointer">
                        <i class="fa-solid fa-check-double text-green-400 mr-2"></i> Recebidos
                    </li>
                </ul>
            </div>
        </aside>

        <main class="flex-1 p-4 md:p-6">
            
            <div class="bg-gradient-to-r from-[#1a242d] to-[#26323e] p-6 rounded-xl border-l-4 border-[#ff7324] mb-8 shadow-xl">
                <h2 class="text-xl font-bold text-white mb-2">Painel de Controle de Fluxo</h2>
                <p class="text-gray-400 text-sm">Você tem <span class="text-orange-500 font-bold">12 cobranças</span> ativas este mês. Mantenha o foco nos recebíveis!</p>
            </div>

            <h3 class="text-lg font-bold mb-4 flex items-center gap-2">
                <i class="fa-solid fa-receipt text-[#ff7324]"></i> Cobranças em Aberto
            </h3>

            <div class="space-y-3">
                
                <?php 
                $cobrancas = [
                    ['nome' => 'João da Silva', 'valor' => 'R$ 150,00', 'data' => 'Hoje', 'status' => 'Atrasado'],
                    ['nome' => 'Maria Oliveira', 'valor' => 'R$ 500,00', 'data' => 'Amanhã', 'status' => 'Pendente'],
                    ['nome' => 'Lucas Souza', 'valor' => 'R$ 2.300,00', 'data' => '25 Out', 'status' => 'Pendente'],
                    ['nome' => 'Bar do Tio', 'valor' => 'R$ 85,50', 'data' => '30 Out', 'status' => 'Pendente'],
                ];

                foreach ($cobrancas as $c): ?>
                <div class="bg-[#1a242d] hover:bg-[#212c37] p-4 rounded flex flex-col md:flex-row items-center justify-between gap-4 border border-gray-800 transition">
                    <div class="flex items-center gap-4 w-full md:w-1/3">
                        <div class="text-xs font-bold text-gray-500 border-r border-gray-700 pr-4 uppercase">
                            <?= $c['data'] ?>
                        </div>
                        <div class="font-bold text-sm"><?= $c['nome'] ?></div>
                    </div>

                    <div class="flex gap-2 w-full md:w-auto">
                        <button class="flex-1 md:w-28 bg-[#26323e] hover:bg-[#32404e] border border-gray-600 p-2 rounded flex flex-col items-center justify-center transition">
                            <span class="text-[10px] text-gray-400 uppercase">Valor</span>
                            <span class="text-sm font-bold text-[#ff7324]"><?= $c['valor'] ?></span>
                        </button>
                        <button class="flex-1 md:w-28 bg-[#26323e] hover:bg-green-900/30 border border-gray-600 p-2 rounded flex flex-col items-center justify-center transition group">
                            <span class="text-[10px] text-gray-400 uppercase group-hover:text-green-400">Ação</span>
                            <span class="text-xs font-bold uppercase group-hover:text-green-400">Pagar</span>
                        </button>
                        <button class="p-2 text-gray-500 hover:text-white">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </button>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </main>

        <aside class="hidden xl:block w-80 p-4">
            <div class="bg-[#1a242d] rounded-t-lg p-4 border-b border-[#ff7324]">
                <h3 class="font-bold uppercase text-sm">Resumo da Carteira</h3>
            </div>
            <div class="bg-[#26323e] p-4 rounded-b-lg space-y-4 shadow-lg">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-400">Total Pendente</span>
                    <span class="font-bold">R$ 5.420,00</span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-400">Total Recebido</span>
                    <span class="font-bold text-green-400">R$ 12.100,00</span>
                </div>
                <hr class="border-gray-700">
                <div class="text-center">
                    <p class="text-[10px] text-gray-500 uppercase mb-2">Meta Mensal</p>
                    <div class="w-full bg-gray-700 h-2 rounded-full">
                        <div class="bg-orange-500 h-2 rounded-full w-[70%]"></div>
                    </div>
                    <p class="text-xs mt-2 italic">70% da meta atingida</p>
                </div>
            </div>
        </aside>

    </div>

    <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-[#1a242d] border-t border-gray-700 flex justify-around p-3">
        <i class="fa-solid fa-house text-[#ff7324]"></i>
        <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
        <i class="fa-solid fa-plus-circle text-gray-400"></i>
        <i class="fa-solid fa-chart-line text-gray-400"></i>
    </div>

</body>
</html>