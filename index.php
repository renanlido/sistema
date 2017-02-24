<?php

$pagina = "inicio.php";

if (isset($_GET["pagina"])) {

    switch ($_GET["pagina"]) {

        case "inicio";
            $pagina = "inicio.php";
                break;

        case "clientes_novo":
            $pagina = "clientes_novo.php";
                break;

        case "contato":
            $pagina = "contato.php";
                break;

        default:
            $pagina = "erro.php";
                break;

    }

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <link href="css/estilos.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>CADASTRO E GERAÇÃO DE HONORÁRIOS</title>
</head>
<body>


<nav class="menu">
    <ul>
        <li>
            <a href="?pagina=inicio">INICIO</a>
        </li>

        <li><a href="#">CADASTROS</a>
            <ul>
                <li><a href=#>CLIENTES</a>
                    <ul>
                        <li><a href="?pagina=clientes_novo">NOVO</a></li>
                        <li><a href="#">CONSULTA</a></li>
                    </ul>
                </li>

                <li><a href="#">SERVIÇOS</a>
                    <ul>
                        <li><a href="#">NOVO</a></li>
                        <li><a href="#">CONSULTA</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li><a href="#">HONORÁRIOS</a>
            <ul class="menu_dropdown">
                <li><a href="#">GERAR NOVO</a></li>
                <li><a href="#">CONSULTA REGISTROS</a></li>
                <li><a href="#">SALDO DO PERÍODO</a></li>
            </ul>
        </li>

        <li><a href="#">IMPRESSÃO</a>
            <ul class="menu_dropdown">
                <li><a href="#">HONORÁRIOS</a></li>
                <li><a href="#">LISTA DE CLIENTES</a></li>
                <li><a href="#">RELATÓRIO DO PERÍODO</a></li>
            </ul>
        </li>

        <li><a href="#">CONFIGURAÇÃO</a>
            <ul class="menu_dropdown">
                <li><a href="#">CONTADOR</a></li>
            </ul>
        </li>

        <li><a href="#">SAIR</a></li>
    </ul>
</nav>

<div class="clear"></div>

<hr/>

<?php
include($pagina);
?>

</body>
</html>