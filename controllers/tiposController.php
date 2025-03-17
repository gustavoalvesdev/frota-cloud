<?php
class tiposController extends controller {

	public function index() {

		$dados = [];

		$tipo = new Tipo();
		$t = $tipo->listarTodos();

		$dados['tipos'] = $t;

		$this->loadTemplate('tipos', $dados);

	}

	public function cadastrar() {
		$dados = [];
		$this->loadTemplate('tipos_cadastrar', $dados);

	}

	public function cadastrarPost() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$tipo = addslashes($_POST['tipo']);

			$t = new Tipo();
			if($t->cadastrar($tipo)) {
				$_SESSION['msg_type'] = 'success';
				$_SESSION['msg'] = 'Tipo de veículo cadastrado com sucesso!';
			} else {
				$_SESSION['msg_type'] = 'danger';
				$_SESSION['msg'] = 'Falha ao cadastrar tipo de veículo!';
			}

			header('Location: ' . BASE_URL . 'tipos/cadastrar');
			exit;

		} else {
			die('Requisição Inválida! Permitido apenas POST');
		}
	}
	

}