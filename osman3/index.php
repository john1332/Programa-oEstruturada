<?php 
include("db/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilizando.css">
</head>
<body>
    <header class="header1">
        <h1>Fabricantes e Produtos</h1>
        <nav>
            <a href="index.php?menuop=fabricantes">Fabricantes</a> |
            <a href="index.php?menuop=produtos">Produtos</a> |
            <a href="index.php?menuop=produtos-por-fabricante-barato">Especiais</a> 
        </nav>
    </header>
    <section>
        <main>
            <?php 
                $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"paginicial";
                switch ($menuop) {
                    //TODAS CHAMADAS RELACIONADAS AS PAGINAS DO PRODUTO
                    case 'produtos':
                        include("paginas/produtos/produtos.php");
                    break;
                    case 'cad-produtos':
                        include("paginas/produtos/cad-produtos.php");
                    break;
                    case 'inserir-produtos':
                        include("paginas/produtos/inserir-produtos.php");
                    break;
                    case 'editar-produtos':
                        include("paginas/produtos/editar-produtos.php");
                    break;
                    case 'atualizar-produtos':
                        include("paginas/produtos/atualizar-produtos.php");
                    break;
                    case 'excluir-produtos':
                        include("paginas/produtos/excluir-produtos.php");
                    break;
                    //TODAS CHAMADAS RELACINADAS A PAGINA ESPECIAL
                    case 'produtos-por-marca':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-marca.php");
                    break;
                    case 'produtos-por-estado':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-estado.php");
                    break;
                    case 'produtos-por-estado-caro':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-estado-caro.php");
                    break;
                    case 'produtos-por-fabricante-barato':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-fabricante-barato.php");
                    break;
                    case 'produtos-por-valor-asc':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-valor-asc.php");
                    break;
                    case 'produtos-por-valorlucro-asc':
                        include("paginas/especiais/especiais.php");
                        include("paginas/especiais/produtos-por-valorlucro-asc.php");
                    break;

                    //TODAS CHAMADAS RELACIONADAS AS PAGINAS DO FABRICANTE
                    case 'fabricantes':
                        include("paginas/fabricantes/fabricantes.php");
                    break;
                    case 'cad-fabricantes':
                        include("paginas/fabricantes/cad-fabricantes.php");
                    break;
                    case 'inserir-fabricantes':
                        include("paginas/fabricantes/inserir-fabricantes.php");
                    break;
                    case 'editar-fabricantes':
                        include("paginas/fabricantes/editar-fabricantes.php");
                    break;
                    case 'atualizar-fabricantes':
                        include("paginas/fabricantes/atualizar-fabricantes.php");
                    break;
                    case 'excluir-fabricantes':
                        include("paginas/fabricantes/excluir-fabricantes.php");
                    break;

                    
                    //PAGINA INICIAL
                    default:
                        include("paginas/paginicial/paginicial.php");
                    break;
                }
            ?>
        </main>
    </section>
</body>
</html>