<!DOCTYPE html>
<html lang="pt">
<head>
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/estilo_form_cadastro_clientes.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>CADASTRO E GERAÇÃO DE HONORÁRIOS</title>
</head>

<fieldset class="container_cadastro">
    <form name="form_cliente" method="post" class="frm_cliente">

        <h1>CADASTRO DE CLIENTES</h1>

        <div class="razao_social">
            <label for="cad_razao_social">RAZÃO SOCIAL: </label>
            <input type="text" id="cad_razao_social" placeholder="Nome do Cliente" required="required" name="Razao Social"/>
        </div>

        <div class="endereco_numero">
            <label for="cad_endereco">ENDEREÇO: </label>
            <input type="text" id="cad_endereco" placeholder="Endereço" required="required" name="Endereço" >

            <label>Nº :</label>
            <input type="text" id="cad_numero" placeholder="Nº." required="required" name="Número">
        </div>

        <div class="bairro_comp_cidade">
            <label for="cad_bairro">BAIRRO: </label>
            <select id="cad_bairro" required="required" name="Bairro">
                <option value="Monte Castelo">Monte Castelo</option>
            </select>

            <label for="cad_complemento">COMPLEMENTO: </label>
            <input type="text" id="cad_complemento" placeholder="Complemento" name="Complemento">

            <label for="cad_cidade">CIDADE: </label>
            <select id="cad_cidade" required="required" name="Cidade">
                <option value="Três Rios">Três Rios</option>
            </select>
        </div>

        <div class="cep_uf">
            <label for="cad_cep">CEP: </label>
            <input type="text" id="cad_cep" placeholder="CEP" required="required" name="CEP" maxlength="5">

            <label for="cad_uf">UF: </label>
            <select id="cad_uf" required="required" name="UF">
                <option value="Rio de Janeiro">RJ</option>
            </select>
        </div>

        <div class="button">
            <input type="button" value="NOVO">
            <input type="submit" value="CADASTRAR">
            <a href="#"><input type="button" value="CONSULTAR CADASTRO"></a>
            <a href="index.php"><input type="BUTTON" VALUE="SAIR"></a>
        </div>
    </form>
</fieldset>
</body>
</html>