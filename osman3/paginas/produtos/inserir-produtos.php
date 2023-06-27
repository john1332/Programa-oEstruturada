<?php 
    $varCodFabricante = $_POST["varFkCodFabricante"];
    $sql = "SELECT * FROM dbfabricantes WHERE codFabricante={$varCodFabricante}";
    $rs = mysqli_query($conexao,$sql) or die("ERROR ao recuperar os dados do registro. ".mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Inserir Produtos</h3>
</header>
<?php 
    $varNomeProduto = mysqli_real_escape_string($conexao,$_POST["varNomeProduto"]);
    $varDescProduto = mysqli_real_escape_string($conexao,$_POST["varDescProduto"]);
    $varPesoProduto = mysqli_real_escape_string($conexao,$_POST["varPesoProduto"]);
    $varValorCompraProduto = mysqli_real_escape_string($conexao,$_POST["varValorCompraProduto"]);
    $varPercentualLucroProduto = mysqli_real_escape_string($conexao,$_POST["varPercentualLucroProduto"]);
    $varFkCodFabricante = mysqli_real_escape_string($conexao,$_POST["varFkCodFabricante"]);
    $varFkCodEstado = $dados["fkCodEstado"];
    
    
    $varValorVendaProduto = ($varPercentualLucroProduto/100*$varValorCompraProduto)+$varValorCompraProduto;
    $varValorLucroProduto = $varValorVendaProduto - $varValorCompraProduto;


    $sql = "INSERT INTO dbprodutos(
        nomeProduto,
        descProduto,
        pesoProduto,
        valorCompraProduto,
        valorVendaProduto,
        valorLucroProduto,
        PercentualLucroProduto,
        fkCodFabricante,
        fkCodEstado
        )
        VALUES(
            '{$varNomeProduto}',
            '{$varDescProduto}',
            '{$varPesoProduto}',
            '{$varValorCompraProduto}',
            '{$varValorVendaProduto}',
            '{$varValorLucroProduto}',
            '{$varPercentualLucroProduto}',
            '{$varFkCodFabricante}',
            '{$varFkCodEstado}'
        )
        ";
        
        mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
        echo("o produto foi inserido com sucesso");
?>