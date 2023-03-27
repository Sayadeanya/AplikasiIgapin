<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>SPP Dean</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/logo/logo-spp.png"
    />
    <!-- Place favicon.ico in the root directory -->

    <!-- ======== CSS here ======== -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/lineicons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- ======== preloader start ======== -->
    <div class="preloader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container">
            <div class="spinner-rotator">
              <div class="spinner-left">
                <div class="spinner-circle"></div>
              </div>
              <div class="spinner-right">
                <div class="spinner-circle"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- preloader end -->

    <!-- ======== header start ======== -->
    <header class="header">
      <div class="navbar-area">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="#">
                  <img src="<?= base_url() ?>assets/img/logo/logo-spp.png" alt="Logo" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div
                  class="collapse navbar-collapse sub-menu-bar"
                  id="navbarSupportedContent"
                >
                  <ul id="nav" class="navbar-nav ms-auto">
                    <li class="nav-item">
                      <a class="page-scroll active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                      <a class="page-scroll" href="#jurusan">Jurusan</a>
                    </li>
                    <li class="nav-item">
                      <a href="<?= site_url('login') ?>">Login</a>
                    </li>
                  </ul>
                </div>
                <!-- navbar collapse -->
              </nav>
              <!-- navbar -->
            </div>
          </div>
          <!-- row -->
        </div>
        <!-- container -->
      </div>
      <!-- navbar area -->
    </header>
    <!-- ======== header end ======== -->

    <!-- ======== hero-section start ======== -->
    <section id="home" class="hero-section">
      <div class="container">
        <div class="row align-items-center position-relative">
          <div class="col-lg-6">
            <div class="hero-content">
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                Aplikasi
              </h1>
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                Pembayaran
              </h1>
              <h1 class="wow fadeInUp" data-wow-delay=".4s">
                SPP
              </h1>
              <a href="#jurusan" class="scroll-bottom">
                <i class="lni lni-arrow-down"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
              <img src="assets/img/hero/IGAPIN.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== hero-section end ======== -->

    <!-- ======== feature-section start ======== -->
    
    <!-- ======== feature-section end ======== -->

    <!-- ======== about-section start ======== -->
    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-img">
              <img src="assets/img/sekolah-dean.png" alt="" class="w-100" />
              <img
                src="assets/img/about/about-left-shape.svg"
                alt=""
                class="shape shape-1"
              />
            </div>
          </div>
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                 Tentang Sekolah
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                SMK IGASAR PINDAD BANDUNG adalah salah satu satuan pendidikan dengan jenjang SMK di Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat. Dalam menjalankan kegiatannya, SMK IGASAR PINDAD BANDUNG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== about-section end ======== -->

    <!-- ======== about2-section start ======== -->
    <section id="about" class="about-section pt-150">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6">
            <div class="about-content">
              <div class="section-title mb-30">
                <h2 class="mb-25 wow fadeInUp" data-wow-delay=".2s">
                  Tentang Aplikasi
                </h2>
                <p class="wow fadeInUp" data-wow-delay=".4s">
                Aplikasi sistem informasi pembayaran SPP merupakan suatu sistem yang dapat digunakan untuk melakukan transaksi pembayaran SPP (sumbangan pembinaan pendidikan). Aplikasi manajemen spp ini menyajikan informasi data yang dapat diakses melalui web browser pada komputer maupun smartphone secara real-time
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 order-first order-lg-last">
            <div class="about-img-2">
              <img src="assets/img/Hp-dean.png" alt="" class="w-100" />
              <img
                src="assets/img/about/about-right-shape.svg"
                alt=""
                class="shape shape-1"
              />
              <img
                src="assets/img/about/right-dots.svg"
                alt=""
                class="shape shape-2"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== about2-section end ======== -->

    <!-- ======== feature-section start ======== -->
    <section id="jurusan" class="feature-extended-section pt-100">
      <div class="feature-extended-wrapper">
        <div class="container">
          <div class="row justify-content-center">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
                  <li><img src="<?= base_url('assets/img/logo/LOGO_RPL.png') ?> " width="100" alt=""></a></li>
                  <br>
                <div class="content">
                  <h3>Rekayasa Perangkat Lunak</h3>
                  <p>
                  adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
              <li><img src="<?= base_url('assets/img/logo/LOGO_SMKIP.png') ?> " width="100" alt=""></a></li>
                  <br>
                <div class="content">
                  <h3>SMK IGASAR PINDAD</h3>
                  <p>
                  SMK IGASAR PINDAD BANDUNG adalah salah satu satuan pendidikan dengan jenjang SMK di Cisaranten Kulon, Kec. Arcamanik, Kota Bandung, Jawa Barat. Dalam menjalankan kegiatannya, SMKS IGASAR PINDAD BANDUNG berada di bawah naungan Kementerian Pendidikan dan Kebudayaan.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
              <li><img src="<?= base_url('assets/img/logo/LOGO_TKJ.png') ?> " width="100" alt=""></a></li>
                <br>
                <div class="content">
                  <h3>Teknik Komputer dan Jaringan</h3>
                  <p>
                  adalah ilmu berbasis Teknologi Informasi dan Komunikasi terkait kemampuan algoritma, dan pemrograman komputer, perakitan komputer, perakitan jaringan komputer, dan pengoperasian perangkat lunak, dan internet.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
              <li><img src="<?= base_url('assets/img/logo/LOGO_TSM.png') ?> " width="100" alt=""></a></li>
                <br>
                <div class="content">
                  <h3>Teknik Sepeda Motor</h3>
                  <p>
                  adalah kompetensi keahlian pada bidang studi keahlian teknologi dan rekayasa program studi keahlian keknik tomotif yang menekankan pada keterampilan pelayanan jasa mekanik kendaraan sepeda motor roda dua.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
              <li><img src="<?= base_url('assets/img/logo/LOGO_TP.png') ?> " width="100" alt=""></a></li>
                <br>
                <div class="content">
                  <h3>Teknik Permesinan</h3>
                  <p>
                  adalah ilmu teknik mengenai aplikasi dari prinsip fisika untuk analisis, desain, manufaktur dan pemeliharaan sebuah sistem mekanik. Ilmu ini membutuhkan pengertian mendalam atas konsep utama dari cabang ilmu mekanika, kinematika, teknik material, termodinamika dan energi.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-feature-extended">
              <li><img src="<?= base_url('assets/img/logo/LOGO_TKR.png') ?> " width="100" alt=""></a></li>
                <br>
                <div class="content">
                  <h3>Teknik kendaraan Ringan</h3>
                  <p>
                  adalah kompetensi keahlian bidang teknik otomotif yang menekankan keahlian pada bidang penguasaan jasa perbaikan kendaraan ringan.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======== feature-section end ======== -->

    <!-- ======== footer start ======== -->
    <footer class="footer">
      <div class="container">
        <div class="widget-wrapper">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="footer-widget">
                <div class="logo mb-30">
                  <a href="index.php">
                    <img src="assets/img/logo/logo-spp.png" width="350" alt="" />
                  </a>
                </div>
                <p class="desc mb-30 text-white">
                  
                </p>
                <ul class="socials">
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-facebook-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-twitter-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-instagram-filled"></i>
                    </a>
                  </li>
                  <li>
                    <a href="jvascript:void(0)">
                      <i class="lni lni-linkedin-original"></i>
                    </a>
                  </li>
                </ul>
      <div class="row mx-auto">
        <div class="col-lg-12">
          <span>Copyright &copy; 2023 SMK IGASAR PINDAD BANDUNG</span>
          <!-- You shall support us a little via PayPal to info@templatemo.com -->
        </div>
      </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- ======== footer end ======== -->

    <!-- ======== scroll-top ======== -->
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ======== JS here ======== -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
