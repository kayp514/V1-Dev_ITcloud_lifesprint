<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>LifeSprint</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto" />
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">

  <link href="assets/css/main.css" rel="stylesheet" />
  <link href="assets/css/custom.css" rel="stylesheet" />

</head>

<body>
  <!-- <header id="header" class="header d-flex align-items-center">
      <div
        class="container-fluid container-xl d-flex align-items-center justify-content-between header-container"
      >
        <a href="/" class="logo d-flex align-items-center">
          <div class="d-flex align-items-center">
            <i
              class="bi bi-geo-alt"
              style="color: white; opacity: 60%; margin-right: 5px"
            ></i>
            <h1>229 Murray Street Ottawa, Ontario K1N 5M9</h1>
          </div>
        </a>
        <nav class="navbar">
          <ul>
            <li>
              <a href="#"><i class="bi bi-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-twitter-x"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-skype"></i></a>
            </li>
            <li>
              <a href="#"><i class="bi bi-telegram"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </header> -->
  <div class="main-header-container">
    <div class="main-header container-fluid container-xl d-flex align-items-center">
      <img src="assets/img/logo.png" class="logo-sprint" alt="sprint-logo" />
      <div class="d-flex main-header-nav ms-5">
        <span>Home<i class="bi bi-chevron-down dropdown-indicator ms-2"></i></span>
        <span>Solutions<i class="bi bi-chevron-down dropdown-indicator ms-2"></i></span>
        <span>Careers<i class="bi bi-chevron-down dropdown-indicator ms-2"></i></span>
        <span style="margin-right: 0 !important">Contact<i
            class="bi bi-chevron-down dropdown-indicator ms-2"></i></span>

      </div>
      <i class="bi bi-list" id="submenuIcon" onclick="handleSubmenu()"
        style="color: black; font-size: 25px; display: none"></i>
    </div>
  </div>
  <div class="submenu" id="submenu">
    <i class="bi bi-x-lg" id="closeIcon" onclick="handleCloseSub()" style="color: black; font-size: 25px"></i>
    <span><a href="/">Home</a></span>
    <span><a href="/">Solutions</a></span>
    <span><a href="/">Careers</a></span>
    <span><a href="/">Contact</a></span>
  </div>
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h1>Embrace <span>cloud</span></h1>
          <h1>solutions</h1>
          <p>
            Your trusted cloud Partner: Solutions for Every business need
          </p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Learn More <i class="fa fa-arrow-right ms-2"></i> </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100" />
        </div>
      </div>
    </div>
  </section>

  <div class="portfolio-header text-center">
    <h1>Unleash cloud power with our solutions</h1>
    <p class="mt-5">
      From strategy and implementation to ongoing support, we ensure a smooth transition and maximize the value of your
      cloud investment.
    </p>
  </div>
  <div id="portfolio" class="portfolio pt-5">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-6 col-sm-12 img-container">
          <img src="assets/img/portfolio/app-1.svg" alt="" />
        </div>
        <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center">
          <h1>Unlock the full potential of your business</h1>
          <p>
            Cloud migration can be your launchpad for greater efficiency, scalability, and innovation. But navigating
            the complexities of the cloud can feel overwhelming.
          </p>
          <a href="#about">Learn More <i class="fa fa-arrow-right ms-2"></i></a>
        </div>

      </div>
    </div>
    <div class="container mt-5" data-aos="fade-up">
      <div class="row">

        <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center">
          <h1>Cloud innovation</h1>
          <p>
            Explore how we collaborate with industry-leading security partners to fortify your cloud environment, giving
            you peace of mind and the freedom to focus on growth. </p>
          <a href="#about">Learn More <i class="fa fa-arrow-right ms-2"></i></a>
        </div>
        <div class="col-lg-6 col-sm-12 img-container">
          <img src="assets/img/portfolio/app-2.svg" alt="" />
        </div>
      </div>
    </div>
  </div>

  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h1>Our Global Partners</h1>
        <div class="d-flex justify-content-center gap-2">
          <img class="active" id="microsoftTab" onclick="handleTab(false)" src="assets/img/microsoft.svg"
            alt="microsoft-cloud" />
          <img id="googleTab" onclick="handleTab(true)" src="assets/img/other.svg" alt="google-cloud" />
        </div>
        <hr/>
      </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="100" id="microsoftContent">
        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <h3>Business Applications</h3>
            <p>
              Tristique dui vestibulum senectus ac duis etiam adipiscing sapien.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <h3>Modern work</h3>
            <p>
              Feugiat consectetur eu commodo odio venenatis pretium libero. Volutpat ultricies nisl turpis id.
            </p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <h3>Cloud Infrastructure</h3>
            <p>
              Porttitor quis lectus varius quis dolor morbi massa pellentesque.
            </p>
          </div>
        </div>
        <div class="row gy-4" data-aos="fade-up" data-aos-delay="100" id="googleContent"></div>
      </div>
  </section>

  <section id="stats-counter" class="stats-counter">
    <div class="container p-5" data-aos="fade-up">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6 d-flex justify-content-lg-end">
          <div class="stats-item d-flex align-items-center">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <span style="color:black;font-size:32px;" data-purecounter-start="0" data-purecounter-end="5"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <strong>Happy Clients</strong>
            </p>
          </div>

        </div>

        <div class="col-lg-6 d-flex justify-content-center-lg-start">
          <div class="stats-item d-flex align-items-center">
            <i class="fa fa-diamond" aria-hidden="true"></i>
            <span style="color:black;font-size:32px;" data-purecounter-start="0" data-purecounter-end="3"
              data-purecounter-duration="1" class="purecounter"></span>
            <p>
              <strong>Projects</strong>
            </p>
          </div>


        </div>
      </div>
    </div>
  </section>

  <!-- <main id="main">
      <section id="contact" class="contact">
        <div
          class="container d-flex justify-content-between contact-section"
          data-aos="fade-up"
        >
          <div style="border-left: 4px solid white; padding-left: 20px">
            <h3>Join Our Mailing List</h3>
            <h6>For receiving our news and updates in your inbox directly</h6>
          </div>
          <div class="d-flex contact-btn-container" style="height: 60px">
            <div class="contact-btn">
              Contact<span style="padding-left: 5px"></span>US
            </div>
          </div>
        </div>
      </section>
    </main> -->

  <section id="contact" class="contact">
    <div class="container mt-5" data-aos="fade-up">

      <div class="section-header">
        <h1 style="color:white;">Join the community today</h1>
        <p style="color:white;">Malesuada ut aliquam at ac est nisi, interdum etiam dignissim.</p>
        <div class="d-flex justify-content-center justify-content-lg-center mt-5">
          <a href="#about" class="btn-get-started reserve contact-btn ">Contact Us </a>
        </div>
      </div>
    </div>
  </section>

  <div class="footer container container-xl">
    <div class="row footer-content">
      <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
        <img src="assets/img/logo.png" class="logo-sprint" alt="footer-logo" />
      </div>
      <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
        <span>Company</span>
        <div class="d-flex flex-column">
          <span>About</span>
          <span>Solutions</span>
          <span>Careers</span>
          <span>Contact</span>
        </div>
      </div>
      <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
        <span>Contact</span>
        <div class="d-flex flex-column">
          <span>Phone : 1 613-707-2989</span>
        </div>
      </div>
      <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12">
        <span>Address</span>
        <div class="d-flex flex-column">
          <span>229 Murray Street Ottawa</span>
          <span>Ontario K1N 5M9</span>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-between right-footer">
      <span style="font-size: 13px">
        Copyright © 2023 LifeSprint. All Rights Reserved.ed.
      </span>
      <div class="footer-navbar">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter-x"></i></a>
        <a href="#"><i class="bi bi-skype"></i></a>
        <a href="#"><i class="bi bi-telegram"></i></a>
      </div>
    </div>
  </div>

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</body>

</html>