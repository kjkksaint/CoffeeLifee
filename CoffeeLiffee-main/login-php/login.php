<?php
session_start();
include('conexao.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Se a requisição não for POST, retorna um erro
    $response = array('status' => 'error', 'message' => 'Método de requisição inválido');
    echo json_encode($response);
    exit();
}

if (empty($_POST['usuario']) || empty($_POST['senha'])) {
    // Resposta de falha em formato JSON
    $response = array('status' => 'error', 'message' => 'Credenciais inválidas');
    echo json_encode($response);
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from usuarios where email = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];

    // Resposta de sucesso em formato JSON
    $response = array('status' => 'success');
    echo json_encode($response);
    exit();
} else {
    // Resposta de falha em formato JSON
    $response = array('status' => 'error', 'message' => 'Credenciais inválidas');
    echo json_encode($response);
    exit();
}
?>
