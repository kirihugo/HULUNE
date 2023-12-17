<!DOCTYPE html>
<html lang="en">
<?php session_start(); 
require "conexao.php";
?> 
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HULUNE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Hlogo.jpg" rel="icon">
  <link href="assets/img/apple.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">HULUNE<span></span></a></h1>
    
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li class="dropdown"><a href="#"><span> Home</span></a>
          <ul>
              <li><a href="deslogar/logout.php">Sair</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#about">Sobre nós</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Sócios</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>       
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      
<?php if (isset($_SESSION["nomeusuario"])){
echo "<a href='forms/login.php' class='get-started-btn scrollto'>". $_SESSION['nomeusuario']."</a>";
} else {
  echo "<a href='forms/login.php' class='get-started-btn scrollto'>Login</a>";
}
?>
      

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1><span>Estudando o ensino-aprendizagem do IFSP Campus Guarulhos.</span></h1>
        </div>
      </div>

      

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/mao.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Sobre a Empresa</h3>
            <p class="fst-italic">
           O propósito primordial da nossa empresa é investigar de maneira abrangente e incisiva se a ausência de acesso de qualidade e a carência de tecnologia tiveram um impacto substancial no processo de aprendizagem dos estudantes do Instituto Federal de São Paulo - Campus Guarulhos durante o período de ensino remoto. Estamos empenhados em identificar as lacunas, desafios e impedimentos específicos que podem ter prejudicado significativamente o desenvolvimento educacional dos alunos, visando propor soluções.


            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Sócios</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Integrantes</li>             
            </ul>
          </div>
        </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/a.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Amanda do Nascimento Antero</span></p>
                        <p><span class="title-s">Email: </span> <span>amanda.antero@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 5106-7005</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div> 
<br><br>
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/h.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Hugo dos Santos</span></p>
                        <p><span class="title-s">Email: </span> <span>hugo.santos1@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 5833-6180</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
<br><br>
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/i.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Ian Abacherli Nava</span></p>
                        <p><span class="title-s">Email: </span> <span>ian.s@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 7095-9742</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div> 
<br><br>
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/l.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Luiz Felipe da Silva</span></p>
                        <p><span class="title-s">Email: </span> <span>silva.luiz1@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 9427-1714</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div> 
<br><br>
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/ne.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Neemias Felix Gomes Silva Santos</span></p>
                        <p><span class="title-s">Email: </span> <span>felix.n@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 8968-1094</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div> 
<br><br>
<div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/no.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Nome: </span> <span>Noemi da Silva Vicente</span></p>
                        <p><span class="title-s">Email: </span> <span>silva.noemi@aluno.ifsp.edu.br</span></p>
                        <p><span class="title-s">Telefone: </span> <span>(11) 9 9295-7610</span></p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div> 
<br><br>
    </section><!-- End Portfolio Section -->
    <!-- ======= meio Section ======= -->
    
    <!-- ======= Counts Section ======= -->
  
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                
                

            
            
            
            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contatos</h2>
          <p>Contato da diretoria</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5995786886606!2d-46.537391400000004!3d-23.4388276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51fbe5f8681%3A0x1f8cf929993dc97!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%20IFSP%20Guarulhos!5e0!3m2!1spt-BR!2sbr!4v1695327635111!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localização</h4>
                <p>Av. Salgado Filho, 3501 - Centro, Guarulhos - SP, 07115-000</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>dggru@ifsp.edu.br</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefone:</h4>
                <p>(11) 2304-4255</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <p>
                <strong>Criadores:</strong> Amanda, Hugo, Ian, Luiz, Neemias e Noemi<br>
                <strong>Série:</strong> 3° informática<br>
              </p>
            </div>
          </div>


          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Volte para Home</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HULUNE</span></strong>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>