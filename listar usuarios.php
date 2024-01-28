<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Listar Agendamento</h1><br>
<?php
	$sql = "SELECT * FROM salao";

	$res = $conn->query($sql);

	$qtd = $res->num_rows;

	if($qtd > 0) {
		print "<table class='table table-hover table-striped table-bordered'>";
			print"<tr>";
			print"<th>#</th>";
			print"<th>Nome</th>";
			print"<th>Telefone</th>";
			print"<th>Endereço</th>";
			print"<th>Data do Agendamento</th>";
			print"<th>Horario</th>";
			print"<th>Procedimento</th>";
			print"<th>Ações</th>";
			print"</tr>";
		while ($row = $res->fetch_object()) {
			print"<tr>";
			print"<td>".$row->id_cliente."</td>";
			print"<td>".$row->nome."</td>";
			print"<td>".$row->telefone."</td>"; 
			print"<td>".$row->endereco."</td>";
			print"<td>".$row->agendamento."</td>";
			print"<td>".$row->horas."</td>";
			print"<td>".$row->procedimento."</td>";
			print"<td>
					<button onclick=\"location.href='?page=editar&id=".$row->id_cliente."';\"class='btn btn-success'>Editar</button>

					<button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_cliente."';}else{false;}\"class='btn btn-danger'>Excluir</button>
				  </td>";
			print"</tr>";
		}
		print"</table>";
	}else{
		print "<p class='alert alert-danger'Não encontrou resultado!</p>";
	}
?>	
</div>