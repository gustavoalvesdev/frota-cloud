<?php 

class Veiculo extends model {

	public function cadastrar($tipo, $marca, $modelo, $placa, $ano, $renavam, $peso, $eixos, $chassi, $cor, $p_licenciamento, $u_licenciamento) {

		$sql = "INSERT INTO tbl_veiculos (tipo, marca, modelo, placa, ano, renavam, peso, eixos, chassi, cor, p_licenciamento, u_licenciamento) VALUES(:tipo, :marca, :modelo, :placa, :ano, :renavam, :peso, :eixos, :chassi, :cor, :p_licenciamento, :u_licenciamento)";

		$sql = $this->db->prepare($sql);
		$sql->bindValue(':tipo', $tipo);
		$sql->bindValue(':marca', $marca);
		$sql->bindValue(':modelo', $modelo);
		$sql->bindValue(':placa', $placa);
		$sql->bindValue(':ano', $ano);
		$sql->bindValue(':renavam', $renavam);
		$sql->bindValue(':peso', $peso);
		$sql->bindValue(':eixos', $eixos);
		$sql->bindValue(':chassi', $chassi);
		$sql->bindValue(':cor', $cor);
		$sql->bindValue(':p_licenciamento', $p_licenciamento);
		$sql->bindValue(':u_licenciamento', $u_licenciamento);

		return $sql->execute();

	}

	public function listarTodos() {

		$veiculos = [];

		$sql = "SELECT * FROM tbl_veiculos";
		$sql = $this->db->prepare($sql);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$veiculos = $sql->fetchAll();
		}	

		return $veiculos;

	}

	public function buscar($id) {

		$veiculo = [];

		$sql = "SELECT * FROM tbl_veiculos WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$veiculo = $sql->fetch();
		}

		return $veiculo;

	}

	public function buscaTipoVeiculo($id) {

		$tipo = [];

		$sql = "SELECT * FROM tbl_tipos_veiculo WHERE  id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);

		$sql->execute();

		if ($sql->rowCount() > 0) {
			$tipo = $sql->fetch();
		}

		return $tipo;

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
