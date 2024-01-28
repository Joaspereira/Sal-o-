<div class="bg-success p-2 text-dark bg-opacity-25">
<h1>Cadastro de atendente</h1>
<form action="?page=salvar atendente" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
	<label>Nome do Atendente</label>
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
		<label>CPF</label>
		<input type="telefone" name="cpf" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>	
	</div> 
</form>
</div>