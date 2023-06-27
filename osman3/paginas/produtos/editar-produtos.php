<?php 
    $varCodProduto = $_GET["varCodProduto"];
    $sql = "SELECT * FROM dbprodutos WHERE codProduto={$varCodProduto}";
    $rs = mysqli_query($conexao,$sql) or die("ERROR ao recuperar os dados do registro. ".mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar Informações de um produto</h3>
</header>
<div>
    <form class="formulariocadastro" action="index.php?menuop=atualizar-produtos" method="post">
        <div>
            <label for="varCodProduto">Codigo do produto</label>
            <input type="text" name="varCodProduto" value="<?= $dados["codProduto"]?>">
        </div>
        <div>
            <label for="varNomeProduto">Nome do produto</label>
            <input type="text" name="varNomeProduto" value="<?= $dados["nomeProduto"]?>">
        </div>
        <div>
            <label for="varDescProduto">Descrição</label>
            <input type="text" name="varDescProduto" value="<?= $dados["descProduto"]?>">
        </div>
        <div>
            <label for="varPesoProduto">Peso</label>
            <input type="number" name="varPesoProduto" step=".01" value="<?= $dados["pesoProduto"]?>">
        </div>
        <div>
            <label for="varValorCompraProduto">Valor de Compra</label>
            <input type="number" name="varValorCompraProduto" step=".01" value="<?= $dados["valorCompraProduto"]?>">
        </div>
        <div>
            <label for="varPercentualLucroProduto">Lucro esperado em %</label>
            <input type="number" name="varPercentualLucroProduto" step=".01" value="<?= $dados["percentualLucroProduto"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" nome="btnAtualizar">
        </div>
    </form>
</div>