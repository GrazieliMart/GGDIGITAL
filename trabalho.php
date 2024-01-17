<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalhe Conosco - GGDIGITAL</title>
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
    <div class="texto-entrada-contato">
        <h1>Venha fazer parte do nosso time!</h1>
        <p>A GG DIGITAL está sempre buscando novas mentes brilhantes para integrar a nossa equipe.</p>
    </div>
    <div class="form-contato">
        <div class="progress-bar" id="progressBar"></div>

        <form id="trabalheConoscoForm" onsubmit="return validarFormulario()"  method="POST" action="https://api.sheetmonkey.io/form/8cmcGvkQjQp18K4YdkgJzV">
            <!-- Seção 1 -->
            <label for="name">Nome:</label>
            <input type="text" id="name" name="Nome" required placeholder="Nome">
            <br>

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" name="Telefone" required placeholder="DDD + Telefone">

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="Idade" required placeholder="Qual a sua idade?">
            <br>

            <!-- Seção 2 -->
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="Cidade" required placeholder="Você é de qual cidade?">

            <label for="profissao">Profissão:</label>
            <select id="profissao" name="Profissão" required>
                <option value="option">Qual sua profissão digital?</option>
                <option value="gestor">Gestor de Tráfego</option>
                <option value="designer">Designer</option>
                <option value="programador">Programador</option>
                <option value="social">Social Mídia</option>
                <option value="outros">Outros</option>
            </select>

            <label for="comments">Sua Experiência de Trabalho:</label><br>
            <textarea id="comments" name="Experiência de Trabalho" rows="3" required
                placeholder="Conte-nos brevemente sobre a sua experiência de trabalho."></textarea>
            <br>

            <!-- Seção 3 -->
            <label for="instagram">Instagram:</label>
            <input type="url" id="instagram" name="Instagram" required placeholder="Deixe aqui o seu perfil do Instagram">

            <label for="linkedin">Linkedin:</label>
            <input type="url" id="linkedin" name="Linkedin" required placeholder="Deixe aqui o seu perfil do Linkedin">
            <br>

            <div class="align-btn">
               
    <button type="submit" class="next">Enviar</button>
            </div>
        </form>
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

            // Verificar se todos os formulários foram preenchidos antes de enviar
            if (numeroFormulario === 3) {
                // Adicione aqui a lógica de envio do formulário se necessário
                // Redirecionar para a página de parabéns
                window.location.href = 'trabalhoForm.php';
            } else {
                // Se não for o último formulário, apenas atualize o progresso
                proximoForm(numeroFormulario + 1);
            }

            return false;
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

            // Exibir loader
            window.location.href = 'loader.php';

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
</body>
</html>