<?php

if (isset($_POST['envia_cotacao'])){
	$Nome_C = $_POST['Nome_C'];
	$emailC = $_POST['emailC'];
	$Empresa = $_POST['Empresa'];
	$Telefone = $_POST['Telefone'];
	$Mensagem = $_POST['Mensagem'];
	$AceitoReceberInformacoes = $_POST['AceitoReceberInformacoes'];

	$email_remetente = "comercial@viaacademy.com.br"; // deve ser uma conta de email do seu dominio 
	
	$email_destinatario = "comercialacademy@viahavok.com.br"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "[LOCAÇÃO] - Contato do site Viaacademy Locação - Cotação"; // Este será o assunto da mensagem

	$email_conteudo = "Nome = $Nome_C \n"; 
	$email_conteudo .= "E-mail = $emailC \n";
	$email_conteudo .= "Empresa = $Empresa \n";
	$email_conteudo .= "Telefone = $Telefone \n";
	$email_conteudo .= "Mensagem = $Mensagem \n";
	$email_conteudo .= "Aceito Receber Informacões = $AceitoReceberInformacoes \n";

	$email_headers = implode ( "\n",array ( "From: $Nome_C", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	// $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	
	if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
		echo '<script>window.location="https://locacao.viaacademy.com.br/mail_ok.php"</script>'; 
			} 
			else{ 
		echo '<script>window.location="https://locacao.viaacademy.com.br/mail_error.php"</script>'; } 
	}
?>

<!DOCTYPE html>
  <html>
<head>
    <title>Via Academy - Qualificação para Transformar Pessoas e Empresas</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600|Oswald:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/estilo.css?ver=1203201803" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="images/favicon.png" />
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>
<body data-spy="scroll" data-target="#scroll-spy">

<div class="primary-navigation">
	<div class="container">
		<div class="row">
			<p class="col s12 m7 l7">
				<span>Melhor e mais moderno centro de treinamentos do país</span>  <span>(11) <strong>99352-6551</strong> / (11) <strong>3385-1400</strong></span>
			</p>
			<ul class="col s12 m5 l5 right-align">
				<li class="menu-aluguel"><a href="https://locacao.viaacademy.com.br/" target="_blank">ALUGUEL DE SALAS</a></li>
				<li><a href="https://viaacademy.com.br/sobre" target="_blank">Sobre</a></li>
				<li><a href="index.php#section-clientes-e-parceiros">Clientes e Parceiros</a></li>
				<li><a href="index.php#section-contato">Contato</a></li>
			</ul>
		</div>
	</div>
</div>
<br clear="all">