<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio - ESSE Henry-Joel</title>
  <meta name="description" content="Portfolio de ESSE Henry-Joel - Développeur Full Stack & Designer Créatif">
  <meta name="keywords" content="développeur web, portfolio, design, projets, full stack">

  <!-- Preload des ressources critiques -->
  <link rel="preload" href="assets/vendor/bootstrap/css/bootstrap.min.css" as="style">
  <link rel="preload" href="assets/css/main.css" as="style">
  <link rel="preload" href="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" as="script">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts avec font-display: swap -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Questrial:wght@400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Scripts critiques -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>

  <!-- =======================================================
  * Template Name: EasyFolio
  * Template URL: https://bootstrapmade.com/easyfolio-bootstrap-portfolio-template/
  * Updated: Feb 21 2025 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <!-- Loader de chargement optimisé -->
  <div id="loader-bg" style="position:fixed;z-index:9999;top:0;left:0;width:100vw;height:100vh;background:#fff;display:flex;align-items:center;justify-content:center;">
    <div class="spinner-border" style="width:3rem;height:3rem;color:#f2994a;" role="status">
      <span class="visually-hidden">Chargement...</span>
    </div>
  </div>

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Portfolio</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Accueil</a></li>
          <li><a href="#about">À propos</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="assets/cv/cv_esse_henry-joel.pdf" class="download-cv" download target="_blank" rel="noopener noreferrer"><i class="bi bi-download me-1"></i>CV</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://web.facebook.com/profile.php?id=100084156153894" target="_blank" rel="noopener noreferrer" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/in/joel-esse-41a082297/" target="_blank" rel="noopener noreferrer" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/jojoskino" target="_blank" rel="noopener noreferrer" class="github"><i class="bi bi-github"></i></a>
      </div>

    </div>
  </header>

  <?php if (isset($_SESSION['message_success'])): ?>
      <script>
        alert("<?= addslashes($_SESSION['message_success']) ?>");
      </script>
      <?php unset($_SESSION['message_success']); ?>
    <?php endif; ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h2>Création d'Expériences Numériques avec Passion</h2>
            <p class="lead">Transformer les idées en solutions élégantes grâce à un design créatif et un développement innovant</p>
            <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
              <a href="#portfolio" class="btn btn-primary">Voir mes travaux</a>
              <a href="#contact" class="btn btn-outline">Contactez-moi</a>
            </div>
            <div class="hero-stats" data-aos="fade-up" data-aos-delay="400">
              <div class="stat-item">
                <span class="stat-number">2+</span>
                <span class="stat-label">Années de formation</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">10+</span>
                <span class="stat-label">Projets réalisés</span>
              </div>
              <div class="stat-item">
                <span class="stat-number">100%</span>
                <span class="stat-label">Clients satisfaits</span>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/profile/profile-1.png" alt="Portfolio Hero Image" class="img-fluid" data-aos="zoom-out" data-aos-delay="300">
              <div class="shape-1"></div>
              <div class="shape-2"></div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card shadow p-4 d-flex flex-row align-items-center" style="border-radius: 24px;">
              <div class="about-image me-4" style="flex:0 0 160px;">
                <img src="assets/img/profile/ma_photo.png" alt="Photo de Henry-Joel" class="img-fluid rounded-4" style="width:160px;height:160px;object-fit:cover;">
              </div>
              <div class="about-content">
                <h2 class="fw-bold mb-2" style="color:#385074;">À propos de moi</h2>
                <p class="mb-0" style="font-size:1.15rem;">Je m'appelle <strong>ESSE Henry-Joel</strong>, étudiant en 2ème année de développement d'application à l'UCAO-UUT. Passionné par la création de solutions web, mobiles et graphiques, j'accompagne mes clients dans la réussite de leurs projets digitaux avec sérieux, créativité et efficacité.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills section" style="background:#f9f9fb;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 class="fw-bold mb-5" style="color:#385074;">Compétences Techniques</h2>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">HTML/CSS</h3>
              <div class="mb-2" style="color:#6c757d;">Intégration web moderne et responsive.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">90%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:90%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">JavaScript</h3>
              <div class="mb-2" style="color:#6c757d;">Scripts dynamiques et interactions web.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">65%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:65%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">Java (Swing)</h3>
              <div class="mb-2" style="color:#6c757d;">Applications desktop robustes.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">80%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:80%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">PHP/MySQL</h3>
              <div class="mb-2" style="color:#6c757d;">Développement back-end et gestion de base de données.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">80%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:80%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">Flutter/Firebase</h3>
              <div class="mb-2" style="color:#6c757d;">Applications mobiles multiplateformes.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">75%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:75%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">Canva</h3>
              <div class="mb-2" style="color:#6c757d;">Création graphique et visuels attractifs.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">95%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:95%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">CapCut</h3>
              <div class="mb-2" style="color:#6c757d;">Montage vidéo et contenus dynamiques.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">80%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:80%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card shadow-sm p-4 h-100" style="border-radius:18px;">
              <h3 class="fw-bold" style="color:#22314f;">WordPress</h3>
              <div class="mb-2" style="color:#6c757d;">Création et gestion de sites web avec WordPress.</div>
              <div class="d-flex align-items-center mb-2"><span class="fw-bold ms-auto" style="color:#22314f;">80%</span></div>
              <div class="progress" style="height:8px;background:#fbeee3;">
                <div class="progress-bar" style="width:80%;background:#f2994a;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-5">
          <h4 class="fw-bold mb-2" style="color:#22314f;">Frameworks & Outils</h4>
          <ul class="list-inline">
            <li class="list-inline-item"><span class="badge bg-light text-dark border border-1 me-2"><i class="bi bi-check-circle-fill me-1" style="color:#f2994a;"></i>Bootstrap</span></li>
            <li class="list-inline-item"><span class="badge bg-light text-dark border border-1"><i class="bi bi-check-circle-fill me-1" style="color:#f2994a;"></i>Laravel</span></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Découvrez mes réalisations dans différents domaines</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">Tous</li>
              <li data-filter=".filter-web">Web</li>
              <li data-filter=".filter-affiche">Affiche</li>
              <li data-filter=".filter-desktop">Desktop</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <!-- Projet Web 1 -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/jojo'short.jpg" class="img-fluid" alt="Jojo'Short" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/jojo'short.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="https://quicklink-n9ee.onrender.com/" target="_blank" rel="noopener noreferrer" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web</span>
                  <h3>Jojo'Short</h3>
                  <p>Site web de raccourcissement de liens.</p>
                </div>
              </div>
            </div>

            <!-- Projet Web 2 -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/bibliotheque.jpg" class="img-fluid" alt="Gestion de bibliothèque" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/bibliotheque.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="#" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web</span>
                  <h3>Gestion de bibliothèque</h3>
                  <p>Application web de gestion complet pour bibliothèques avec gestion des emprunts, des retours et des utilisateurs.</p>
                </div>
              </div>
            </div>

            <!-- Projet Web 3 - WordPress -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/site_ecole.jpg" class="img-fluid" alt="Site web WordPress pour école" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/wordpress-ecole.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="#" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web</span>
                  <h3>Site web WordPress pour école</h3>
                  <p>Création d'un site web institutionnel avec WordPress pour une école, incluant la gestion du contenu et l'interface d'administration.</p>
                </div>
              </div>
            </div>

            <!-- Projet Desktop -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-desktop">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/quincaillerie_dashboard.jpg" class="img-fluid" alt="Gestion de quincaillerie" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/quincaillerie_dashboard.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-desktop"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Desktop</span>
                  <h3>Gestion de quincaillerie</h3>
                  <p>Application desktop pour la gestion des stocks, des ventes et des fournisseurs d'une quincaillerie.</p>
                </div>
              </div>
            </div>

            <!-- Projet Logo -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/the_ro_store_logo.png" class="img-fluid" alt="Logo The RO Store" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/the_ro_store_logo.png" class="glightbox preview-link" data-gallery="portfolio-gallery-logo"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Logo</span>
                  <h3>Logo The RO Store</h3>
                  <p>Création d'un logo professionnel pour une boutique.</p>
                </div>
              </div>
            </div>

            <!-- Affiche Channel Art -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/channelshop.jpg" class="img-fluid" alt="Affiche Channel Art" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/channelshop.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-affiche"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Affiche</span>
                  <h3>Channel Art</h3>
                  <p>Affiche promotionnelle pour channelArt.</p>
                </div>
              </div>
            </div>

            <!-- Affiche The RO Store -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/White and Blue Modern Laundry Service Poster (1).jpg" class="img-fluid" alt="Affiche The RO Store" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/White and Blue Modern Laundry Service Poster (1).jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-affiche"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Affiche</span>
                  <h3>The RO Store</h3>
                  <p>Affiche pour la vente et la réparation de téléphones.</p>
                </div>
              </div>
            </div>

            <!-- Affiche événementielle 1 -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/photo1.jpg" class="img-fluid" alt="Affiche événementielle 1" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/photo1.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-affiche"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Affiche</span>
                  <h3>Événementiel </h3>
                  <p>Visuel pour concourt de chant.</p>
                </div>
              </div>
            </div>

            <!-- Affiche événementielle 2 -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/photo2.jpg" class="img-fluid" alt="Affiche événementielle 2" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/photo2.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-affiche"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Affiche</span>
                  <h3>Publicité</h3>
                  <p>Affiche de publicité de mes services en design.</p>
                </div>
              </div>
            </div>

            <!-- Affiche événementielle 3 -->
            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-affiche">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/photo3.jpg" class="img-fluid" alt="Affiche événementielle 3" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/photo3.jpg" class="glightbox preview-link" data-gallery="portfolio-gallery-affiche"><i class="bi bi-eye"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Affiche</span>
                  <h3>Publicité</h3>
                  <p>Affiche de publicité pour une boutique de vente de sacs.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Témoignages</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Découvrez ce que mes clients pensent de mon travail et de mon engagement pour la réussite de leurs projets.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="testimonials-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "slidesPerView": 1,
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Affiche pour événement </h2>
                    <p>
                      "Henry-Joel a réalisé une superbe affiche pour mon concourt de chant. Le design était moderne, percutant et a vraiment attiré du monde. Merci !"
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/personnes/emmanuel.jpg" class="profile-img" alt="Témoignage affiche 1">
                      <div class="profile-info">
                        <h3>Emmanuel Y.</h3>
                        <span>Elève</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/personnes/emmanuel.jpg" class="featured-img" alt="Témoignage affiche 1">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Affiche pour prestation de services</h2>
                    <p>
                      "Très satisfaite du travail de Henry-Joel pour ma boutique. L'affiche était claire, professionnelle et a eu un vrai impact auprès du public."
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/personnes/daquine.jpg" class="profile-img" alt="Témoignage affiche 2">
                      <div class="profile-info">
                        <h3>Daquine E.</h3>
                        <span>Esthéticienne</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/personnes/daquine.jpg" class="featured-img" alt="Témoignage affiche 2">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="row">
                  <div class="col-lg-8">
                    <h2>Création de logo</h2>
                    <p>
                      "J'ai confié la création de mon logo à Henry-Joel. Il a su comprendre mes attentes et proposer un visuel unique et professionnel. Je recommande !"
                    </p>
                    <div class="profile d-flex align-items-center">
                      <img src="assets/img/personnes/personne.jpeg" class="profile-img" alt="Témoignage logo">
                      <div class="profile-info">
                        <h3>The RO Store.</h3>
                        <span>Entrepreneur</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="featured-img-wrapper">
                      <img src="assets/img/personnes/personne.jpeg" class="featured-img" alt="Témoignage logo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-navigation w-100 d-flex align-items-center justify-content-center">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Je propose des services personnalisés pour répondre à vos objectifs spécifiques.</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h2 class="fw-bold mb-4 servies-title" style="font-size:2.8rem;line-height:1.1;">Des solutions adaptées à vos besoins</h2>
            <p class="mb-4">Je propose des services personnalisés pour répondre à vos objectifs spécifiques.</p>
            <a href="#" class="btn btn-outline-primary" style="border-color:#f2994a;color:#f2994a;">Voir tous les services</a>
          </div>
          <div class="col-lg-7">
            <div class="row g-4">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item" style="box-shadow:0 4px 24px rgba(0,0,0,0.06);border-radius:18px;">
                  <i class="bi bi-phone icon" style="color:#f2994a;font-size:2.2rem;"></i>
                  <h3>Développement Web/Mobile</h3>
                  <p>Création de sites web et d'applications mobiles modernes, responsives et performants.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item" style="box-shadow:0 4px 24px rgba(0,0,0,0.06);border-radius:18px;">
                  <i class="bi bi-easel icon" style="color:#f2994a;font-size:2.2rem;"></i>
                  <h3>Design UI/UX</h3>
                  <p>Conception d'interfaces utilisateur intuitives et esthétiques pour une expérience optimale.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item" style="box-shadow:0 4px 24px rgba(0,0,0,0.06);border-radius:18px;">
                  <i class="bi bi-image icon" style="color:#f2994a;font-size:2.2rem;"></i>
                  <h3>Affiches/Logo</h3>
                  <p>Création de logo et d'affiches publicitaires, flyers et visuels pour tous vos événements et besoins de communication.</p>
                </div>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item" style="box-shadow:0 4px 24px rgba(0,0,0,0.06);border-radius:18px;">
                  <i class="bi bi-camera-reels icon" style="color:#f2994a;font-size:2.2rem;"></i>
                  <h3>Montage vidéo</h3>
                  <p>Montage et création de vidéos dynamiques pour valoriser vos projets et vos idées.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Questions Fréquentes</h2>
        <div class="title-shape">
          <svg viewBox="0 0 200 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M 0,10 C 40,0 60,20 100,10 C 140,0 160,20 200,10" fill="none" stroke="currentColor" stroke-width="2"></path>
          </svg>
        </div>
        <p>Les questions les plus courantes sur mes services</p>
      </div>

      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3>Quels sont vos délais de réalisation pour un projet web ?</h3>
                <div class="faq-content">
                  <p>Les délais varient selon la complexité du projet. Un site vitrine simple peut être réalisé en 2-3 semaines, tandis qu'une application web complexe peut prendre 2-3 mois. Je vous fournis un planning détaillé lors de la phase initiale du projet.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Proposez-vous des services de maintenance après la livraison ?</h3>
                <div class="faq-content">
                  <p>Oui, je propose des contrats de maintenance adaptés à vos besoins. Cela inclut les mises à jour de sécurité, les corrections de bugs, et l'ajout de nouvelles fonctionnalités. Nous pouvons discuter des modalités selon vos besoins spécifiques.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Comment se déroule le processus de développement ?</h3>
                <div class="faq-content">
                  <p>Le processus se déroule en plusieurs étapes : analyse des besoins, proposition détaillée, design et maquettes, développement, tests et déploiement. Vous êtes impliqué à chaque étape pour valider les avancées et assurer que le résultat correspond à vos attentes.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Quelles sont vos méthodes de paiement ?</h3>
                <div class="faq-content">
                  <p>J'accepte les paiements via Flooz et TMoney. Un acompte de 30% est généralement demandé pour démarrer le projet, suivi de paiements échelonnés selon l'avancement du projet.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Proposez-vous des formations pour l'utilisation des applications ?</h3>
                <div class="faq-content">
                  <p>Oui, je propose des sessions de formation pour vous aider à maîtriser les applications développées. Cela peut inclure une documentation détaillée, des tutoriels vidéo et des sessions de formation en direct selon vos besoins.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

              <div class="faq-item">
                <h3>Réalisez-vous des affiches personnalisées ?</h3>
                <div class="faq-content">
                  <p>Oui, je réalise des affiches sur mesure pour tous types d'événements ou de communication, avec un design professionnel et attractif.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <div class="col-lg-6">
            <div class="content" data-aos="fade-up" data-aos-delay="200">
              <div class="section-category mb-3">Contact</div>
              <h2 class="display-5 mb-4">Discutons de votre projet</h2>
              <p class="lead mb-4">N'hésitez pas à me contacter pour toute question ou projet</p>

              <div class="contact-info mt-5">
                <div class="info-item d-flex mb-3">
                  <i class="bi bi-envelope-at me-3"></i>
                  <span>essev2030@gmail.com</span>
                </div>

                <div class="info-item d-flex mb-3">
                  <i class="bi bi-telephone me-3"></i>
                  <span>+22871252592</span>
                </div>

                <div class="info-item d-flex mb-4">
                  <i class="bi bi-geo-alt me-3"></i>
                  <span>Lomé-TOGO</span>
                </div>

                <a href="#" class="map-link d-inline-flex align-items-center">
                  Retourner en haut
                  <i class="bi bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="contact-form card" data-aos="fade-up" data-aos-delay="300">
              <div class="card-body p-4 p-lg-5">

                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">

                    <div class="col-12">
                      <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                    </div>

                    <div class="col-12">
                      <input type="email" class="form-control" name="email" placeholder="Votre email" required>
                    </div>

                    <div class="col-12">
                      <input type="text" class="form-control" name="subject" placeholder="Sujet" required>
                    </div>

                    <div class="col-12">
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>

                    <div class="col-12 text-center">
                      <div class="loading">Chargement</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Votre message a été envoyé. Merci !</div>

                      <button type="submit" name="envoyer" class="btn btn-submit w-100">Envoyer le message</button>
                    </div>

                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container py-4">
      <div class="row align-items-center gy-4">
        <div class="col-lg-5 text-lg-start text-center mb-3 mb-lg-0">
          <h3 class="fw-bold mb-2" style="color:#385074;">ESSE Henry-Joel</h3>
          <p class="mb-2" style="font-size:1.1rem;">Étudiant en 2ème année de développement d'application à l'UCAO-UUT</p>
          <p class="mb-0" style="font-size:1rem;">"Créons ensemble vos solutions digitales sur-mesure."</p>
        </div>
        <div class="col-lg-4 text-lg-center text-center mb-3 mb-lg-0">
          <ul class="list-inline mb-2">
            <li class="list-inline-item"><a href="#hero">Accueil</a></li>
            <li class="list-inline-item"><a href="#about">À propos</a></li>
            <li class="list-inline-item"><a href="#services">Services</a></li>
            <li class="list-inline-item"><a href="#portfolio">Portfolio</a></li>
            <li class="list-inline-item"><a href="#contact">Contact</a></li>
          </ul>
          <div class="footer-social-links d-flex justify-content-center gap-2 mt-2">
            <a href="https://web.facebook.com/profile.php?id=100084156153894" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary rounded-circle p-2" style="width:40px;height:40px;"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/in/joel-esse-41a082297/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary rounded-circle p-2" style="width:40px;height:40px;"><i class="bi bi-linkedin"></i></a>
            <a href="https://wa.me/+22871252592?text=Je%20viens%20de%20voir%20votre%20portfolio%20et%20j%27aimerais%20que%20vous%20me%20fassiez%20un%20projet." target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary rounded-circle p-2" style="width:40px;height:40px;"><i class="bi bi-whatsapp"></i></a>
            <a href="https://github.com/jojoskino" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary rounded-circle p-2" style="width:40px;height:40px;"><i class="bi bi-github"></i></a>
          </div>
        </div>
        <div class="col-lg-3 text-lg-end text-center">
          <span style="font-size:0.95rem;">&copy; <span id="current-year"></span> ESSE Henry-Joel<br>Développé avec <span style="color:#e25555;">&#10084;</span></span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    // Optimisation du loader
    document.addEventListener('DOMContentLoaded', function() {
      var loader = document.getElementById('loader-bg');
      if(loader) {
        setTimeout(function() {
          loader.style.display = 'none';
        }, 500);
      }
    });

    // Mise à jour de l'année
    document.getElementById('current-year').textContent = new Date().getFullYear();
  </script>

</body>

</html>
