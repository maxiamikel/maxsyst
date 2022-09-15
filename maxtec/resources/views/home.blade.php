<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MaxiSoft, Software and Tecnology</title>
    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.style.css">
    <!-- Scripts  -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/64e14fbeb3.js" crossorigin="anonymous"></script>
    <!-- Progress Bar -->
    <script src="/js/progressbar.min.js"></script>
    <!-- Parallax -->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>
    <header>
        <div class="container" id="nav-container">
            <!-- add essa class -->
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <a class="navbar-brand" href="index.html">
                    <img id="logo" src="img/logo.png" alt="MaxiSoft, Software and tecnology"> <span class="title1">Maxi</span><span class="title2">Soft </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links" aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-links">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" id="home-menu" href="#">Home</a>
                        <a class="nav-item nav-link" id="about-menu" href="#">A empresa</a>
                        <a class="nav-item nav-link" id="services-menu" href="#">Serviços</a>
                        <a class="nav-item nav-link" id="team-menu" href="#">Time</a>
                        <a class="nav-item nav-link" id="portfolio-menu" href="#">Projetos</a>
                        <a class="nav-item nav-link" id="contact-menu" href="#">Contato</a>
                        <a class="nav-item nav-link"  href="/pages/contato"><i class="fa-solid fa-right-to-bracket"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <!-- slider -->
            <div id="mainSlider" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
                    <li data-target="#mainSlider" data-slide-to="1"></li>
                    <li data-target="#mainSlider" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/ecomerce.png" class="d-block w-100" alt="Projetos de e-commerce">
                        <div class="carousel-caption d-md-block">
                            <h2>Quer criar um e-commerce?</h2>
                            <p>Conte conosco, temos mais de 10 lojas no portf&oacute;lio.</p>
                            <a href="#" class="main-btn">Ver portf&oacute;lio</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/webdesign.jpg" class="d-block w-100" alt="Engenharia de software">
                        <div class="carousel-caption d-md-block">
                            <h2>Est&aacute; querendo tirar o projeto do papel?</h2>
                            <p>Nossa equipe de engenharia de software est&aacute; pronta para lhe atender.</p>
                            <a href="/pages/contato" class="main-btn">Entre em contato</a> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/seo.png" class="d-block w-100" alt="Manutenção em software">
                        <div class="carousel-caption d-md-block">
                            <h2>Est&aacute; buscando manuten&ccedil;&atilde;o no seu software?</h2>
                            <p>MaxiSoft conta com engenheiros altamente qualificados para resolver seu problema.</p>
                            <a href="#" class="main-btn">Entre em contato</a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Sobre a empresa -->
            <div id="about-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">MaxiSoft, Software and Tecnology</h3>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid" src="img/agencia.jpg" alt="Agência hDC">
                        </div>
                        <div class="col-md-6">
                            <h3 class="about-title">Uma agência que pensa no futuro</h3>
                            <p>Nossos projetos são adaptados ao cliente e seu propósito.</p>
                            <p>Após a especificação do projetos os arquitetos de software definirão as melhores tecnologias para seu projeto.</p>
                            <p>E nossos designers trabalharão na sua interface/layout para impulsionar o negócio.</p>
                            <p>Veja outros diferenciais:</p>
                            <ul id="about-list">
                                <li><i class="fas fa-check"></i> Utilização de Machine Learning / AI</li>
                                <li><i class="fas fa-check"></i> Layout responsivo para todos os dispositivos</li>
                                <li><i class="fas fa-check"></i> Integração com diversos sistemas do mercado</li>
                                <li><i class="fas fa-check"></i> Sistema de pagamento próprio</li>
                                <li><i class="fas fa-check"></i> Desenvolvimento com metodologia ágil</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Serviços da empresa -->
            <div id="services-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nossas especialidades</h3>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-mobile-alt"></i>
                            <h4>Aplicativos Nativos</h4>
                            <p>Utilizamos o real poder dos dispositivos móveis construindo aplicativos nativos.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-shopping-cart"></i>
                            <h4>E-commerces</h4>
                            <p>Temos uma plataforma própria de e-commerce que se adapta a qualquer regra de negócio (B2C e B2B).</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-paint-brush"></i>
                            <h4>Design Criativo</h4>
                            <p>Nossos designers são especializados em UI/UX e também possuem vasta experiência no mercado de software.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fab fa-google"></i>
                            <h4>Experts em SEO</h4>
                            <p>Com nosso serviço de marketing seu site será melhor posicionado no Google e venderá mais.</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-hands-helping"></i>
                            <h4>Suporte 24/7</h4>
                            <p>Você sempre terá alguem da equipe disponível para suporte, em diferentes plataformas. (chat, email, skype)</p>
                        </div>
                        <div class="col-md-4 service-box">
                            <i class="fas fa-server"></i>
                            <h4>Experiência em servidores</h4>
                            <p>Garantimos uptime e também rápido tempo de resposta do seu site para o seu cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dados da empresa -->
            <div id="data-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleA"></div>
                            <p>Projetos entregues</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleB"></div>
                            <p>Clientes Felizes</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleC"></div>
                            <p>Colaboradores</p>
                        </div>
                        <div class="col-md-3 col-xs-6 circle-box">
                            <div id="circleD"></div>
                            <p>Cafézinhos</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Time -->
            <div id="team-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="main-title">Nosso time</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="/img/foto.jpg" class="card-img-top" alt="Imagem de Perfil 1">
                                <div class="card-body">
                                    <h5 class="card-title">Jhon Doe</h5>
                                    <p class="card-text">Software Developer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="/img/foto.jpg" class="card-img-top" alt="Imagem de Perfil 2">
                                <div class="card-body">
                                    <h5 class="card-title">Maria Mariana</h5>
                                    <p class="card-text">SEO Consultant</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="/img/foto.jpg" class="card-img-top" alt="Imagem de Perfil 3">
                                <div class="card-body">
                                    <h5 class="card-title">Paul Baker</h5>
                                    <p class="card-text">Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="/img/foto.jpg" class="card-img-top" alt="Imagem de Perfil 4">
                                <div class="card-body">
                                    <h5 class="card-title">Karina Katarina</h5>
                                    <p class="card-text">UX/UI Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Trabalhe conosco -->
            <div id="apply-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 apply-box" id="company-img"></div>
                        <div class="col-md-6 apply-box" id="pattern-img">
                            <h4>Gosta de desafios?</h4>
                            <p>Temos várias posições abertas, entre elas: Software Engineer, UI/UX Designer, Project Manager e mais.</p>
                            <p>Clique no botão abaixo e confira os benefícios e as posições em aberto.</p>
                            <p>Aqui você terá a chance de trabalhar com as melhores tecnologias e os profissionais mais capacitados.</p>
                            <a href="#" class="main-btn" id="apply-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfólio -->
            <div id="portfolio-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="main-title">Conheça nossos projetos</h3>
                        </div>
                        <div class="col-md-12" id="filter-btn-box">
                            <button class="main-btn filter-btn active" id="all-btn">Todos</button>
                            <button class="main-btn filter-btn" id="dev-btn">Desenvolvimento</button>
                            <button class="main-btn filter-btn" id="dsg-btn">Design</button>
                            <button class="main-btn filter-btn" id="seo-btn">SEO</button>
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj1.jpg" class="img-fluid" alt="Projeto 1">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj2.jpg" class="img-fluid" alt="Projeto 2">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj3.jpg" class="img-fluid" alt="Projeto 3">
                        </div>
                        <div class="col-md-4 project-box dev">
                            <img src="img/proj4.jpg" class="img-fluid" alt="Projeto 4">
                        </div>
                        <div class="col-md-4 project-box dsg">
                            <img src="img/proj5.jpg" class="img-fluid" alt="Projeto 5">
                        </div>
                        <div class="col-md-4 project-box seo">
                            <img src="img/proj6.jpg" class="img-fluid" alt="Projeto 6">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter -->
            <div id="news-area">
                <div class="container">
                    <div class="col-md-12">
                        <h3 class="main-title">Fique por dentro das novidades</h3>
                    </div>
                    <p>Assine nossa lista de e-mails, e receba nossos conte&uacute;dos sobre desenvolvimento de software</p>
                    <form action="">
                        <input type="text" class="form-control" id="email-input" name="email" placeholder="Seu melhor e-mail">
                        <input type="submit" id="news-btn" value="Inscrever">
                    </form>
                </div>
            </div>
            <!-- Call to Action -->
            <div id="call-area">
                <div class="container">
                    <div class="row">
                        <p>Deseja fazer um or&ccedil;amento sem compromisso?</p>
                        <button class="main-btn" id="call-btn">Or&ccedil;ar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Rodape -->
    <footer>
        <div id="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="main-title">Entre em contato com a equipe</h3>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-phone"></i>
                        <p><span class="contact-tile">Ligue para:</span> (44) 9 8831-9197</p>
                        <p><span class="contact-tile">Hor&aacute;rios:</span> 08:00 - 19:00</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-envelope"></i>
                        <p><span class="contact-tile">Envie um email:</span> contato.maxloversist@gmail.com</p>
                    </div>
                    <div class="col-md-4 contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <p><span class="contact-tile">Visite a nossa l&oacute;ja:</span> Rua Ver. Joaquim P. de Castro, 230</p>
                    </div>
                    <div class="col-md-6" id="msg-box">
                        <p>Ou nos deixe uma mensagem:</p>
                    </div>
                    <div class="col-md-6" id="contact-form">
                        <form action="">
                            <input type="text" class="form-control" placeholder="E-mail" name="email">
                            <input type="text" class="form-control" placeholder="Assunto" name="subject">
                            <textarea class="form-control" rows="3" placeholder="Sua mensagem..." name="message"></textarea>
                            <input type="submit" class="main-btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="copy-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Desenvolvido por <a href="http://www.maxsyst.epizy.com" target="_blank"> Maxi Amikel , Mai </a> &copy; 2020</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts do projeto -->
    <script src="/js/scripts.js"></script>
</body>

</html>