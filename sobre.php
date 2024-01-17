<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - GGDIGITAL</title>
    <link rel="stylesheet" href="contato.css">
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="icon" type="image/png" href="logo.png" sizes="32x32">
    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #0A0E12;
        }
        #topo a.current {
    color: #19dfff; 
}
.footer-left .vertical-menu a.current {
    color: #19dfff; /* Cor rosa - você pode ajustar conforme necessário */
}.container {
            display: flex;
            align-items: center;
            justify-content: center;
           padding-top:200px;
        }

        .cads-gg {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card {
    position: relative;
    width: 620px;
    height: 424px;
    background: linear-gradient(-45deg, #2dd9ff 0%, #0462df 100%);
    border-radius: 10px;
    display: flex;
    margin-right: 100px;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
}
        .card img {
            width: 150px;
            fill: #333;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card:hover {
            transform: rotate(-5deg) scale(1.1);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card__content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            width: 100%;
            height: 100%;
           
            box-sizing: border-box;
            background-color: #fff;
            opacity: 0;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .card:hover .card__content {
            transform: translate(-50%, -50%) rotate(0deg);
            opacity: 1;
        }

        .card__title {
            margin: 0;
            font-size: 24px;
            color: #333;
            font-weight: 700;
        }

        .card__description {
          
        }
        .card__description video {
    
    margin: 0; /* Add this line to remove any default margin */
    padding: 0;
    height: 100%;
    object-fit: cover;
}
        .card:hover svg {
            scale: 0;
            transform: rotate(-45deg);
        }

        .text-div {
    color: #fff;
    margin-left: 20px;
    width: 350px;
}
        .cards-gg{
    justify-content:center;
    text-align: center;
    align-items: center;
    padding: 250px;
    display: flex;
}.tooltip-container {
    position: relative;
    background: var(--background);
    cursor: pointer;
    height: 200px;
    width: 290px;
    padding: 25px;
    transition: all 0.1s;
    background-color: #28313A;
    font-size: 17px;
    border-radius: 8px;
    box-shadow: none;
    margin-right: 80px;
    color: #fff;
}
.tooltip {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%) scale(0.8);
    transform-origin: bottom;
    padding: 0.3em 0.6em;
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s;
    background: var(--background);
    border-radius: 4px;
   
  }
  
.tooltip::before {
    position: absolute;
    background-color: #17d5ff;
    content: "";
    height: 0.6em;
    margin-bottom:50px;
    width: 0.6em;
    bottom: -0.2em;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    background: var(--background);
  }
  .tooltip-container:hover .tooltip {
    top: -90px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
    transform: translateX(-50%) scale(1);
  }
  .title-container {
    text-align: center;
    margin-bottom: -87px;
    color: #fff;
    margin-top: 100px;
}

.wrapper {
    display: flex;
    position: relative;
    justify-content: center;
    margin-top: 200px;
}
.box {
     flex: 0; 
    margin: 10px;
    position: relative;
}
.layout-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
        }

      

        .video-section {
   width: 650px;
    padding: 20px;
    
    MARGIN-TOP: 100PX;
}

        .responsive-video {
            width: 100%;
            height: auto;
        }
        video{
            width:620px;
        }
        .text-section{
            color:#fff;
            width: 350px;
        }
        .input {
    display: flex;
    flex-direction: column;
    position: relative;
    width: 218px;
    padding: 20px;
    left: -13%;
    height: 200px;
    border-radius: 5px;
}
.value {
    background-color: transparent;
    border: none;
    padding: 10px;
    color: white;
    display: flex;
    position: relative;
    font-size: 19px;
    gap: 5px;
    cursor: pointer;
    border-radius: 4px;
}

    .value:not(:active):hover,
    .value:focus {
      background-color: #21262C;
    }

    .value:focus,
    .value:active {
      background-color: #1A1F24;
      outline: none;
    }
    .value::before {
    content: "";
    position: absolute;
    top: 5px;
    left: -10px;
    width: 5px;
    height: 80%;
    background-color: #2dd9ff;
    border-radius: 5px;
    opacity: 0;
}
    .value:focus::before,
    .value:active::before {
      opacity: 1;
    }

    .value svg {
      width: 15px;
    }

    .input:hover > :not(.value:hover) {
      transition: 300ms;
   
    
    }

    .hiddenDiv {
    display: none;
    position: absolute;
    top: -195px;
    width: 481px;
    height: 602px;
    color: #fff;
    padding: 30px;
    /* border-radius: 10px; */
    /* background-color: #293541f2; */
    left: 100%;
    margin-left: 50px;
}
.divs-icons {
    display: flex;
    /* margin-left: 30%; */
    align-items: center;
    justify-content: center;
    margin-top: 272px;
    padding: 20px;
    margin-bottom: 150px;
}
video {
    box-shadow: none;
    width: 100%;
    border-radius:20px;
}
.my-image-container {
    flex-shrink: 0;
    margin-right: 55px;
}


@media screen and (max-width: 1040px) {
.cads-gg {
    display: none;
    align-items: center;
    justify-content: center;
}
.container {
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 98px;
}
.video-section {
    width: 384px;
    padding: 20px;
    MARGIN-TOP: 100PX;
}
.layout-wrapper {
    display: grid;
    /* text-align: center; */
    align-items: center;
    justify-content: center;
}
.text-section {
    color: #fff;
    padding-left: 20px;
    width: 350px;
}
.box{
    display:none;
}
.wrapper{
    display:none;
}
.title-container {
   display: none;
}
.my-image-container {
    flex-shrink: 0;
    margin-right: 55px;
    display: none;
}
.vertical-menu {
    padding: 10px;
    display: flex;
    text-align: justify;
    flex-direction: column;
    align-items: flex-start;
}
.divs-icons {
    display: none;
   
}
.video-section {
    position: relative;
    width: 395px;
    /* height: 650px; */
    /* overflow: hidden; */
}
}
    </style>
</head>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
<nav id="topo" class="scrolling-nav">
    <!-- Adicione o seguinte código dentro do seu header, abaixo do ícone de WhatsApp -->
    <!-- Inside the header, next to your logo -->
<div class="mobile-menu-icon">
  <div class="bar"></div>
  <div class="bar"></div>
  <div class="bar"></div>
</div>
<div class="mobile-nav" id="mobileNav">
    <a href="index.php">Home</a>
    <a href="vender.php">Quero vender mais</a>
    <a href="sobre.php">Sobre nós</a>
    <a href="contato.php">Contato</a>
    <a href="trabalho.php">Trabalhe Conosco</a>
</div>
        <img id="logo" src="logo1.png" alt="Logo">
        <a href="index.php"  <?php echo ($current_page == 'index.php') ? 'class="current"' : ''; ?>>Home</a>
        <a href="vender.php"  <?php echo ($current_page == 'vender.php') ? 'class="current"' : ''; ?>>Quero vender mais</a>
        <a href="sobre.php" <?php echo ($current_page == 'sobre.php') ? 'class="current"' : ''; ?>>Sobre nós</a>
        <a href="contato.php"  <?php echo ($current_page == 'contato.php') ? 'class="current"' : ''; ?>>Contato</a>
        <a href="trabalho.php"  <?php echo ($current_page == 'trabalho.php') ? 'class="current"' : ''; ?>>Trabalhe Conosco</a>
        <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0"> <i class="bi bi-whatsapp"></i></a>
        <a href="https://typebot.co/my-typebot-do4vkhl" class="link-a">
        <button class="animated-button" style=" margin-left: 150px;">
  <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
  <span class="text">Quero Conhecer</span>
  <span class="circle"></span>
  <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"
    ></path>
  </svg>
</button></a>

    </nav>
</header>
<body>

   
<div class="container">
        <div class="cads-gg">
            <div class="card">
             <img src="logo.png" alt="">

                <div class="card__content">
                <video class="card__description" autoplay muted loop>
                <source src="GG3.mp4" type="video/mp4">
               
            </video>
                 
                </div>
            </div>
        </div>

        <div class="text-div">
            <h1>Saiba mais sobre a GG</h1>
            <p>
            A GG Digital foi concebida com o objetivo de potencializar a capacidade das empresas de transformar leads em um fator essencial para o crescimento.</p>
            <a href="#maisgg" class="scroll-link"> <!-- Adicionando a classe scroll-link aqui -->
        <button class="animated-button" onclick="scrollToSection('maisgg')">
            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
            <span class="text">Quero conhecer</span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
        </button>
    </a>
</div>
    </div>

    <div class="layout-wrapper" id="maisgg">
        <div class="video-section">
            <video class="responsive-video" autoplay muted loop>
                <source src="gg2.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        <div class="text-section" >
        <h1>Gabriel Leite</h1>
        <h2>Criador da GGDIGITAL</h2>
            <p>Com um histórico impressionante de campanhas bem-sucedidas, Gabriel Leite, conhecido como Meta Marketing Pro, destaca-se por sua abordagem proativa e resultados tangíveis. Sua visão empreendedora e comprometimento com a excelência refletem-se na GGDIGITAL, uma agência que personifica confiabilidade e profissionalismo no universo digital.</p>
            <a href="#mais" class="scroll-link">
                    <button class="animated-button">
                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                        </svg>
                        <span class="text">Saber mais</span>
                        <span class="circle"></span>
                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                        </svg>
                    </button>
                </a>
        </div >
    </div> <div class="title-container" id="mais">
        <h1>Objetivos da GGDIGITAL</h1>
    </div><div class="layout-wrapper">
   

    <div class="wrapper">
        <div class="box">
            <div class="dot"></div>
            <div class="tooltip-container">
                <img src="sobre (3).png" class="tooltip" alt="">
                <span class="text">Na GGDIGITAL, a confiabilidade é nossa prioridade. <br> Garantimos serviços transparentes e consistentes, construindo relações sólidas com nossos clientes. Cada estratégia é meticulosamente planejada para oferecer resultados confiáveis.</span>
            </div>
        </div>

        <div class="box">
            <div class="dot"></div>
            <div class="tooltip-container">
                <img src="sobre (2).png" class="tooltip" alt="">
                <span class="text">Buscamos resultados tangíveis na GGDIGITAL. <br> Nossas estratégias são baseadas em dados, assegurando que cada campanha alcance impactos mensuráveis e positivos para nossos clientes, indo além de métricas superficiais.</span>
            </div>
        </div>

        <div class="box">
            <div class="dot"></div>
            <div class="tooltip-container">
                <img src="sobre (1).png" class="tooltip" alt="">
                <span class="text">O profissionalismo é fundamental na GGDIGITAL. <br> Mantemos os mais altos padrões éticos em todas as interações. Da comunicação transparente à execução meticulosa, destacamos a seriedade e a excelência profissional em cada aspecto de nosso trabalho.</span>
            </div>
        </div>
    </div>
    
</div><div class="title-container" id="mais">
        <h1>Saiba Mais sobre a GG </h1>
    </div>
<div class="divs-icons">

  <div class="input">
    <button class="value" onclick="toggleDiv('gg')">
      <svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"></svg>
      Concepção da GG
    </button>
    <button class="value" onclick="toggleDiv('tr')">
      <svg id="Line" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"></svg>
      Transparência
    </button>
    <button class="value" onclick="toggleDiv('obj')">
      <svg id="Line" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"></svg>
      Objetivos
    </button>
    <button class="value" onclick="toggleDiv('prof')">
      <svg id="Line" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"></svg>
      Profissionalismo
    </button>

    <div id="gg" class="hiddenDiv" style="display: block;">
      <video width="100%" height="100%" autoplay muted loop>
        <source src="gg4.mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>

    <div id="tr" class="hiddenDiv">
      <video width="100%" height="100%" autoplay muted loop>
        <source src="gg6.mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>

    <div id="obj" class="hiddenDiv">
      <video width="100%" height="100%" autoplay muted loop>
        <source src="gg5.mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>

    <div id="prof" class="hiddenDiv">
      <video width="100%" height="100%" autoplay muted loop>
        <source src="gg7.mp4" type="video/mp4">
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </div>  
    <a href="https://typebot.co/my-typebot-do4vkhl" > <!-- Adicionando a classe scroll-link aqui -->
        <button class="animated-button" onclick="scrollToSection('maisgg')">
            <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
            <span class="text">Quero conhecer</span>
            <span class="circle"></span>
            <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
            </svg>
        </button>
    </a>
  </div>

</div>
<div class="my-container">
        <div class="my-image-container">
            <img src="logo.png" alt="Descrição da imagem">
        </div>
        <div class="my-text-container">
            <h1>Atendimento ao cliente 24hrs</h1>
            <p>Nossa equipe ao cliente está disponível para ajudar 24 horas por dia. Entre em contato agora mesmo via WhatsApp e fale com um consultor.</p>
            <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0" >
                    <button class="animated-button">
                        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                        </svg>
                        <span class="text">Entrar em Contato</span>
                        <span class="circle"></span>
                        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                        </svg>
                    </button>
                </a>
        </div>
    </div>


<footer>
      <div class="footer-content"> 
          
          <?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
          <div class="footer-left">
    <div class="vertical-menu"><img src="logo1.png" alt="Descrição da imagem">
       <p>© 2024 GGDIGITAL. Todos os direitos reservados.</p>
</div>
</div>
<div class="footer-left">
    <div class="vertical-menu">
        <a href="index.php" <?php echo ($current_page == 'index.php') ? 'class="current"' : ''; ?>>Home</a>
        <a href="vender.php" <?php echo ($current_page == 'vender.php') ? 'class="current"' : ''; ?>>Quero vender mais</a>
        <a href="sobre.php" <?php echo ($current_page == 'sobre.php') ? 'class="current"' : ''; ?>>Sobre Nós</a>
        <a href="contato.php" <?php echo ($current_page == 'contato.php') ? 'class="current"' : ''; ?>>Contato</a>
        <a href="trabalho.php" <?php echo ($current_page == 'trabalho.php') ? 'class="current"' : ''; ?>>Trabalhe Conosco</a>
    </div>
</div>
          <div class="footer-right">
            
              <div class="column">
                  <div class="line"><i class="bi bi-telephone"></i>(11) 98946-7375</div>
                  <div class="line"><i class="bi bi-envelope"></i>contatoggdigital@gmail.com</div>
                  <div class="line2"> 
                   <a href="https://www.instagram.com/_ggdigital/"> <i class="bi bi-instagram"></i></a>
                  <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0"> <i class="bi bi-whatsapp"></i></a>
                   <a href="https://www.linkedin.com/company/gg-digital-marketing-enterprising/about/"> <i class="bi bi-linkedin"></i></a></div>
              </div>
          </div>
          <a href="#topo">
          <button class="button" class="scroll-link" >
  <svg class="svgIcon" viewBox="0 0 384 512">
    
    <path
      d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
    ></path>
   
  </svg>
</button></a>

        </div>
  






        
  </footer>
  <script>
  document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".dot").forEach(function(dot) {
      dot.style.animationDelay = Math.random() + "s";
    });
  });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
        const mobileNav = document.getElementById('mobileNav');

        // Set the initial state to closed
        mobileNav.style.display = 'none';

        mobileMenuIcon.addEventListener('click', function () {
            // Toggle the visibility using display: flex and display: none
            if (mobileNav.style.display === 'flex') {
                mobileNav.style.display = 'none';
            } else {
                mobileNav.style.display = 'flex';
            }
        });

        // Add this event listener to hide the div when clicking outside
        document.body.addEventListener('click', function (event) {
            if (!mobileMenuIcon.contains(event.target) && !mobileNav.contains(event.target)) {
                // Click is outside both the button and the div, hide the div
                mobileNav.style.display = 'none';
            }
        });
    });
</script>
  <script>
        function proximoForm(numero) {
            document.getElementById('form' + numero).style.display = 'block';
            document.getElementById('form' + (numero - 1)).style.display = 'none';
            atualizarProgressBar(numero);
        }

        function voltarForm(numero) {
            document.getElementById('form' + numero).style.display = 'block';
            document.getElementById('form' + (numero + 1)).style.display = 'none';
            atualizarProgressBar(numero);
        }

        function atualizarProgressBar(numeroFormulario) {
            const progressBar = document.getElementById('progressBar');
            const totalFormularios = 3; // Total de formulários no seu caso

            const larguraAtual = (numeroFormulario / totalFormularios) * 100;
            progressBar.style.width = `${larguraAtual}%`;
        }

        function validarFormulario(numeroFormulario) {
            const formulario = document.getElementById('form' + numeroFormulario);

            for (let i = 0; i < formulario.elements.length; i++) {
                if (formulario.elements[i].type !== 'button' && formulario.elements[i].type !== 'submit') {
                    if (formulario.elements[i].value === '' && formulario.elements[i].name !== 'website') {
                        alert('Por favor, preencha todos os campos obrigatórios antes de prosseguir.');
                        return false;
                    }
                }
            }

            // Adicione aqui a lógica de envio do formulário se necessário

            // Redirecionar para a página de parabéns
            window.location.href = 'contatoForm.php';

            return false;
        }
    </script>
     <script>
    document.querySelector('.button').addEventListener('click', function() {
        const scrollToTop = () => {
            const c = document.documentElement.scrollTop || document.body.scrollTop;
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 8);
            }
        };
        scrollToTop();
    });
</script>
<script>
    window.addEventListener('scroll', function() {
        var nav = document.getElementById('topo');
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 100) {
            nav.classList.add('scrolling-nav');
        } else {
            nav.classList.remove('scrolling-nav');
        }
    });
</script>
<script>
    document.querySelector('.button').addEventListener('click', function() {
        const scrollToTop = () => {
            const c = document.documentElement.scrollTop || document.body.scrollTop;
            if (c > 0) {
                window.requestAnimationFrame(scrollToTop);
                window.scrollTo(0, c - c / 8);
            }
        };
        scrollToTop();
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
        const mobileNav = document.getElementById('mobileNav');

        // Set the initial state to closed
        mobileNav.style.display = 'none';

        mobileMenuIcon.addEventListener('click', function () {
            // Toggle the visibility using display: flex and display: none
            if (mobileNav.style.display === 'flex') {
                mobileNav.style.display = 'none';
            } else {
                mobileNav.style.display = 'flex';
            }
        });

        // Add this event listener to hide the div when clicking outside
        document.body.addEventListener('click', function (event) {
            if (!mobileMenuIcon.contains(event.target) && !mobileNav.contains(event.target)) {
                // Click is outside both the button and the div, hide the div
                mobileNav.style.display = 'none';
            }
        });
    });
</script><script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
        const mobileNav = document.getElementById('mobileNav');

        // Set the initial state to closed
        mobileNav.style.display = 'none';

        mobileMenuIcon.addEventListener('click', function () {
            // Toggle the visibility using display: flex and display: none
            if (mobileNav.style.display === 'flex') {
                mobileNav.style.display = 'none';
            } else {
                mobileNav.style.display = 'flex';
            }
        });

        // Add this event listener to hide the div when clicking outside
        document.body.addEventListener('click', function (event) {
            if (!mobileMenuIcon.contains(event.target) && !mobileNav.contains(event.target)) {
                // Click is outside both the button and the div, hide the div
                mobileNav.style.display = 'none';
            }
        });
    });
</script>
<script>
    window.addEventListener('scroll', function() {
        var nav = document.getElementById('topo');
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;

        if (scrollPosition > 100) {
            nav.classList.add('scrolling-nav');
        } else {
            nav.classList.remove('scrolling-nav');
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 200, // ajuste conforme necessário para iniciar a animação antes ou depois de aparecer na tela
    duration: 800, // duração da animação em milissegundos
    easing: 'ease-in-out', // função de easing
    once: true, // a animação será acionada apenas uma vez
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        // Smooth scrolling for anchor links
        $('a.scroll-link').on('click', function (e) {
            e.preventDefault();

            const targetId = $(this).attr('href').substring(1);
            const targetElement = $('#' + targetId);

            if (targetElement.length) {
                const offset = targetElement.offset().top;
                const duration = 800; // Adjust the duration as needed

                $('html, body').animate({
                    scrollTop: offset
                }, duration);
            }
        });
    });
</script>

<script>
  function toggleDiv(divId) {
    var divs = document.querySelectorAll('.hiddenDiv');
    divs.forEach(function(div) {
      div.style.display = 'none';
    });

    var targetDiv = document.getElementById(divId);
    if (targetDiv) {
      targetDiv.style.display = 'block';
    }
  }
</script>
</body>
</html>