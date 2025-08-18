<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pietro Goude Favoreto">
    <meta name="description" content="Desde 2014 o Colégio Saber vem se firmando com uma proposta inovadora no ensino em Curitiba. Sem se descuidar do conhecimento acadêmico, o colégio incentiva a cidadania, a ecologia, esportes e a solidariedade em seus alunos.">
    <meta name="keywords" content="Escola, ensino, colegio, saber, curitiba, pinhais, matricula">
    <title>Colégio Saber - Excelência no Ensino em Curitiba</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="assets/css/style.css" as="style">
    <link rel="preload" href="assets/fonts/Nexa-Heavy.ttf" as="font" type="font/ttf" crossorigin>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="shortcut icon" href="assets/img/pin.png"/>
    <link rel="stylesheet" href="assets/fontawesome-free-5.15.4-web/css/all.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Modern Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="header" id="header">
        <nav class="navbar" id="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <a href="#home" aria-label="Voltar ao início">
                        <img src="assets/img/logo3.jpg" alt="Colégio Saber Logo" class="logo-img">
                    </a>
                </div>
                
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#home" class="nav-link" data-section="home">Início</a>
                        </li>
                        <li class="nav-item">
                            <a href="#sobre" class="nav-link" data-section="sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="#infraestrutura" class="nav-link" data-section="infraestrutura">Infraestrutura</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contato" class="nav-link" data-section="contato">Contato</a>
                        </li>
                    </ul>
                </div>

                <div class="nav-toggle" id="nav-toggle" aria-label="Menu de navegação">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main" id="main">
        <!-- Hero Section -->
        <section class="hero" id="home">
            <div class="hero-container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        <span class="hero-title-main">Colégio Saber</span>
                        <span class="hero-title-sub">Excelência no Ensino desde 2014</span>
                    </h1>
                    <p class="hero-description">
                        Uma proposta inovadora no ensino em Curitiba, incentivando cidadania, ecologia, esportes e solidariedade.
                    </p>
                    <div class="hero-buttons">
                        <a href="#matriculas" class="btn btn-primary">Matrículas Abertas</a>
                        <a href="#sobre" class="btn btn-secondary">Conheça Mais</a>
                    </div>
                </div>
                
                <!-- Hero Slider -->
                <div class="hero-slider">
                    <ul class="sliderB">
                        <li><img src="assets/img/1.png" alt="Colégio Saber - Imagem 1"></li>
                        <li><img src="assets/img/4.png" alt="Colégio Saber - Imagem 2"></li>
                        <li><img src="assets/img/9.png" alt="Colégio Saber - Imagem 3"></li>
                        <li><img src="assets/img/12.png" alt="Colégio Saber - Imagem 4"></li>
                        <li><img src="assets/img/16.png" alt="Colégio Saber - Imagem 5"></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Social Media Floating Buttons -->
        <div class="social-floating" aria-label="Redes sociais">
            <button class="social-btn social-facebook" onclick="openFacebook()" aria-label="Facebook">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button class="social-btn social-instagram" onclick="openInstagram()" aria-label="Instagram">
                <i class="fab fa-instagram"></i>
            </button>
            <button class="social-btn social-whatsapp" onclick="openWhatsApp()" aria-label="WhatsApp">
                <i class="fab fa-whatsapp"></i>
            </button>
        </div>

        <!-- Matriculas Section -->
        <section class="matriculas-section" id="matriculas">
            <div class="container">
                <div class="matriculas-content">
                    <h2 class="section-title">Matrículas e Rematrículas Abertas!</h2>
                    <div class="matriculas-grid">
                        <div class="matricula-card">
                            <div class="matricula-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <h3>Matrículas</h3>
                            <p>Novos alunos</p>
                            <button type="button" class="btn btn-whatsapp" onclick="openWhatsAppRegistration('5541988590440', true)">
                                <i class="fab fa-whatsapp"></i>
                                Entre em contato
                            </button>
                        </div>
                        <div class="matricula-card">
                            <div class="matricula-icon">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <h3>Rematrículas</h3>
                            <p>Alunos atuais</p>
                            <button type="button" class="btn btn-whatsapp" onclick="openWhatsAppRegistration('5541995098043', false)">
                                <i class="fab fa-whatsapp"></i>
                                Entre em contato
                            </button>
                        </div>
                    </div>
                    <a href="#contato" class="btn btn-outline">Mais informações</a>
                </div>
            </div>
        </section>

        <!-- Sobre Section -->
        <section class="sobre-section" id="sobre">
            <div class="container">
                <h2 class="section-title">Excelência no Ensino</h2>
                <p class="section-description">
                    Desde 2014 o Colégio Saber vem se firmando com uma proposta inovadora no ensino em Curitiba. 
                    Sem se descuidar do conhecimento acadêmico, o colégio incentiva a cidadania, a ecologia, 
                    esportes, solidariedade e empreendedorismo em seus alunos.
                </p>
                
                <div class="services-grid">
                    <div class="service-card service-card--primary">
                        <div class="service-icon">
                            <img src="assets/img/notebook.png" alt="Ensino Médio Regular">
                        </div>
                        <h3>Ensino Médio Regular</h3>
                        <p>Não somos EAD ou Colégio online, somos um Colégio de INCLUSÃO e presencial</p>
                    </div>
                    
                    <div class="service-card service-card--secondary">
                        <div class="service-icon">
                            <img src="assets/img/trophy.png" alt="Programa de Inclusão">
                        </div>
                        <h3>Programa de INCLUSÃO para Jovens Atletas</h3>
                        <p>Respeitamos o aluno atleta e suas necessidades</p>
                    </div>
                    
                    <div class="service-card service-card--primary">
                        <div class="service-icon">
                            <img src="assets/img/help.png" alt="Soluções Educacionais">
                        </div>
                        <h3>Soluções Educacionais</h3>
                        <p>Somos um Colégio de INCLUSÃO</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Infraestrutura Section -->
        <section class="infraestrutura-section" id="infraestrutura">
            <div class="container">
                <h2 class="section-title">Infraestrutura</h2>
                <div class="gallery-container">
                    <div id="gallery" class="gallery-grid"></div>
                    <button id="showMoreBtn" class="btn btn-outline hidden">Ver mais fotos</button>
                </div>
            </div>
        </section>

        <!-- Galeria Section -->
        <section class="galeria-section">
            <div class="container">
                <h2 class="section-title">Galeria</h2>
                
                <!-- Main Gallery Slider -->
                <div class="gallery-main">
                    <ul class="sliderX">
                        <li>
                            <video controls preload="auto" class="gallery-video">
                                <source src="assets/img/V1.MOV" type="video/mp4">
                                Seu navegador não suporta o elemento de vídeo.
                            </video>
                        </li>
                        <li>
                            <video controls preload="auto" class="gallery-video">
                                <source src="assets/img/V2.MOV" type="video/mp4">
                                Seu navegador não suporta o elemento de vídeo.
                            </video>
                        </li>
                        <li>
                            <video controls preload="auto" class="gallery-video">
                                <source src="assets/img/V3.MOV" type="video/mp4">
                                Seu navegador não suporta o elemento de vídeo.
                            </video>
                        </li>
                        <li><img src="assets/img/2.png" alt="Galeria - Imagem 1" class="gallery-image"></li>
                        <li><img src="assets/img/3.png" alt="Galeria - Imagem 2" class="gallery-image"></li>
                        <li><img src="assets/img/5.png" alt="Galeria - Imagem 3" class="gallery-image"></li>
                        <li><img src="assets/img/6.png" alt="Galeria - Imagem 4" class="gallery-image"></li>
                        <li><img src="assets/img/7.png" alt="Galeria - Imagem 5" class="gallery-image"></li>
                        <li><img src="assets/img/8.png" alt="Galeria - Imagem 6" class="gallery-image"></li>
                        <li><img src="assets/img/10.png" alt="Galeria - Imagem 7" class="gallery-image"></li>
                        <li><img src="assets/img/11.png" alt="Galeria - Imagem 8" class="gallery-image"></li>
                        <li><img src="assets/img/13.png" alt="Galeria - Imagem 9" class="gallery-image"></li>
                        <li><img src="assets/img/14.png" alt="Galeria - Imagem 10" class="gallery-image"></li>
                        <li><img src="assets/img/15.png" alt="Galeria - Imagem 11" class="gallery-image"></li>
                        <li><img src="assets/img/17.png" alt="Galeria - Imagem 12" class="gallery-image"></li>
                        <li><img src="assets/img/18.png" alt="Galeria - Imagem 13" class="gallery-image"></li>
                    </ul>
                </div>

                <!-- Thumbnail Gallery Slider -->
                <div class="gallery-thumbnails">
                    <ul class="sliderY">
                        <li>
                            <img src="assets/img/V1.jpg" alt="Vídeo 1" class="thumbnail-image">
                            <i class="fas fa-play-circle play-button"></i>
                        </li>
                        <li>
                            <img src="assets/img/V2.jpg" alt="Vídeo 2" class="thumbnail-image">
                            <i class="fas fa-play-circle play-button"></i>
                        </li>
                        <li>
                            <img src="assets/img/V3.jpg" alt="Vídeo 3" class="thumbnail-image">
                            <i class="fas fa-play-circle play-button"></i>
                        </li>
                        <li><img src="assets/img/2.png" alt="Thumbnail 1" class="thumbnail-image"></li>
                        <li><img src="assets/img/3.png" alt="Thumbnail 2" class="thumbnail-image"></li>
                        <li><img src="assets/img/5.png" alt="Thumbnail 3" class="thumbnail-image"></li>
                        <li><img src="assets/img/6.png" alt="Thumbnail 4" class="thumbnail-image"></li>
                        <li><img src="assets/img/7.png" alt="Thumbnail 5" class="thumbnail-image"></li>
                        <li><img src="assets/img/8.png" alt="Thumbnail 6" class="thumbnail-image"></li>
                        <li><img src="assets/img/10.png" alt="Thumbnail 7" class="thumbnail-image"></li>
                        <li><img src="assets/img/11.png" alt="Thumbnail 8" class="thumbnail-image"></li>
                        <li><img src="assets/img/13.png" alt="Thumbnail 9" class="thumbnail-image"></li>
                        <li><img src="assets/img/14.png" alt="Thumbnail 10" class="thumbnail-image"></li>
                        <li><img src="assets/img/15.png" alt="Thumbnail 11" class="thumbnail-image"></li>
                        <li><img src="assets/img/17.png" alt="Thumbnail 12" class="thumbnail-image"></li>
                        <li><img src="assets/img/18.png" alt="Thumbnail 13" class="thumbnail-image"></li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Contato Section -->
        <section class="contato-section" id="contato">
            <div class="container">
                <h2 class="section-title">Entre em Contato</h2>
                <div class="contato-content">
                    <div class="contato-info">
                        <div class="contato-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Endereço</h4>
                                <p>R. Alferes Poli, 1982, Rebouças<br>Curitiba - PR, 80.220-050</p>
                            </div>
                        </div>
                        <div class="contato-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h4>Horário de Atendimento</h4>
                                <p>Segunda a Sexta: 7:15h às 12h</p>
                            </div>
                        </div>
                        <div class="contato-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h4>Telefones</h4>
                                <p><strong>Professor Roberto:</strong> <a href="tel:+5541988590440">(41) 98859-0440</a><br>
                                <small>(Somente para matrículas novas)</small></p>
                                <p><strong>Secretaria:</strong> <a href="tel:+554133223474">(41) 3322-3474</a></p>
                                <p><strong>WhatsApp:</strong> <a href="https://wa.me/554195098043">(41) 99509-8043</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="contato-form">
                        <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xpzkgvwj" method="post">
                            <div class="form-group">
                                <label for="full-name">Nome completo</label>
                                <input type="text" name="name" id="full-name" placeholder="Nome e Sobrenome" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email-address">Email</label>
                                <input type="email" name="_replyto" id="email-address" placeholder="email@email.com" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="telephone">Telefone</label>
                                <input type="tel" name="telephone" id="telephone" placeholder="(00) 00000-0000" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Mensagem</label>
                                <textarea name="message" id="message" rows="5" maxlength="350" placeholder="Escreva aqui o que quer saber, que retornaremos" required></textarea>
                            </div>
                            
                            <input type="hidden" name="_subject" value="Contato - Colégio Saber">
                            <button type="submit" class="btn btn-primary btn-full">Enviar mensagem</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section">
                        <img src="assets/img/pin.png" alt="Colégio Saber" class="footer-logo">
                        <p>Colégio Saber é uma instituição de ensino dedicada à formação completa dos alunos, oferecendo um ambiente acolhedor e inovador.</p>
                    </div>
                    
                    <div class="footer-section">
                        <h4>Redes Sociais</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/ColegioSaberCuritiba" target="_blank" rel="noopener" aria-label="Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/colegiosabercuritiba/" target="_blank" rel="noopener" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://api.whatsapp.com/send/?phone=554195098043&text=Oi%2C+tem+interesse+em+ter+mais+informações+do+Colégio+Saber%3F" target="_blank" rel="noopener" aria-label="WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <p>FEITO COM 💙 COLEGIO SABER</p>
                </div>
            </div>
        </footer>
    </main>

    <!-- Gallery Modal -->
    <div id="modal" class="modal hidden" aria-hidden="true">
        <div class="modal-content">
            <button id="closeModal" class="modal-close" aria-label="Fechar galeria">
                <i class="fas fa-times"></i>
            </button>
            <div id="modalContent" class="modal-gallery"></div>
        </div>
    </div>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="map-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.5498857496304!2d-49.26797678498536!3d-25.453307783777642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4690c9254a5%3A0x2ae4e77ea7e1e9f6!2sCol%C3%A9gio%20Saber!5e0!3m2!1spt-BR!2sbr!4v1636060359804!5m2!1spt-BR!2sbr"
                    width="100%" 
                    height="400" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy"
                    title="Localização do Colégio Saber">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="assets/js/events.js"></script>
</body>

</html>