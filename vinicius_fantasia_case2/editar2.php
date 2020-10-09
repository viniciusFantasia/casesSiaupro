<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Editar Animal</title>
</head>

<body>
    <div>
        <?php
        if (
            isset($_POST['id']) &&  isset($_POST['nome']) && isset($_POST['nascimento'])
            && isset($_POST['animal'])  && isset($_POST['responsavel'])
        ) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $nascimento = $_POST['nascimento'];
            $animal = $_POST['animal'];
            $responsavel = $_POST['responsavel'];

            // echo "<p> id: $id</p>";
            // echo "<p> nome: $nome</p>";
            // echo "<p> nascimento: $nascimento</p>";
            // echo "<p> animal: $animal</p>";
            // echo "<p> responsavel: $responsavel</p>";

            //montar a instrução SQL
            $sql = "UPDATE tbanimal set 
                        nome = '$nome',
                        nascimento = '$nascimento',
                        animal = '$animal',
                        responsavel = '$responsavel'
                        where id='$id'";
            //echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p>Atualizado com sucesso.</p>";
        } else {
            echo "<p> Erro aos receber os dados. <p>";
        }
        ?>
        <br>
        <a href="vizualizar.php">VOLTAR</a><br><br>
    </div>
</body>

</html>