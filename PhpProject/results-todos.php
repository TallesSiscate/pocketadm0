﻿<?php
	include "connection.php";
?>
<html>

<head>
	<meta charset="UTF-8">
	<title>Resutados de Pesquisa</title>
</head>

<body>
<?php
	$sql = mysql_query("SELECT * FROM usuariostb"); // = igual ao que o usuário digitou que no caso está dentro da ariável buscar
	$row = @mysql_num_rows($sql); // @mysql_num_rows PRECISA DO @   // a contagem no banco de dados é feita pelo row, uma variável que encontre o que estamos procurando no banco de dados, aí daremos um resutado ou uma mensagem de erro
	if( $row > 0 ) {
		while( $linha = mysql_fetch_array($sql) ) {
			$nome = $linha['nome']; // = $linha...
			$senha = $linha['senha']; // = $linha...
			$id = $linha['id']; // = $linha...
			echo "<br />";
			echo "<strong>Nome: </strong>".@$nome; // o @ é para que não gere um erro pq a variável ainda não foi recebida caso acesse diretamente
			echo "<br /><br />"; // <br /> ===>> quebra de linha
			echo "<strong>Senha: </strong>".@$senha;
			echo "<br /><br />";
			echo "<strong>Id: </strong>".@$id;
			echo "<br /><br /><hr />"; // <hr /> ===>> linha divisória
		}
	} else {
		echo "Desculpe, nenhum usuário foi encontrado!";
	}
?>
</body>

</html>