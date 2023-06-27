<header>
    <h3>Atualizar Informação Fabricante</h3>
</header>
<?php 
    $varCodFabricante = mysqli_real_escape_string($conexao,$_POST["varCodFabricante"]);
    $varMarcaFabricante = mysqli_real_escape_string($conexao,$_POST["varMarcaFabricante"]);
    $varSiteFabricante = mysqli_real_escape_string($conexao,$_POST["varSiteFabricante"]);
    $varTelefoneFabricante = mysqli_real_escape_string($conexao,$_POST["varTelefoneFabricante"]);
    $varFkCodEstado = mysqli_real_escape_string($conexao,$_POST["varFkCodEstado"]);

    $sql = "UPDATE dbfabricantes SET
    marcaFabricante = '{$varMarcaFabricante}',
    siteFabricante = '{$varSiteFabricante}',
    telefoneFabricante = '{$varTelefoneFabricante}',
    fkCodEstado = '{$varFkCodEstado}'
    WHERE codFabricante={$varCodFabricante}
    ";

    mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));

    echo("o produto foi atualizado com sucesso");
?>