<?php require_once("cabecalho.php"); ?>
<div class="row">
	<div class="col-sm-12 col-md-12 col-lg-12">
	<?php
	if ( isset($_GET["pagina"]) ) {
		switch ( $_GET["pagina"] ) {
			case 'empresa':
				require_once( "empresa.php" );
				break;
			case 'produtos':
				require_once( "produtos.php" );
				break;
			case 'servicos':
				require_once( "servicos.php" );
				break;
			case 'contato':
				require_once( "contato.php" );
				break;
			default:
				require_once( "404.php" );
		}
	} else {
		require_once( "home.php" );
	}
	?>
	</div>
</div>
<?php require_once("rodape.php"); ?>