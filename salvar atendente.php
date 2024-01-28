<div class="bg-success p-2 text-dark bg-opacity-25">
<?php
	switch (@$_REQUEST["acao"]) {
		case 'cadastrar':
			$nome          		 = $_POST["nome"];
			$telefone      		 = $_POST["telefone"];
			$endereco     		 = $_POST["endereco"];
			$cpf 	             = $_POST["cpf"];

			$sql = "INSERT INTO atendente (nome, telefone, endereco, cpf) VALUES ('{$nome}', '{$telefone}', '{$endereco}', '{$cpf}')";
			
			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=listar atendente';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=listar atendente';</script>";
			}
		break;

		case 'editar':
		    $nome          		 = $_POST["nome"];
			$telefone      		 = $_POST["telefone"];
			$endereco     		 = $_POST["endereco"];
			$cpf 	             = $_POST["cpf"];

			$sql = "UPDATE atendente SET 
					    nome        ='{$nome}',
						telefone    ='{$telefone}',
						endereco    ='{$endereco}',
						agendamento ='{$cpf}'
					WHERE
						id_atendente=".$_REQUEST["id_atendente"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=listar atendente';</script>";
			}else{
				print"<script>alert('Não foi possivel editar');</script>";
				print"<script>location.href='?page=listar atendente';</script>";	
			}		
		break;

		case 'excluir':

			$sql = "DELETE FROM atendente WHERE id_atendente=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluido com sucesso!');</script>";
				print "<script>location.href='?page=listar atendente';</script>";
			}else{
				print"<script>alert('Não foi possivel Excluir');</script>";
				print"<script>location.href='?page=listar atendente';</script>";	
			}		

			break;
				

	}