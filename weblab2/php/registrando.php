<?php 
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];


$text = "".$nome." / ".$sobrenome." / ".$email." / ".$mensagem."\n";

$arquivoNome = "registros.txt";
if(isset($_POST['enviar'])){
	if(is_writable($arquivoNome)){
		if(!$manejar = fopen($arquivoNome,'a')){
			echo "Não foi possivel abrir o arquivo (".$arquivoNome.")";
			exit();
		}
		if(fwrite($manejar, $text) === false){
			echo "Não foi possivel abrir o arquivo (".$arquivoNome.")";
			exit();
		}
		echo "Sucesso";
		fclose($manejar);
	}else{
		echo "Arquivo não existe";
	}
}
?>