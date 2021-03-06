<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>menampilkan wisata</title>
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
                        <a href="/kirimdata">Beranda</a>
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
                        <a onclick="logout()" href>keluar</a>

                         <script type="text/javascript">
                          function logout(){
                              var jawaban = window.confirm("yakin akan akan keluar?");
                              if(jawaban === true){
                                  window.location.href = "/keluar";
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
          <h3>Informasi Tentang<strong> Wisata</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="/home">beranda</a><span class="divider">/</span></li>
            <li class="active">wisata</li>
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

          <b style="font-size: 20px">Kategori Wisata</b><br><br>
          <a  href="/home/wisata/alam" ><span class="highlight primary">alam</span></a> 
          <a href="/home/wisata/sejarah"><span class="highlight primary">sejarah</span></a>
          <a href="/home/wisata/museum"><span class="highlight primary">museum</span></a>
           <a href="/home/wisata"><span class="highlight primary">semua</span></a>

          <!-- /portolfio filter -->
        </div>
      </div>
      <div class="row">
        <ul class="portfolio-area da-thumbs">

       <!--    perulangan databae mulai sini -->
       <?php $__currentLoopData = $wisata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <li class="portfolio-item" data-id="id-0" data-type="web">
            <div class="span4">
              <div class="thumbnail">
                <div class="image-wrapp">
                  <img src="/gambar/<?php echo e($w->gambar); ?>" alt="Portfolio name" title="" /> <!-- gambar sebagai tammpilan awalnya -->
                  <article class="da-animate da-slideFromRight">
                    <a class="zoom" data-pretty="prettyPhoto" href="/gambar/<?php echo e($w->gambar); ?>"> <!-- memebrikan zoom pada gambar yang dipilih -->
                       <i class="icon-bg-light icon-zoom-in icon-circled icon-2x">gambar</i>
                   </a>
                   <a href="/home/wisata/informasiWisata/<?php echo e($w->id_wisata); ?>"  > <!-- untuk menuju ke informasi detailnya -->
                       <i class="icon-bg-light icon-link icon-circled icon-2x" style="margin-left: 25px">informasi</i>
                   </a>
                  </article>
                </div>
                <div class="desc">
                  <h5><i class="icon-file"></i> <strong><?php echo e($w->nama_wisata); ?></strong></h5> <!-- nama tentang wisatanya -->
                  <p><?php echo e($w->alamat_wisata); ?></p>             <!-- akan diisi alamat dari wisatanya -->
                  <b style="color: blue"><a href="/home/wisata/komentarW/<?php echo e($w->id_wisata); ?>">+Komentar</a></b>
                  <br>
                  <b>Ayo langsung kunjungi tempatnya</b>
                </div>
              </div>

            </div>
          </li>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <!--  perulangan sampai sini -->

        </ul>
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
              <li>Mencari Wisata</li>
              <li>Mencari Kuliner</li>
              <li>Mencari Event</li>
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
<?php /**PATH C:\xampp\htdocs\Unknown Jogja\resources\views//User/wisata/wisata.blade.php ENDPATH**/ ?>