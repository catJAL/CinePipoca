<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Pipoca</title>
    <link rel="icon" type="image/x-icon" href="img/cine-logo-wtext.png">
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="navbar">
        <button class="menu-btn"><i class="fas fa-bars"></i></button>
        
        <div class="logo">
          <a href="index.php?action=logout">
            <img src="img/cine-logo-wtext.png" alt="Cine Pipoca Logo">
          </a>
        </div>

        
        <!--<div class="genres">
            <button>Gênero 1</button>
            <button>Gênero 2</button>
            <button>Gênero 3</button>
            Adicione mais botões aqui 
        </div> -->
        
        <!-- Resto do conteúdo da página -->
        

        <div class="menu">
            <a href="#">Séries</a>
            <a href="#">Filmes</a>
            <a href="#">Animações</a>
            <a href="#">Novelas</a>
        </div>
        <input type="text" id="search-bar" placeholder="Buscar..." onkeyup="searchMovies()" class="search-bar">
        <button class="search-btn"><i class="fas fa-search"></i></button>
    </header>
    
    <main>
        <div class="category">
            <h2>Séries e filmes para jovens adultos</h2>
            <div class="scroll-container">
                <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                <!-- Itens aqui -->
                <div class="item">
                    <img src="img/filmes/central-do-brasil.jpg" alt="Central do Brasil">
                    <p> Central do Brasil</p>
                </div>
                <div class="item">
                    <img src="img/filmes/chucky.jpg" alt="Chucky">
                    <p> Chucky</p>
                </div>
                <div class="item">
                  <img src="img/filmes/titanic.jpg" alt="Titanic">
                  <p>   Titanic</p>
                </div>
                <!-- Adicionando mais filmes -->
                <div class="item">
                  <img src="img/filmes/King kong.jpg" alt="King kong">
                  <p>   King kong</p>
                </div>
                <div class="item">
                  <img src="img/filmes/ainda estou aqui.jpg" alt="Ainda estou aqui">
                  <p>   Ainda estou aqui</p>
                </div>
                <div class="item">
                  <img src="img/filmes/terrifer.jpg" alt="terrifier">
                  <p>   Terrifier</p>
                </div>
                <div class="item">
                    <img src="img/filmes/Game of thrones.jpg" alt="Game of thrones">
                    <p>  Game of thrones</p>
                  </div>
                <!-- Adicione mais conforme necessário -->
                <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        
        <div class="category">
            <h2>Séries e Filmes dramáticos para maratonar</h2>
            <div class="scroll-container">
                <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                <!-- Itens aqui -->
                <div class="item">
                    <img src="img/filmes/strange.jpg" alt="Stranger Things">
                    <p>Stranger Things</p>
                </div>
                <div class="item">
                    <img src="img/filmes/dark.jpg" alt="Dark">
                    <p>Dark</p>
                </div>
                <div class="item">
                  <img src="img/filmes/ayrton-senna.jpg" alt="Senna">
                  <p>Senna</p>
                </div>
                <!-- Adicionando mais filmes -->
                <div class="item">
                  <img src="img/filmes/Rei da tv.jpg" alt="O rei da Tv">
                  <p>O rei da Tv</p>
                </div>
                <div class="item">
                  <img src="img/filmes/Chernobyl.jpg" alt="Chernobyl">
                  <p>Chernobyl</p>
                </div>
                <div class="item">
                  <img src="img/filmes/breaking bad.jpg" alt="Breaking bad">
                  <p>Breaking Bad</p>
                </div>
                <div class="item">
                  <img src="img/filmes/Você.jpg" alt="Você">
                  <p>Você</p>
                </div>
                <!-- Adicione mais conforme necessário -->
                <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
        
        <div class="category">
            <h2>Os oscars não param </h2>
            <div class="scroll-container">
                <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                <!-- Itens aqui -->
                <div class="item">
                    <img src="img/filmes/Clube da luta.jpg" alt="Clube da luta">
                    <p> Clube da luta</p>
                </div>
                <div class="item">
                    <img src="img/filmes/O pianista.jpg" alt="O pianista">
                    <p> O pianista</p>
                </div>
                <div class="item">
                  <img src="img/filmes/oppenheimer.jpg" alt="oppenheimer">
                  <p>   Oppenheimer</p>
                </div>
                <!-- Adicionando mais filmes -->
                <div class="item">
                  <img src="img/filmes/shrek.jpg" alt="King kong">
                  <p>  Shrek</p>
                </div>
                <div class="item">
                  <img src="img/filmes/la la land.jpg" alt="la la land">
                  <p>   La la land</p>
                </div>
                <div class="item">
                  <img src="img/filmes/argo.jpg" alt="Argo">
                  <p>   Argo</p>
                </div>
                <div class="item">
                    <img src="img/filmes/Parasita.jpg" alt="Parasita">
                    <p>  Parasita</p>
                  </div>
                <!-- Adicione mais conforme necessário -->
                <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <div class="category">
            <h2>Séries e filmes para Crianças</h2>
            <div class="scroll-container">
                <button class="prev-btn"><i class="fas fa-chevron-left"></i></button>
                <!-- Itens aqui -->
                <div class="item">
                    <img src="img/filmes/Barbie e o portal secreto.jpg" alt="Barbie e o portal secreto">
                    <p> Barbie e o portal secreto</p>
                </div>
                <div class="item">
                    <img src="img/filmes/doki.jpg" alt="doki">
                    <p> doki</p>
                </div>
                <div class="item">
                  <img src="img/filmes/Peixonauta.jpg" alt="Peixonauta">
                  <p> Peixonauta</p>
                </div>
                <!-- Adicionando mais filmes -->
                <div class="item">
                  <img src="img/filmes/Icarly.jpg" alt="Icarly">
                  <p>   Icarly</p>
                </div>
                <div class="item">
                  <img src="img/filmes/pica pau.jpg" alt="pica pau">
                  <p>   Pica pau</p>
                </div>
                <div class="item">
                  <img src="img/filmes/cavaleiros do zodiacos.jpg" alt="cavaleiros dos zodiacos">
                  <p>   Cavaleiros dos zodiacos</p>
                </div>
                <div class="item">
                    <img src="img/filmes/divertida-mente.jpg" alt="divertida mente">
                    <p>  divertida mente</p>
                  </div>
                <!-- Adicione mais conforme necessário -->
                <button class="next-btn"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>

        <p id="no-results-message" style="display:none; color:white; font-size:18px;">Nenhum resultado encontrado.</p>
        
        <div class="genres">
            <button>Ação</button>
            <button>Comédia</button>
            <button>Terror</button>
            <button>Aventura</button>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>Fale Conosco</h4>
                <ul>
                    <li><a href="#">Email: contato@cinepipoca.com</a></li>
                    <li><a href="#">Telefone: (11) 4002-8922</a></li>
                    <li><a href="#">Endereço: Rua dos Cinemas, 123</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Sobre Nós</h4>
                <p>Cine Pipoca é uma plataforma de streaming dedicada a trazer os melhores filmes, séries, animações e novelas para você.</p>
            </div>
            
            <div class="footer-section">
                <h4>Redes Sociais</h4>
                <ul>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Cine Pipoca. Todos os direitos reservados.</p>
            <p>&copy; Alan Silva Cirqueira</p>
        </div>
    </footer>
    
    <script src="javaScript/script-home.js"></script>
</body>
</html>