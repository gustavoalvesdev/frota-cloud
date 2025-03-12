<?php
class homeController extends controller {

	public function index() {

		$dados = [];

		$this->loadTemplate('home', $dados);

	}

	

}