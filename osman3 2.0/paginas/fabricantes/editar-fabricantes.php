<?php 
    $varCodFabricante = $_GET["varCodFabricante"];
    $sql = "SELECT * FROM dbfabricantes WHERE codFabricante={$varCodFabricante}";
    $rs = mysqli_query($conexao,$sql) or die("ERROR ao recuperar os dados do registro. ".mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs);
?>
<header>
    <h3>Editar Informações de um fabricante</h3>
</header>
<div>
    <form class="formulariocadastro" action="index.php?menuop=atualizar-fabricantes" method="post">
        <div>
            <label for="varCodFabricante">Codigofabricante</label>
            <input type="text" name="varCodFabricante" value="<?=$dados["codFabricante"]?>">
        </div>
        <div>
            <label for="varMarcaFabricante">Nome da Marca</label>
            <input type="text" name="varMarcaFabricante" value="<?=$dados["marcaFabricante"]?>">
        </div>
        <div>
            <label for="varSiteFabricante">Site do fabricante</label>
            <input type="text" name="varSiteFabricante" value="<?=$dados["siteFabricante"]?>">
        </div>
        <div>
            <label for="varTelefoneFabricante">Telefone</label>
            <input type="text" name="varTelefoneFabricante" value="<?=$dados["telefoneFabricante"]?>">
        </div>
        <div>
            <label>Escolha uma estado</label>
            <select name="varFkCodEstado" id="" required>
                <option value="">Selecione um Estado</option>

                <?php 
            $sql = "SELECT * FROM dbestados WHERE 
            codEstado";

            $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
            
            while ($dados = mysqli_fetch_assoc($rs)){
                        
                ?>
                    <option title="<?=$dados["nomeEstado"]?>" value="<?=$dados["codEstado"]?>"><?=$dados["siglaEstado"]?></option>
                <?php 
                     };
                ?>

            </select>
            
        </div>
        <div>
            <input type="submit" value="Atualizar" nome="btnAtualizar">
        </div>
    </form>
</div>