<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Animal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            //montar a instrução SQL
            $sql = "delete from tbanimal where id=$id";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Animal excluido.</p>";
        } else {
            echo "<p> Erro aos receber os dados. <p>";
        }
        ?>
        <br>
        <a href="vizualizar.php">VOLTAR</a><br><br>
    </div>
</body>

</html>