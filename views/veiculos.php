<div class="container">
	<div class="jumbotron">
		<h1 class="text-center">TODOS OS VEÍCULOS</h1>
		<!-- text-center -->
	</div>
	<!-- jumbotron -->

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
						<td><?= $veiculo['tipo'] ?></td>
						<td><?= $veiculo['marca'] ?></td>
						<td><?= $veiculo['modelo'] ?></td>
						<td><?= $veiculo['placa'] ?></td>
						<td><?= $veiculo['ano'] ?></td>
						<td><?= $veiculo['renavam'] ?></td>
						<td><?= $veiculo['peso'] ?></td>
						<td><?= $veiculo['eixos'] ?></td>
						<td><?= $veiculo['chassi'] ?></td>
						<td><?= $veiculo['cor'] ?></td>
						<td><?= $veiculo['p_licenciamento'] ?></td>
						<td><?= $veiculo['u_licenciamento'] ?></td>
						<td style="display: flex; gap: 10px;"><a href="#" class="btn btn-warning">Editar</a><a href="#" class="btn btn-danger">Excluir</a></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<!-- table table-striped table-bordered -->
	</div>
	<!-- table-responsive -->
</div>
<!-- container -->