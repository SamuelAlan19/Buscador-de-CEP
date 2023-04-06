<?php

/* Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). 
  Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números */
echo '<hr>';

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$i = filter_input(INPUT_POST, "slOperacao");
$resultado = "";

if ($num01 && $num02) {
    switch ($i) {

        case "+":
            $resultado = $num01 + $num02;
            break;
        case "-":
            $resultado = $num01 - $num02;
            break;
        case "*":
            $resultado = $num01 * $num02;
            break;
        case "/":
            $resultado = $num01 / $num02;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="res01"><?= "O resultado é " . $resultado; ?></h1>
    <div class="box01">

        <form method="post">
            <label>Número 1: <input class="numb" type="text" name="txtNumero1" /></label><br>
            <label>Número 2: <input class="numb" type="text" name="txtNumero2" /></label><br>
            <label>Operação:
                <select name="slOperacao" class="opr">
                    <option value="+">Adição</option>
                    <option value="-">Subtração</option>
                    <option value="*">Multiplicação</option>
                    <option value="/">Divisão</option>
                </select>
            </label><br>
            <input type="submit" name="btnCalcular" value="Calcular" class="btn">
        </form>
    </div>
</body>

</html>

<?php

// Escreva um algoritmo que receba um valor, calcule e mostre para o usuário 5% e 50% deste valor
echo '<hr>';

$num = filter_input(INPUT_POST, "txtNum");

$resultado01 = ($num * 5) / 100;
$resultado02 = ($num * 50) / 100;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1 class="res02"><?= "50% de {$num} é {$resultado02} <br> 5% de {$num} é {$resultado01}" ?></h1>

    <div class="box02">
        <form method="post">
            <label>Número: <input class="num" type="text" name="txtNum"> </label><br>

            <label ><input class="button" type="submit" name="btnCalcular" value="Calcular"> </label>
        </form>
    </div>

</body>

</html>