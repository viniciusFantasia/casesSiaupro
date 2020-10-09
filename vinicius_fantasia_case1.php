<!DOCTYPE HTML>
<html lang="pt-br">

<head>
   <title>Exemplo</title>
   <meta charset="UTF-8">
</head>

<body>
   <h3>Calculadora</h3>
   <form action="" method="post">
      Primeiro Número: <input name="num1" type="text" placeholder="0"><br><br>
      Segundo Número: <input name="num2" type="text" placeholder="0"><br><br>
      <input type="submit" name="operacao" value="+">
      <input type="submit" name="operacao" value="-">
      <input type="submit" name="operacao" value="*">
      <input type="submit" name="operacao" value="/">
      <input type="submit" name="operacao" value="^">
   </form> <br>
   <?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op = $_POST['operacao'];
   if ($a && $b) {
      if (!empty($op)) {
         if ($op == '+') {
            $c = $a + $b;
         } else if ($op == '-') {
            $c = $a - $b;
         } else if ($op == '*') {
            $c = $a * $b;
         } else if ($op == '/') {
            if ($b != 0) {
               $c = $a / $b;
            }
         } else {
            $c = $a / $b;
            if ($b != 0) {
               $c = 1;
               for ($i = 0; $i < $b; $i++) {
                  $c = $a * $c;
               }
            } else {
               $c = "1";
            };
         }
         echo "Resultado: $a $op $b = $c";
      }
   } else {
      echo "Digite os 2 números e clique na operação desejada.";
   }

   ?>
   <br><br><br><br><br>
   <p style="font-size: 10px;">Criado por Vinícius Pereira Fantasia</p>
</body>

</html>