<?php
$msg = "";

include 'db_conn.php';

if (isset($_GET['reset'])) {
    $code = $_GET['reset'];
    $query = $conn->prepare("SELECT * FROM users WHERE code = :code");
    $query->bindParam(':code', $code);
    $query->execute();

    if ($query->rowCount() > 0) {
        if (isset($_POST['submit'])) {
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm-password'];

            if ($password === $confirm_password) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                $query = $conn->prepare("UPDATE users SET password = :password, code = '' WHERE code = :code");
                $query->bindParam(':password', $hashed_password);
                $query->bindParam(':code', $code);

                if ($query->execute()) {
                    header("Location: login.php");
                    exit;
                } else {
                    $msg = "<div class='alert alert-danger'>Error updating password in the database.</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Passwords do not match.</div>";
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>The link is not valid.</div>";
    }
} else {
    header("Location: forgot-password.php");
    exit;
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
					<h2 class="title">Alterar a password</h2>
					<div class="input-field">
						<i class='bx bxs-lock-alt'></i>
						<input type="password" class="form-control" id="passField" name="password" placeholder="Nova password" required autofocus>
						<div class="eye">
						<i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i>
				</div>
					</div>
                    <div class="input-field">
						<i class='bx bxs-lock-alt'></i>
						<input type="password" class="confirm-password" name="confirm-password" placeholder="Confirma a password" required>
					</div>
					<button name="submit" class="btn" type="submit">Alterar </button>
				</form>
			</div>
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Redefenir a password</h3>
					<br>
					<div class="texto_desc">
						Insere a tua nova password! <br>E inicia sessão novamente para acessares a Acapella.
				</div>
				</div>
				<img src="img/reset.png" class="imagem" alt="" style="width: 80%;">
			</div>
	</div>
	<script>
		  document.getElementById("eye").addEventListener("click",function(){
        var x = document.getElementById("passField");
        if(x.type=="password"){
            x.type="text";
            this.classList.add("fa-eye");
            this.classList.remove("fa-eye-slash"); //script de ver a password
        }else{
            x.type="password";
            this.classList.remove("fa-eye");
            this.classList.add("fa-eye-slash");
        }
    });
	</script>
</body>
</html>
