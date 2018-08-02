<html>
<head>
    <title>Chatting</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    
    <script>
    var ajaxku = buatAjax();
    var tnama = 0;
    var pesanakhir = 0;
    var timer;
    function taruhNama() {
        if(tnama==0){
            document.getElementById("nama").disabled = "true";
            tnama = 1;
        }else {
            document.getElementById("nama").disabled = "";   
        }
        ambilPesan();
    }
    function buatAjax() {
        if(window.XMLHttpRequest){
            return new XMLHttpRequest();
        }else if(window.ActiveXObject){
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    function ambilPesan() {
        namaku = document.getElementById("nama").value
        if(ajaxku.readyState == 4 || ajaxku.readyState == 0) {
        ajaxku.open("GET", "ambilchat.php?akhir="+pesanakhir+ "&nama="+namaku+"&sid="+
        Math.random(),true);
            ajaxku.onreadystatechange = aturAmbilPesan;
            ajaxku.send(null);
        }
    }
    function aturAmbilPesan() {
        if(ajaxku.readyState == 4) {
            var chat_div = document.getElementById("div_chat");
            var data = eval("(" + ajaxku.responseText + ")");
            for(i=0;i<data.messages.pesan.length;i++){
                chat_div.innerHTML += "<font color=red>" +data.messages.pesan[i].nama + "</font>";
                chat_div.innerHTML += "<font size=1>(" +data.messages.pesan[i].waktu + ")</font>";
                chat_div.innerHTML += " : " + data.messages.pesan[i].teks +"<br>";
                chat_div.scrollTop = chat_div.scrollHeight;
                pesanakhir = data.messages.pesan[i].id;

            }
        }
        timer = setTimeout("ambilPesan()",1000);
    }
    function kirimPesan() {
        pesannya = document.getElementById("pesan").value
        namaku = document.getElementById("nama").value
        if(pesannya != "" && namaku != "") {
            ajaxku.open("GET","ambilchat.php?akhir="+pesanakhir+"&nama="+namaku+"&pesan="+pesannya+"&sid="+Math.random(),true);
            ajaxku.onreadystatechange = aturAmbilPesan;
            ajaxku.send(null);
            document.getElementById("pesan").value = "";
        }else {
            alert("Nama atau pesan masih kosong");
        }
    }
    function aturKirimPesan() {
        clearInterval(timer);
        ambilPesan();
    }
    function blockSubmit() {
        kirimPesan();
        return false;
    }
    </script>

</head>
<body>
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
            <li><a href="index.php">Beranda</a></li>
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

 <section id="blog" class="container">

    <div class="blog">
      <div class="row">
        <div class="container">
        <h1><a href="#">Welcome To Room Chat</a></h1> <br>
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" style="width: 55.3%;"> <br><br>

        <div id="div_chat" style="width: 60%; height: 250px; border: 2px solid;"></div> <br>

        <form onSubmit="return blockSubmit();">
        <label for="pesan">Pesan :</pesan>
        <input type="text" name="pesan" id="pesan" size="69">
        <input type="button" value="kirim" onclick="kirimPesan()">

        </form>
        </div>
        </div>
      <!--/.row-->
    </div>
  </section>
  <!--/#blog-->

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
  <script src="js/main.js"></script>
    
</body>
</html>