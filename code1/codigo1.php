<?php

$host = "localhost";
$user = "root";
$database = "caca_aos_erros";

$conexao = new mysqli($host, $user, $database);

if ($conexao->connect_error) {
    die ("Erro na conexão: " . $conexao->connect_error);
}

if (isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "INSERT INTO usuarios (nome, email) VALUES (?, ?)";
    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("ss", $nome, $email);
    $stmt->execute();

    header("Location: codigo1.php");
    exit;
}

if (isset($_GET['excluir'])) {

$id = $_GET['excluir'];

$sql = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conexao->prepare($sql);

$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: codigo1.php");
exit;
}

if (isset($_POST['editar'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuarios SET nome = ?, email = ? WHERE id = ?";
    $stmt = $conexao->prepare($sql);

    $stmt->bind_param("ssi", $nome, $email, $id);
    $stmt->execute();

    header("Location: codigo1.php");
    exit;
}

$sql = "SELECT id, nome, email FROM usuarios ORDER BY id DESC";
$resultado = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>CRUD de Usuários</title>
</head>

<body>

    <h1>Cadastro de Usuários</h1>

    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>E-mail:</label>
        <input type="email" name="email" required>

        <br><br>

        <button type="submit" name="cadastrar">
            Cadastrar
        </button>

    <h2>Usuários cadastrados</h2>
    
    <table border="1">
        <tr>
            <th>ID<th>
            <th>Nome<th>
            <th>E-mail<th>
            <th>Ações<th>
        </tr> 
        
        <?php while ($usuario = $resultado->fetch_assoc()){ ?>
            <tr>
                <td>
                    <?= $usuario['id'] ?>
                </td>

                <td>
                    <?= $usuario['nome'] ?>
                </td>

                <td>
                    <?= $usuario['email'] ?>
                </td>

                <td>
                    <a href="codigo1.php?excluir=<?= $usuario['id'] ?>">
                        Excluir
                    </a>    
                    
                </td>
            </tr>

        <?php } ?>  

    </table>
</body>
</html>

        