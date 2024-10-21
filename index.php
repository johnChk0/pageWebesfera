<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/importados/sites.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&amp;display=swap" rel="stylesheet">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Document</title>
</head>

<body onload="filtrarProjetos()" >
    <main>
        <header class="header">
            <img src="assets/imagens/logo5.0pronta.png" alt="Logo">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="">Example</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="">Example</a></li>
                <button class="buttonOrcamento buttonCT">Solicite Orçamento</button>
            </ul>
        </header>
        <section class="apresentacao" id="home" >
            <div class="contentApresentacao">
                <h1>Tenha um <strong style="color: #2362eb;">sistema</strong> <br> Adaptado às suas <br> necessidades!</h1>
                <p class="textApresentacao">Somos uma empresa especializada no desenvolvimento de soluções para os mais
                    diversos negócios.</p>
                <span class="containButton">
                    <button class="buttonCT buttonProjetos">
                        Explorar Projetos
                    </button>
                    <button class="buttonCT buttonContato">
                        Entre em contato
                    </button>
                </span>
            </div>
           
        </section>
    </main>

 <!-- SERVICE -->

 <section class="section service" aria-labelledby="service-label">
    <div class="container">

      <p class="section-subtitle" id="service-label">Como Funciona?</p>

      <h2 class="title-service">
        Nosso processo de Desenvolvimento.
      </h2>

      <ul class="grid-list">

        <li>
          <div data-aos="fade-up"
          data-aos-duration="1000" class="service-card">

            <div class="card-icon">
              <ion-icon name="call-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <h3 class="h4 card-title">Análise</h3>

            <p class="card-text">
              Junto a equipe que recebem o novo projeto, criam uma lista inicial com os requisitos do sistema.</p>

          </div>
        </li>

        <li>
          <div data-aos="fade-up"
          data-aos-duration="1000" class="service-card">

            <div class="card-icon">
              <ion-icon name="shield-checkmark-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <h3 class="h4 card-title">Objetivo</h3>

            <p class="card-text">
              A equipe definida para o projeto realiza uma reunião onde dividem tarefas para a entrega da sprint.</p>
          </div>
        </li>

        <li>
          <div data-aos="fade-up"
          data-aos-duration="1000" class="service-card">

            <div class="card-icon">
              <ion-icon name="cloud-download-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <h3 class="h4 card-title">Solução</h3>

            <p class="card-text">
              O desenvolvimento da solução é iniciado pela a equipe para a entrega da sprint.
            </p>
          </div>
        </li>

        <li>
          <div data-aos="fade-up"
          data-aos-duration="1000" class="service-card">

            <div class="card-icon">
              <ion-icon name="pie-chart-outline" aria-hidden="true" role="img" class="md hydrated"></ion-icon>
            </div>

            <h3 class="h4 card-title">Desenvolvimento</h3>

            <p class="card-text">
              A entrega da sprint é realizada com desenvolvimento, testes e possíveis mudanças.
            </p>

          </div>
        </li>

      </ul>

    </div>
  </section>
 <hr class="separar-section">
  <section class="containMeusProjetos" id="portfolio">
    <h2 class="titleMeusProjetos">meus projetos</h2>
    <p class="textMeusProjetos">Alguns de nossos projetos!</p>
    <div class="containerFilter">
      <span class="optionFiltro">
        <button type="button" onclick="filtrarProjetos('todos')" class="textFilter">Todos</button>
      </span>
      <span class="optionFiltro">
        <button type="button" onclick="filtrarProjetos('categoria1')" class="textFilter">Categoria 1</button>
      </span>
      <span class="optionFiltro">
        <button type="button" onclick="filtrarProjetos('categoria2')" class="textFilter">Categoria 2</button>
      </span>
    </div>

    <!-- Container onde os projetos serão exibidos -->
    <div class="containerComProjetos" id="containerComProjetos" >
      <!-- Aqui os projetos serão carregados via AJAX -->
    </div>

    <footer class="footer">
      <div class="pagesFooter">

      </div>
      <div class="finalFooter">
        
      </div>
    </footer>





    <!-- SCRIPTS -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="assets/js/script.js"></script>
    <script>
    AOS.init();
  </script>
  </body>

</html>