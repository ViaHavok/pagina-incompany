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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/estilo.css?ver=1203201803" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="icon" href="images/favicon.png" />
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mask.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>
</head>

<body>
	<div class="parallax-container parallaxHome">
		<div class="header_full">
			<div class="row header">
				<div class="row menu">
						<div class="container">
							<div class="col s12 m12 l4">
								<a href="https://viaacademy.com.br/" target="_blank" class="logo" title="Via Academy - Locação de Salas em São Paulo">Via Academy - Locação de Salas em São Paulo</a>
							</div>

							<div class="col s12 m12 l8 menu">
								<ul>
	    							<li><a target="_blank" href="https://viaacademy.com.br/sobre" title="Sobre">SOBRE</a></li>
						        	<li><a target="_blank" href="https://viaacademy.com.br/clientes-e-parceiros" title="Clientes e Parceiros">CLIENTES E PARCEIROS</a></li>
						        	<li><a href="#contato" title="Contato" class="waves-effect btn btn_contato">CONTATO</a></li>
							    </ul>
							</div>	
						</div>
				</div>

				<!-- MENU MOBILE -->
				<ul id="slide-out" class="side-nav">
					<li class="no-padding">
						<ul class="collapsible collapsible-accordion">
							<li><a target="_blank" href="https://viaacademy.com.br/sobre" title="Sobre">SOBRE</a></li>
							<li><a target="_blank" href="https://viaacademy.com.br/clientes-e-parceiros" title="Clientes e Parceiros">CLIENTES E PARCEIROS</a></li>
							<li><a href="#contato" title="Contato">CONTATO</a></li>
						</ul>
					</li>
				</ul>
				<a href="#" data-activates="slide-out" class="button-collapse display-none"><i class="material-icons">menu</i></a>

			</div>
		</div>
		
		<div class="row">
			<div class="container banner">
				<div class="col s12">
					<h2>Qualificação para Transformar Pessoas e Empresas</h2>
				</div>
			</div>
		</div>
        <div class="parallax"><img src="images/background.jpg"></div>
</div>


