<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$msg = "Nome: $nome<br>";
$msg .= "Email: $email<br>";
$msg .= "Telefone: $telefone<br>";
$msg .= "Mensagem: $mensagem<br>";

//configurações do email
$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'gamasouza.jonatas@gmail.com';
$mail->Password = 'Gabi16092012';
$mail->Port = 587;

//configurações do destinatário
$mail->setFrom('desenvolvimento@rssolucoesconsultoria.com', 'Desenvolvimento');
$mail->addReplyTo('no-reply@email.com.br');
$mail->addAddress('jonatasgama@rssolucoesconsultoria.com', 'Jonatas');

//configurações da mensgem
$mail->isHTML(true);
$mail->Subject = 'Novo Contato de Sistemas RS Consultoria';
$mail->Body    = $msg;

//envio de email

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}