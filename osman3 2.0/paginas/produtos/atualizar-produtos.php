<header>
    <h3>Atualizar Informação do Produto</h3>
</header>
<?php 
    $varCodProduto = mysqli_real_escape_string($conexao,$_POST["varCodProduto"]);
    $varNomeProduto = mysqli_real_escape_string($conexao,$_POST["varNomeProduto"]);
    $varDescProduto = mysqli_real_escape_string($conexao,$_POST["varDescProduto"]);
    $varPesoProduto = mysqli_real_escape_string($conexao,$_POST["varPesoProduto"]);
    $varValorCompraProduto = mysqli_real_escape_string($conexao,$_POST["varValorCompraProduto"]);
    $varPercentualLucroProduto = mysqli_real_escape_string($conexao,$_POST["varPercentualLucroProduto"]);

    $varValorVendaProduto = ($varPercentualLucroProduto/100*$varValorCompraProduto)+$varValorCompraProduto;
    $varValorLucroProduto = $varValorVendaProduto - $varValorCompraProduto;
    
    
    $sql = "UPDATE dbprodutos SET
    nomeProduto = '{$varNomeProduto}',
    descProduto = '{$varDescProduto}',
    pesoProduto = '{$varPesoProduto}',
    valorCompraProduto = '{$varValorCompraProduto}',
    valorVendaProduto = '{$varValorVendaProduto}',
    valorLucroProduto = '{$varValorLucroProduto}',
    percentualLucroProduto = '{$varPercentualLucroProduto}'
    WHERE codProduto={$varCodProduto}
    ";

    mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));

    echo("o produto foi atualizado com sucesso");
?>
