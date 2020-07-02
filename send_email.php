<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';


$mailDestino = 'raislan@live.com'; 
$nome = 'raisla silva';	
$assunto = "Mensagem recebida do site";
$mensagem = "Recebemos uma mensagem no site <br/>
	<strong>Nome:</strong> $_POST[name]<br/>
	<strong>e-mail:</strong> $_POST[email]<br/>
	<strong>mensagem:</strong> $_POST[messagem]";


$mail = new PHPMailer();

$mail->IsSMTP(); 
$mail->CharSet = 'UTF-8';
$mail->True;
$mail->Host = "smtp.mailtrap.io"; // Servidor SMTP
$mail->SMTPSecure = "tls"; // conexão segura com TLS
$mail->Port = 2525; 
$mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
$mail->Username = "ea1e4f6a8c94b6"; // SMTP username
$mail->Password = "e5e4a1fe8931f3"; // SMTP password
$mail->From = "agendadigital-e125f1@inbox.mailtrap.io"; // From
$mail->FromName = "RDEV" ; // Nome de quem envia o email
$mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
$mail->WordWrap = 50; // Definir quebra de linha
$mail->IsHTML = true ; // Enviar como HTML
$mail->Subject = $assunto ; // Assunto
$mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
$mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML


if($mail->Send()) // Envia o email
{	
	header('location:index.php?status=success');
}else{
	header('location:index.php?status=erro');
}


?>