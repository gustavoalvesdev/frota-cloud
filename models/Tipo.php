<?php 

class Tipo extends model {

	public function listarTodos() {

		$tipos = [];

		$sql = "SELECT * FROM tbl_tipos_veiculo";
		$sql = $this->db->prepare($sql);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$tipos = $sql->fetchAll();
		}	

		return $tipos;

	}

	public function cadastrar($tipo) {

		$sql = "INSERT INTO tbl_tipos_veiculo (tipo) VALUES(:tipo)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(':tipo', $tipo);

		return $sql->execute();

	}

	public function buscar($id) {

		$tipo = [];

		$sql = "SELECT * FROM tbl_tipos_veiculo WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		return $sql->fetch();

	}

}