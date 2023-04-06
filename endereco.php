<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style01.css">
</head>

<body>

    <h1>BUSCADOR DE CEP</h1>

    <img src="img/maps.svg" class="img02">

    <div class="circle"></div>

    <div class="img01">
        <img src="img/imagem.jpg" class="img">
    </div>

    <fieldset>
        <div class="div01">
            <form method="POST">

                <label class="label01">Informe o CEP desejado: <input type="text" name="txtcep" class="cep" onkeypress="enviaform()" id="campo" maxlength="9"> </label><br>

                <label><input class="button" type="submit" name="btnBuscar" value="Buscar"> </label>

            </form>

            <script>
                const input = document.getElementById("campo");

                input.addEventListener("keyup", formatarCep);

                function formatarCep(e) {

                    var v = e.target.value.replace(/\D/g, "")

                    v = v.replace(/^(\d{5})(\d)/, "$1-$2")

                    e.target.value = v;

                }

                function enviaform() {
                    return event.charCode >= 48 && event.charCode <= 57; 
                    
                    document.addEventListener('keypress', function(e) {
                    if (e.which == 13) {
                        enviaForm();
                    }
                }, false);
                    
                }

                
            </script>



            <?php

            if (strlen($_POST["txtcep"]) <= 8) {
                $endereco = '00000000';
                echo "<script>alert('CEP INVÁLIDO')</script>";
            } else {
                $endereco = filter_input(INPUT_POST, "txtcep");
                // echo "<script>alert('CEP ENCONTRADO COM SUCESSO')</script>";
            }


            function get_endereco($cep)
            {

                // formatar o cep removendo caracteres nao numericos
                $cep = preg_replace("/[^0-9]/", "", $cep);
                $url = "http://viacep.com.br/ws/$cep/xml/";

                $xml = simplexml_load_file($url);
                return $xml;
            }


            $encontrar = get_endereco("$endereco");

            echo "<strong>CEP:</strong> $encontrar->cep<br>";
            echo "<strong>RUA:</strong> $encontrar->logradouro<br>";
            echo "<strong>BAIRRO:</strong> $encontrar->bairro<br>";
            echo "<strong>CIDADE:</strong> $encontrar->localidade<br>";
            echo "<strong>ESTADO:</strong> $encontrar->uf";
            ?>
        </div>
    </fieldset>

    <div class="circle01"></div>

</body>

</html>