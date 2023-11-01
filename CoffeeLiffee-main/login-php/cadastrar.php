<?php
session_start();
include("conexao.php");

$nome 			    = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email      		= mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha      		= mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$confirmasenha   	= mysqli_real_escape_string($conexao, trim(md5($_POST['confirmasenha'])));

$response = array();

$sql = "SELECT COUNT(*) AS total FROM usuarios WHERE email = ?";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1) {
    $_SESSION['usuario_existe'] = true;
    $response['status'] = 'error';
    $response['message'] = 'Erro ao cadastrar o usuário: E-mail já existe no sistema.';
    mysqli_stmt_close($stmt);
    mysqli_close($conexao);
    echo json_encode($response);
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, data_cadastro) VALUES (?, ?, ?, NOW())";
$stmt = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $senha);

if (mysqli_stmt_execute($stmt)) {
    $_SESSION['status_cadastro'] = true;
    $response['status'] = 'success';
    $response['message'] = 'Cadastro realizado com sucesso!';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Erro ao cadastrar o usuário: ' . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conexao);
echo json_encode($response);
header('Location:index.php');

exit;
