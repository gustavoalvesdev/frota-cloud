<?php
class veiculosController extends controller {

	public function index() {

		$dados = [];

		$veiculo = new Veiculo();


		$dados['veiculos'] = $veiculo->listarTodos();

		$this->loadTemplate('veiculos', $dados);

	}

	public function cadastrar() {
		$dados = [];

		$marcas = new Marca();
		$tipos = new Tipo();

		$dados['marcas'] = $marcas->listarTodas();
		$dados['tipos'] = $tipos->listarTodos();

		$this->loadTemplate('veiculos_cadastrar', $dados);
	}

	public function cadastrarPost() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$tipo = addslashes($_POST['tipo']);
			$marca = addslashes($_POST['marca']);
			$modelo = addslashes($_POST['modelo']);
			$placa = addslashes($_POST['placa']);
			$ano = addslashes($_POST['ano']);
			$renavam = addslashes($_POST['renavam']);
			$peso = addslashes($_POST['peso']);
			$eixos = addslashes($_POST['eixos']);
			$chassi = addslashes($_POST['chassi']);
			$cor = addslashes($_POST['cor']);
			$p_licenciamento = addslashes($_POST['p_licenciamento']);
			$u_licenciamento = addslashes($_POST['u_licenciamento']);

			$veiculo = new Veiculo();
			if($veiculo->cadastrar($tipo, $marca, $modelo, $placa, $ano, $renavam,	 $peso, $eixos, $chassi, $cor, $p_licenciamento, $u_licenciamento)) {
				$_SESSION['msg_type'] = 'success';
				$_SESSION['msg'] = 'Veículo cadastrado com sucesso!';
			} else {
				$_SESSION['msg_type'] = 'danger';
				$_SESSION['msg'] = 'Falha ao cadastrar veículo!';
			}

			header('Location: ' . BASE_URL . 'veiculos/cadastrar');
			exit;

		} else {
			die('Requisição Inválida! Permitido apenas POST');
		}
	}

	public function editar($id) {
		$dados = [];
		$veiculos = new Veiculo();
		$tipos = new Tipo();
		$marcas = new Marca();

		$dados['veiculo'] = $veiculos->buscar($id);
		$dados['tipos'] = $tipos->listarTodos();
		$dados['marcas'] = $marcas->listarTodas();

		$this->loadTemplate('veiculo_editar', $dados);
	}

}