<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Lista de Atendente</h1>
<?php
	$sql = "SELECT * FROM atendente";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print"<tr>";
			print"<th>#</th>";
			print"<th>Nome</th>";
			print"<th>Telefone</th>";
			print"<th>Endereço</th>";
			print"<th>CPF</th>";
			print"<th>Ações</th>";
			print"</tr>";
		while ($row = $res->fetch_object()) {
			print"<tr>";
			print"<td>".$row->id_atendente."</td>";
			print"<td>".$row->nome."</td>";
			print"<td>".$row->telefone."</td>"; 
			print"<td>".$row->endereco."</td>";
			print"<td>".$row->cpf."</td>";
			print"<td>
					<button onclick=\"location.href='?page=editar atendente&id=".$row->id_atendente."';\"class='btn btn-success'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar atendente&acao=excluir&id=".$row->id_atendente."';}else{false;}\"class='btn btn-danger'>Excluir</button>
				  </td>";
			print"</tr>";
		}
		print"</table>";
	}else{
		print "<p class='alert alert-danger'Não encontrou resultado!</p>";
	}
?>	
</div>