<?php
session_start();

$env = parse_ini_file(__DIR__ . '/../config/.env');
$url = $env['API_URL'] . '/login';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode([
        'username' => $usuario,
        'password' => $senha
    ]),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ]
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    die('Erro na requisição: ' . curl_error($curl));
}

$json = json_decode($response, true);

if(isset($json['token'])) {
    $_SESSION['token'] = $json['token'];
    $_SESSION['usuario'] = $usuario;
    header('Location: ../app/inicio.php');
    exit();
} else {
    $_SESSION['error'] = 'Credenciais inválidas. Tente novamente.';
    header('Location: login.php');
    exit();
}

?>