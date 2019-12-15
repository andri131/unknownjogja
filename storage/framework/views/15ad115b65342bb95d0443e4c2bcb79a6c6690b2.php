<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>memasukkan komentar Event</title>
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
                        <a href="/home">Beranda</a>
                      </li>
                      <li class="dropdown">
                        <a href="">Layanan</a>
                        <ul class="dropdown-menu">
                          <li><a href="/home/wisata">Wisata</a></li>
                          <li><a href="/home/event">Event</a></li>
                          <li><a href="/home/kuliner">Kuliner</a></li>
                        </ul>
                      </li>
                      <!-- <li class="dropdown">
                        <a href="">Bantuan</a>
                      </li> -->
                      <li>
                        <a onclick="logout()" href>Logout</a>

                        <script type="text/javascript">
                          function logout(){
                              var jawaban = window.confirm("yakin akan akan keluar?");
                              if(jawaban === true){
                                  window.location.href = "/keluar";
                              }else{
                                   window.location.href = "/home/event";
                              }
                          }  
                        </script>

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
          <h3>Komentar tentang<strong> Event</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="#">beranda</a><span class="divider">/</span></li>
            <li class="active">komentar Event</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
          <!-- portfolio filter -->
          <ul class="filter">
            <li class="all active">
          </li>
          </ul>
          <!-- /portolfio filter -->
        </div>
      </div>
      <div class="row">
         <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <style type="text/css">
                  .table tr td{
                    border-style: none;
                    outline-style: none;
                    padding:15px;
                  }
                  .table{
                    margin-left: 390px;
                    background-color: white;
                   box-shadow: 1px 2px 4px 3px red;
                  }
                  .table tr .ini input{
                      width: 90px;
                  }
                  body{
                    background-image: url('/gambar/<?php echo e($e->gambar); ?>');
                    background-size: 100%;
                  }
                </style>

                <form action="/home/event/komentar_event" method="post">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="id" value="<?php echo e($e->id_event); ?>" readonly><br>
                  <table class="table" style="width: 450px;">
                    <tr>
                      <td colspan="2" style="text-align: center;"><h6><b>komentar wisata : <?php echo e($e->nama_event); ?></b></h6> </td>
                    </tr>
                    <tr>
                      <td colspan="2">masukkan username untuk konfirmasi ulang :</td>
                    </tr>
                    <tr>
                      <td>username : </td>
                      <td> <input type="text" required name="user" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);,width: 100px;, text-align: left;"></td>
                    </tr>
                    <tr>
                      <td>komentar : </td>
                      <td><textarea cols="190" rows="5" name="komentar" style="box-shadow: inset 2px 2px 2px 2px rgba(0,0,0,0.2);" required></textarea></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="ini" style="text-align: center;"><input type="submit" value="kirim"></td>
                    </tr>
                  </table>
                     
                </form>


            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
    </div>
  </section>

  <br><br><br>
  
  <!-- Footer
 ================================================== -->
  <footer class="footer">
   <div class="container">
      <div class="row">
        <div class="span3" style="margin-left: 350px;">
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
            <h5>Informasi Untuk</h5>
            <ul class="list list-ok">
              <li><a href="#">Mencari Wisata</a></li>
              <li><a href="#">Mencari Kuliner</a></li>
              <li><a href="#">Mencari Event</a></li>
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
<?php /**PATH C:\xampp\htdocs\Unknown Jogja\resources\views//User/event/komentarEvent.blade.php ENDPATH**/ ?>