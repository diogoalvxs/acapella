<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css backup/style-buy.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link href="//fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	<title>Acapella - PLUS</title>
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


    <div class="banner">
        <div class="texto_desc">
            <p><b>Adere ao Acapella</b></p>
            <h1><b>PLUS</b></h1>
            <div class="subdesc">
               <p> Apenas por 4€/mês! Cancela quando quiseres</p>
            </div>
        </div>
        <div class="button">
            <a href="pagamento.php"><button>ADERIR</button></a>
        </div>
    </div>
    <div class="why_titulo">
        <p><b>Porque deves aderir?</b></p>
    </div>
    <br>
    <div class="why">
    <div class="why_img1">
        <img src="img/download.png">
        <div class="desc1">
            <p><b>Download de músicas e podcasts</b></p>
        </div>
    </div>
    <div class="why_img2">
        <img src="img/ads.png">
        <div class="desc2">
            <p><b>Ouve música sem publicidade</b></p>
        </div>
    </div>
    <div class="why_img3">
        <img src="img/upload.png">
        <div class="desc3">
            <p><b>Faz upload das tuas músicas</b></p>
        </div>
    </div>
</div>
<br>
<br>
<br>
</body>
</html>
<?php }else {
    header("Location: login.php");
    exit;
} ?>