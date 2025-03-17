<?php
class marcasController extends controller {

	public function index() {

		$dados = [];

		$marca = new Marca();
		$m = $marca->listarTodas();

		$dados['marcas'] = $m;

		$this->loadTemplate('marcas', $dados);

	}

	public function cadastrar() {
		$dados = [];
		$this->loadTemplate('marcas_cadastrar', $dados);

	}

	public function cadastrarPost() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$nome = addslashes($_POST['nome']);

			$marca = new Marca();
			if($marca->cadastrar($nome)) {
				$_SESSION['msg_type'] = 'success';
				$_SESSION['msg'] = 'Marca cadastrada com sucesso!';
			} else {
				$_SESSION['msg_type'] = 'danger';
				$_SESSION['msg'] = 'Falha ao cadastrar marca!';
			}

			header('Location: ' . BASE_URL . 'marcas/cadastrar');
			exit;

		} else {
			die('Requisição Inválida! Permitido apenas POST');
		}
	}
	

}