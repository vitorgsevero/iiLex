<!DOCTYPE html>
	<html>

	<head>
		<meta charset="utf-8">	
		<title>Cadastrando a Newsletter</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>

	<h1>Cadastro de Recebimento da Newsletter da iiLex</h1>

	<form action="news.php" method="post">

	<table>	<!--PRIMEIRO FORMULÁRIO-->

			<tr>
				<td>
					Informe seu nome:
				</td>

				<td>
					<input type="text" name="nome1" size="20" placeholder="Nome Completo" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe seu e-mail:
				</td>

				<td>
					<input type="text" name="email1" size="20" placeholder="Endereço de E-mail" required> 
				</td>
			</tr>

	</table>

	<table>	<!--SEGUNDO FORMULÁRIO-->

			<tr>
				<td>
					Informe seu nome:
				</td>

				<td>
					<input type="text" name="nome2" size="20" placeholder="Nome Completo" required> 
				</td>
			</tr>

			<tr>
				<td>
					Informe seu e-mail:
				</td>

				<td>
					<input type="text" name="email2" size="20" placeholder="Endereço de E-mail" required> 
				</td>
			</tr>

	</table>
	

	<table>
			<tr>
				<td> 
				</td>

				<td>
					<input type="submit" value="Assinar">
					<input type="reset" value="Limpar Valores">
				</td>

			</tr>
	</table>

		</form>	

	</body>

</html>
