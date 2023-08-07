<?php
session_start();
if (isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: welcome.php");
    die();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
include 'db_conn.php';
$msg = "";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $code = md5(rand());

    // Prepara a consulta para verificar se o email existe no banco de dados
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        // Email encontrado no banco de dados, atualiza o código de redefinição de senha
        $stmt = $conn->prepare("UPDATE users SET code = ? WHERE email = ?");
        $stmt->execute([$code, $email]);

        if ($stmt->rowCount() > 0) {
            // Envio de email com o link de redefinição
            echo "<div style='display: none;'>";
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'suport.acapella@gmail.com';                     //SMTP username
                $mail->Password   = 'itgwlorggdapwrty';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $mail->setFrom('suport.acapella@gmail.com');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = 'Alterar a senha';
                $mail->Body = 'Clica no link para redefinir a tua senha: <b><a href="http://localhost/acapella/change-password.php?reset='.$code.'">http://localhost/acapella/change-password.php?reset='.$code.'</a></b>';

                $mail->send();
                echo 'Email enviado!';
            } catch (Exception $e) {
                echo "Erro: {$mail->ErrorInfo}";
            }
            echo "</div>";
            $msg = "<div class='alert alert-info'>Enviamos um link para o teu email!</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>$email - Esse email não está associado a uma conta!</div>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
	<title>Conecta-te com a Acapella</title>
	<link rel="stylesheet" type="text/css" href="css backup/login.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link href="//fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form action="" class="sign-in-form" method="post">
					<h2 class="title">Insere o teu email</h2> 
                    <?php echo $msg;?>
					<div class="input-field">
						<i class='bx bxs-envelope'></i>
						<input type="email" class="email" name="email" placeholder="Email" required>
					</div>
                    <div class="forgot_pass">
					 <p>Voltar ao <a href="login.php">Login</a></p>
					</div>
					<button name="submit" class="btn" type="submit">enviar link</button>
				</form>
			</div>
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Alterar a password</h3>
					<br>
					<div class="texto_desc">
						Insere o teu email! Vamos enviar-te um link para alterares a tua password.
				</div>
				</div>
				<img src="img/code.png" class="imagem" alt="">
			</div>
	</div>
</body>
</html>
