<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];








//Alterar o nome da tabela
// Delete row from the database table
$result = mysqli_query($mysqli, "DELETE FROM usuarios WHERE id = $id");









echo "<p>Cadastro apagado com sucesso!</p>";
		echo "<a href='index.php'>Voltar para a pagina inicial</a>";
?>
</body>
</html>