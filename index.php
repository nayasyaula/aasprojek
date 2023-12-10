<?php
include 'koneksi.php';

// Tampilkan Donasi
$sql = "SELECT * FROM tb_donasi";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Masjid Besar SMK Wikrama Bogor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <!-- Favicons -->
  <link href="masjid/wikrama-logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
  
  <!-- google icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="masjid/wikrama-logo.png" alt="" class="img-fluid"></a>
      <h1 class="logo me-auto" style="margin-left:-600px; font-weight: 900; font-size:large;"><a href="index.php"> SMK WIKRAMA <br> BOGOR</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#home">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#cara">Cara Wakaf</a></li>
          <li><a class="nav-link scrollto" href="#data">Data Wakaf</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galerry</a></li>
          <li><a class="nav-link scrollto" href="#">Web Wikrama</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="home" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1">
          <h2 style="font-weight:500; font-size:30px; line-height:41.4px;">Masjid Besar SMK Wikrama Bogor</h2>
          <h1 style="font-weight:600; font-size:64px; line-height:88.32px; margin-top: -50px;">
            Mari <span>Tingkatkan <br>
            Keimanan</span> Masyarakat <br>
            SMK Wikrama Bogor</h1>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="donasi.php" class="btn-get-started scrollto">Beri Bantuan Shodaqoh</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 home-img" style="width: 400px;">
         <img src="masjid/2.jpg" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section>
  <!-- End Home -->

  <!-- ======= Banner Section ======= -->
      <br>
    <section>
      <div class="card position-relative shadow-lg" style="width:80%; margin-top:-20px; ">
      <div class="row .align-items-md-center">
        <div class="col-md-4">
            <h6 class="h6">Total Target Dana</h6>
            <h1 class="h1">RP.40.000,000</h1>
        </div>
        <div class="col-md-4">
            <h6 class="h6">Total Dana Terkumpul</h6>
            <h1 class="h1">RP.4.000,000</h1>
        </div>
        <div class="col-md-4">
            <h6 class="h6">Total Donatur</h6>
            <h1 class="h1">34 orang</h1>
        </div>
      </div>
      <hr class="featurette-divider">
      <div class="row">
        <div class="col-md-8">
      <div class="progress">
        <div class="progress-bar primary-color" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </div>
    <div class="col-md-4">
        <div class="container">
            <h1 class="h1">25,0% Terpenuhi</h1>
        </div>
      </div>
      <br>
      <br>
      
      </div>
      <div class="">
      <div class="footer-card row ">
            <marquee behavior="" direction="left" width="100%" style="color: white; font-size: 30px; display: flex; align-items: center;">
              Muhamad Ridwan - <span class="h6 yellow" style="font-size: 30px;">Uang : RP.2.000.000</span>
              Hamba Allah  - <span class="h6 yellow" style="font-size: 30px;">Barang: Emas</span>
              Siti Aisyah  - <span class="h6 yellow" style="font-size: 30px;">Uang : RP.2.000.000</span>
            </marquee> 
          
        </div>
    </div>
</div>
<div class="carousel-container shadow-lg" style="margin-top:15px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="primary-color active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="primary-color"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="primary-color"></li>
    </ol> 
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://th.bing.com/th/id/R.37ffbd1756b2c0d715bcc964f7256dd0?rik=V3Q1wC1oDjE2Hw&pid=ImgRaw&r=0" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://blog.juragansopwer.com/wp-content/uploads/2020/10/coding-anak_22.jpg" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://th.bing.com/th/id/R.547821751e98f44a5728db7c8d3573d9?rik=J4oe95W2hyfgLA&pid=ImgRaw&r=0" alt="Image 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="kosong">

</section>

  </section>
  <!-- End Banner -->

  <main id="main">

  <!-- ======= Manfaat Section ======= -->
  <section id="manfaat" class="manfaat section-bg">
  <div class="container">
        <h3 class="h3" style="font-weight:600; font-size:64px; line-height:88.32px; margin-top: -50px; color: #000000;"> <span>Manfaat</span> Wakaf, Infaq
            <br>Shadaqoh.
        </h3>
        <h5 class="h5" style="font-weight:500; font-size:30px; line-height:41.4px;">
            Berikut adalah Keutamaan Wakaf, Infaq Shadaqoh yang <br> akan Anda Dapatkan.
        </h5>
        <div class="card" style=" float:left; width: 16rem; height:270px; margin: 20px; margin-left:0%; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); ">
            <div class="card-body">
                <img src="masjid/lov.png" alt="" style=" width: 70px; height: 60px;">
                <h5 class="card-title" style="font-weight: bold;">Menjadikan hati lebih tenang</h5>
                <p class="card-text">Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami.</p>
               
            </div>
        </div>
        <div class="card" style=" display: inline-block; width: 16rem; height:270px; margin: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);  ">
            <div class="card-body">
                <img src="masjid/ck1.png" alt="" style=" width: 70px; height: 60px;">
                <h5 class="card-title" style="font-weight: bold;">Terbukanya pintu rezeki</h5>
                <p class="card-text">Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya. </p>
                
            </div>
        </div>
        <br>
        <div class="card" style=" display: inline-block; width: 16rem;height:270px;margin: 20px;margin-left:0%; box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); ">
            <div class="card-body">
                <img src="masjid/ck2.png" alt="" style=" width: 70px; height: 60px;">
                <h5 class="card-title" style="font-weight: bold;">Menjauhkan dari Bahaya</h5>
                <p class="card-text">Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah.</p>
                
            </div>
        </div>
        <div class="card" style=" display: inline-block; width: 16rem;height:270px;margin: 20px;  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); ">
            <div class="card-body">
                <img src="masjid/cling.png" alt="" style=" width: 70px; height: 60px;">
                <h5 class="card-title" style=" padding-top:0px;font-weight: bold;">Pahala yang tak terputus</h5>
                
                <p class="card-text">Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.</p>
               
            </div>
        </div>
        <div class="">
            <img src="masjid/hand.jpg" alt="" class="img-manf" style=" height:580px; width:300px; margin-left: 800px; margin-top:-650px; border-radius: 30px7;">
        </div>

    </div>
    </div>
  </section>
    <!-- End Manfaat Section -->

    <!-- ======= Cara Section ======= -->
      <section id="cara" class="cara section-bg">
        <div class="container">

          <div class="section-title">
          <h3 class="h3" style="font-weight:600; font-size:64px; margin-top: -50px; color: #000000; text-align: left;"> <span>Cara Melakukan</span> Wakaf, Infaq
            <br>Shadaqoh.
        </h3>
            <p style="font-weight:300; font-size:30px; ">Berikut Adalah Cara Melakukan Wakaf, Infaq Shodaqoh Untuk Membantu Pembangunan Masjid Besar SMK Bogor</p>
          </div>

          <div class="row">

            <div class="col-lg-6">
              <div class="member d-flex align-items-start">
                <div class="member-info">
                  <h1 style="color:#1F3984">01</h1>
                  <h4>Isi Form Data Diri</h4>
                  <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start">
                <div class="member-info">
                  <h1 style="color:#1F3984">02</h1>
                  <h4>Isikan Nominal Shodaqoh</h4>
                  <p>Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="member-info">
                  <h1 style="color:#1F3984">03</h1>
                  <h4>Upload Bukti Pembayaran</h4>
                  <p>Pilih motode pembayaran dan upload bukti pembayaranya.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start">
                <div class="member-info">
                  <h1 style="color:#1F3984">04</h1>
                  <h4>Verifikasi Pembayaran</h4>
                  <p>Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
                </div>
              </div>
            </div>

        </div>
      </section>
    <!-- End Cara Section -->

    <!-- ======= Data Section ======= -->
    <section id="data" class="data">
      <div class="container">

        <div class="section-title">
          <h2 style="font-weight:600; font-size:64px; margin-top: -50px; color: #000000; text-align: left;"><span>Data donatur</span> Wakaf, Infaq Shodaqoh.</h2>
          <p style="font-weight:300; font-size:30px;">Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk Masjid Besar SMK Bogor
          </p>
        </div>

        <table class="table border">
        <tr>
            <th bgcolor="grey">Donatur</th>
            <th bgcolor="grey">Donatur ID</th>
            <th bgcolor="grey">Paket</th>
            <th bgcolor="grey">Kategori</th>
            <th bgcolor="grey">Nominal</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><b><?php echo $row['donatur']; ?></b></td>
                <td><b><?php echo $row['donatur_id']; ?></b></td>
                <td><?php echo $row['paket']; ?></td>
                <td><?php echo $row['kategori']; ?></td>
                <td>Rp.<?php echo $row ['nominal']; ?></td>
            </tr>
        <?php } ?>
    </table>
    <!-- End Data Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title">
          <h2 style="font-weight:600; font-size:64px; margin-top: -50px; color: #000000; text-align: left;"><span>Gallery</span> Masjid Besar SMK Wikrama Bogor.</h2>
          <p style="font-weight:300; font-size:30px;">Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</p>
        </div>

        <div class="row gallery-container">

          <div class="col-lg-4 col-md-6 gallery-item filter-card">
            <div class="gallery-img"><img src="masjid/msjd5.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-card">
            <div class="gallery-img"><img src="masjid/msjd1.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-card">
            <div class="gallery-img"><img src="masjid/msjd2.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-card">
            <div class="gallery-img"><img src="masjid/msjd4.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-card">
            <div class="gallery-img"><img src="masjid/msjd3.jpg" class="img-fluid" alt=""></div>
          </div>

          <div class="col-lg-4 col-md-6 gallery-item filter-card" >
            <div class="gallery-img"><img src="masjid/gallery.png" class="img-fluid" alt="" ></div>
          </div>

        </div>

      </div>
    </section>
  
  <!-- End Gallery Section -->

  <!-- ======= Footer ======= -->
  <div class="overflow-hidden">
        <div class="row mx-5 py-5">
            <div class="col-md-4">
                <div class="row">
                    <div class="col-12 mb-3">
                        <a class="navbar-brand d-flex align-items-center">
                            <img src="masjid/wikrama-logo.png" class="img-fluid me-2" width="70" height="70" alt="">
                            <h6 class="fw-bolder text-white">SMK WIKRAMA <br> BOGOR</h6>
                        </a>
                    </div>
                    <div class="col-12 text-white">
                        <h6>Alamat</h6>
                        <p>
                            Jl. Raya Wangun<br>
                            Kelurahan Sindangsari<br>
                            Bogor Timur 16720</p>
                            <hr>
                        <p class="mb-4">
                            Telepon <br>
                            0251-8242411 / <br>
                            082221718035 (Whatsapp)
                        </p>
                        <hr>
                        <div>
                            <a><img src="masjid/fblogo.jpg"/></a>
                            <a><img src="masjid/twitterlogo.jpg"/></a>
                            <a><img src="masjid/iglogo.jpg"/></a>
                            <a><img src="masjid/youtubelogo.jpg"/></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-3 text-white">
                <h6 class="fw-bolder">Tentang Wikrama</h6>
                <ul class="px-4 py-1">
                    <li class="py-1">Sejarah</li>
                    <li class="py-1">Peraturan Sekolah</li>
                    <li class="py-1">Rencana Strategi & Prestasi</li>
                    <li class="py-1">Yayasan</li>
                    <li class="py-1">Struktur Organisasi</li>
                    <li class="py-1">Cabang</li>
                    <li class="py-1">Penghargaan</li>
                    <li class="py-1">Kerjasama</li>
                </ul>
            </div>
            <div class="col-md-4  mt-3">
                <h6 class="fw-bolder text-white mb-3">Kirim Pesan</h6>
                <div class="mb-3">
                    <input type="text" placeholder="Name" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" placeholder="Email" class="form-control">
                </div>
                <div class="mb-3">
                    <textarea placeholder="Pesan Anda" class="form-control"></textarea>
                    <button class="btn btn-warning btn-hero mt-3">Submit</button>
                </div>
            </div>
        </div>
    </div>
  <!-- End Footer -->

  <div class="container footer-bottom clearfix">
        <div class="copyright" style="text-align: center; margin-top: 30px;">
          &copy; Copyright <strong><span>SMK Wikrama Bogor</span></strong>. All Rights Reserved
        </div>
      </div>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>