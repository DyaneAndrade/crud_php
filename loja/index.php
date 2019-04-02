<?php require_once("cabecalho.php"); ?>

	<h1>Bem vindo!</h1>

	<?php if(usuarioEstaLogado()) {?>
		<p class="text-success">Você está logado como <?=usuarioLogado()?>.</p>
		<?php
	} else { ?>
		<h2>Login</h2>
		<form action="login.php" method="post">
			<table class="table">
				<tr>
					<td>Email</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon" id="email">@</span>
							<input type="email" name="email" class="form-control" aria-describedby="email">
						</div>	
					</td>
				</tr>
				<tr>

					<td>Senha</td>
					<td>
						<div class="input-group">
							<span class="input-group-addon" id="senha"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
							<input type="password" name="senha" class="form-control" aria-describedby="senha">
						</div>	
					</td>
				</tr>
				<tr>
					<td><button class="btn btn-primary">Login</button></td>
				</tr>

			</table>
		</form>
	<?php
}
include("rodape.php"); ?>