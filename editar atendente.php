<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Editar atendente</h1><br>
<?php
	$sql = "SELECT * FROM atendente WHERE id_atendente=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar atendente" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_atendente" value="<?php print $row->id_atendente; ?>">
	<div class="mb-3">
	<label>Nome do Atendente</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>"class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="telefone" name="telefone" value="<?php print $row->telefone; ?>"class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>CPF</label>
		<input type="telefone" name="cpf" value="<?php print $row->cpf; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>	
	</div> 
</form>
</div>