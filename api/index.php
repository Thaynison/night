<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Night Roleplay | O melhor servidor de RP da América Latina</title>
    <link href="/api/styles/style.css" rel="stylesheet" type="text/css" />    
    <link href="/api/styles/avisos.css" rel="stylesheet" type="text/css" />    
    <link rel="icon" href="https://media.discordapp.net/attachments/1241831693791531048/1241832048222801961/Prancheta_4300x-8.png?ex=6652e1f8&is=66519078&hm=44536cbb0a1b20ecb80e4bf0bc7323c56c2366dbdc07587b52920a407f6f874a&=&format=webp&quality=lossless&width=810&height=810">
</head>
<body>
    <audio autoplay loop id="music">
        <source src="audio.mp3" type="audio/mpeg">
    </audio>

    <span>

        <section id="loginDiscord" style="display: none;">
            <div class="aviso-discord">
                <img src="img/darps-branca.png" alt="">
                <div class="login">
                    <h1>Bem-Vindo!</h1>
                    <h2>Faça login com discord ou registre-se</h2>
                    <button onclick="loginWithDiscord()" class="discord-buttom">
                        <a>Entrar com o Discord</a>
                    </button>
                </div> 
            </div>
        </section>

    </span>

    <div class="top-bar">
        <div class="left-bar">
            <button onclick="loginWithHome()" class="barr1"><a>HOME</a></button>
            <button onclick="loginWithRegras()" class="barr1"><a>REGRAS</a></button>
            <button onclick="loginWithNoticias()" class="barr1"><a>NOTÍCIAS</a></button>
            <button onclick="loginWithComoJogar()" class="barr2"><a>COMO JOGAR</a></button>
        </div>
        <div class="rigth-bar">
            <button onclick="loginDiscordDiscord()"><a>LOGIN</a></button>
        </div>
    </div>

</body>
<script type="text/javascript">
    var music = document.getElementById("music");
    music.volume = 0.6;
    document.addEventListener("keypress",(event) => {
        if(event.key == "p"){
            if(music.paused){
                music.play();
            } else {
                music.pause();
            }
        }
    });
    var CLIENT_ID = '';
    var REDIRECT_URI = '';
    function loginDiscordDiscord() {
      var loginSection = document.getElementById("loginDiscord");
      loginSection.style.display = "block";
    }
    function loginWithDiscord() {
        window.location.href = `https://discord.com/api/oauth2/authorize?client_id=${CLIENT_ID}&redirect_uri=${encodeURIComponent(REDIRECT_URI)}&response_type=token&scope=identify`;
    }
    function loginWithRegras() {
        window.location.href = "paginas/regras.html";
    }
</script>
</html>
