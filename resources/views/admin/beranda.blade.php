<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Beranda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Clean responsive bootstrap website template">
  <meta name="author" content="">
  <!-- styles -->
  <link href="/utama/assets/css/bootstrap.css" rel="stylesheet">
  <link href="/utama/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="/utama/assets/css/docs.css" rel="stylesheet">
  <link href="/utama/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="/utama/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
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
    <div class="cbp-af-header">
      <div class=" cbp-af-inner">
        <div class="container">
          <div class="row">

            <div class="span4">
              <!-- logo -->
              <div class="logo" >
                <i class=" active"><img src="/utama/assets/img/utama/logo.png" width="100px"  alt="" /></i>
                <!-- <img src="assets/img/logo.png" alt="" /> -->
              </div>
              <!-- end logo -->
            </div>

            <div class="span8">
              <!-- top menu -->
              <div class="navbar">
                <div class="navbar-inner">
                  <nav>
                    <ul class="nav topnav">
                      <li class="dropdown active">
                        <a href="/beranda">Beranda</a>
                      </li>
                      <li class="dropdown">
                        <a href="#">Layanan</a>
                        <ul class="dropdown-menu">
                          <li><a href="/beranda/wisata">Wisata</a></li>
                          <li><a href="/beranda/event">Event</a></li>
                          <li><a href="/beranda/kuliner">Kuliner</a></li>
                      </li>
                        </ul>
                      </li>
                    <!--   <li class="dropdown">
                        <a href="#">Bantuan</a>
                      </li> -->
                      <li>
                        <a onclick="logout()" href>Keluar</a>

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
  <section id="intro">

    <div class="container">
      <div class="row">
        <div class="span6">
          <h2><strong><span class="highlight primary">Unknown Jogja</span></strong></h2>
          <p class="lead" style="text-align: justify;">
            unknown jogja adalah platform yang menyajikan informasi seputar wisata tempo dulu, kuliner dan 
            event yang ter up to date di jogja
            Berawal dari sebuah keinginan berbagi maka akhirnya muncul website informatif ini, unknown jogja, dikelola dan dibangun dengan penuh dedikasi. Penamaan nama website Unknown Jogja ini berasal dari Unknown yang artinya tidak diketahui dan Jogja nama kota kesayangan kita. dari dua kata tersebut, menjadi Unknown Jogja yang dapat dianalogikan hal-hal yang masih jarang diketahui di jogja. 
          </p>
          

        </div>
        <div class="span6">

          <div class="group section-wrap upper" id="upper">
            <div class="section-2 group">
              <ul id="images" class="rs-slider">
                <li class="group">
                  <a href="#">
				            <img width="1200px" src="/utama/assets/img/slides/refine/slide1.jpg" alt="" />
				        </a>
                </li>
                <li class="group">
                  <a href="#" class="slide-parent">
				            <img width="1200px" src="/utama/assets/img/slides/refine/slide2.jpg" alt=""/>
				        </a>
                </li>
                <li class="group">
                  <img width="1200px" src="/utama/assets/img/slides/refine/slide3.jpg" alt="" />
                </li>
                <li class="group">
                  <img width="1200px" src="/utama/assets/img/slides/refine/slide4.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- /.section-2 -->
          </div>

        </div>
      </div>
    </div>
  </section>
  <br><br>
  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="features">
            <div class="icon">
              <i class=" active"><img src="/utama/assets/img/utama/wisata.jpg" width="140px"  alt="" /></i>
            </div>
            <div class="features_content">
              <h3>Wisata</h3>
              <p class="left">
                ini akan menampilkan berbagai wisata yang pastinya sangat rekomendasi untuk dikunjungi
              </p>
              <a href="/beranda/wisata" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i> lihat</a>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="features">
            <div class="icon">
             <i class=" active"><img src="/utama/assets/img/utama/event.jpg" width="140px" alt="" /></i>
            </div>
            <div class="features_content">
              <h3>Event</h3>
              <p class="left">
               ini akan menampilkan berbagai event yang akan dilaksnakan di tempat wisata yang pastinya acaranya sangat menarik
              </p>
              <a href="/beranda/event" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i>lihat</a>
            </div>
          </div>
        </div>
        <div class="span4">
          <div class="features">
            <div class="icon">
              <i class=" active"><img src="/utama/assets/img/utama/kuliner.jpg" width="140px" alt="" /></i>
            </div>
            <div class="features_content">
              <h3>Kuliner</h3>
              <p class="left">
                ini akan menampilkan berbagai kuliner yang ada di jogja yang pastinya sangat memuaskan perut anda
              </p>
              <a href="/beranda/kuliner" class="btn btn-color btn-rounded"><i class="icon-angle-right"></i>lihat</a>
            </div>
          </div>
        </div>

      </div>

      <!-- blank divider -->
      <div class="row">
        <div class="span12">
          <div class="blank10"></div>
        </div>
      </div>

     <br><br><br><br>

      <div class="row">
        <div class="span6">
          <h4>Mengapa kita harus berlibur</h4>
          <div class="testmonial_slider">
            <ul class="slides">
              <li>
                <div class="testimonial_item">
                  <p>
                    Liburan itu bukan untuk bermalas-malasan tapi untuk bersenang-senang menikmati petualang baru yang seru.
                  </p>
                  <span class="author">Hati</span>
                  <span class="occupation">Sang Perasaan</span>
                  <!-- end testmonial -->
                </div>
              </li>
              <li>
                <div class="testimonial_item">
                  <p>
                    Liburan menegaskan dan membuat anda semakin yakin kalau anda adalah orang yang bebas dan merdeka.
                  </p>
                  <span class="author">Otak</span>
                  <span class="occupation">Sang Pekerja Keras</span>
                  <!-- end testmonial -->
                </div>
              </li>
              <li>
                <div class="testimonial_item">
                  <p>
                    Liburan perlu kesana kemari jangan disimpan terus duitnya, gak bakal kemana kalau sudah rejeki, tubuh juga perlu penyegaran.
                  </p>
                  <span class="author">Dompet</span>
                  <span class="occupation">Penjaga Uang</span>
                  <!-- end testmonial -->
                </div>
              </li>
            </ul>
            <!-- end testmonial slider -->
          </div>


        </div>

        <div class="span6">
          <b><h4>Layanan Kami</h4></b>
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
								<i class="icon-caret-down"></i> Memberikan rekomendasi tempat wisata </a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                  fitur untuk membantu dalam menemukan wisata yang diinginkan
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
								<i class="icon-caret-right"></i> memberikan info tentang event</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                   fitur memberi informasi event-event yang berlangsung di Jogja
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
								<i class="icon-caret-right"></i> memberikan rekomendasi tentang kuliner </a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
                  fitur mencari tempat-tempat yang menyajikan kuliner khas Jogja
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
        </div>
      </div>



    </div>
  </section>
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
