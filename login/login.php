<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="../assets/css/style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div id="container">
        <main>
            <form id="login_form" action="logar.php" method="POST">
                <div id="form_header">
                    <h1>Login</h1>
                    <i class="fa-solid fa-moon"></i>
                </div>
                
                <div id="social_media">
                    <a href="">
                        <img src="../assets/img/facebook.png" alt="facebook">
                    </a>
                    <a href="">
                        <img src="../assets/img/google.png" alt="google">
                    </a>
                    <a href="">
                        <img src="../assets/img/github.png" alt="github">
                    </a>
                </div>

                <div id="inputs">
                    <div class="input-box">
                        <label for="username">
                            Username
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" name="usuario" id="username"  required>
                            </div>
                        </label>
                        <!-- <label for="email">
                            Email
                            <div class="input-field">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" name="email" id="email"  required>
                            </div>
                        </label> -->
                        <label for="password">
                            Senha
                            <div class="input-field">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" name="senha" id="password"  required>
                            </div>
                        </label>
                        <div id="esqueceu_senha">
                            <a href="">Esqueceu a senha?</a>
                        </div>
                    </div>
                </div>
                <button type="submit" id="login">Entrar</button>
            </form>
        </main>
    </div>
</body>
</html>