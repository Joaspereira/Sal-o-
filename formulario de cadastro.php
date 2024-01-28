<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Formulário de Agendamento</h1>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">	
	<div class="mb-3">
	<label>Nome</label>
	<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Telefone</label>
		<input type="telefone" name="telefone" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereco" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data do Agendamento</label>
		<input type="Date" name="agendamento" class="form-control">
	</div>
	<div class="mb-3">
		<label>Horario</label>
		<input type="Time" name="horas" class="form-control">
	</div>
	<div class="mb-3">
		<label>Procedimento</label>
		<input type="text" name="procedimento" class="form-control" >
	</div>
	<div class="mb-3">
		<button type="submit"class="btn btn-primary">Enviar</button>	
	</div>
</form>
</div>