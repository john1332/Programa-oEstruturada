<header>
    <h3>Cadastrar um fabricante</h3>
</header>
<div>
    <form class="formulariocadastro" action="index.php?menuop=inserir-fabricantes" method="post">
        <div>
            <label for="varMarcaFabricante">Nome da Marca</label>
            <input type="text" name="varMarcaFabricante" required>
        </div>
        <div>
            <label for="varSiteFabricante">Site do Fabricante</label>
            <input type="text" name="varSiteFabricante" required>
        </div>
        <div>
            <label for="varTelefoneFabricante">Telefone</label>
            <input type="text" name="varTelefoneFabricante" required>
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
            <input type="submit" value="Adicionar" nome="btnAdicionar">
        </div>
    </form>
</div>