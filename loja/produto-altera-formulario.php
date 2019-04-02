<?php require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("banco-categoria.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1>Alterando Produto</h1>

<form action="altera-produto.php" method="post">
	<input type="hidden" name="id" value="<?=$produto['id']?>">
	<table class="table">

            <?php include("formulario-base.php");?>

			<tr>
				<td>
					<button type="submit" class="btn btn-primary">Alterar</button>
				</td>
			</tr>

		</table>
	</form>

	<?php include("rodape.php") ?>