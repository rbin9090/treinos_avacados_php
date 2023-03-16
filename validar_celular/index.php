<?php
if (isset($_POST['action'])) {
	$telefone = $_POST['celular'];
	                                          //99977-9955

	$verify = preg_match('/^(\([0-9]{2}\)|)[0-9]{5}-[0-9]{4}$/', $telefone);
	if($verify){
		echo 'sucesso!';
	}else{
		echo "telefone inválido";
	
	}
}

?>



<!--vou testar se o formato de cep esta correto 99999 250-->

<form method="POST">
	
	<input type="text" name="celular" placeholder="telefone">
	<br>
	<input type="submit" name="action" value="ok">
</form>