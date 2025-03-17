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

}
