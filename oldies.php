<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style-oldies.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css backup/style-barra.css">
    <title>Acapella - The Oldies</title>
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
                    <a href="types.php"><li>Descobre<span></span></li></a>
                    <a href="mail_form.php"><li>Ajuda</li></a>
                </ul>
                <div class="user">
                    <a href="profile.php"><img src="upload/<?=$_SESSION['pp']?>"></a>
                </div>
            </nav>
            <div class="content">

                <h1>Oldies but Goldies</h1>
                <p>
                    Músicas de sucesso que 
                    <br>
                    marcaram o século
                    <br>
                    <b>XX</b>
                </p>
            </div>
            <div class="barra">
                <form action="">
                <input type="search" id="search-input" required>
                <i class="fa fa-search"></i>
                <ul id="search-results">
                  <li><span>Matue - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>Joji - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>Steve Lacy - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>Blind Zero - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>Mac Miller - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>SZA - Perfil</span><a href="youtube.com"></a></li>
                  <li><span>Sainté - Perfil</span><a href="youtube.com"></a></li>
                </ul>
                </form>   
                </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Songs</h4>
                    <div class="btn_s">
                        <i class="bi bi-caret-left-fill" id="pop_song_left"></i>
                        <i class="bi bi-caret-right-fill"id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="22"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/1.jpg" alt="d4vd">
                    <i class="bi playListPlay bi-play-circle-fill" id="23"></i>
                        </div>
                        <h5>
                        Here with me <br>
                        <div class="subtitle">d4vd</div>
                    </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-caret-left-fill" id="pop_art_left"></i>
                        <i class="bi bi-caret-right-fill" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item Artists_bx">
                     <li>
                        <img src="img/guns.png" alt="Guns N' Roses" title="Guns N' Roses" >
                    </li>
                    <li>
                        <img src="img/beatles.jpg" alt="Beatles" title="Beatles" >
                    </li>
                    <li>
                        <img src="img/queen.jpg" alt="Queen" title="Queen" >
                    </li>
                    <li>
                        <img src="img/nirvana.jpg" alt="Nirvana" title="Nirvana" >
                    </li>
                    <li>
                        <img src="img/elton.jpg" alt="Elton John" title="Elton John" >
                    </li>
                    <li>
                        <img src="img/michaeljackson.jpg" alt="Michael Jackson" title="Michael Jackson" >
                    </li>
                    <li>
                        <img src="img/bonjovi.jpg" alt="Bon Jovi" title="Bon Jovi" >
                    </li>
                    <li>
                        <img src="img/bsb.jpg" alt="Backstreet Boys" title="Backstreet Boys" >
                    </li>
                    <li>
                        <img src="img/prince.jpg" alt="Prince" title="Prince" >
                    </li>
                    <li>
                        <img src="img/franksinatra.jpg" alt="Frank Sinatra" title="Frank Sinatra" >
                    </li>
                    <li>
                        <img src="img/tinaturner.jpg" alt="Tina Turner" title="Tina Turner" >
                    </li>
                    <li>
                        <img src="img/madonna.jpg" alt="Madonna" title="Madonna" >
                    </li>
                    <li>
                        <img src="img/u2.jpg" alt="U2" title="U2" >
                    </li>
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
    <script src="app-oldies.js"></script>
    <script src="barra.js"></script>
</body>
</html>



<?php }else {
	header("Location: login.php");
	exit;
} ?>