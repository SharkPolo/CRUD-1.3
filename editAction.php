<?php
// Include the database connection file
require_once("dbConnection.php");

// Função para verificar se o e-mail é válido
function isValidEmail($email) {
    return preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email);
}

if (isset($_POST['update'])) {








// –-----------Adicionar  ----------–>
	// Escape special characters in string for use in SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$endereco = mysqli_real_escape_string($mysqli, $_POST['endereco']);
	$cidade = mysqli_real_escape_string($mysqli, $_POST['cidade']);
	$cep = mysqli_real_escape_string($mysqli, $_POST['cep']);




// –-----------Adicionar verificacao vazio ----------–>
	// Check for empty fields
	if (empty($name) || empty($age) || empty($email) || empty($endereco) || empty($cidade) || empty($cep) || !isValidEmail($email) || ($age <= 0) || !is_numeric($age)) {






    echo "Cadastro não realizado devido ao seguinte erro:<br/>";
    if (empty($name)) {
        echo "-Campo nome vazio.<br/>";
    }

    if (empty($age)) {
        echo "-Campo idade vazio.<br/>";
    } elseif (!is_numeric($age)) {
    echo "-A idade deve ser um número.<br/>";
	} elseif ($age <= 0) {
    echo "-A idade deve ser maior que zero.<br/>";
	}
    if (empty($email)) {
        echo "-Campo e-mail vazio.<br/>";
    } elseif (!isValidEmail($email)) {
        echo "-E-mail inválido.<br/>";
    }








    // –-----------Adicionar  ----------–>
    if (empty($endereco)) {
        echo "-Campo endereco vazio.<br/>";
    }
    if (empty($cidade)) {
        echo "-Campo cidade vazio.<br/>";
    }
    if (empty($cep)) {
        echo "-Campo cep vazio.<br/>";
    }

    // Show link to the previous page
    echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
}
 else { 
		// If all the fields are filled (not empty) 







// –-----------Adicionar  ----------–>
		// Insert data into database

		$result = mysqli_query($mysqli, "UPDATE usuarios SET `name` = '$name', `age` = '$age', `email` = '$email', `endereco` = '$endereco', `cidade` = '$cidade', `cep` = '$cep' WHERE `id` = $id");





		

		
		
		// Display success message
		echo "<p>Cadastro atualizado com sucesso!</p>";
		echo "<a href='index.php'>Voltar a pagina inicial</a>";
	}
}
?>