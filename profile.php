<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css backup/style-profile.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Acapella - A tua conta</title>
</head>
<body>
    <header>
        <div class="menu_side">
            <h1>Acapella™</h1>
            <div class="playlist">
                <!--"Active" para na aba selecionada-->
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Últimas ouvidas</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i>Recomendadas</h4>
            </div>
            <div class="menu_song">
                <li class="songItem">
                    <span>01</span>
                    <img src="img/1.jpg" alt="Joji">
                    <h5>
                        Like You Do
                        <div class="subtitle">Joji</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="img/2.jpg" alt="Lola Amour">
                    <h5>
                        Fallen
                        <div class="subtitle">Lola Amour</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="img/3.jpg" alt="Central CEE">
                    <h5>
                        LET GO
                        <div class="subtitle">Central CEE</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="img/4.jpg" alt="Stephen Sanchez">
                    <h5>
                        I Want You
                        <div class="subtitle">Stephen Sanchez</div>
                        </h5>
                        <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="img/5.jpg" alt="Steve Lacy">
                    <h5>
                        Dark Red
                        <div class="subtitle">Steve Lacy</div>
                       </h5> 
                       <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="img/6.jpg" alt="Matuê">
                    <h5>
                        Lugar Distante
                        <div class="subtitle">Matuê</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="img/7.jpg" alt="d4vd">
                    <h5>
                        Here with me 
                        <div class="subtitle">d4vd</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="img/8.jpg" alt="Frank Ocean">
                    <h5>
                        Ivy 
                        <div class="subtitle">Frank Ocean</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                </li>
                <li class="songItem">
                    <span>09</span>
                    <img src="img/9.jpg" alt="Joji">
                    <h5>
                        Die For You 
                        <div class="subtitle">Joji</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                </li>
            </div>
        </div>

        <div class="song_side">
            <nav>
                <ul>
                    <!--"<span>" para a aba selecionada-->
                    <a href="session.php"><li>Home</li></a>
                    <a href="types.php"><li>Descobre</li></a>
                    <a href="mail_form.php"><li>Ajuda</li></a>
                </ul>
            </nav>
            <div class="content">
                <h1>O TEU PERFIL</h1>
            </div>

            <div class="popular_song">
        <div class="container_profile">
                <div class="img_profile">
    		<img src="upload/<?=$_SESSION['pp']?>">
                </div>
                <div class="nome_profile">
                <h3 class="display-4 ">O teu email: <br><?=$_SESSION['email']?></h3>
                </div>
                <a href="logout.php"><button class="btn transparent" id="sign-up-btn">Logout</button></a>
        </div>


            </div>
        </div>

        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/1.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                Like You Do
                <div class="subtitle">Joji</div>
            </h5>
            <div class="icon">
                <i class=""></i>
                <i class="bi bi-skip-start-fill" id="back" ></i> 
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next" ></i>  
                <a href="buy.php"><i class="bi bi-cloud-arrow-down-fill" id="download_music"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon" ></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>

    </header>
    <script src="app-podcasts.js"></script>
</body>
</html>


<?php }else {
	header("Location: login.php");
	exit;
} ?>