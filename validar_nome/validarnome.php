<?php
if (isset($_POST['action'])) {
	$nome = $_POST['nome'];
	                                          //Fulana Felipa 



	$verify = preg_match('/^[A-Z]{1}[a-z]{1,} [A-Z]{1}[a-z]{1,}$/', $nome);
	if($verify){
		echo 'Nome Correto!';
	}else{
		echo "formato de Nome inválido";
	
	}
}

?>



<!--vou testar se o formato de cep esta correto 99999 250-->

<form method="POST">
	
	<input type="text" name="nome" placeholder="nome ">
	<br>
	<input type="submit" name="action" value="ok">
</form>