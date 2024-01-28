<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Editar Usuário</h1><br>
<?php
	$sql = "SELECT * FROM salao WHERE id_cliente=".$_REQUEST["id"];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="id_cliente" value="<?php print $row->id_cliente; ?>">
	<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="telefone" name="telefone" value="<?php print $row->telefone; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco" value="<?php print $row->endereco; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data do Agendamento</label>
		<input type="Date" name="agendamento" value="<?php print $row->agendamento; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Horario</label>
		<input type="Time" name="horas" value="<?php print $row->horas; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<label>Procedimento</label>
		<input type="text" name="procedimento" value="<?php print $row->procedimento; ?>" class="form-control" >
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>	
	</div>
</form>
</div>