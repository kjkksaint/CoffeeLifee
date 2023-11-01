<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['nome'])) {
    // Usuário não está autenticado, redireciona para a página de login
    header('Location: index.php');
    exit();
}

// Se o usuário estiver autenticado, exiba o conteúdo do painel
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Controle</title>
    <!-- Seus estilos CSS e scripts JavaScript aqui -->
</head>
<body>
    <h1>Bem-vindo(a) ao Painel de Controle, <?php echo $_SESSION['nome']; ?></h1>
    <!-- Conteúdo do painel aqui -->
</body>
</html>
