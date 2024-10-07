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

<style>
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


h2 {
  font-size: 3.6rem; }

.section-title,
.section-sub-title {
  margin-bottom: 30px; }

.btn {
  font-size: 1.6rem;
  padding: .5rem 1rem; }


.btn:hover,
a:hover {
  text-decoration: none;
  color: #d05165; }


.section-content {
  padding-top: 50px;
  padding-bottom: 20px; }



a {
  color: #f15e75; }

.fs-40 {
  font-size: 40px; }


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



.box-shadow {
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.05); }


footer {
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px; }

.form-control {
  font-size: 1.6rem;
  height: 38px;
  font-weight: 300; }
  .form-control:focus {
    border-color: #f15e75;
    box-shadow: 0 0 0 0.2rem rgba(253, 101, 90, 0.25); }


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
    .user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
</style>
<style>
.scrollbar {
    position: relative;
    overflow-y: scroll;
    height: 350px;
    
}
.form button {
  margin-left: 850px;
  margin-top: 20px;
}
.form button:hover {
  background: rgb(88, 56, 250);
}


</style>
</head>
<body data-spy="scroll" data-target="#navbar-nav-header" class="single-layout">
<div class="boxed-page">
    <nav id="gtco-header-navbar" class="navbar navbar-expand-lg py-4">
<div class="container">
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
<section id="gtco-single-content" class="bg-white">
<div class="container">
  <div class="section-content blog-content">
    <center>
<h2>Sistem Pakar Diagnosis Ikan Cupang</h2>
</center>
<hr />
<header>Masukan presentase keparahan dari Gejala yang diderita ikan anda</header>
<div class="row">
<div class="card-body scrollbar">
     <div class="user-details">  
<form action="<?= base_url('Fuzzfikasi')?>" method="POST">
    
           <?php
           for ($i=0; $i < count($Nama); $i++) { 
            if ($Nama[$i] == 11) {
              echo
              '
                <div class="input-box">
            <p class="details">'.$dt_gejala[$Nama[$i]-1]['Nama Gejala'].'</p>
              <input type="number" name="'.$Nama[$i].'" aria-label="Text input with checkbox" placeholder="1-2" min="1" max="2" required></div>';  
            }
            elseif ($Nama[$i] == 1 || $Nama[$i] == 7 || $Nama[$i] == 8 || $Nama[$i] == 9 || $Nama[$i] == 12) {
              echo
              '
                <div class="input-box">
            <p class="details">'.$dt_gejala[$Nama[$i]-1]['Nama Gejala'].'</p>
              <input type="number" name="'.$Nama[$i].'" aria-label="Text input with checkbox" placeholder="1-100" min="1" max="100" required></div>';  
            }
            elseif ($Nama[$i] == 2 || $Nama[$i] == 3 || $Nama[$i] == 4 || $Nama[$i] == 5 || $Nama[$i] == 6) {
              echo
              '
                <div class="input-box">
            <p class="details">'.$dt_gejala[$Nama[$i]-1]['Nama Gejala'].'</p>
              <input type="number" name="'.$Nama[$i].'" aria-label="Text input with checkbox" placeholder="1-80" min="1" max="80" required></div>';  
            }
            elseif ($Nama[$i] == 15 || $Nama[$i] == 16) {
              echo
              '
                <div class="input-box">
            <p class="details">'.$dt_gejala[$Nama[$i]-1]['Nama Gejala'].'</p>
              <input type="number" name="'.$Nama[$i].'" aria-label="Text input with checkbox" placeholder="1-48" min="1" max="48" required></div>';  
            }
            elseif ($Nama[$i] == 14 || $Nama[$i] == 17) {
              echo
              '
                <div class="input-box">
            <p class="details">'.$dt_gejala[$Nama[$i]-1]['Nama Gejala'].'</p>
              <input type="number" name="'.$Nama[$i].'" aria-label="Text input with checkbox" placeholder="1-6" min="1" max="6" required></div>';  
            }    
           }
           ?> 
      </div>
        <div class="form">
          <button href="#" class="submit btn btn-primary" type="submit"name="submit">Submit</button>
        </div>
      </form>
      </div>
      </div> 
</div>
</div>
</section>		
<footer class="mastfoot mb-3 bg-white py-4 border-top">
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
</footer>	
</div>
</div>
</body>
</html>

