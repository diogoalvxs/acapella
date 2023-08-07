<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
	<title>Conecta-te com a Acapella</title>
	<link rel="stylesheet" type="text/css" href="css backup/login.css">
	<link rel="stylesheet" type="text/css" href="css backup/style.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link href="//fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">

			<form class="shadow w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post"
    	      enctype="multipart/form-data">

					<h2 class="title">Cria uma conta!</h2>
					<?php if(isset($_GET['error'])){ ?>
						<!--ALERTA DE ERRO-->
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
						<!--ALERTA DE ERRO-->
					<div class="input-field">
						<i class='bx bxs-envelope'></i>
						<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo (isset($_GET['email']))?$_GET['email']:"" ?>">
					</div>
					<div class="input-field">
						<i class='bx bxs-user'></i>
						<input type="text" class="form-control" name="uname" placeholder="Nome de utilizador" value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
					</div>
					<div class="input-field">
						<i class='bx bxs-lock-alt'></i>
						<input type="password" class="form-control" class="form-control" name="pass" id="password" placeholder="Password">
						<div class="eye">
						<i class="fa fa-eye-slash" id="eye" aria-hidden="true"></i>
				</div>
					</div>
					<br>
					<div class="mb-3">
					<label class="input-personalizado">
    <span class="botao-selecionar"><b>Seleciona a tua foto</b></span>
    <img class="imagem" />
    <input type="file" class="input-file" name="pp" accept="image/*">
  </label>
		  </div>
					<div class="forgot_pass">
					</div>
                    
					<button class="btn btn-primary" type="submit">CRIAR CONTA</button>
				</form>
			</div>
		</div>
		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
					<h3>Já tens uma conta?</h3>
					<br>
					<div class="texto_desc">
                        Faz login com a tua conta para teres acesso à Acapella e fica conectado ao mundo da música!
                </div>
					<br>
					<a href="login.php"><button class="btn transparent" id="sign-up-btn">Login</button></a>
				</div>
				<img src="img/login.png" class="imagem" alt="" >
			</div>
	</div>
	</Form>
	<script>
		  document.getElementById("eye").addEventListener("click",function(){
        var x = document.getElementById("password");
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
	<script>
		const $ = document.querySelector.bind(document);

const previewImg = $('.imagem');
const fileChooser = $('.input-file');

fileChooser.onchange = e => {
	const fileToUpload = e.target.files.item(0);  //script para mostrar a foto de perfil selecionada pelo utilizador 
	const reader = new FileReader();
	reader.onload = e => previewImg.src = e.target.result;
	reader.readAsDataURL(fileToUpload);
};
	</script>
</body>
</html>