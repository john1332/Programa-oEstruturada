<header>
    <h3>Escolha um modo de busca</h3>
</header>


<section class="BuscaEspecial">
    <div>        
        <button><a href="index.php?menuop=produtos-por-fabricante-barato">Fabricante com produto mais barato</a> </button>
    </div>
    <div>        
        <button><a href="index.php?menuop=produtos-por-estado-caro">Estado com produto mais caro</a> </button>
    </div>
    <div>        
        <form action="index.php?menuop=produtos-por-estado" method="post">
            <div>
                <select name="varFkCodEstado" id="" required>
                    <option value="">Selecione um estado</option>

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
                <input type="submit" value="Pesquisar">
            </div>
                        
        </form>
    </div>
    <div>        
        <form action="index.php?menuop=produtos-por-marca" method="post">
            <div>
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
                <input type="submit" value="Pesquisar">
            </div>

        </form>
    </div>
    <div>        
        <button><a href="index.php?menuop=produtos-por-valor-asc">Produto por valor ordem crescente</a> </button>
    </div>
    <div>        
        <button><a href="index.php?menuop=produtos-por-valorlucro-asc">Produto por valor(lucro) ordem crescente</a> </button>
    </div>
</section>