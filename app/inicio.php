<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>

    <header>
        <div id="logo">
            <img src="../logo_sfundo_1280.png" alt="" width="160px" height="90px">
        </div>
        <div id="menu">
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="pagamentos.php">Pagamentos</a></li>
                <li><a href="rodadas.php">Rodadas</a></li>
                <li><a href="relatorios.php">Relatórios</a></li>

            </ul>
        </div>
        <div id="icones">
             <div id="notificacoes">
                <i class="fa-solid fa-bell"></i>
            </div>
             <div id="perfil">
                <i class="fa-solid fa-user"></i>
            </div>
            <div id="sair">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>
        </div>
    </header>

    <!-- sidebar -->
     <div id="meio">
        <div id="sidebar">
            <div id="titulo">
                Jogos
            </div>
            <div id="jogos">
                
                <ul id="lista_jogos"> </ul>
            </div>
        </div>

        <div id="cont">
            Rodadas. <!-- novidades em breve -->
        </div>
    </div>
    <div id="roda">

    </div>

    <script>
        const url_jogos = 'http://localhost:1027/jogos';
        
        let req_jogos = fetch(url_jogos, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': 'Bearer ' + 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiZW1haWwiOiJvam9hb3ZpY3RvckBsaXZlLmNvbSIsImlhdCI6MTc3MzkzODYyOSwiZXhwIjoxNzc0MDIxNDI5fQ.e5QsldlP0Y2ArR2GbdrqnMmSTiRmNa_M6AIUA7c12zE'  
            }
        }
        ).then(response => response.json())
        .then(data => {
            console.log(data);
            const lista_jogos = document.getElementById('lista_jogos');
            data.forEach(jogo => {
                const li = document.createElement('li');
                const a = document.createElement('a');
                a.href = `jogo.php?id=${jogo.id}`;
                a.textContent = jogo.nome;
                li.appendChild(a);
                lista_jogos.appendChild(li);
            });
        })
        .catch(error => console.error(error));
        
    </script>
</body>
</html>