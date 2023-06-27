
<header>
    <h3>Fabricante(s) com o(s) Produto(s) mais barato(s)</h3>
</header>


<table class="tabelaborda">
    <thead>
        <tr>
            <th>Fabricante</th>
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
            $sql = "SELECT * FROM dbprodutos WHERE valorCompraProduto = (SELECT min(valorCompraProduto) FROM dbprodutos)";

            $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
            
            while ($dados = mysqli_fetch_assoc($rs)){
                $sql1 ="SELECT * FROM dbfabricantes WHERE codFabricante={$dados["fkCodFabricante"]}";
                $rs1 = mysqli_query($conexao,$sql1) or die("ERROR ao executar consulta".mysqli_error($conexao));
                $dados1 = mysqli_fetch_assoc($rs1);
                
        ?>
        <tr>
            <td><?=$dados1["marcaFabricante"] ?></td>
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