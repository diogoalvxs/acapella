<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="button.css">
    <link rel="stylesheet" href="style-inicial.css">
    <link rel="stylesheet" href="css backup/style-cookies.css">
    <link rel="icon" type="image/x-icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css backup/style-barra.css">
    <title>Acapella - A plataforma de música totalmente Portuguesa</title>
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
                    <a href="session.php"><li>Home <span></span></li></a>
                    <a href="types.php"><li>Descobre</li></a>
                    <a href="mail_form.php"><li>Ajuda</li></a>
                </ul>
                <!--Search bar location-->
                <div class="user">
                    <div class="loginform">
            <a href="login.php"><button class="btn-criarform" id="sign-in-btn" width="30px" height="30px" style=" margin: 2px 0px 1px -170%;">Login</button></a>
        </div>
                </div>
            </nav>
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
            <div class="content">
                <h1>Joji</h1>
                <p>
                    Since I met you 
                    <br>
                    All the gloomy days just seem to shine a little more brightly
                    <br>
                    Consider what we've got 'cause I can never take you for granted
                    <br>
                    Is there another us on this whole planet?
                    <br>
                    Planet?
                </p>
                <div class="buttons">
                </div>
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
                        <img src="img/joji.jpg" alt="Joji" title="Joji" >
                    </li>
                    <li>
                        <img src="img/tylertc.jpg" alt="Tyler, The Creator" title="Tyler, The Creator" >
                    </li>
                    <li>
                        <img src="img/eminem.jpg" alt="Eminem" title="Eminem" >
                    </li>
                    <li>
                        <img src="img/sza.jpg" alt="SZA" title="SZA" >
                    </li>
                    <li>
                        <img src="img/cas.jpg" alt="Cigarettes After Sex" title="Cigarettes After Sex" >
                    </li>
                    <li>
                        <img src="img/popsmoke.jpg" alt="Pop Smoke" title="Pop Smoke" >
                    </li>
                    <li>
                        <img src="img/mac.jpg" alt="Mac Miller" title="Mac Miller" >
                    </li>
                    <li>
                        <img src="img/matue.jpg" alt="Matuê" title="Matuê" >
                    </li>
                    <li>
                        <img src="img/frankocean.jpg" alt="Frank Ocean" title="Frank Ocean" >
                    </li>
                    <li>
                        <img src="img/post.jpg" alt="Post Malone" title="Post Malone    " >
                    </li>
                    <li>
                        <img src="img/theweeknd.jpg" alt="The Weeknd" title="The Weeknd" >
                    </li>
                    <li>
                        <img src="img/stevelacy.jpg" alt="Steve Lacy" title="Steve Lacy" >
                    </li>
                    <li>
                        <img src="img/jcole.jpg" alt="J. Cole" title="J. Cole" >
                    </li>
                    <li>
                        <img src="img/josepinhal.jpg" alt="José Pinhal" title="José Pinhal">
                    </li>
                    <li>
                        <img src="img/arcticmonkeys.jpg" alt="Arctic Monkeys" title="Arctic Monkeys">
                    </li>
                </div>
            </div>
        </div>



<div class="cookies-all">
  <div class="wrapper">
    <img src="img/cookie.png" alt="">
    <div class="content">
      <h2>Política de Cookies</h2>
      <p>Usamos cookies para garantir que tenhas a melhor experiência no nosso site.</p>
      <div class="buttons">
        <button class="item">EU COMPREENDO</button>
        <a href="https://www.avg.com/pt/signal/what-are-cookies" class="item">SABER MAIS</a>
      </div>
    </div>
  </div></div>
  <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      document.cookie = "CookieBy=Diogo Alves; max-age="+60*60*24*30; //passado 1 mês o cookie sera desativado automaticamente
      if(document.cookie){ //se o cookie for definido
        cookieBox.classList.add("hide"); //esconder o popup de cookie
      }else{ //se o cookie não for definido enviar um aviso
        alert("Cookie não pode ser definido! Por favor, desbloqueie este site a partir da configuração de cookies do seu browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=Diogo Alves"); //nome ao checkar o cookie
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");//se o cookie for definido esconder o popup de cookies
  </script>


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
    <script src="barra.js"></script>
    <script src="app.js"></script>
</body>
</html>