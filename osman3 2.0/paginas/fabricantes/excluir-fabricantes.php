<header>
    <h3>Excluir Produto</h3>
</header>

<?php 
    $varCodFabricante = mysqli_real_escape_string($conexao,$_GET["varCodFabricante"]);
    $sql = "DELETE FROM dbfabricantes WHERE codfabricante = '{$varCodFabricante}'";

    mysqli_query($conexao,$sql) or die("ERROR ao excluir o produto. ". mysqli_error($conexao));
    echo "Registro exluido com sucesso";
?>