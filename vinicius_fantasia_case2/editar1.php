<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Animal</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Editar Animal</h2><br>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM tbanimal WHERE id=$id";
            require_once "conexao.php";
            $result = $conn->query($sql);
            $dados = $result->fetchAll(PDO::FETCH_ASSOC);
            foreach ($dados as $linha) { ?>
                <form name="form1" action="editar2.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
                    <label>Nome</label><br>
                    <input type="text" name="nome" value="<?php echo $linha['nome']; ?>" placeholder="Digite o nome Ex: Billy" required><br><br>
                    <label>Data de Nascimento</label><br>
                    <input type="date" name="nascimento" value="<?php echo $linha['nascimento']; ?>" placeholder="Digite a data de nascimento" required><br><br>
                    <label>Grupo</label><br>
                    <select name="animal" id="animal">
                        <?php
                        if ($linha['animal'] === 'Cachorro') { ?>
                            <option value="Cachorro" selected>Cachorro</option>
                            <option value="Gato">Gato</option>
                            <option value="Ave">Ave</option>
                            <option value="Outros">Outros</option>
                        <?php }
                        if ($linha['animal'] === 'Gato') { ?>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Gato" selected>Gato</option>
                            <option value="Ave">Ave</option>
                            <option value="Outros">Outros</option>
                        <?php }
                        if ($linha['animal'] === 'Ave') { ?>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Gato">Gato</option>
                            <option value="Ave" selected>Ave</option>
                            <option value="Outros">Outros</option>
                        <?php
                        }
                        if ($linha['animal'] === 'Outros') { ?>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Gato">Gato</option>
                            <option value="Ave">Ave</option>
                            <option value="Outros" selected>Outros</option>
                        <?php
                        } ?>
                    </select><br><br>
                    <label>Responsável</label><br><input type="text" name="responsavel" value="<?php echo $linha['responsavel']; ?>" placeholder="Digite o Responsável"><br><br>
                    <br>
                    <br><br>
                    <input type="submit" value="ATUALIZAR"><br><br>
                    <input type="reset" value="CANCELAR">
                    <br>
                    <br>
                </form>
        <?php
            }
        }
        ?>
        <br>
        <a href="vizualizar.php">HOME</a><br>
    </div>
</body>

</html>