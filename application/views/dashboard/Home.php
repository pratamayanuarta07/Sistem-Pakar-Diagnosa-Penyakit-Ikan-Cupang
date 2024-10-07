<!DOCTYPE html>
<html lang="en">
<head>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Moon - Multipurpose Bootstrap 4 Template by GetTemplates.co</title>
<meta name="description" content="Core HTML Project">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- External CSS -->

<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/select2/select2.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/lightcase/lightcase.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link href="https://file.myfontastic.com/7vRKgqrN3iFEnLHuqYhYuL/icons.css" rel="stylesheet">

<!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<style>
    /*
 * Moon by GetTemplates.co
 * URL: https://gettemplates.co
 */
html {
  font-size: 62.5%;
  overflow-x: hidden; }

body {
  background-image: url(./../img/bg.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  position: relative;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  font-size: 1.6rem; }
  body:after {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    position: fixed;
    opacity: .8;
    z-index: -1;
    background: #f12711;
    background: -webkit-linear-gradient(to right, #f5af19, #f12711);
    background: linear-gradient(to right, #f5af19, #f12711); }

.boxed-page {
  margin: 0 auto;
  margin-top: 6rem;
  margin-bottom: 6rem;
  position: relative;
  box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11), 0 5px 15px 0 rgba(0, 0, 0, 0.08);
  border-radius: 5px; }

@media (min-width: 1200px) {
  .boxed-page {
    width: 1024px; }
    .boxed-page .container {
      max-width: 1080px;
      padding-left: 30px;
      padding-right: 30px; } }

h1 {
  font-size: 4.8rem; }

h2 {
  font-size: 3.6rem; }

h3 {
  font-size: 3rem; }

h4 {
  font-size: 2.4rem; }

h5 {
  font-size: 1.8rem; }

h6 {
  font-size: 1.6rem; }

h1,
h2,
h3 {
  font-weight: 300;
  line-height: 1.2em; }

h4,
h5,
h6 {
  line-height: 1.5em;
  font-weight: 400; }

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: 'Work Sans', sans-serif;
  margin-top: 0; }

p {
  font-size: 1.6rem;
  font-weight: 300;
  line-height: 1.5em; }

.section-title,
.section-sub-title {
  margin-bottom: 30px; }

.btn {
  font-size: 1.6rem;
  padding: .7rem 1rem; }

img {
  max-width: 100%; }

a:focus,
button:focus {
  outline: none; }

.btn:hover,
a:hover {
  text-decoration: none;
  color: #d05165; }

.btn-group-lg > .btn, .btn-lg {
  padding: 1rem; }

.btn-group-sm > .btn, .btn-sm {
  padding: .5rem; }

.section-content {
  padding-top: 80px;
  padding-bottom: 80px; }

.title-wrap,
.section-title {
  text-align: center; }

.bg-white {
  background-color: #fff; }

.bg-grey {
  background-color: #f7f8f9; }

.bg-transparent {
  background: transparent; }

.btn-link {
  color: #f15e75; }
  .btn-link:hover {
    text-decoration: none; }

.color-primary {
  color: #f15e75; }

/* Colours */
.text-orange {
  color: #FDBA51; }

.text-cyan {
  color: #35B8AD; }

.text-red {
  color: #FC665F; }

a {
  color: #f15e75; }

.fs-40 {
  font-size: 40px; }

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none;
  /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff; }

.btn:not(.btn-link):hover {
  box-shadow: 0 7px 14px rgba(50, 50, 93, 0.1), 0 3px 6px rgba(0, 0, 0, 0.08);
  -webkit-transform: translateY(-1px);
  transform: translateY(-1px); }

.btn-orange {
  background-color: #FDBA51 !important;
  color: #fff !important;
  border: none !important; }

.btn-cyan {
  background-color: #35B8AD !important;
  color: #fff !important;
  border: none !important; }

.btn-red {
  background-color: #FC665F !important;
  color: #fff !important;
  border: none !important; }

#gtco-header-navbar {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 11;
  transition: background-color .3s ease-in-out;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px; }

.navbar-brand {
  font-size: 40px;
  color: #000; }

.navbar-nav .nav-link {
  color: #000;
  transition: .3s ease; }

.navbar-nav:hover li a {
  opacity: 0.5; }
  .navbar-nav:hover li a:hover {
    opacity: 1; }

.navbar-toggler {
  font-size: 3rem; }

.not-on-top #gtco-header-navbar {
  position: fixed;
  max-width: 1024px;
  margin: 0 auto;
  left: 0;
  right: 0;
  padding-left: 10px;
  padding-right: 10px;
  background-color: #fff;
  box-shadow: rgba(0, 0, 0, 0.05) 0px 3px 15px 0px;
  border-radius: 0; }

.jumbotron {
  background-color: #fff;
  padding-top: 80px;
  padding-bottom: 80px;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  position: relative;
  border-radius: 0;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
  margin-bottom: 0;
  overflow: hidden;
  min-height: 500px; }
  @media (min-width: 1024px) {
    .jumbotron {
      min-height: 80vh; } }
  .jumbotron .container {
    position: relative; }
  .jumbotron:before {
    position: absolute;
    display: block;
    content: "";
    background-color: rgba(255, 255, 255, 0.3);
    opacity: 0.8;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0; }

.filter-button-group {
  margin-bottom: 15px; }
  .filter-button-group a {
    margin: 5px;
    cursor: pointer; }

.grid-link a {
  margin: 5px;
  font-size: 20px;
  color: #000; }

.grid-portfolio {
  overflow: hidden; }

.gutter-sizer {
  width: 2%; }

.grid-sizer,
.grid-item {
  width: 32%; }

.grid-item {
  margin-bottom: 20px;
  border-radius: 5px;
  overflow: hidden; }
  .grid-item:hover .grid-info {
    top: 50%;
    opacity: 1; }

.grid-item-wrapper:before {
  content: '';
  display: block;
  background: rgba(255, 255, 255, 0.7);
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transition: all .3s ease;
  opacity: 0; }

.grid-item-wrapper:hover:before {
  opacity: 1; }

.grid-info {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease; }

.lightcase-icon-close:before {
  content: '\e870';
  font-family: "Linearicons-Free"; }

.grid-title {
  text-align: center; }

.blog-item {
  transition: all 0.3s ease-in-out;
  background-color: #f7f8f9;
  border-radius: 3px;
  overflow: hidden; }
  .blog-item:hover {
    box-shadow: 0 5px 15px -5px #333;
    transform: translateY(-6px);
    -webkit-transform: translateY(-6px);
    -moz-transform: translateY(-6px);
    transform: translateY(-6px);
    box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15);
    -webkit-box-shadow: 0 7px 10px rgba(0, 0, 0, 0.15); }

.bg-grey .blog-item {
  background-color: #fff; }

.blog-item-wrapper {
  margin-bottom: 30px; }

.blog-img img {
  width: 100%;
  height: 250px;
  object-fit: cover; }

.blog-title h4 {
  color: #000; }

.blog-text {
  padding: 15px; }

.blog-tag {
  color: #000;
  letter-spacing: 1.1px;
  text-transform: uppercase; }

.blog-meta {
  color: #939393; }
  .blog-meta p {
    display: inline-block;
    font-size: 14px; }
  .blog-meta a {
    color: #939393; }

.blog-author {
  display: inline-block;
  color: #939393; }
  .blog-author p {
    font-size: 14px;
    margin-bottom: 0; }

.blog-share-wrapper {
  float: right;
  display: inline-block;
  margin: 0 -5px; }
  .blog-share-wrapper .blog-share {
    padding: 0 5px;
    cursor: pointer; }

#gtco-counter {
  position: relative; }

.counter-item {
  text-align: center;
  z-index: 1;
  color: #fff; }
  .counter-item > i {
    display: block;
    font-size: 40px; }
  .counter-item .number {
    font-size: 60px;
    font-weight: 400;
    display: block; }
  .counter-item h4 {
    display: block;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 400;
    font-size: 16px; }

.box-shadow {
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05); }

.price-box {
  border: none; }
  .price-box .card-header {
    background-color: transparent; }
  .price-box small {
    font-size: 60%; }
  .price-box .price-box-list {
    min-height: 150px; }

footer {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px; }

.form-control {
  font-size: 1.6rem;
  margin-bottom: 15px;
  height: 38px;
  font-weight: 300; }
  .form-control:focus {
    border-color: #f15e75;
    box-shadow: 0 0 0 0.2rem rgba(253, 101, 90, 0.25); }

#gtco-contact-form form label.error {
  margin-bottom: 15px;
  color: #f15e75;
  font-size: 1.4rem; }

.form-control::-webkit-input-placeholder {
  opacity: .5; }

.form-control::-moz-placeholder {
  opacity: .5; }

.form-control:-ms-input-placeholder {
  opacity: .5; }

.form-control::-ms-input-placeholder {
  opacity: .5; }

.form-control::placeholder {
  opacity: .5; }

#form-message-warning, #form-message-success {
  display: none; }

.single-layout .jumbotron:before {
  background-color: rgba(255, 255, 255, 0.9); }

.blog-content img.float-left {
  margin: 15px 15px 15px 0; }

.blog-content .img.float-right {
  margin: 15px 0 15px 15px; }

@media (min-width: 768px) and (max-width: 1200px) {
  .boxed-page {
    margin-right: 30px;
    margin-left: 30px; }
  .not-on-top #gtco-header-navbar {
    margin-right: 30px;
    margin-left: 30px; } }

@media (max-width: 992px) {
  #navbar-nav-header .navbar-nav {
    margin-top: 15px; }
  #gtco-header-navbar {
    padding-left: 15px;
    background-color: #fff; } }

@media (max-width: 767px) {
  .boxed-page {
    margin: 4rem 15px; }
  .not-on-top #gtco-header-navbar {
    margin-right: 15px;
    margin-left: 15px; }
  .counter-item {
    margin-bottom: 40px; }
    .counter-item:last-child {
      margin-bottom: 0; }
  .section-title br,
  .section-sub-title br {
    display: none; }
  .grid-item {
    width: 100%; }
  .card-deck {
    flex-direction: column; } }

</style>
</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="single-layout">
<div class="boxed-page">
    <nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
<div class="container">
    <a class="navbar-brand d-flex align-items-center" href="/">
        <span class="lnr lnr-moon"></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-nav-header" aria-controls="navbar-nav-header" aria-expanded="false" aria-label="Toggle navigation">
        <span class="lnr lnr-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-nav-header">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('index')?>">Home</a>
            </li>
      
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('diag')?>">Diagnosis</a>
            </li>
        
    </div>
</div>

</nav>		
<div class="jumbotron d-flex align-items-center" style="background-image: url(<?= base_url() ?>assets/images.jpg)">
<div class="container text-center">
<h1 class="display-2 mb-4 single-blog-title">Sistem Pakar Penyakit Ikan Cupang</h1>
</div>
</div>
<section id="gtco-single-content" class="bg-white">
<div class="container">
    <div class="section-content blog-content">
        <div class="row">
            <div class="col-md-8 offset-md-2 mt-4 text-center">
                <!-- Section Title -->
                <div class="title-wrap">
                    <h2 class="section-title">
                        Cara Merawat Ikan Cupang
                    </h2>
                    <p style="text-align: justify">Saat ini, banyak sekali yang sudah memelihara Ikan Cupang baik itu yang dibudidayakan 
                        atau hanya untuk menjadi teman dikala kita sedang bosan. Dari sekian banyak ikan hias yang ada, 
                        Ikan Cupang merupakan salah satu ikan hias yang mudah dipelihara. Adapun cara untuk
                         merawat ikan cupang akan dijelaskan sebagai berikut.</p>

        </div>
    </div>
</div>
    <div class="section-content blog-content">
        <div class="row">
            <!-- Single Content Holder -->
            <div class="col-md-8 offset-md-2 mt-4">
                <h4>Cara Mengatur Habitat Cupang Terbaik</h4>
                <img class="float-left" width="320px" src="<?= base_url() ?>assets/ikan1.jpg" alt="">
                <br>
                <p style="text-align: justify">1.Akuarium <br>
                    Bettas membutuhkan akuarium dengan setidaknya 3 galon (11 liter), filter, dan pemanas. 
                    Siapkan rumah baru mereka setidaknya satu hari sebelum mereka tiba. Akuarium harus 
                    berada di dekat sumber listrik, di area dengan lalu lintas rendah, jauh dari sinar 
                    matahari langsung dan angin.Air beratnya sekitar 8 pon per galon. Pilih dasar yang 
                    sangat kokoh dan stabil untuk akuarium Anda, lalu isi tangki dengan air. 
                    Ada stan khusus yang dirancang untuk mendukung akuarium serta starter kit ikan cupang 
                    untuk memastikan Anda memiliki semua kebutuhan dasar. <br> 
                   2.Air<br>
                   ilter ikan cupang Anda akan membantu menjaga kebersihan air, tetapi Anda juga harus 
                   memastikan tangki ikan Anda tetap pada suhu yang tepat. Suhu air ikan cupang harus 
                   sekitar 77 -82°F (23-27°C). Pastikan untuk menggunakan air yang dideklorinasi! Toko 
                   menjual dechlorinator air dan kondisioner air untuk memastikan air akuarium mereka dalam 
                   kondisi sempurna.<br>
                   3.Saring<br>
                   Filter akuarium harus mampu mengolah semua air di dalam tangki tiga hingga lima kali 
                   dalam satu jam. (Misalnya, filter dalam tangki 20 galon perlu mendorong setidaknya 60 
                   galon air setiap jam.) Ikuti petunjuk produsen untuk memilih dan memasang filter. <br>
                   4.Pemanas<br> 
                    Untuk menjaga agar suhu air ikan cupang tetap pada kisaran yang tepat, Anda bisa 
                    menggunakan pemanas akuarium dan termometer. Pilih pemanas akuarium dengan daya 5 watt 
                    untuk setiap galon air di dalam akuarium . Akuarium besar mungkin membutuhkan pemanas di 
                    kedua ujungnya. Tempatkan pemanas cukup dekat dengan filter untuk mendistribusikan air 
                    hangat. Jalankan filter tangki dan lampu kap tangki selama 24 jam, lalu periksa suhu air 
                    dan sesuaikan pemanas jika perlu.<br>
                   5.Lampu<br>
                   Cahaya bukanlah detail terpenting dalam merawat ikan cupang Anda , tetapi Anda harus 
                   meniru siklus siang dan malam sebaik mungkin. Tidak disarankan untuk meninggalkan tangki 
                   ikan cupang Anda di bawah sinar matahari langsung, karena dapat menyebabkan alga tumbuh. 
                   Lampu akuarium buatan bisa membantu!<br> 
                   6.Substrat<br> 
                    Lapisan 1-2 inci kerikil akuarium di bagian bawah tangki. (1½ pon kerikil per galon air.) 
                    Bilas kerikil sebelum memasukkannya ke dalam akuarium; tidak pernah menggunakan sabun.<br>
                    7.Dekorasi: <br>
                   Hiasi akuarium ikan cupang Anda dengan dekorasi tangki ikan seperti tanaman buatan, ornamen 
                   , dan lainnya untuk menambahkan kepribadian pada lingkungannya. </p>
            </div>

                <div class="featurettes-wrap text-left mb-4">

                    <div class="row featurettes-item">

                        <div class="col-md-4 offset-md-2 col-sm-6">
                            <div class="my-5">
                                <span class="lnr lnr-camera fs-40 color-primary"></span>
                            </div>
                            <h4 class="mb-4">Bagaimana Saya Harus Memperkenalkan Cupang Saya ke Tangki Mereka?</h4>
                            <p style="text-align: justify">Setelah Anda membawa pulang ikan cupang Anda, letakkan di akuarium Anda di dalam 
                                tas tempat mereka masuk selama 15 menit agar dapat terbiasa dengan suhu air yang 
                                baru. Selanjutnya, gunakan jaring untuk memindahkan cupang ke akuarium Anda. Jangan 
                                menambahkan air dari kantong ke dalam tangki Anda.
                                Keseimbangan kimia dalam akuarium Anda akan berubah dengan setiap ikan baru yang 
                                Anda masukkan, jadi periksalah pH air, kadar amonia, nitrit, dan nitrat secara 
                                teratur menggunakan alat uji akuarium. Pastikan untuk hanya menambahkan satu ikan 
                                dalam satu waktu.</p>
                        </div>
                        <div class="col-md-4 offset-md-right-2 col-sm-6">
                            <img class="my-5" src="img/app-profile-mockup.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="featurettes-wrap text-left">

                    <div class="row featurettes-item">

                        <div class="col-md-4 offset-md-2 col-sm-6">
                            <img class="my-4" src="img/app-chat-mockup.png" alt="">
                        </div>

                        <div class="col-md-4 offset-md-right-2 col-sm-6 mb-5">
                            <div class="my-4">
                                <span class="lnr lnr-bubble fs-40 color-primary"></span>
                            </div>
                            <h4 class="mb-4">Akankah Ikan Cupang Saya Perlu Pergi ke 
                                Dokter Hewan?</h4>
                               <p style="text-align: justify">Jika cupang Anda menunjukkan salah satu dari gejala 
                                Penyakit atau kesusahan ini, bicarakan dengan dokter hewan yang mengetahui kesehatan 
                                Nafsu makan menurunSirip Dijepit ke Samping Menggores Tubuh di atas Batuan
                                Pembengkakan Perut Kulit atau Sirip Meradang atau Berubah Warna Anda dapat membuka 
                                “Cari dokter hewan ikan” di fishvets.org atau wavma.org untuk menemukan informasi lebih lanjut. </p>
                        </div>
                    </div>
                </div>
                <div class="featurettes-wrap text-left">

                    <div class="row featurettes-item">

                        <div class="col-md-4 offset-md-2 col-sm-6 offset-sm-0">
                            <h4 class="mb-4">Apa yang Harus Saya Beri sebagai Makanan Ikan Cupang Saya?</h4>
                           <p style="text-align: justify">Beri ikan  makanan 
                pelet ikan cupang 1-2 kali sehari dan ikuti rekomendasi produsen untuk frekuensinya. 
                Bettas adalah karnivora, jadi lengkapi makanan ikan cupang dengan udang air asin beku 
                atau kering beku atau cacing tubifex.</p>   
                        </div>

                        <div class="col-md-4 offset-md-right-2 col-sm-6 text-center">
                            <a href="#0"><img class="btn-img my-4" src="img/appstore-btn.png" alt=""></a>
                            <a href="#0"><img class="btn-img" src="img/playstore-btn.png" alt=""></a>
                        </div><!--/ .col-md-4.col-md-offset-right-2.col-sm-6 -->

                    </div><!--/ .featurettes-item -->

                </div><!--/ .featurettes-wrap -->

            </div><!--/ .col-md-12 -->

        </div><!--/ .row -->
    </div>
</div><!--/ .container -->

</section>		<!-- Blog Section -->
<!-- End of Contact Form Section -->		<footer class="mastfoot mb-3 bg-white py-4 border-top">
<div class="inner container">
     <div class="row">
         <div class="col-md-6 d-flex align-items-center justify-content-md-start justify-content-center">
             <p class="mb-0">&copy; 2023 </a>.</p>
         </div>
       
        <div class="col-md-6">
            <nav class="nav nav-mastfoot justify-content-md-end justify-content-center">
                <a class="nav-link" href="#">
                    <i class="icon-facebook"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="icon-twitter"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="icon-instagram"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="icon-linkedin"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="icon-youtube"></i>
                </a>
                <a class="nav-link" href="#">
                    <i class="icon-pinterest"></i>
                </a>
            </nav>
        </div>
        
    </div>
</div>
</footer>	</div>

</div>
<!-- External JS -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
<script src="vendor/bootstrap/popper.min.js"></script>
<script src="vendor/bootstrap/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js "></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/isotope/isotope.min.js"></script>
<script src="vendor/lightcase/lightcase.js"></script>
<script src="vendor/waypoints/waypoint.min.js"></script>
<script src="vendor/countTo/jquery.countTo.js"></script>

<!-- Main JS -->
<script src="js/app.min.js "></script>
<script src="//localhost:35729/livereload.js"></script>
</body>
</html>

