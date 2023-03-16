<?php
if (isset($_POST['action'])) {
	$cep = $_POST['cep'];

	$verify = preg_match('/[0-9]{5}-[0-9]{3}$/', $cep);
	if($verify){
		echo 'sucesso!';
	}else{
		echo "cep inválido";
	
	}
}

?>



<!--vou testar se o formato de cep esta correto 99999 250-->

<form method="POST">
	
	<input type="text" name="cep">
	<br>
	<input type="submit" name="action" value="ok">
</form>