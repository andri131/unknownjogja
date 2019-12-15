<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>tambah Kuliner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="/utama/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/utama/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="/utama/assets/css/docs.css" rel="stylesheet">
  <link href="/utama/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="/utama/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="/utama/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="/utama/assets/css/flexslider.css" rel="stylesheet">
  <link href="/utama/assets/css/refineslide.css" rel="stylesheet">
  <link href="/utama/assets/css/font-awesome.css" rel="stylesheet">
  <link href="/utama/assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="/utama/assets/css/style.css" rel="stylesheet">
  <link href="/utama/assets/color/default.css" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/utama/assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/utama/assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/utama/assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/utama/assets/ico/apple-touch-icon-57-precomposed.png">

  <!-- =======================================================
    Theme Name: Plato
    Theme URL: https://bootstrapmade.com/plato-responsive-bootstrap-website-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class=" cbp-af-header">
      <div class=" cbp-af-inner">
        <div class="container">
          <div class="row">

            <div class="span4">
              <!-- logo -->
              <a class="logo" href="index.html">
                 <i class=" active"><img src="/utama/assets/img/utama/logo.png" width="100px"  alt="" /></i>
                <!-- <img src="assets/img/logo.png" alt="" /> -->
              </a>
              <!-- end logo -->
            </div>

            <div class="span8">
              <!-- top menu -->
              <div class="navbar">
                <div class="navbar-inner">
                  <nav>
                    <ul class="nav topnav">
                      <li class="dropdown">
                        <a href="/beranda">Beranda</a>
                      </li>
                      <li class="dropdown active">
                        <a href="#">Layanan</a>
                        <ul class="dropdown-menu">
                          <li><a href="/beranda/wisata">Wisata</a></li>
                          <li><a href="/beranda/event">Event</a></li>
                          <li><a href="/beranda/kuliner">Kuliner</a></li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="">Bantuan</a>
                      </li>
                      <li>
                        <a href="/keluar">Logout</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- end menu -->
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Subhead
================================================== -->
  <section id="subintro">

    <div class="container">
      <div class="row">
        <div class="span4">
          <h3>Tambah Data <strong>Kuliner</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="#">Beranda</a><span class="divider">/</span></li>
            <li class="active">Tambah Data Kuliner</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

<div class="container" >
  <div class="row" >
    <div class="col-sm-4" >
      <form action="/beranda/kuliner/simpanDataKuliner" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group" >
          <label style="color: black"><b>Nama Kuliner</b></label>
          <input type="text" class="form-control" placeholder="Nama Lengkap" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);"  name="nama">
          <label  style="color: black"><b>Alamat Kuliner</b></label>
          <textarea type="text" class="form-control" cols="40" rows="5" placeholder="Alamat" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);" name="alamat"></textarea>
          <label  style="color: black"><b>Deskripsi</b></label>
          <textarea type="text" class="form-control" cols="40" rows="5" placeholder="Deskipsi" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);" name="deskripsi"></textarea>
          <!--  <label style="color: black"><b>Kategori</b></label> -->
         <!--  <select name="kategori" class="form-control" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);">
            <option>Alam</option>
            <option>Sejarah</option>
            <option>Museum</option>
          </select> -->
          <label style="color: black"><b>gambar</b></label>
          <input type="file" class="form-control" style="width: 220px " placeholder="Nama Lengkap" name="file"><br><br>
          <input class="btn btn-danger" type="submit" name="" value="simpan">
        </div>  
      </form>
    </div>  
  </div>  
</div>

    </div>
  </section>
  <!-- Footer
 ================================================== -->
  <footer class="footer">
      <div class="container">
      <div class="row">
        <div class="span3">
          <div class="widget">
            <!-- logo -->
              <h5>Unknown Jogja</a></h5>
              <!-- <img src="assets/img/logo.png" alt="" /> -->
            <!-- end logo -->
            <address>

              Universitas Islam Indonesiabr <br>
                 ngaglik, umbulmartani, kimpulan<br>
         Sleman, CA 94107<br>
        <abbr title="Phone">telp:</abbr> 085877740026 </address>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5>masih kosong</h5>
            <ul class="list list-ok">
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
            </ul>
          </div>
        </div>
        <div class="span3">
          <div class="widget">
            <h5>masih kosong</h5>
            <ul class="list list-ok">
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
            </ul>
          </div>
        </div>
       <div class="span3">
          <div class="widget">
            <h5>masih kosong</h5>
            <ul class="list list-ok">
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
              <li><a href="#">masih kosong</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
    <div class="subfooter">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; unknownJogja - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="pull-right">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Plato
                -->

                Designed by <span class="highlight primary">Inception</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="/utama/assets/js/jquery.js"></script>
  <script src="/utama/assets/js/modernizr.js"></script>
  <script src="/utama/assets/js/jquery.easing.1.3.js"></script>
  <script src="/utama/assets/js/google-code-prettify/prettify.js"></script>
  <script src="/utama/assets/js/bootstrap.js"></script>
  <script src="/utama/assets/js/jquery.prettyPhoto.js"></script>
  <script src="/utama/assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="/utama/assets/js/portfolio/setting.js"></script>
  <script src="/utama/assets/js/hover/jquery-hover-effect.js"></script>
  <script src="/utama/assets/js/jquery.flexslider.js"></script>
  <script src="/utama/assets/js/classie.js"></script>
  <script src="/utama/assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="/utama/assets/js/jquery.refineslide.js"></script>
  <script src="/utama/assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="/utama/assets/js/custom.js"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\asus\resources\views/admin/kuliner/tambah.blade.php ENDPATH**/ ?>