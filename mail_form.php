<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;  // Importa a classe PHPMailer
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$msg = ""; // Inicializa a variável $msg para armazenar a mensagem de sucesso ou erro

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];  // Obtém o valor do campo "name" enviado via POST
    $email = $_POST["email"];  // Obtém o valor do campo "email" enviado via POST
    $subject = $_POST["subject"];  // Obtém o valor do campo "subject" enviado via POST
    $message = $_POST["message"];  // Obtém o valor do campo "message" enviado via POST

    require 'vendor/autoload.php';  // Requer o arquivo autoload.php que carrega as classes do PHPMailer
    $mail = new PHPMailer(true);  // Instancia um novo objeto PHPMailer

    try {
        $mail->isSMTP();  // Configura o uso do SMTP
        $mail->SMTPAuth = true;  // Habilita a autenticação SMTP
        $mail->Host = "smtp.gmail.com";  // Configura o host do servidor SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Configura a segurança do SMTP
        $mail->Port = 587;  // Configura a porta do servidor SMTP
        $mail->Username = "suport.acapella@gmail.com";  // Configura o nome de usuário do e-mail de envio
        $mail->Password = "itgwlorggdapwrty";  // Configura a senha do e-mail de envio

        $mail->setFrom($email, 'Acapella Support');  // Configura o remetente do e-mail
        $mail->addAddress("suport.acapella@gmail.com");  // Adiciona o destinatário do e-mail
        $mail->addReplyTo($email, $name);  // Configura o e-mail de resposta

        $mail->Subject = $subject;  // Configura o assunto do e-mail
        $mail->Body = $message;  // Configura o corpo do e-mail

        $mail->send();  // Envia o e-mail

        $msg = "<div class='alert alert-info'>Mail enviado, obrigado por entrar em contato.</div>";  // Define a mensagem de sucesso
    } catch (Exception $e) {
        $msg = "<div class='alert alert-danger'>Falha ao enviar o e-mail. Erro: {$mail->ErrorInfo}</div>";  // Define a mensagem de erro
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <title>Entra em contato</title>
    <link rel="stylesheet" type="text/css" href="style_mail_form.css">
    <link href="//fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
    <div class="bar">
        <nav>
                <ul>
                    <a href="session.php"><li>Home </li></a>
                    <a href="#"><li>Métodos de pagamento</li></a>
                    <a href="mail_form.php"><li>Contato</li></a>
                    <li>|</li>
                    <li><a href="profile.php"><img src="upload/<?=$_SESSION['pp']?>"></a></li>
                </ul>
        </nav>
    </div>
    <div class="container">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <h2>Entra em contato connosco</h2>
                <form method="POST">
                    <input type="text" class="field" name="name" id="name" placeholder="Nome" required>
                    <input type="email" class="field" name="email" id="email" placeholder="O teu e-mail" required>
                    <input type="text" class="field" name="subject" id="subject" placeholder="Assunto" required>
                    <textarea name="message" id="message" placeholder="Mensagem" class="field" required></textarea>
                    <button type="submit" class="btn">Enviar</button>
                    <br>
                    <div class="alert_text">
                    <?php echo $msg; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
