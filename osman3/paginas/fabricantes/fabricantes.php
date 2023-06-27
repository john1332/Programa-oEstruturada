<?php 
    $txt_pesquisa = (isset($_POST['txt_pesquisa']))?$_POST['txt_pesquisa']:"";
?>
<head>
    <style>
        .tabelaborda th,td{
            border: 1px solid;
        }
    </style>
</head>
<header>
    <h3>Fabricantes</h3>
</header>
<div>
    <a href="index.php?menuop=cad-fabricantes"><button>Adicionar Fabricante</button></a>
</div>
<div>
    <form action="index.php?menuop=fabricantes" method="post">
        <input type="text" name="txt_pesquisa" placeholder="Insira Id/Marca">
        <input type="submit" value="pesquisar">
    </form>
</div>
<table class="tabelaborda">
    <thead>
        <tr>
            <th>ID</th>
            <th>marca</th>
            <th>site</th>
            <th>telefone</th>
            <th>UF</th>
            <th>Edição</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $sql = "SELECT * FROM dbfabricantes WHERE 
            codFabricante='{$txt_pesquisa}'or marcaFabricante LIKE '%{$txt_pesquisa}%' ORDER BY marcaFabricante ASC
            ";

            $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));

            while ($dados = mysqli_fetch_assoc($rs)){
                $sql1 ="SELECT * FROM dbestados WHERE codEstado={$dados["fkCodEstado"]}";
                $rs1 = mysqli_query($conexao,$sql1) or die("ERROR ao executar consulta".mysqli_error($conexao));
                $dados1 = mysqli_fetch_assoc($rs1);
        ?>
        <tr>
            <td><?=$dados["codFabricante"]?></td>
            <td><?=$dados["marcaFabricante"]?></td>
            <td><?=$dados["siteFabricante"]?></td>
            <td><?=$dados["telefoneFabricante"]?></td>
            <td><?=$dados1["siglaEstado"]?></td>
            <td><a href="index.php?menuop=editar-fabricantes&varCodFabricante=<?=$dados["codFabricante"]?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-fabricantes&varCodFabricante=<?=$dados["codFabricante"]?>">Excluir</a></td>
        </tr>
        <?php 
            }
        ?>
    </tbody>
</table>
