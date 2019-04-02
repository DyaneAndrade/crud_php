<?php require_once("cabecalho.php");
require_once("banco-produto.php");

verificaUsuario();

?>
<table class="table table-striped table-bordered">
	<tr>
		<th>Nome</th>
		<th>Preço</th>
		<th>Descrição</th>
		<th>Categoria</th>
		<th>Usado</th>
		<th>Alterar </th>
		<th>Remover</th>
	</tr>
	<?php

	$produtos = listaProdutos($conexao);
	foreach($produtos as $produto) :

		if ($produto['usado'] == 0) {
			$setUsado = "Não";
		}else{
			$setUsado = "Sim";
		}
		?>
		<tr>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?= substr($produto['descricao'], 0, 25)?>...</td>
			<td><?= $produto['categoria_nome'] ?></td>
			<td><?=$setUsado?></td>
			<td>
				<a href="produto-altera-formulario.php?id=<?=$produto['id']?>">
				<button class="btn btn-primary">
					<span class="glyphicon glyphicon-edit" aria-hidden="true">
				</button>
				</a>
				</td>
				<td>
					<form action="remove-produto.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>" />
						<button class="btn btn-danger">
							<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
						</button>
					</form>
				</td>
			</tr>

			<?php
		endforeach
		?>
	</table>
	
	<?php include("rodape.php"); ?>