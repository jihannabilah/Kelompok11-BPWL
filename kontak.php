
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bolaku - Kontak</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/animate.min.css" rel="stylesheet">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
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
          <a class="navbar-brand" href="index.html">Bolaku.</a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="internasional.html">Internasional</a></li>
            <li><a href="nasional.html">Nasional</a></li>
            <li class="active"><a href="kontak.html">Kontak</a></li>
            <li><a href="tentang-kami.html">Tentang Kami</a></li>
          </ul>
        </div>
      </div>
      <!--/.container-->
    </nav>
    <!--/nav-->

  </header>
  <!--/header-->

  <section id="contact-page">
    <div class="container">
      <div class="center wow fadeInDown" style="margin-top: 140px;">
          <h2>Kirim <span>Pesan</span> Anda Disini</h2>
      </div>
      <div class="row contact-wrap">
        <div class="col-sm-8 col-sm-offset-2">
          <form action="insert.php" method="post">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Tulis pesan Anda disini" placeholder="Tulis pesan Anda disini"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><input type="submit" name="submit" class="btn btn-primary btn-lg" value="Kirim" />
            </div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

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
              <li><a href="video.html">Video</a></li>
              <li><a href="foto.html">Foto</a></li>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/main.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
