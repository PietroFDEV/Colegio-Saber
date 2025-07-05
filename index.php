<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta https-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Pietro Goude Favoreto">
    <meta name="description" content="Desde 2014 o Colégio Saber vem se firmando com uma proposta inovadora no ensino em Curitiba.
    Sem se descuidar do conhecimento acadêmico, o colégio incentiva a cidadania,
     a ecologia, esportes e a solidariedade em seus alunos.">
    <meta name="keywords" content="Escola, ensino, colegio, saber, curitiba, pinhais, matricula">
    <title>Colégio Saber</title>
    <link rel="stylesheet" href="https://colegiosaber.org/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="shortcut icon" href="https://colegiosaber.org/assets/img/pin.png"/>
    <link rel="stylesheet" href="https://colegiosaber.org/assets/fontawesome-free-5.15.4-web/css/all.css"/>
    <link rel="stylesheet" href="/assets/css/new.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- <style>
    .hidden { display: none; }
    .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 10px; }
    .infra { width: 100%; height: auto; border-radius: 5px; }
  </style> -->
</head>
<header>
    <nav id="nav">
        <div class="logo">
            <a href="#comeco">
                <img id="inicio" src="https://colegiosaber.org/assets/img/logo3.jpg">
            </a>
        </div>
        <div class="mobile-menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <ul class="nav-list">
            <li><a href="#comeco">Inicio</a></li>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#infrapush">Infraestrutura</a></li>
            <li><a href="#final">Contato</a></li>
        </ul>
    </nav>
    <div id="comeco"></div>
</header>

<body>

    <main id="main">
        <div class="flexB">
          <button id="action-btn" class="botao" onclick="openFacebook()"></button>

          <button id="action-btnB" class="botao" onclick="openInstagram()"></button>

          <button id="action-btnC" class="botao" onclick="openWhatsApp()"></button>
        </div>

        <ul class="sliderB">
            <img src="https://colegiosaber.org/assets/img/1.png">
            <img src="https://colegiosaber.org/assets/img/4.png">
            <img src="https://colegiosaber.org/assets/img/9.png">
            <img src="https://colegiosaber.org/assets/img/12.png">
            <img src="https://colegiosaber.org/assets/img/16.png">
        </ul>

        <div id="sobre"></div>

        <div id="maior">
            <div id="matriculas">
                <h1><b>Matrículas e rematrículas abertas!</b></h1>
                <div class="btnMatricula">
                    <p class="btnMatriculaTitle">Matrículas</p>
                    <button type="submit" class="botaoW" onclick="openWhatsAppRegistration('5541988590440', true)"><img src="https://colegiosaber.org/assets/img/whats.png" height="22px" width="22px" alt="Ícone" class="wppIcon">Entre em contato</button>
                </div>
                <div class="btnMatricula">
                    <p class="btnMatriculaTitle">Rematrículas</p>
                    <button type="submit" class="botaoW" onclick="openWhatsAppRegistration('5541995098043', false)"><img src="https://colegiosaber.org/assets/img/whats.png" height="22px" width="22px" alt="Ícone" class="wppIcon">Entre em contato</button>
                </div>
                <a href="#final" id="moreInfo">Mais informações</a>
            </div>
            
            <h1><b>Excelência no Ensino</b></h1>
            <h2>Desde 2014 o Colégio Saber vem se firmando com uma proposta inovadora no ensino em Curitiba. Sem se descuidar do conhecimento acadêmico, o colégio incentiva a cidadania , a ecologia, esportes, solidariedade e empreendedorismo em seus alunos.</h2>
            <section class="flex">
                <div id="corA" class="inteiro">
                    <div class="img-inicio">
                        <img src="https://colegiosaber.org/assets/img/notebook.png">
                    </div>
                    <p class="maior">Ensino Médio Regular</p>
                    <p class="menor">Não somos EAD ou Colégio online, somos um Colégio de INCLUSÃO e presencial</p>
                </div>
                <div id="corB" class="inteiro">
                    <div class="img-inicio">
                        <img src="https://colegiosaber.org/assets/img/trophy.png">
                    </div>
                    <p class="maior">Programa de INCLUSÃO para Jovens Atletas</p>
                    <p class="menor">Respeitamos o aluno atleta e suas necessidades</p>
                </div>
                <div id="corC" class="inteiro">
                    <div class="img-inicio">
                        <img src="https://colegiosaber.org/assets/img/help.png">
                    </div>
                    <p class="maior">Soluções Educacionais</p>
                    <p id="infrapush" class="menor">Somos um Colégio de INCLUSÃO</p>
                </div>
            </section>
            <div id="infraestrutura">

                <h1><b>INFRAESTRUTURA</b></h1>

                <section id="gallery" class="grid"></section>
                <button id="showMoreBtn" class="hidden">Mostrar mais</button>
            </div>
            
            <div id="gallery-loader">
              <p>Carregando galeria...</p>
              <div class="spinner"></div>
            </div>

            <section id="gallery-section" class="gallery--hidden">
              <h1><b>Galeria</b></h1>
              <ul class="sliderX">
                <li>
                  <video controls preload="auto">
                      <source src="https://colegiosaber.org/assets/img/V1.MOV" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                </li>
                <li>
                  <video controls preload="auto">
                      <source src="https://colegiosaber.org/assets/img/V2.MOV" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                </li>
                <li>
                  <video controls preload="auto">
                      <source src="https://colegiosaber.org/assets/img/V3.MOV" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                </li>
                <li><img src="https://colegiosaber.org/assets/img/2.png" alt="Image 1"></li>
                <li><img src="https://colegiosaber.org/assets/img/3.png" alt="Image 2"></li>
                <li><img src="https://colegiosaber.org/assets/img/5.png" alt="Image 3"></li>
                <li><img src="https://colegiosaber.org/assets/img/6.png" alt="Image 4"></li>
                <li><img src="https://colegiosaber.org/assets/img/7.png" alt="Image 5"></li>
                <li><img src="https://colegiosaber.org/assets/img/8.png" alt="Image 6"></li>
                <li><img src="https://colegiosaber.org/assets/img/10.png" alt="Image 7"></li>
                <li><img src="https://colegiosaber.org/assets/img/11.png" alt="Image 8"></li>
                <li><img src="https://colegiosaber.org/assets/img/13.png" alt="Image 9"></li>
                <li><img src="https://colegiosaber.org/assets/img/14.png" alt="Image 10"></li>
                <li><img src="https://colegiosaber.org/assets/img/15.png" alt="Image 11"></li>
                <li><img src="https://colegiosaber.org/assets/img/17.png" alt="Image 12"></li>
                <li><img src="https://colegiosaber.org/assets/img/18.png" alt="Image 13"></li>
              </ul>

              <ul class="sliderY">
                  <li>
                    <img src="https://colegiosaber.org/assets/img/V1.jpg" alt="Video 1">
                    <i class="fas fa-play-circle play-button"></i>
                  </li>
                  <li>
                    <img src="https://colegiosaber.org/assets/img/V2.jpg" alt="Video 2">
                    <i class="fas fa-play-circle play-button"></i>
                  </li>
                  <li>
                    <img src="https://colegiosaber.org/assets/img/V3.jpg" alt="Video 3">
                    <i class="fas fa-play-circle play-button"></i>
                  </li>
                  <li><img src="https://colegiosaber.org/assets/img/2.png" alt="Image 1"></li>
                  <li><img src="https://colegiosaber.org/assets/img/3.png" alt="Image 2"></li>
                  <li><img src="https://colegiosaber.org/assets/img/5.png" alt="Image 3"></li>
                  <li><img src="https://colegiosaber.org/assets/img/6.png" alt="Image 4"></li>
                  <li><img src="https://colegiosaber.org/assets/img/7.png" alt="Image 5"></li>
                  <li><img src="https://colegiosaber.org/assets/img/8.png" alt="Image 6"></li>
                  <li><img src="https://colegiosaber.org/assets/img/10.png" alt="Image 7"></li>
                  <li><img src="https://colegiosaber.org/assets/img/11.png" alt="Image 8"></li>
                  <li><img src="https://colegiosaber.org/assets/img/13.png" alt="Image 9"></li>
                  <li><img src="https://colegiosaber.org/assets/img/14.png" alt="Image 10"></li>
                  <li><img src="https://colegiosaber.org/assets/img/15.png" alt="Image 11"></li>
                  <li><img src="https://colegiosaber.org/assets/img/17.png" alt="Image 12"></li>
                  <li><img src="https://colegiosaber.org/assets/img/18.png" alt="Image 13"></li>
              </ul>
            </section>
            <h1 id="redes"><b>Envie um e-mail</b></h1>

            <div>
                <form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xpzkgvwj" method="post">
                    <fieldset id="fs-frm-inputs" class="flexC">
                        <label class="AA" for="full-name">Nome completo:</label>
                        <input class="BB" type="text" name="name" id="full-name" placeholder="Nome e Sobrenome" required="">

                        <label class="CC" for="email-address">Email:</label>
                        <input class="DD" type="email" name="_replyto" id="email-address" placeholder="email@email.com" required="">

                        <label class="EE" for="telephone">Telefone:</label>
                        <input class="FF" type="telephone" name="telephone" id="telephone" placeholder="(00) 00000-0000" required="">

                        <br>

                        <label class="GG" for="message">Mensagem:</label>
                        <textarea class="HH" rows="5" name="message" id="message" maxlength="350" cols="50" placeholder="Escreva aqui o que quer saber, que retornaremos" required=""></textarea>
                        <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
                    </fieldset>
                    <input type="submit" class="botaoB" value="Enviar">
                </form>
            </div>
        </div>
        
        <footer id="school-footer">
            <div id="maiorB">
                <section class="flexD" style="display: flex; flex-direction: column; align-items: center; padding: 20px;">
                    <div class="inteiroB" style="text-align: center; padding: 20px;">
                        <h4><i class="fas fa-map-marker-alt"></i> Endereço</h4>
                        <p>R. Alferes Poli, 1982, Rebouças,<br>Curitiba - PR, 80.220-050</p>
                    </div>
                    <div style="width: 100%; max-width: 600px; height: 300px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.5498857496304!2d-49.26797678498536!3d-25.453307783777642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4690c9254a5%3A0x2ae4e77ea7e1e9f6!2sCol%C3%A9gio%20Saber!5e0!3m2!1spt-BR!2sbr!4v1636060359804!5m2!1spt-BR!2sbr"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </section>
                <section class="flexD" style="justify-content: space-around; align-items: flex-start; padding: 20px;">
                    <div class="inteiroB" style="flex: 1; min-width: 200px;">
                      <img src="https://colegiosaber.org/assets/img/pin.png" alt="Colégio Saber" style="max-width: 100px; margin-bottom: 10px;">
                        <p style="max-width: 400px; margin: 0 auto;">Colégio Saber é uma instituição de ensino dedicada à formação completa dos alunos, oferecendo um ambiente acolhedor e inovador.</p>
                        <br/>
                    </div>
                    <div class="inteiroB" style="flex: 1; min-width: 200px;">
                      <h4><i class="fas fa-clock"></i> Atendimento</h4>
                      <p>Segunda a Sexta: 7:15h às 12h</p>
                  </div>
                    <div class="inteiroB" style="flex: 1; min-width: 200px;">
                        <h4><i class="fas fa-phone-alt"></i> Telefone</h4>
                        <ul style="list-style: none; padding: 0;">
                            <li><b>Professor Roberto:</b> <br><a class="numero" href="tel:+5541988590440" style="color: #3498DB;">(41) 98859-0440</a><br>(Somente para matrículas novas)</li><br>
                            <li>Secretaria: <a class="numero" href="tel:+554133223474" style="color: #3498DB;">(41) 3322-3474</a></li>
                            <li>WhatsApp: <a class="numero" href="https://wa.me/554195098043?text=Oi,%20tem%20interesse%20em%20ter%20mais%20informações%20do%20Colégio%20Saber?" style="color: #3498DB;">(41) 99509-8043</a></li>
                        </ul>
                    </div>
                    <div style="flex: 1; min-width: 200px;">
                      <h4><i class="fa-solid fa-user"></i> Redes Sociais</h4>
                      <ul style="list-style: none; padding: 0;">
                          <li><a href="https://www.facebook.com/ColegioSaberCuritiba" target="_blank" style="color: #3498DB; margin: 5px 0;"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                          <li><a href="https://www.instagram.com/colegiosabercuritiba/" target="_blank" style="color: #3498DB; margin: 5px 0;"><i class="fab fa-instagram"></i> Instagram</a></li>
                          <li><a href="https://api.whatsapp.com/send/?phone=554195098043&text=Oi%2C+tem+interesse+em+ter+mais+informações+do+Colégio+Saber%3F&type=phone_number&app_absent=0" target="_blank" style="color: #3498DB; margin: 5px 0;"><i class="fab fa-twitter"></i> Twitter</a></li>
                      </ul>
                  </div>
                </section>
            </div>
        </footer>

        <section id="facebook-reviews" style="padding: 2rem;">
  <h2 style="text-align: center; font-size: 2rem; margin-bottom: 1rem;">O que dizem sobre nós</h2>
  
  <div class="sliderY">
    
    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Feliza.kmick%2Fposts%2F10207257105023240&show_text=true&width=500"
              width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fyago.guilherme.9%2Fposts%2F3550885974951134&show_text=true&width=500" width="500" height="107" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                      width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flscorci%2Fposts%2F3837733086242702&show_text=true&width=500"
         width="500" height="169" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"              width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Flscorci%2Fposts%2F3837733086242702&show_text=true&width=500" width="500" height="169" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                      width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FJulianoautoshop%2Fposts%2F2929928477120267&show_text=true&width=500" width="500" height="107" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                      width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

    <div class="review">
      <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpaulo.pimentel.507%2Fposts%2F2060422690635571&show_text=true&width=500" width="500" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="false" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"
                      width="100%" height="350" style="border:none;overflow:hidden"
              scrolling="no" frameborder="0" allowfullscreen="true"
              allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>

  </div>
</section>



        <p id="final"><b>FEITO COM 💙 COLEGIO SABER</b></p>
        
    </main>
    <div id="modal" class="hidden">
      <div>
        <button id="closeModal" style="margin-bottom: 10px;">Close</button>
        <div id="modalContent" class="grid"></div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript" src="https://colegiosaber.org/assets/js/events.js"></script>
    <script src="/assets/js/main.js" defer></script>
</body>

</html>