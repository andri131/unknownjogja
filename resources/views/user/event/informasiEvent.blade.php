<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Menampilkan Informasi</title>
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
  <link rel="shortcut icon" href="/utama/assets/ico/favicon.ico">
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
                        <a href="/home">Beranda</a>
                      </li>
                      <li class="dropdown">
                        <a href="/home/wisata">wisata</a>
                      </li>
                      <li class="dropdown">
                        <a href="/home/event">event</a>
                      </li>
                      <li class="dropdown">
                        <a href="/home/kuliner">kuliner</a>
                      </li>
                     <!--  <li class="dropdown">
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
          <h3>Menampilkan Detai <strong>Event</strong></h3>
        </div>
        <div class="span8">
          <ul class="breadcrumb notop">
            <li><a href="/home">Beranda</a><span class="divider">/</span></li>
            <li class="active">menampilkan detail Event</li>
          </ul>
        </div>
      </div>
    </div>

  </section>

  <section id="maincontent">
    <div class="container">
      <div class="row">
        <div class="span12">
                      @foreach($event as $e)
          <article>
            <div class="heading">
              <h3><strong>{{ $e->nama_event}}</strong></h3>   <!-- bagiannn nama wisata -->
            </div>
            <div class="clearfix">
            </div>
            <div class="row">
              <div class="span8">
                <!-- start flexslider -->
                <div class="flexslider">
                      <img src="/gambar/{{ $e->gambar}}">
                </div>
                <!-- end flexslider -->
                <div class="blank10"></div>
                <p style="font-size: 15px">
                    {{$e->deskripsi_event}}
                </p>
              </div>
              <div class="span4">
                <aside>
                  <div class="widget">
                    <h4>Informasi Event</h4>
                    <ul class="project-detail">
                                                  <!-- mulai perulangannya  -->
                      <li><label>nama event:</label>{{$e->nama_event}}</li>
                      <li><label>tanggal:</label>{{$e->tanggal}}</li>
                      <li><label>event ini akan diadakan di :</label>{{$e->nama_wisata}}</li>
                      <li><label></label></li>
                      <li><label>Perusahaan Kami</label><a href="#">Tbk.Inception</a></li>
                                                  <!-- berakhir perulangannya -->
                    </ul>
                  </div>
                </aside>
              </div>
            </div>
          </article>
                  @endforeach
          <!-- end article full post -->
        </div>
      </div>
    </div>
  </section>

<div style="margin-left: 30px">
<h4>Ulasan</h4>
 
         
            <ul class="media-list">
                            @foreach($komentarEvent as $ke)
           
            <li class="media" style="">
               <b style="margin-left: 10px;">{{$ke->username}}</b><br>
                <i>"{{$ke->komentar}}"  </i>
                               
            </li>
                      @endforeach
          </ul>


          <br>


</div>
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
  <script src="assets/js/custom.js"></script>

</body>

</html>
