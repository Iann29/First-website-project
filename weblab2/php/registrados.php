<?php

$html_final = "<!DOCTYPE html>
                <html lang=\"pt-br\">
                <head>
                    <meta charset=\"UTF-8\">
                    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                    <link rel=\"shortcut icon\" href=\"imagens/futebol.ico\" type=\"image/x-icon\">
                    <title>Registros dos Clientes</title>
                    <link rel=\"stylesheet\" href=\"css/style.css\">
                </head>
                <body>
                    <table style='text-align: center;'>
                        <tr>
                            <td>Nome</td>
                            <td>Sobrenome</td>
                            <td>E-mail</td>
                            <td>Mensagem</td>
                        </tr>";

$arquivo = fopen('registros.txt', 'r');
if ($arquivo){

    while(($linha = fgets($arquivo, 4096)) !== false){
        $partes = explode("/", $linha);
        $html_final .= "<tr>
                        <td>$partes[0]</td>
                        <td>$partes[1]</td>
                        <td>$partes[2]</td>
                        <td>$partes[3]</td>
                        </tr>";
    }
    fclose($arquivo);

}

$html_final .= "</table></body></html>";

echo $html_final;

?>