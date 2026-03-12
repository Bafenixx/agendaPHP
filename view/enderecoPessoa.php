<?php 
    namespace Projeto\view;
    require_once("../model/Pessoa.php");
    require_once("../model/endereco.php");
    use Projeto\model\Pessoa;
    use Projeto\model\Endereco;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereço da pessoa</title>
</head>
<body>
    <h1>Endereço da pessoa: </h1>
    <form method="POST">
        <label>Código: </label>
        <input type="number" name="codigo" id="codigo"/><br>
        <label>Logradouro: </label>
        <input type="text" name="logradouro" id="logradouro"/><br>
        <label>Número: </label>
        <input type="number" name="numero" id="numero"/><br>
        <label>Bairro: </label>
        <input type="text" name="bairro" id="bairro"/><br>
        <label>CEP: </label>
        <input type="text" name="cep" id="cep"/><br>
        <label>Complemento: </label>
        <input type="text" name="complemento" id="complemento"/><br>
        <label>Cidade: </label>
        <input type="text" name="cidade" id="cidade"/><br>
        <label>Estado: </label>
        <input type="text" name="estado" id="estado"/><br>
        <label>País: </label>
        <input type="text" name="pais" id="pais"/><br><br>
        <button type="submit">Cadastrar
            <?php 
                try{
                    $codigo      = $_POST['codigo'];
                    $logradouro  = $_POST['logradouro'];
                    $numero      = $_POST['numero'];
                    $bairro      = $_POST['bairro'];
                    $cep         = $_POST['cep'];
                    $complemento = $_POST['complemento'];
                    $cidade      = $_POST['cidade'];
                    $estado      = $_POST['estado'];
                    $pais        = $_POST['pais'];

                    $endereco = new Endereco($codigo, $logradouro, $numero, $bairro, $cep, $complemento, $cidade, $estado, $pais);
                }catch(Except $erro){
                    echo "Algo deu errado!! <br><br> $erro";
                }
            ?>
        </button><br>
        <?php 
            echo $endereco->imprimir();
        ?>
    </form><br>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>