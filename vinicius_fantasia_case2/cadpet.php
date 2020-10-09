<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Animal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Novo Animal</h2><br>
        <br>
        <form name="form1" action="inserir.php" method="POST">
            <label>Nome</label><br>
            <input type="text" name="nome" value="" placeholder="Digite o nome Ex: Billy" required><br><br>
            <label>Data de Nascimento</label><br>
            <input type="date" name="nascimento" value="" placeholder="Digite a data de nascimento" required><br><br>
            <label>Grupo</label><br>
            <select name="animal" id="animal">
                <option value="">Selecione</option>
                <option value="Cachorro">Cachorro</option>
                <option value="Gato">Gato</option>
                <option value="Ave">Ave</option>
                <option value="Outros">Outros</option>
            </select><br><br>
            <label>Responsável</label><br><input type="text" name="responsavel" value="" placeholder="Digite o Responsável"><br><br>
            <br>
            <br><br>
            <input type="submit" value="CADASTRAR"><br><br>
            <input type="reset" value="CANCELAR">
            <br>
            <br>
        </form>
        <br>
        <br>
        <a href="vizualizar.php">HOME</a><br>
    </div>
</body>

</html>