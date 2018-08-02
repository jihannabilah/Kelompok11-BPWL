<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bolaku</title>
  <link rel="shortcut icon" href="images/icon.png">

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/pagination.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Gp
    Theme URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-templat/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->

</head>

<body class="homepage">
  <header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
          <a class="navbar-brand" href="index.php">Bolaku.</a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Beranda</a></li>
            <li><a href="internasional.html">Internasional</a></li>
            <li><a href="nasional.html">Nasional</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->

  <div class="slider" style="margin-top:85px; width: 100%; background-color: #151515;">
    <div class="container">
      <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators visible-xs">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="images/slider_1.png" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slider_3.png" class="img-responsive" alt="">
            </div>
            <div class="item">
              <img src="images/slider_2.png" class="img-responsive" alt="">
            </div>
          </div>

          <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>

          <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        <!--/#carousel-slider-->
      </div>
      <!--/#about-slider-->
    </div>
  </div>

  <section id="feature">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Terkini</h2>
      </div>

      <div class="row">
        <div class="features">
          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo1.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="internasional-1.html">3 Alasan Arsenal Harus Jual Mesut Ozil</a></h2>
              <p style="margin-top: 15px;">INTERNASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
           <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo2.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="internasional-2.html">Nominasi Pemain Terbaik FIFA 2018</a></h2>
              <p style="margin-top: 15px;">INTERNASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo3.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="internasional-3.html">Ibra: Seandainya Saya Datang Lebih Muda</a></h2>
              <p style="margin-top: 15px;">INTERNASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo4.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="#">Laga Tunda Persebaya vs PSBI</a></h2>
              <p style="margin-top: 15px;">NASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo5.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="#">Semen Padang: Rahasiakan Pemain Incaran</a></h2>
              <p style="margin-top: 15px;">NASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo6.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="#">Jagoan Sepak Bola ASEAN di Asian Games</a></h2>
              <p style="margin-top: 15px;">NASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->
        </div>
        <!--/.services-->
      </div>
      <!--/.row-->

      <div class="row">
        <div class="features">
          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo7.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="internasional-4.html">Bonucci Tertarik Balik ke Juventus</a></h2>
              <p style="margin-top: 38px;">INTERNASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
           <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo8.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="nasional-4.html">Timnas Indonesia U-16 Siap Tempur</a></h2>
              <p style="margin-top: 16px;">NASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="feature-wrap" style="border: 2px solid;">
              <div class="pull-left" style="width: 45%; margin: 12px; height: 120px;">
                <img class="img-responsive" src="images/terkini/recent/photo9.png" style="height: 100%;">
              </div>
              <h2 style="margin: 12px;"><a href="internasional-5.html">Alexis Jadi Senjata MU Musim Depan</a></h2>
              <p style="margin-top: 15px;">INTERNASIONAL <br>
              <?php
              $sekarang = Carbon::now();

              echo $sekarang->addDay(); ?></p>
            </div>
          </div>
          <!--/.col-md-4-->
        </div>
        <!--/.services-->
      </div>
      <!--/.row-->
      
    </div>
    <!--/.container-->
  </section>
  <!--/#feature-->

  <section id="recent-works">
    <div class="container">
      <div class="center wow fadeInDown">
        <h2>Foto</h2>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo1.png" alt="" style="width: 100%; height: 100%;">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester United</a> </h3>
                <p>Salah satu pemain baru di club The Red Devils, bernama Alexis Sanchez.</p>
                <a class="preview" href="images/portfolio/full/alexis-sanchez.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo2.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester United</a></h3>
                <p>Salah satu club yang terkenal di Liga Inggris. Biasa disebut The Red Devils.</p>
                <a class="preview" href="images/portfolio/full/manchester-united.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo3.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester United</a></h3>
                <p>Salah satu pemain di club The Red Devils, bernama Ander Herrera.</p>
                <a class="preview" href="images/portfolio/full/ander-herrera.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo4.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester City</a></h3>
                <p>Salah satu club yang terkenal di Liga Inggris. Biasa disebut The Citizens.</p>
                <a class="preview" href="images/portfolio/full/manchester-city.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo5.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Chelsea FC</a></h3>
                <p>Salah satu pemain di club The Blues, bernama Eden Hazard.</p>
                <a class="preview" href="images/portfolio/full/eden-hazard.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo6.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Chelsea FC</a></h3>
                <p>Salah satu club yang terkenal di Liga Inggris. Biasa disebut The Blues.</p>
                <a class="preview" href="images/portfolio/full/chelsea.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo7.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Chelsea FC</a></h3>
                <p>Salah satu pemain di club The Blues, bernama David Luiz.</p>
                <a class="preview" href="images/portfolio/full/david-luiz.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo8.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester City</a></h3>
                <p>Salah satu pemain di club The Citizens, bernama Kevin De Bruyne.</p>
                <a class="preview" href="images/portfolio/full/de-bruyne.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.row-->

      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo9.png" alt="" style="width: 100%; height: 100%;">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Arsenal</a> </h3>
                <p>Salah satu pemain baru di club The Gunners, bernama mesut Ozil.</p>
                <a class="preview" href="images/portfolio/full/mesut-ozil.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo10.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Arsenal</a></h3>
                <p>Salah satu club yang terkenal di Liga Inggris. Biasa disebut The Gunners.</p>
                <a class="preview" href="images/portfolio/full/arsenal.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo11.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Arsenal</a></h3>
                <p>Salah satu pemain di club The Gunners, bernama Granit Xhaka.</p>
                <a class="preview" href="images/portfolio/full/granit-xhaka.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo12.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester City</a></h3>
                <p>Salah satu club yang terkenal di Liga Inggris. Biasa disebut The Citizens.</p>
                <a class="preview" href="images/portfolio/full/manchester-city2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo13.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Timnas Indonesia</a></h3>
                <p>Salah satu pemain dari Timnas Indonesia, bernama Benny Wahyudi.</p>
                <a class="preview" href="images/portfolio/full/benny-wahyudi.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo14.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Timnas Indonesia</a></h3>
                <p>Timnas Indonesia adalah tim sepak bola yang membawa harum nama Indonesia.</p>
                <a class="preview" href="images/portfolio/original/timnas-indonesia.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo15.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Timnas Indonesia</a></h3>
                <p>Timnas Indonesia adalah tim sepak bola yang membawa harum nama Indonesia.</p>
                <a class="preview" href="images/portfolio/original/timnas-indonesia2.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="recent-work-wrap">
            <img class="img-responsive" src="images/portfolio/recent/photo16.png" alt="">
            <div class="overlay">
              <div class="recent-work-inner">
                <h3><a href="#">Manchester City</a></h3>
                <p>Salah satu pemain di club The Citizens, bernama Sergio Agüero del Castillo.</p>
                <a class="preview" href="images/portfolio/full/sergio-aguero.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#recent-works-->

  <section id="middle">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
            <h2>Video Pilihan - Nasional</h2>
            <div class="panel-group" id="accordion2">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2">
                                  Laga Tunda Persebaya vs PSBI
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseOne2" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video1.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Alexis Sanchez - The Next Chapter</h4>
                        <p>Nikmati keajaiban di balik layar rekaman dari hari yang tak terlupakan bagi MUFC</p>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2">
                                  Konfirmasi Transfer Musim Panas dan Rumor 2018/2019
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseTwo2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video2.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Transfer Pemain</h4>
                        <p>Berikut adalah beberapa rumor transfer pemain pada musim panas 2018/2019</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2">
                                  Striker Anyar Bantu Juventus Hajar Munchen
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseThree2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video3.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Andrea Favili</h4>
                        <p>Andrea Favili cetak gol untuk Juventus saat menghadapi Munchen</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2">
                                  Thank You, Cristiano Ronaldo!
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseFour2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video4.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Cristiano Ronaldo</h4>
                        <p>Cristiano Ronaldo adalah sosok pembuat banyak rekor bersama Real Madrid</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive2">
                                  Rencana Liverpool Boyong Pulisic
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseFive2" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video5.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Christian Pulisic</h4>
                        <p>Real Madrid dan Bayern Munchen Ganggu Rencana Liverpool Boyong Pulisic</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <!--/.col-sm-6-->

        <div class="col-sm-6 wow fadeInDown">
          <div class="accordion">
            <h2>Video Pilihan - Internasional</h2>
            <div class="panel-group" id="accordion1">
              <div class="panel panel-default">
                <div class="panel-heading active">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Alexis Sanchez Manchester United Arrival Piano Promo
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>

                <div id="collapseOne1" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video1.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Alexis Sanchez - The Next Chapter</h4>
                        <p>Nikmati keajaiban di balik layar rekaman dari hari yang tak terlupakan bagi MUFC</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Jagoan Sepak Bola ASEAN di Asian Games
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseTwo1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video2.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Transfer Pemain</h4>
                        <p>Berikut adalah beberapa rumor transfer pemain pada musim panas 2018/2019</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Timnas Indonesia U-16 Siap Tempur
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseThree1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video3.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Andrea Favili</h4>
                        <p>Andrea Favili cetak gol untuk Juventus saat menghadapi Munchen</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Timnas Indonesia U-16 Siap Bertanding di Piala AFF
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseFour1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video4.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Cristiano Ronaldo</h4>
                        <p>Cristiano Ronaldo adalah sosok pembuat banyak rekor bersama Real Madrid</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFive1">
                                  Rencana Liverpool Boyong Pulisic
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                </div>
                <div id="collapseFive1" class="panel-collapse collapse">
                  <div class="panel-body">
                    <div class="media accordion-inner">
                      <div class="pull-left" style="width: 40%; height: 100%;">
                        <video style="width: 100%; height: 100%;" src="video/video5.mp4" controls=""></video>
                      </div>
                      <div class="media-body">
                        <h4>Christian Pulisic</h4>
                        <p>Real Madrid dan Bayern Munchen Ganggu Rencana Liverpool Boyong Pulisic</p>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
            <!--/#accordion1-->
          </div>
        </div>

      </div>
      <!--/.row-->
    </div>
    <div class="row">
        <h4 style="text-align: center;">Jika ingin menggunakan layanan berkirim pesan, Anda terlebih dahulu:</h4>
        <div class="text-center"><a href="form/index.html"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Daftar" />
        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Masuk" /></a></div>
      </div>
    <!--/.container-->
  </section>
  <!--/#middle-->

  <section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Terkait</h3>
            <ul>
              <li><a href="nasional.html">Indonesia</a></li>
              <li><a href="internasional.html">Liga Inggris</a></li>
              <li><a href="internasional.html">Liga Spanyol</a></li>
              <li><a href="internasional.html">Liga Italia</a></li>
              <li><a href="internasional.html">Dunia</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Pendukung</h3>
            <ul>
              <li><a href="https://www.bola.net/">Bola.net</a></li>
              <li><a href="https://www.bola.com/">Bola.com</a></li>
              <li><a href="http://www.goal.com/">Goal.com</a></li>
              <li><a href="https://www.liputan6.com/">Liputan6.com</a></li>
              <li><a href="https://bola.okezone.com/">Bola.okezone.com</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Bolaku Store</h3>
            <ul>
              <li><a href="store.html">Sepatu Bola</a></li>
              <li><a href="store.html">Aksesoris</a></li>
              <li><a href="store.html">Jersey</a></li>
              <li><a href="store.html">Bola</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->

        <div class="col-md-3 col-sm-6">
          <div class="widget">
            <h3>Lainnya</h3>
            <ul>
              <li><a href="#">Video</a></li>
              <li><a href="#">Foto</a></li>
            </ul>
          </div>
        </div>
        <!--/.col-md-3-->
      </div>
    </div>
  </section>
  <!--/#bottom-->

  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="social">
            <ul class="social-share">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--/.container-->
  </div>
  <!--/.top-bar-->

  <footer id="footer" class="midnight-blue">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          &copy; Bolaku. All Rights Reserved.
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Gp
            -->
            Designed by <a href="https://bootstrapmade.com/">Jihan, Arya, Qory. Politeknik Caltex Riau 2018.</a>
          </div>
        </div>
        <div class="col-sm-6">
          <ul class="pull-right">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
            <li><a href="kontak.php">Kontak</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!--/#footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
