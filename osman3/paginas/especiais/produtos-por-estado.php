<header>
    <h3>Pesquisar produtos por Estado</h3>
</header>


    <?php 
        $varFkCodEstado = $_POST["varFkCodEstado"];
        $sql = "SELECT siglaEstado FROM dbestados WHERE 
        codEstado={$varFkCodEstado}";
        $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
        $dados = mysqli_fetch_assoc($rs);
    ?>
<h3>Produtos Localizados na região de: <?=$dados["siglaEstado"]?></h3>


<table class="tabelaborda">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrioção</th>
            <th>Peso em gramas</th>
            <th>Valor de compra R$</th>
            <th>Valor de venda R$</th>
            <th>lucro R$</th>
            <th>lucro em %</th>
            <th>Edição</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $varFkCodEstado = $_POST["varFkCodEstado"];
            $sql = "SELECT * FROM dbprodutos WHERE 
            fkCodEstado={$varFkCodEstado}";
            $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
            while ($dados = mysqli_fetch_assoc($rs)){
        ?>
        <tr>
            <td><?=$dados["codProduto"]?></td>
            <td><?=$dados["nomeProduto"]?></td>
            <td><?=$dados["descProduto"]?></td>
            <td><?=$dados["pesoProduto"]?></td>
            <td><?=$dados["valorCompraProduto"]?></td>
            <td><?=$dados["valorVendaProduto"]?></td>
            <td><?=$dados["valorLucroProduto"]?></td>
            <td><?=$dados["percentualLucroProduto"]?></td>
            <td><a href="index.php?menuop=editar-produtos&varCodProduto=<?=$dados["codProduto"]?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-produtos&varCodProduto=<?=$dados["codProduto"]?>">Excluir</a></td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>
