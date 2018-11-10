<?php
	session_start();

	if(array_key_exists('emailUsuarioLogado', $_SESSION))
	{
		header('Location: ../.php');
		exit();
	}

	$erros = null;

	if(array_key_exists('erros', $_SESSION))
	{
		$erros = $_SESSION['erros'];
		unset($_SESSION['erros']);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset= "utf-8"/>
    <title> SysGER </title>
		<?php require('ImagemDeFundo.css'); ?>

	</head>
	<body>
		<?php require('BarraNav.php'); ?>
    <div>
			<main class="container" style="border: 1px solid black;
															max-width: 600px;
															margin-top: 20px;
															border-radius:30px 30px 30px 30px;
															box-shadow: 2px 2px 2px">
		    <h1> Cadastrar Pagamentos </h1>

				<?php if($erros != null) { ?>
					<div>
						<p> ERRO:  </p>
						<?php foreach($erros as $msg)
						{
							echo "<p>$msg</p>";
						}
						?>
					</div>
				<?php } ?>

  <main>      <form action="Controladores/cadastroPag.php" method="POST">

							<label>Serviço:<input name="idServico" type="double" disabled value='7'/><br/><br/>
              <label>Valor:<input name="valor" type="double"required/><br/><br/>
              <label>Vencimento:<input name="dataVencimento" type="date" required/><br/><br/>
							<label>Data de Pago:<input name="dataPago" type="date" required/> <br/><br/>

            <input type="submit" value="Cadastrar"/>
</form>
</br></br>
				<a href ="administrador.php" class="btn btn-outline-dark">Voltar</a></br>
    </div>
</main>
	</body>
</html>
