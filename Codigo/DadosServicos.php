<?php
?>
!DOCTYPE html>
<html>
	<head>
		<meta charset= "utf-8"/>
    <title> SysGER </title>
		<style>

      h1 {Color: black; padding-left: 50px;}
      body { background-color: #0A0A2A; }
      div { background-color: #F8E0F7;
				margin-left: 500px;
				margin-top: 100px;
				margin-right:500px;
				margin-bottom: 15px;
				padding: 20px;
				border { background-color: black;}}
      form{padding: 50px; padding-top: 10px;}
       {
      background-color: #4CAF50;
        border: none;
        color: green;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        }
      .azul{
				background-color: #A9D0F5;
				padding-left: 65px;
				padding-right: 68px;
				padding-bottom: 5px;
      }
		</style>
	</head>
	<body>
    <div>
		    <h1> Cadastrar Novos Serviços </h1>

        <form action="Controladores/cadastroServico.php" method="POST">

              <label>Serviço:
								<select name="Tiposervico">
								<option></option>
								<option value="veiculo">Veiculo</option>
								<option value="celular">Celular</option>
							</select><br><br>
<<<<<<< HEAD
							<label>Cpf/cnpj do cliente:<input name="CPF/CNPJ" type="text" minlength="1" maxlength="100" required/><br/><br/>
							<label>Cpf do Gerenciador:<input name="CPFgerente" type="text" minlength="1" maxlength="100" required/><br/><br/>
=======
							<label>Cpf/cnpj do cliente:<input name="cpf/cnpj" type="text" minlength="11" maxlength="14" required/><br/><br/>
							<label>Cpf do Gerenciador:<input name="CpfGerenciador" type="text" minlength="1'" maxlength="11" required/><br/><br/>
>>>>>>> aa326d81c53e920b94045e46467e794d51216159
							<label>Data do contrato:<input name="dataContrato" type="date" required/><br/><br/>
              <label>Data de vencimento:<input name="diaVenc" type="date" required/><br/><br/>
						  <label>Valor do serviço:<input name="Valor" type="double" required/><br/><br/>

							<!--<form action= "Controladores/cadastroVeículo" method= "POST">
						<label>Placa do veículo:<input name="placa" type="text" minlength="7" maxlength="30" required/><br/><br/>
						<label>Cor:<input name="cor" type="text" minlength="1" maxlength="30" required/><br/><br/>
						<label>Ano:<input name="ano" type="date" required/><br/><br/>
						<label>Número do rastreador:<input name="numRastreador" type="text" minlength="11" maxlength="11" required/><br/><br/>
						<label>Modelo:<input name="modelo" type="text" minlength="1" maxlength="30" required/><br/><br/>

						</form>-->

						<!--<form action= "Controladores/cadastroCelular" method= "POST">
					<label>Número do Celular:<input name="numero" type="text" minlength="8" maxlength="30" required/><br/><br/>
					<label>Email:<input name="email" type="text" minlength="1" maxlength="100" required/><br/><br/>

					</form>-->

						 <input type="submit" value="Cadastrar"/><br><br>
						 <input type="reset" value="Cancelar" /><br>





    </form>
        </div>

    	</body>
    </html>
