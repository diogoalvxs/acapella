<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="style-compra.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Adere ao AcapellaPLUS</title>
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
    <div class="all">
    <div class="progress-checkout-container">
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Dados</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Pagamento</span>
        </div>
        <div class="progress-step-container">
            <div class="step-check"></div>
            <span class="step-title">Confirmação</span>
        </div>
    </div>
    
    <div class="form-container">
        <h2 class="form-title">Dados do cartão <i class="bi bi-credit-card"></i></h2>
        <form action="" class="checkout-form">
            <div class="input-line">
                <label for="name">Nome</label>
                <input type="text" name="name" id="name" placeholder="Nome e sobrenome">
            </div>
            <div class="input-line">
                <label for="name">Número do cartão</label>
                <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">
            </div>
            <div class="input-container">
                <div class="input-line">
                    <label for="name">Validade</label>
                    <input type="text" name="name" id="name" placeholder="ZZ-XX">
                </div>
                <div class="input-line">
                    <label for="name">CVC</label>
                    <input type="text" name="name" id="name" placeholder="***">
                </div>
            </div>
            <input type="button" value="Completar compra">
        </form>
    </div>
</div>
    <br>
    <br>
    <br>
    <br>
    <br>

</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>