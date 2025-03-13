<div class="container">
	<header class="jumbotron">
		<h1 class="text-center">CADASTRAR VEÍCULO</h1>
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

	<form method="POST" action="<?= BASE_URL ?>veiculos/cadastrarPost">
		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="tipo">Tipo de Veículo:</label>
					<select name="tipo" id="tipo" class="form-control">
						<option value="1">CAMINHÃO</option>
						<option value="2">CAMIONETE</option>
						<option value="3">CARRO</option>
						<option value="4">MOTO</option>
					</select>
					<!-- tipo_veiculo -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="marca">Marca:</label>
					<select name="marca" id="marca" class="form-control">
						<option value="1">VOLVO</option>
						<option value="2">SCANIA</option>
						<option value="3">VOLKSWAGEN</option>
						<option value="4">MERCEDES</option>
					</select>
					<!-- marca -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
			<div class="col-md-4">
				<div class="form-group">
					<label for="modelo">Modelo:</label>
					<input type="text" name="modelo" id="modelo" class="form-control" maxlength="50">
					<!-- modelo -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-4 -->
			<div class="col-md-2">
				<div class="form-group">
					<label for="placa">Placa:</label>
					<input type="text" name="placa" id="placa" class="form-control" maxlength="10">
				</div>
			</div>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-2">
				<div class="form-group">
					<label for="ano">Ano:</label>
					<select name="ano" id="ano" class="form-control">
						<?php 
							$anoAtual = date('Y');
							for ($i = 1900; $i <= $anoAtual + 1; $i++):
						?>
							<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor; ?>
					</select>
					<!-- ano -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-2 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="peso">Peso:</label><br>
					<input type="number" name="peso" id="peso" class="form-control" placeholder="Peso em toneladas">
					<!-- peso -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-3 -->
			<div class="col-md-2">
				<div class="form-group">
					<label for="eixos">Número de Eixos:</label>
					<input type="number" name="eixos" id="eixos" class="form-control">
					<!-- eixos -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-2 -->
			<div class="col-md-5">
				<div class="form-group">
					<label for="chassi">Número do Chassi:</label>
					<input type="text" name="chassi" id="chassi" class="form-control" maxlength="30">
					<!-- chassi -->
				</div>
				<!-- form-group -->
			</div>
			<!-- col-md-5 -->
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="cor">Cor:</label>
					<input type="text" name="cor" id="cor" class="form-control" maxlength="30">
					<!-- cor -->
				</div>
				<!-- form-group -->
				
			</div>
			<!-- col-md-4 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="p_licenciamento">Primeiro Licenciamento:</label>
					<input type="date" name="p_licenciamento" id="p_licenciamento" class="form-control">
					<!-- p_licenciamento -->
				</div>
				<!-- form-group -->
				
			</div>
			<!-- col-md-3 -->
			<div class="col-md-3">
				<div class="form-group">
					<label for="p_licenciamento">Último Licenciamento:</label>
					<input type="date" name="u_licenciamento" id="u_licenciamento" class="form-control">
					<!-- u_licenciamento -->
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
					Cadastrar Veículo
				</button>
				<!-- cadastrar_veiculo -->
				&nbsp;&nbsp;
				<a href="<?= BASE_URL ?>veiculos" role="button" class="btn btn-info btn-lg">
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