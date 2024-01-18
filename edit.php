<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];





// –-----------Alterar nome tabela ----------–>
// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE id = $id");



// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);




// –-----------Adicionar ----------–>
$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
$endereco = $resultData['endereco'];
$cidade = $resultData['cidade'];
$cep = $resultData['cep'];












?>
<html>
<head>	
	<title>Edição</title>
</head>

<body>
    <h2>Editar cadastro</h2>
    
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">





			<tr> 
				<td>Nome</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr> 
				<td>Idade</td>
				<td><input type="text" name="age" value="<?php echo $age; ?>"></td>
			</tr>
			<tr> 
				<td>E-mail</td>
				<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
			</tr>


			<tr> 
				<td>Endereço</td>
				<td><input type="text" name="endereco" value="<?php echo $endereco; ?>"></td>
			</tr>

			<tr> 
				<td>Cidade</td>
				<td><input type="text" name="cidade" value="<?php echo $cidade; ?>"></td>
			</tr>

			<tr> 
				<td>CEP</td>
				<td><input type="text" name="cep" value="<?php echo $cep; ?>"></td>
			</tr>











			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Salvar"></td>
			</tr>
		</table>
	</form>
	<p>
	    <a href="index.php">Voltar</a>
    </p>
</body>
</html>
