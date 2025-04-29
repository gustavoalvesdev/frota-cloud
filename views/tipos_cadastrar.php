<div class="container">
	<header class="jumbotron">
		<h1 class="text-center">CADASTRAR TIPO DE VEÍCULO</h1>
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

	<form method="POST" action="<?= BASE_URL ?>tipos/cadastrarPost">
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label for="tipo">Tipo de Veículo:</label>
					<input type="text" name="tipo" id="tipo" class="form-control" maxlength="50">
					<!-- modelo -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-6">
			
				<button type="submit" role="button" name="cadastrar_veiculo" id="cadastrar_veiculo" class="btn btn-success btn-lg">
					<img src="<?= BASE_URL ?>assets/images/veiculo-icon.png" class="veiculo_icon_form">&nbsp;
					Cadastrar Tipo
				</button>
				<!-- cadastrar_veiculo -->
				&nbsp;&nbsp;
				<a href="<?= BASE_URL ?>tipos" role="button" class="btn btn-info btn-lg">
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

