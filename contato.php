<h1>Contato</h1>

<?php if ( isset($_POST["nome"]) ) : ?>
	<div class="alert alert-success">
		Dados enviados com sucesso, abaixo seguem os dados que você enviou
	</div>
	<dl>
		<dt>Nome</dt>
		<dd><?php echo $_POST["nome"]; ?></dd>
		<dt>E-mail</dt>
		<dd><?php echo $_POST["email"]; ?></dd>
		<dt>Assunto</dt>
		<dd><?php echo $_POST["assunto"]; ?></dd>
		<dt>Mensagem</dt>
		<dd><?php echo $_POST["mensagem"]; ?></dd>
	</dl>
<?php endif; ?>

<form method="post" action="?pagina=contato">
	<div class="form-group">
    	<label for="nome">Nome</label>
    	<input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
  	</div>
  	<div class="form-group">
    	<label for="email">Email</label>
    	<input type="email" name="email" class="form-control" id="email" placeholder="Email">
  	</div>
  	<div class="form-group">
    	<label for="assunto">Assunto</label>
    	<input type="text" name="assunto" class="form-control" id="assunto" placeholder="Assunto">
  	</div>
  	<div class="form-group">
    	<label for="mensagem">Mensagem</label>
    	<textarea name="mensagem" class="form-control" id="assunto" placeholder="Mensagem"></textarea>
  	</div>
  	<input type="submit" class="btn btn-default" value="Enviar" />
</form>