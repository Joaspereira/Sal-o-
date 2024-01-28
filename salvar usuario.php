<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$nome          		 = $_POST["nome"];
			$telefone      		 = $_POST["telefone"];
			$endereco     		 = $_POST["endereco"];
			$agendamento 	     = $_POST["agendamento"];
			$horas   			 = $_POST["horas"];
			$procedimento 	     = $_POST["procedimento"];

			$sql = "INSERT INTO salao (nome, telefone, endereco, agendamento, horas, procedimento) VALUES('{$nome}', '{$telefone}', '{$endereco}', '{$agendamento}', '{$horas}', '{$procedimento}')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possivel cadastrar');</script>";
				print"<script>location.href='?page=listar';</script>";	
			}
			break;

		case 'editar':
		    $nome          		 = $_POST["nome"];
			$telefone      		 = $_POST["telefone"];
			$endereco     		 = $_POST["endereco"];
			$agendamento 	     = $_POST["agendamento"];
			$horas   			 = $_POST["horas"];
			$procedimento 	     = $_POST["procedimento"];

			$sql = "UPDATE salao SET 
					    nome         ='{$nome}',
						telefone     ='{$telefone}',
						endereco     ='{$endereco}',
						agendamento  ='{$agendamento}',
						horas        ='{$horas}',
						procedimento ='{$procedimento}'
					WHERE
						id_cliente=".$_REQUEST["id_cliente"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possivel editar');</script>";
				print"<script>location.href='?page=listar';</script>";	
			}		
		break;
		
		case 'excluir':

			$sql = "DELETE FROM salao WHERE id_cliente=".$_REQUEST["id"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluido com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}else{
				print"<script>alert('Não foi possivel Excluir');</script>";
				print"<script>location.href='?page=listar';</script>";	
			}		

			break;
				

	}
