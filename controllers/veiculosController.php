<?php
class veiculosController extends controller {

	public function index() {

		$dados = [];

		$this->loadTemplate('veiculos', $dados);

	}

	public function cadastrar() {
		$dados = [];

		$this->loadTemplate('veiculos_cadastrar', $dados);
	}

	public function cadastrarPost() {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			echo 'OPA';
		} else {
			die('Requisição Inválida! Permitido apenas POST');
		}
	}

}