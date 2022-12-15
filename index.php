<?php

//  Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado
$numero = "4";

for ($i = 0; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero X $i = $resultado<br>";
}

// Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela
echo "<hr>";

$num = 8;

if ($num > 0) {
    $valor = $num;
    for ($i = ($valor - 1); $i > 0; $i--) {
        $valor = $valor * $i;
    }
} else {
    $valor = 0;
}

echo "!{$num} = {$valor}";

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

// Solicite a entrada de um número e descubra se um número digitado é par ou ímpar  
echo '<hr>';

$numero = 3;

if ($numero % 2 == 0) {
    echo "O número {$numero} é par";
} else {
    echo "O número {$numero} é ímpar";
}

// Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem em relação aos seus valores dizendo qual valor é maior que o outro
echo '<hr>';

$num01 = 8;
$num02 = 9;

if ($num01 > $num02) {
    echo "{$num01} é maior que {$num02}";
} else {
    echo "{$num02} é maior que {$num01}";
}

/* Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. 
Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada */
echo '<hr>';

$notas = array(2);

$notas = [2.6, 9, 4];

$resultado = ($notas[0] + $notas[1] + $notas[2]) / 3;

function formatar($valor)
{
    return number_format($valor, 2, '.', '');
}

if ($resultado >= 6) {
    echo "Sua média foi de " . formatar($resultado) . " e portanto, está aprovado!";
} else {
    echo "Sua média foi de " . formatar($resultado) . " e portanto, está reprovado!";
}

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

<?php 

// Escreva um algoritmo que leia a velocidade de um objeto em m/s (metros por segundo), calcule e exiba para o usuário a velocidade em km/h.
echo '<hr>';

$numero = 20; 

echo "Este objeto percorre " . $numero * 3.6 . " KM/H "; 

// Escreva um algoritmo que receba o valor de um produto e calcule um desconto de 7%, exibindo para o usuário o valor original, o valor do desconto e o valor com o desconto
echo '<hr>';

$numero = "20"; 
$desconto = $numero - ($numero * (7/100));  
echo "O valor do seu produto é de " . $numero . " possui um desconto de " . (7/100) * $numero . " com valor restante de " . $desconto;  

/* João Papo-de-Pescador, homem de bem, comprou um microcomputador para controlar o rendimento diário de seu trabalho. 
Toda vez que ele traz um peso de peixes maior que o estabelecido pelo regulamento de pesca do estado de São Paulo (50 quilos) deve pagar uma multa de R$ 4,00 por quilo excedente. 
João precisa que você faça um script que leia a variável peso (peso de peixes) e calcule o excesso. 
Gravar na variável excesso a quantidade de quilos além do limite e na variável multa o valor da multa que João deverá pagar. Imprima os dados do script com as mensagens adequadas */
echo '<hr>';

$limite = 50; 
$pescou = 52; 
$excedente = $pescou - $limite; 
$multa = $excedente * 4;

if($pescou <= $limite){
    echo "João, você pescou " . $pescou . "KG de peixe e portanto, não paga excendentes"; 
} else {
    echo "João, você pescou " . $pescou . "KG de peixe em que o excedente foi de " . $excedente . "KG e portanto, pagará R$" . $multa . " de multa"; 
}



