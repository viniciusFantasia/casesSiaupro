<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Animais Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <img id="logo" src="imagens/dreamdust.png" alt="" />
            <br>
            <h3>Animais Cadastrados</h3>
            <table>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Data de Nascimento
                    </th>
                    <th>
                        Animal
                    </th>
                    <th>
                        Responsável
                    </th>
                    <th>
                        Ações
                    </th>
                </tr>
                <?php
                $sql = "SELECT a.id,
                                a.nome,
                                DATE_FORMAT(a.nascimento,'%d/%m/%Y') AS nascimento,
                                a.animal,
                                a.responsavel
                        FROM tbanimal a
                        ORDER BY nome";
                require_once "conexao.php";
                $result = $conn->query($sql);
                $dados = $result->fetchAll(PDO::FETCH_ASSOC);
                foreach ($dados as $linha) {
                    echo "<tr><td>" . $linha["nome"] . "</td><td> " . $linha["nascimento"] . "</td>" .
                        "<td>" . $linha["animal"] . "</td><td>" . $linha["responsavel"] . "</td>" .
                        "<td><a href='editar1.php?id=" . $linha["id"] ."'>EDITAR</a>
                        <a href='excluir.php?id=" . $linha["id"] . "'>DELETAR</a></td>".
                        "</tr>"; 
                }
                ?>
            </table>
        <br>
        <a href="cadpet.php">NOVO ANIMAL</a><br><br>
    </div>
</body>

</html>