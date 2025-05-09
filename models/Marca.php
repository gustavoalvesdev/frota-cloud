<?php 

class Marca extends model {

	public function listarTodas() {

		$marcas = [];

		$sql = "SELECT * FROM tbl_marcas";
		$sql = $this->db->prepare($sql);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$marcas = $sql->fetchAll();
		}	

		return $marcas;

	}

	public function cadastrar($nome) {

		$sql = "INSERT INTO tbl_marcas (nome) VALUES(:nome)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(':nome', $nome);

		return $sql->execute();

	}

	public function buscaMarca($id) {

		$marca = [];

		$sql = "SELECT * FROM tbl_marcas WHERE  id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);

		$sql->execute();

		if ($sql->rowCount() > 0) {
			$marca = $sql->fetch();
		}

		return $marca;

	}

}
