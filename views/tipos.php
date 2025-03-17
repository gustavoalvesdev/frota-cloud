<div class="container">
	<div class="jumbotron">
		<h2 class="text-center">TODOS OS TIPOS DE VEÍCULO</h2>
		<!-- text-center -->
	</div>
	<!-- jumbotron -->

	<form>
		<div class="row"	>
			<div class="col-md-12">
				<div class="form-group">
					<label for="busca_tipo">Buscar por um tipo de veículo:</label>
					<input type="search" name="busca_tipo" class="form-control">
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
					<th>Tipo de Veículo</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($tipos as $tipo): ?>
					<tr>
						<td><?= $tipo['tipo'] ?></td>
						<td style="display: flex; gap: 10px;"><a href="#" class="btn btn-warning">Editar</a><a href="#" class="btn btn-danger">Excluir</a></td>
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