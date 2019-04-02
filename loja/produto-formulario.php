    <?php require_once("cabecalho.php");
    require_once("banco-categoria.php");

    verificaUsuario();

    //array associativa
    $produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
    $usado = "";

    $categorias = listaCategorias($conexao);
    ?>

    <h1>Formulário de Produto</h1>

    <form action="adiciona-produto.php" method="post">
        <table class="table">

            <?php include("formulario-base.php");?>

                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </td>
                </tr>

            </table>
        </form>

        <?php include("rodape.php") ?>