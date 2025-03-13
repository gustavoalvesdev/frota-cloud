<div class="container">
	<header class="jumbotron">
		<h1 class="text-center">CADASTRAR MOTORISTA</h1>
		<!-- text-center -->
	</header>
	<!-- jumbotron -->

	<?php if (isset($_SESSION['msg_type']) && isset($_SESSION['msg'])): ?>

		<div class="alert alert-<?= $_SESSION['msg_type'] ?> alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong><?= ($_SESSION['msg_type'] == 'success') ? 'Ótimo!' : 'Atenção!' ?></strong>
			<?= $_SESSION['msg'] ?>
			<?php unset($_SESSION['msg']); unset($_SESSION['msg_type']); ?>
		</div>

	<?php endif; ?>

	<form method="POST" action="<?= BASE_URL ?>motoristas/cadastrarPost">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="nome">Nome do Motorista:</label>
					<input type="text" name="nome" id="nome" class="form-control" maxlength="140">
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-5 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="cpf">CPF:</label>
					<input type="text" name="cpf" id="cpf" class="form-control" maxlength="14">
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="cnh">CNH:</label>
					<input type="text" name="cnh" id="cnh" class="form-control" maxlength="11">
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
			<div class="col-md-2">
				<div class="form-group">
					<label for="categoria_cnh">Categoria CNH:</label>
					<select name="categoria_cnh" id="categoria_cnh" class="form-control">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="C">C</option>
						<option value="D">D</option>
						<option value="E">E</option>
					</select>
					<!-- cnh -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-2 -->
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<label for="vencimento_cnh">Vencimento da CNH:</label>
					<input type="date" name="vencimento_cnh" id="vencimento_cnh" class="form-control">
					<!-- vencimento_cnh -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-2 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="telefone">Telefone:</label><br>
					<input type="text" name="telefone" id="telefone" class="form-control" maxlength="20">
					<!-- telefone -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-6">
			
				<button type="submit" role="button" name="cadastrar_veiculo" id="cadastrar_veiculo" class="btn btn-success btn-lg">
					<img src="<?= BASE_URL ?>assets/images/driver-icon.png" class="veiculo_icon_form">&nbsp;
					Cadastrar Motorista
				</button>
				<!-- cadastrar_veiculo -->
				&nbsp;&nbsp;
				<a href="<?= BASE_URL ?>motoristas" role="button" class="btn btn-info btn-lg">
					<img src="<?= BASE_URL ?>assets/images/back-icon.png" class="veiculo_icon_form">&nbsp;
					Voltar
				</a>
				<!-- btn btn-secondary -->
			</div>
			<!-- col-md-6 -->
		
		
		</div>
		<!-- row -->
	</form>
</div>
<!-- container -->