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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@3.2.0/font/bootstrap-icons.css">
</head>
<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
			<form class="shadow w-450 p-3" action="php/login.php" method="post">
					<h2 class="title">Log In</h2>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>
					<div class="input-field">
						<i class='bx bxs-user'></i>
						<input type="text" class="form-control" name="uname" placeholder="Nome de utilizador" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
					</div>
					<div class="input-field">
						<i class='bx bxs-lock-alt'></i>
						<input type="password" class="form-control" id="passField" name="pass" placeholder="Password">
						<div class="eye">
						<i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i>
				</div>
					</div>
					<div class="forgot_pass">
					 <p><a href="forgot-password.php">Esqueceste-te da password?</a></p>
					</div>
                    <div class="backhome">
                       <a href="acapella.php"><img class="backhome" src="img/seta.png"></a>
                    </div>
                    <button name="submit" name="submit" class="btn btn-primary" type="submit">Login</button>
				</form>
			</div>
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Novo aqui?</h3>
					<br>
					<div class="texto_desc">
						Cria uma conta! Fica conectado com a Acapella e recebe todos os benefícios que proporcionamos!
				</div>
					<br>
					<a href="index.php"><button class="btn transparent" id="sign-up-btn">Cria uma conta</button></a>
				</div>
				<img src="img/pc.png" class="imagem" alt="" style="width: 80%;">
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