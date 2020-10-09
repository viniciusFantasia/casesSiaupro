<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Animal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <img id="logo" src="" alt="" />
        <?php
        if (
            isset($_POST['nome']) && isset($_POST['nascimento'])
            && isset($_POST['animal'])  && isset($_POST['responsavel'])
        ) {
            $nome = $_POST['nome'];
            $nascimento = $_POST['nascimento'];
            $animal = $_POST['animal'];
            $responsavel = $_POST['responsavel'];

            // echo "<p> nome: $nome</p>";
            // echo "<p> nascimento: $nascimento</p>";
            // echo "<p> animal: $animal</p>";
            // echo "<p> responsavel: $responsavel</p>";


            //montar a instrução SQL
            $sql = "INSERT INTO tbanimal(nome, nascimento, animal, responsavel) 
            VALUES ('$nome','$nascimento','$animal','$responsavel')";
            //  echo $sql;
            require_once "conexao.php";
            $conn->exec($sql);
            echo "<p> Animal cadastrado. </p>";
        } else {
            echo "<p> Erro aos receber os dados. <p>";
        }
        ?>
        <br>
        <a href="cadpet.php">CADASTRAR NOVAMENTE</a><br><br><br>
        <a href="vizualizar.php">HOME</a><br><br>
    </div>
</body>

</html>