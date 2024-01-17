<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - GGDIGITAL</title>
    <link rel="stylesheet" href="colors.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" />

    <link rel="icon" type="image/png" href="logo.png" sizes="32x32">
    <style>
        
 button{
    border-radius: 10px;
    padding: 10px;
    background-color: #28313A;
    box-shadow: none;
    font-weight: bold;
    font-size: 18px;
    width: 300px;
    padding: 15px;
    transition: 0.3s;
  
    color: #000;
    margin-bottom: 10px;
    border: none;
    cursor: pointer;
}
button:hover{
    color: #fff;
    font-size: 18px;
    transform: scale(1.1); 
    box-shadow: 0 0 10px 10px #28313A;
    padding: 15px;
    transition: 0.3s;
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
<div class="centralize-container">
    <div class="texto-entrada">
        <div class="video-section">
           
                <!-- Substitua 'CAMINHO_DO_SEU_VIDEO_LOCAL' pelo caminho do seu vídeo local -->
                <video autoplay muted loop width="100%">
                    <!-- Substitua 'CAMINHO_DO_SEU_VIDEO_LOCAL' e 'TIPO_DO_SEU_VIDEO' pelos valores corretos -->
                    <source src="gg.mp4" type="video/mp4">
                    Seu navegador não suporta o elemento de vídeo.
                </video>
                <H1>Gestão Profissional de Tráfego Pago e Marketing Digital</H1>
                <p>Impulsione sua empresa agora mesmo.</p>
                <a href="#metodo" class="scroll-link" id="saibaMaisBtn">
    <button class="animated-button">
        <svg viewBox="0 0 24 24" class="arr-2" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
        </svg>
        <span class="text">Saiba Mais</span>
        <span class="circle"></span>
        <svg viewBox="0 0 24 24" class="arr-1" xmlns="http://www.w3.org/2000/svg">
            <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
        </svg>
    </button>
</a>

            
        </div>
    </div>
</div><div class="container-custom">
    <div class="column-custom aos-item" data-aos="fade-up">
        <img src="12.png" alt="Imagem 1">
        <h1>Gestão de Tráfego</h1>
        <p>Maximizamos o alcance online de nossos clientes por meio de estratégias especializadas de tráfego pago. Otimizamos campanhas em plataformas como Google Ads e redes sociais para impulsionar visitantes qualificados.</p>
    </div>

    <div class="column-custom aos-item" data-aos="fade-up" data-aos-delay="100">
        <img src="13.png" alt="Imagem 2">
        <h1>Relatórios</h1>
        <p>Garantimos total transparência e fornecemos insights valiosos ao oferecer relatórios detalhados de desempenho. Isso permite análises aprofundadas das métricas-chave para avaliação contínua.</p>
    </div>

    <div class="column-custom aos-item" data-aos="fade-up" data-aos-delay="200">
        <img src="14.png" alt="Imagem 3">
        <h1>DashBoards</h1>
        <p>Criamos dashboards personalizados e intuitivos para oferecer uma visão consolidada e em tempo real das métricas mais importantes. Isso facilita a tomada de decisões estratégicas.</p>
    </div>

    <div class="column-custom aos-item" data-aos="fade-up" data-aos-delay="300">
        <img src="15.png" alt="Imagem 4">
        <h1>CRM</h1>
        <p>Integramos sistemas de CRM para fortalecer o relacionamento com o cliente. Personalizamos abordagens, melhoramos a retenção e impulsionamos a satisfação do cliente de forma holística.</p>
    </div>
</div>


    <div class="texto-empresas" >
        <h1>Essas empresas decidiram investir em Tráfego Pago com a GG. </h1>
        <div class="grupo-divs">
        <div class="empresa">
            <img src="ITENS (2).png" alt="Empresa 1">
            <div class="descricao">
                <h2>SÓPLAY</h2>
                <p>SóPlay tv permite o acesso a filmes e canais de tv legalizados de qualidade para assistir quando e onde quiser.<br>As estratégias de marketing adotadas na SóPlay englobam criação de criativos persuavisos e campanhas de tráfego estratégico.<br></p>
            </div>
            
        </div>
        <div class="empresa">
            <img src="ITENS (1).png" alt="Empresa 2">
            <div class="descricao">
                <h2>REMAX</h2>
                <p>Geração de demanda para time comercial com mais de 3.300 leads gerados nos dois primeiros meses de trabalho, com uma taxa de conversão com mais de 30% de vendas.<br><br><br><br></p>
            </div>
       
        </div>
    </div>
    <div class="grupo-divs">
        <div class="empresa">
            <img src="ITENS (3).png" alt="Empresa 3">
            <div class="descricao">
                <h2>NAXOS TELECOM</h2>
                <p>Nos primeiros 30 dias do projeto foi implementado processo Inside Sales bem estruturado com CRM e treinamento de equipe. O método garantiu mais de 160 novas oportunidades de negócio, além da melhora exponencial do controle de dados.<br></p>
            </div>
           
        </div>
        <div class="empresa">
            <img src="ITENS (4).png" alt="Empresa 4">
            <div class="descricao">
                <h2>NETWE</h2>
                <p>Apesar de ser um nicho complicado para divulgação online, através de estratégias de Google ADS, Facebook ADS, e Remarketing, foi possível entregar um crescimento médio de 80% ao mês no número de aulas vindas através da internet. <br><br><br></p>
            </div>

        </div>
    </div>
</div>


<div class="texto-metodologia"  >

<div class="faixa-imagens-container" >
    <div class="degrade-lateral" id="metodo"></div>
    <div class="faixa-imagens">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">

        <img src="dash1.png" alt="Imagem 1">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">

        <img src="dash1.png" alt="Imagem 1">
        <img src="dash1.png" alt="Imagem 1">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">

        <img src="dash1.png" alt="Imagem 1">
        <img src="dash1.png" alt="Imagem 1">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">

        <img src="dash1.png" alt="Imagem 1">
        <img src="dash1.png" alt="Imagem 1">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">

        <img src="dash1.png" alt="Imagem 1">
        <img src="dash1.png" alt="Imagem 1">
        <img src="tráfego1.png" alt="Imagem 1">
        <img src="meta1.png" alt="Imagem 1">
        <img src="google1.png" alt="Imagem 1">
        <img src="tik1.png" alt="Imagem 1">
        <img src="pin1.png" alt="Imagem 1">
        <img src="power1.png" alt="Imagem 1">
        <img src="crm1.png" alt="Imagem 1"> 
        <img src="rel1.png" alt="Imagem1">
       
        
        <!-- Adicione mais imagens conforme necessário -->
    </div>
    <div class="degrade-lateral" ></div>
</div>
<div class="1-img" id="saibaMaisBtn" >
    <img src="met (1).png" alt="">
</div>

<div class="2-img">
<img src="met (2).png" alt="">
</div>
<div class="texto-baixo">
            <div class="texto-div">
            <h1>Gerenciamento de Público</h1>
            <p>Na fase de testes e aplicação do método, concentramo-nos em <i>estratégias para identificar o melhor canal, formato de anúncio, e público-alvo.</i> <br>A validação ocorre ao identificar canais e ofertas eficientes. Na ampliação, buscamos <i>mais lucro investindo no que funciona e explorando novas alternativas.</i></p>
            
            </div>

            <div class="texto-div">
            <h1>Gestão de <br>Campanhas</h1>
            <p>Durante os testes e aplicação do método, priorizamos estratégias para <i>otimizar campanhas digitais, identificando canais, tipos de campanha e formatos eficazes</i>. <br>A validação ocorre ao identificar canais e criativos que geram retorno. Na ampliação, investimos mais nas campanhas validadas e exploramos novas abordagens.</p>
            </div>

            <div class="texto-div">
            <h1>Geração de <br>Leads</h1>
            <p>Na aplicação do método, focamos em estratégias para otimizar a <i>geração de leads</i>, identificando canais e abordagens eficazes.<br> A validação ocorre ao identificar os canais mais eficientes. Na ampliação, investimos mais na geração de leads e exploramos novas abordagens para expandir a base qualificada.</p>
            </div>
        </div>
        <div class="btn-center">
        <a href="https://typebot.co/my-typebot-do4vkhl">
                    <button class="animated-button">
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

        <div class="container">
    <div class="left-div" id="imgs">
    <video width="800" height="850" autoplay muted loop style="box-shadow:none" >
            <source src="gg1.mp4" type="video/mp4">
            Seu navegador não suporta o elemento de vídeo.
        </video>
    </div>

    <div class="conteudo-acima">
        <h1>Atendemos negócios que<br>  desejam crescer!</h1>

        <div class="right-div-container">
            <div class="right-div">  <img src="icones (4).png" alt="Imagem" > <br>Negócios Locais</div>
            <div class="right-div">  <img src="icones (5).png" alt="Imagem" > <br>E-Commerce</div>
            <div class="right-div">  <img src="icones (7).png" alt="Imagem" > <br>Imobiliárias</div>
            <div class="right-div">  <img src="icones (8).png" alt="Imagem" > <br>Industrias e Franquias</div>
            <div class="right-div">  <img src="icones (3).png" alt="Imagem" > <br>Empreendedores</div>
            <div class="right-div">  <img src="icones (12).png" alt="Imagem" > <br>Odontologia</div>
            <div class="right-div">  <img src="icones (6).png" alt="Imagem" > <br>Artesanato</div>
            <div class="right-div">  <img src="icones (9).png" alt="Imagem" > <br>Provedor de Internet</div>
            <div class="right-div">  <img src="icones (2).png" alt="Imagem" > <br>Serviço de Streaming</div>
        </div>
        <a href="https://typebot.co/my-typebot-do4vkhl">
            <button class="btn-metodo">QUERO CRESCER MINHA EMPRESA</button>
        </a>
    </div>
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

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    offset: 200,
    duration: 800, 
    easing: 'ease-in-out', 
    once: true, 
  });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
      
        $('a.scroll-link').on('click', function (e) {
            e.preventDefault();

            const targetId = $(this).attr('href').substring(1);
            const targetElement = $('#' + targetId);

            if (targetElement.length) {
                const offset = targetElement.offset().top;
                const duration = 800;
                $('html, body').animate({
                    scrollTop: offset
                }, duration);
            }
        });
    });
</script>

</body>

</html>
