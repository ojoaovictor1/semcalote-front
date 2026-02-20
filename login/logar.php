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
        'email' => $usuario,
        'senha'=> $senha
    ]),
    CURLOPT_HTTPHEADER => [
        'Content-Type: application/json'
    ]
]);

$response = curl_exec($curl);

if (curl_errno($curl)) {
    echo 'chegou no primeiro errono';
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

// $env = parse_ini_file(__DIR__ . '/../config/.env');
// $url_buscar = $env['API_URL'] . '/usuarios';
// //buscar usuarios

// $curl_buscar = curl_init();
// curl_setopt_array($curl_buscar, [
//     CURLOPT_URL => $url_buscar,
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_HTTPHEADER => [
//         "Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6MSwiZW1haWwiOiJqb2FvQGdtYWlsLmNvbSIsImlhdCI6MTc3MTU5MDk1OSwiZXhwIjoxNzcxNTk0NTU5fQ.WnSIE7tdPId-hiqAOu85wE9Q5pVzIUbLU6A-fP3tjsA",
//         'Content-Type: application/json'
//     ]
// ]);

// $response_buscar = curl_exec($curl_buscar);

// if (curl_errno($curl_buscar)) {
//     die('Erro na requisição: ' . curl_error($curl_buscar));
// }

// $json_buscar = json_decode($response_buscar, true);
// echo json_encode($json_buscar[1]);
?>
