<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- font family -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet" />

  <!-- feather icon -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />

  <title>Meowcafe</title>
</head>

<body>
  <!-- navigation bar -->
  <nav>
    <ul>
      <li><img src="assets/logo.png" alt="logo" /></li>
      <li>
        <h4>Meow Café</h4>
      </li>
      <li><a href="#cafes">Início</a></li>
      <li><a href="#products">Produtos</a></li>
      <li><a href="#sobre">Sobre</a></li>
    </ul>

    <ul>
      <li><a href="login.html">Login</a></li>
      <li>
        <a href="order.html"><button type="submit">Delivery</button></a>
      </li>
    </ul>
  </nav>

  <!-- hero -->
  <main id="main">
    <div class="left-hero">
      <h5>Sabor inesquecível</h5>
      <h1>Meow<br />Café</h1>
      <p>
        Um lugar perfeito para pais de pets e amantes de café. Nossa cafeteria
        tem um espaço confortável para você e seu melhor amigo.
      </p>
    </div>

    <div class="right-hero">
      <img src="assets/hero.png" alt="hero" />
    </div>
  </main>

  <!-- Cafes -->
  <section class="cafes" id="cafes">
    <img class="bg-1" src="assets/bg-1.png" alt="bg-1" />

    <div class="top-content">
      <h3>Cafés</h3>
      <p>
        Conheça nossos cafés exclusivos pensados e preparados por nossos
        baristas renomados.
      </p>
      <h5>Veja Todos ></h5>
    </div>

    <div class="bottom-content">
      <div class="card-menu" id="menu-card-1">
        <img src="assets/cappucino.png" alt="cappucino" />
        <h5>R$ 24,00</h5>
        <h3>Cappucino</h3>
        <p>
          Café expresso , leite vaporizado, espuma e um toque de caramelo.
        </p>
        <a href="../order_pages/index.php?coffeeName=Cappucino&coffeePrice=24.00&img=cappucino.png"
          class="delivery-btn">Delivery</a>
      </div>

      <div class="card-second-menu">
        <img src="assets/cafe-go-leite.png" alt="cappucino" />
        <h5>R$ 24,00</h5>
        <h3>Cafe go leite</h3>
        <p>
          O clássico, amado pelos brasileiros, com um toque de sofisticação!
        </p>
        <a href="../order_pages/index.php?coffeeName=Cafe%20go%20leite&coffeePrice=24.00&img=cafe-go-leite.png"
          class="delivery-btn">Delivery</a>
      </div>

      <div class="card-third-menu">
        <img src="assets/cafe-preto.png" alt="cappucino" />
        <h5>R$ 24,00</h5>
        <h3>Cafe preto</h3>
        <p>Grãos selecionados feitos no seu método de preparo favorito.</p>
        <a href="../order_pages/index.php?coffeeName=Cafe%20preto&coffeePrice=24.00&img=cafe-preto.png"
          class="delivery-btn">Delivery</a>
      </div>
    </div>
  </section>

  <!-- products -->
  <section class="products" id="products">
    <div class="right-content">
      <h5>R$ 12,00</h5>
      <h2>Croissants</h2>
      <div class="ruler"></div>
      <h4>Conheça nossa receita</h4>
      <p>
        A nossa receita de Croissant vai te surpreender. Croissants clássicos
        ou recheados!
      </p>
      <p class="cursor">Todos os croissants ></p>
    </div>

    <div class="left-content">
      <img src="assets/corraint.png" alt="corraint" />
    </div>
  </section>

  <!-- adsense -->
  <section class="adsense">
    <img src="assets/big-cofee.png" alt="big-coffee" />

    <div class="text">
      <h2>Levamos até você!</h2>
      <p>Estamos nos principais aplicativos de Delivery!</p>
      <button type="submit">Delivery</button>
    </div>
  </section>

  <!-- sobre -->
  <section class="sobre" id="sobre">
    <img src="assets/bg-2.png" alt="bg-2" />

    <div class="text">
      <div class="left-content">
        <p>Sobre nós</p>
        <h2>
          Nós oferecemos uma experiência inesquecível para amantes de café e
          pais de pet!
        </h2>
      </div>

      <div class="right-content">
        <p>O melhor lugar para apreciar o seu café</p>
        <p>
          No Meow Cafe, priorizamos a criação de um espaço onde tanto os seres
          humanos quanto seus animais de estimação possam relaxar e desfrutar.
          <br />
          Nosso design interior é inspirado na harmonia e conforto, com sofás
          aconchegantes, iluminação suave e uma decoração que remete à
          natureza e à alegria que os animais trazem para nossas vidas.
        </p>
      </div>
    </div>
  </section>

  <!-- meow enjoy -->
  <section class="meow-enjoy">
    <img src="assets/coffe-rotate.png" alt="cofee-rotate" />

    <div class="left-content">
      <h2>Meow<br />Enjoy</h2>
      <div class="ruler"></div>
      <h5>Todos os sábados e domingos</h5>
      <p>Venha tomar o seu brunch com a gente!</p>
      <p class="btn">Faça uma reserva ></p>
    </div>

    <div class="right-content">
      <h3>Onde estamos</h3>
      <p>Você pode nos encontrar no endereço:</p>
    </div>
  </section>

  <!-- footer -->
  <footer class="footer" id="footer">
    <div class="long-ruler"></div>
    <div class="wrapper">
      <div class="informations">
        <h4>Informações</h4>
        <p>
          Todos os direitos reservados Meow Cafe Ltda. <br /><br />
          Um lugar perfeito para pais de pets e amantes de café!
        </p>

        <ul>
          <li><i data-feather="instagram"></i></li>
          <li><i data-feather="tv"></i></li>
          <li><i data-feather="alert-triangle"></i></li>
        </ul>
      </div>

      <div class="links-Úteis">
        <h4>Links</h4>
        <ul>
          <li><a href="#">Início</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Produtos</a></li>
          <li><a href="#">Delivery</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>

      <div class="institucional">
        <h4>Úteis</h4>
        <p>
          <span>CNPJ</span>: XX. XXX. XXX/0001-XX <span>Endereço</span>: Lorem
          ipsum, 64 Política de Privacidade Dúvidas Frequentes Ajuda
          Acessibilidade
        </p>
      </div>
    </div>
  </footer>

  <!-- music and piringan -->
  <div id="turntable-container">
    <img id="turntable" class="play-pause-button" src="assets/piringan.png" alt="Piringan Hitam" />
  </div>
  <audio id="music" src="assets/meow.mp3" loop></audio>
  <script src="js/script.js"></script>

  <!-- feather icons -->
  <script>
    feather.replace();
  </script>
</body>

</html>