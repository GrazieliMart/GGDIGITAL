

<!DOCTYPE html>
<html lang="en">
<head>
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
}
    </style>
</head>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
<body>
    <div id="progressBarTop" class="progress-bar" style="width: 0;"></div>
    <!-- Seu código existente aqui -->
</body>

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

<div class="texto-entrada-contato">

<h1>PREENCHA O FORMULÁRIO PARA TER A MELHOR GESTÃO DE MARKETING DIGITAL FOCADA NO SEU NEGÓCIO.</h1>
<p>A GGDIGITAL entrará em contato com você em breve após o envio do formulário.</p>
</div>
<div class="form-contato">
<div class="progress-bar" id="progressBar"></div>

<div class="form-contato">

    <form id="contactForm" onsubmit="return validarFormulario()" method="POST" action="https://api.sheetmonkey.io/form/7xkjodkAUSgaskymSsEdPc">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="Nome" required placeholder="Nome"oninput="atualizarProgressBar()">
        <br>

        <label for="phone">Telefone:</label>
        <input type="tel" id="phone" name="Telefone" required placeholder="DDD + Telefone"oninput="atualizarProgressBar()">

        <label for="email">Email:</label>
        <input type="email" id="email" name="Email" required placeholder="Email"oninput="atualizarProgressBar()">

        <label for="companyName">Nome da Empresa:</label>
        <input type="text" id="companyName" name="Nome da Empresa" required placeholder="Nome da Empresa" oninput="atualizarProgressBar()">

        <label for="industry">Qual o seu segmento:</label>
        <select id="industry" name="Segmento" required oninput="atualizarProgressBar()">
            <option value="tecnologia">Provedor de Internet</option>
            <option value="comércioLocal">Comércio Local</option>
            <option value="imobiliario">Imobiliário</option>
            <option value="e-commerce">E-Commerce</option>
            <option value="tecnologia">Tecnologia</option>
            <option value="educacao">Educação</option>
            <option value="industria">Indústria</option>
            <option value="saude">Saúde</option>
            <option value="outros">Outros</option>
        </select>

        <label for="employees">Número de Funcionários:</label>
        <input type="number" id="employees" name="Número de Funcionários" required placeholder="Número de Funcionários" oninput="atualizarProgressBar()">
        <label for="website">Website:</label>
    <input type="url" id="website" name="WebSite" required placeholder="URL do Website">

    <label for="investment">Qual é a sua expectativa de investimento mensal em marketing digital?</label>
    <input type="text" id="investment" name="Pretenção de Investimento" required placeholder="Investimento Mensal" oninput="atualizarProgressBar()">

    <label for="comments">Comentários:</label>
    <textarea id="comments" name="Comentários" rows="4" placeholder="Deixe seus comentários" oninput="atualizarProgressBar()"></textarea>

    <div class="align-btn">
               
               <button type="submit" class="next">Enviar</button>
                       </div>
</form>
</div>
</div>

   
    <div class="additional-info">
    <div class="my-image1-container">
            <img src="logo.png" alt="Descrição da imagem">
        </div>
    <div class="left-box">
        <h1>Atendimento ao cliente 24hrs</h1><br>
       <p>Nossa equipe ao cliente está disponível para ajudar 24 horas por dia. Entre em contato agora mesmo via WhatsApp e fale com um consultor.</p>
       <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0" class="scroll-link">
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

    <div class="right-box">
        
        <div class="tooltip-container">

        
  <span class="text">
  
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="22"
      height="22"
      class="bi bi-send-fill"
      viewBox="0 0 16 16"
    >
      <path
        d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z"
      ></path>
    </svg>
  </span>



  

    <a href="mailto:contatoggdigital@gmail.com">
  <span class="tooltip2">
  <i class="bi bi-envelope-fill"></i>

  </span>
</a>



  <a href="https://api.whatsapp.com/send/?phone=5511989467375&text&type=phone_number&app_absent=0"> 
  <span class="tooltip3">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="20"
      height="20"
      class="bi bi-whatsapp"
      viewBox="0 0 16 16"
    >
    <path
        d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"
      ></path>
    </svg>
  </span>
</a>


<a href="https://www.instagram.com/_ggdigital/">
  <span class="tooltip4">
  <i class="bi bi-instagram"></i>

  </span></a>

  <a href="https://www.linkedin.com/company/gg-digital-marketing-enterprising/about/">
  <span class="tooltip5">
  <i class="bi bi-linkedin"></i>

    </svg>
  </span>
</a>
<a href="index.php">
  <span class="tooltip6">
   
   <i class="bi bi-globe"></i>

   
  </span>
  </a>
 
  <span class="tooltip9"> </span>
</div>

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
    function atualizarProgressBar() {
        const formElements = document.querySelectorAll('#contactForm input, #contactForm select, #contactForm textarea');
        const totalElements = formElements.length;
        let filledElements = 0;

        formElements.forEach((element) => {
            if (element.type !== 'submit' && element.value !== '') {
                filledElements++;
            }
        });

        const progress = (filledElements / totalElements) * 100;

        // Atualiza a barra de progresso no topo
        document.getElementById('progressBarTop').style.width = progress + '%';

        // Atualiza a barra de progresso no formulário
        document.getElementById('progressBar').style.width = progress + '%';

        // Se todos os campos estiverem preenchidos, scroll para a parte inferior
        if (filledElements === totalElements) {
            window.scrollTo(0, document.body.scrollHeight);
        }
    }
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

</body>

</html>
