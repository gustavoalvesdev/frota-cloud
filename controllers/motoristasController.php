<?php 

class motoristasController extends controller {
	
	public function index() {
		$dados = [];

		$this->loadTemplate('motoristas', $dados);	
	}

	public function cadastrar() {
		$dados = [];

		$this->loadTemplate('motoristas_cadastrar', $dados);
	}

	public function cadastrarPost() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {

			$nome = addslashes($_POST['nome']);
			$cpf = addslashes($_POST['cpf']);
			$cnh = addslashes($_POST['cnh']);
			$categoria_cnh = addslashes($_POST['categoria_cnh']);
			$vencimento_cnh = addslashes($_POST['vencimento_cnh']);
			$telefone = addslashes($_POST['telefone']);

			$motorista = new Motorista();

			if ($motorista->cadastrar($nome, $cpf, $cnh, $categoria_cnh, $vencimento_cnh, $telefone)) {
				$_SESSION['msg_type'] = 'success';
				$_SESSION['msg'] = 'Motorista cadastrado com sucesso!';
			} else {
				$_SESSION['msg_type'] = 'danger';
				$_SESSION['msg'] = 'Falha ao cadastrar motorista!';
			}

			header('Location: ' . BASE_URL . 'motoristas/cadastrar');
			exit;

		} else {
			die('Requisição Inválida! Permitido apenas POST');
		}
	}
}
