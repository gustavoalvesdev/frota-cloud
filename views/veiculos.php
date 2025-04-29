<div class="container">
	<div class="jumbotron">
		<h2 class="text-center">TODOS OS VEÍCULOS</h2>
		<!-- text-center -->
	</div>
	<!-- jumbotron -->

	<form>
		<div class="row"	>
			<div class="col-md-12">
				<div class="form-group">
					<label for="busca_veiculo">Buscar por um veículo:</label>
					<input type="search" name="busca_veiculo" class="form-control">
					<!-- form-control -->
					
				</div>
				<!-- form-group -->
				<input type="submit" class="btn btn-primary btn-lg" name="btn_buscar" value="Pesquisar">
				<!-- btn btn-primary btn-lg -->
			</div>
			<!-- col-md-12 -->
		</div>
		<!-- row -->
	</form>

	<div class="table-responsive">
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Ano</th>
					<th>RENAVAM</th>
					<th>Peso</th>
					<th>Eixos</th>
					<th>Chassi</th>
					<th>Cor</th>
					<th>1º Licenc.</th>
					<th>Últ. Licenc.</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($veiculos as $veiculo): ?>
					<tr>
						<?php 

							$v = new Veiculo();
							$tipo = $v->buscaTipoVeiculo($veiculo['tipo']);

						?>
						<td><?= $tipo['tipo'] ?></td>
						<?php 

							$v = new Veiculo();
							$marca = $v->buscaMarca($veiculo['marca']);

						?>
						<td><?= $marca['nome'] ?></td>
						<td><?= $veiculo['modelo'] ?></td>
						<td><?= $veiculo['placa'] ?></td>
						<td><?= $veiculo['ano'] ?></td>
						<td><?= $veiculo['renavam'] ?></td>
						<td><?= $veiculo['peso'] ?> ton.</td>
						<td><?= $veiculo['eixos'] ?></td>
						<td><?= $veiculo['chassi'] ?></td>
						<td><?= $veiculo['cor'] ?></td>
						<td><?= $veiculo['p_licenciamento'] ?></td>
						<td><?= $veiculo['u_licenciamento'] ?></td>
						<td style="display: flex; gap: 10px;"><a href="<?= BASE_URL ?>veiculos/editar/<?= $veiculo['id'] ?>" class="btn btn-warning">Editar</a><a href="#" class="btn btn-danger">Excluir</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<!-- table table-striped table-bordered -->
	</div>
	<!-- table-responsive -->

	<ul class="pagination">
		<li class="active"><a href="#">1</a></li>
		<!-- active -->
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
	</ul>
	<!-- pagination -->
</div>
<!-- container -->