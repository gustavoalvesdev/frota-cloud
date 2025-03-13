<?php 

class Motorista extends model {

	public function cadastrar($nome, $cpf, $cnh, $categoria_cnh, $vencimento_cnh, $telefone) {
		$sql = "INSERT INTO tbl_motoristas (nome, cpf, cnh, categoria_cnh, vencimento_cnh, telefone) VALUES (:nome, :cpf, :cnh, :categoria_cnh, :vencimento_cnh, :telefone)";

		$sql = $this->db->prepare($sql);

		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':cpf', $cpf);
		$sql->bindValue(':cnh', $cnh);
		$sql->bindValue(':categoria_cnh', $categoria_cnh);
		$sql->bindValue(':vencimento_cnh', $vencimento_cnh);
		$sql->bindValue(':telefone', $telefone);

		return $sql->execute();
	}

}
