<header>
    <h3>Excluir Produto</h3>
</header>

<?php 
    $varCodProduto = mysqli_real_escape_string($conexao,$_GET["varCodProduto"]);
    $sql = "DELETE FROM dbProdutos WHERE codProduto = '{$varCodProduto}'";

    mysqli_query($conexao,$sql) or die("ERROR ao excluir o produto. ". mysqli_error($conexao));
    echo "Registro exluido com sucesso";
?>