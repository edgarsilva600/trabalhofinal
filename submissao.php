<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST['nome']);
    $data_nascimento = htmlspecialchars($_POST['data_nascimento']);
    $morada = htmlspecialchars($_POST['morada']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $genero = htmlspecialchars($_POST['genero']);
    $password = htmlspecialchars($_POST['password']);

    // Processar upload de fotografia
    $fotografia = $_FILES['fotografia'];
    $fotoPath = 'uploads/' . basename($fotografia['name']);
    move_uploaded_file($fotografia['tmp_name'], $fotoPath);

    // Processar upload de documento
    $documento = $_FILES['documento'];
    $docPath = 'uploads/' . basename($documento['name']);
    move_uploaded_file($documento['tmp_name'], $docPath);


}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registo de Utilizador</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="submeter.php" method="post" enctype="multipart/form-data">
        <h1>Dados do Utilizador</h1>
        <?php echo "<p><strong>Nome:</strong> $nome</p>" ?><br>

        <?php echo "<p><strong>Data de Nascimento:</strong> $data_nascimento</p>" ?><br>

        <?php echo "<p><strong>Morada:</strong> $morada</p>" ?><br>

        <?php echo "<p><strong>Email:</strong> $email</p>" ?><br>

        <?php echo "<p><strong>Telefone:</strong> $telefone</p>" ?><br>

        <?php echo "<p><strong>Gênero:</strong> $genero</p>" ?><br>

        <?php echo "<p><strong>Fotografia:</strong> <img src='$fotoPath' width='150'></p>" ?><br>

        <?php echo "<p><strong>Documento:</strong> <a href='$docPath' download>Baixar Documento</a></p>" ?><br>

        <?php echo "<p><strong>Nome:</strong> $nome</p>" ?><br>

    </form>
</body>
</html>