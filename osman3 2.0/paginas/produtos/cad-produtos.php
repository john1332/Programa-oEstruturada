<header>
    <h3>Cadastrar um Produto</h3>
</header>
<div>
    <form class="formulariocadastro" action="index.php?menuop=inserir-produtos" method="post">
        <div>
            <label for="varNomeProduto">Nome do produto</label>
            <input type="text" name="varNomeProduto" placeholder="Insira o nome" required>
        </div>
        <div>
            <label for="varDescProduto">Descrição</label>
            <input type="text" name="varDescProduto" placeholder="Insira a descrição" required>
        </div>
        <div>
            <label for="varPesoProduto">Peso</label>
            <input type="number" name="varPesoProduto" step=".01" placeholder="Em gramas" required>
        </div>
        <div>
            <label for="varValorCompraProduto">Valor de Compra</label>
            <input type="number" name="varValorCompraProduto" placeholder="Em reais" step=".01" required>
        </div>
        <div>
            <label for="varLucroPercentualProduto">Lucro esperado em %</label>
            <input type="number" name="varPercentualLucroProduto" step=".01" placeholder="quanto % voce deseja ganhar" required>
        </div>
        <div>
            <label>Escolha uma marca</label>
            <select name="varFkCodFabricante" id="" required>
                <option value="">Selecione uma Marca</option>

                <?php 
            $sql = "SELECT * FROM dbfabricantes WHERE 
            codFabricante";

            $rs = mysqli_query($conexao,$sql) or die("ERROR ao executar consulta".mysqli_error($conexao));
            
            while ($dados = mysqli_fetch_assoc($rs)){
                        
                ?>
                    <option value="<?=$dados["codFabricante"]?>"><?=$dados["marcaFabricante"]?></option>
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