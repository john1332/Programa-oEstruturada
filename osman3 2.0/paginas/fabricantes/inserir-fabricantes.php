<header>
    <h3>Inserir Fabricante</h3>
</header>
<?php 
    $varMarcaFabricante = mysqli_real_escape_string($conexao,$_POST["varMarcaFabricante"]);
    $varSiteFabricante = mysqli_real_escape_string($conexao,$_POST["varSiteFabricante"]);
    $varTelefoneFabricante = mysqli_real_escape_string($conexao,$_POST["varTelefoneFabricante"]);
    $varFkCodEstado = mysqli_real_escape_string($conexao,$_POST["varFkCodEstado"]);

    $sql = "INSERT INTO dbfabricantes(
        marcaFabricante,
        siteFabricante,
        telefoneFabricante,
        fkCodEstado)
        VALUES(
            '{$varMarcaFabricante}',
            '{$varSiteFabricante}',
            '{$varTelefoneFabricante}',
            '{$varFkCodEstado}'
        )
        ";
        mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
        echo("o fabricante foi inserido com sucesso");
?>