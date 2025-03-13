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

}
