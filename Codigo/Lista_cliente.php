<?php
require_once ('funcoes.php');
$request = array_map('trim', $_REQUEST);
$request = filter_var_array(
  $request,
  [
    'Pesquisa' => FILTER_DEFAULT
  ]
);

$nome = $request['Pesquisa'];

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
  <main class="container" style="border: 1px solid black; max-width: 600px; margin-top: 20px ">
		    <h1> Lista de Clientes </h1>
				<form action="Lista_cliente" method="GET">
				<input name= "Pesquisa" type= "text" placeholder="Pequisar"></input><br><br>
				<input type= "submit" value= "Buscar"/><br><br><br></input>
			</form>

<?php
						if (empty($nome))
								{
										$clientes = ListaCliente();
								}
								else {
										$clientes = BuscarCliente($nome);
										}

						if ($clientes != null)
						{


  						echo "<h4>Listagem dos Clientes:</h4>";
  	          echo "<table border='1' bgcolor= '#BC8F8F'>";
  						echo "<tr>";
  						echo "<td>Nome</td>";
  						echo "<td>Telefone</td>";
  						echo "<td>E-mail</td>";
              echo "<td>Endereço</td>";
  						echo "<td>CPF</td>";
              echo "<td>CNPJ</td>";
  				   	echo "</tr>";

            	foreach($clientes as $c)
              {
    		          echo "<tr>";
    		          echo "<td>".$c['nome']."</td>";
    		          echo "<td>".$c['telefone']."</td>";
    		          echo "<td>".$c['email']."</td>";
                  echo "<td>".$c['endereco']."</td>";
    							echo "<td>".$c['cpf']."</td>";
                  echo "<td>".$c['cnpj']."</td>";

    		          echo "</tr>";
    		      }

              echo "</table>";
  					}

?>
 <a href ="clientespendenteslista.php"> Pagamentos Pendentes </a>
 <a href ="DadosNovoCliente.php">Cadastrar Cliente</a>
 <a href ="administrador.php">Voltar</a>


    </div>
</main>
	</body>
</html>
