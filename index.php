<?php
include_once("lib/fonksiyon.php");
$sinif=new kurumsal; 
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <title><?php echo $sinif->normaltitle; ?></title>
  <meta name="title" content="<?php echo $sinif->metatitle; ?>">
  <meta name="description" content="<?php echo $sinif->metadesc; ?>">
  <meta name="keywords" content="<?php echo $sinif->metakey; ?>">
  <meta name="author" content="<?php echo $sinif->metaaut; ?>">
  <meta name="owner" content="<?php echo $sinif->metaown; ?>">
  <meta name="copyright" content="<?php echo $sinif->metacopy; ?>"


  <!-- Fontlar -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700"
    rel="stylesheet">

  <!-- Bootstrap stil dosyası -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- işimize yarayacak diğer kütüphane css dosyalarımız -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- css stil dosyamız -->

  <link href="css/style.css" rel="stylesheet">

</head>


<body>

  <!----------Üst Bar---------->

  <section id="topbar" class d="d-none d-lg-block">
    <div class="container clearfix">

      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i><a href="mailto: <?php echo $sinif-> mailadres ; ?>"><?php echo $sinif-> mailadres ; ?></a>
        <i class="fa fa-phone"></i><a href="tel: <?php echo $sinif-> telno ; ?>"><?php echo $sinif-> telno ; ?></a>
      </div>


      <div class="social_links float-right">
        <a href="<?php echo $sinif-> twit ; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="<?php echo $sinif-> face ; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="<?php echo $sinif-> inst ; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="<?php echo $sinif-> linkd ; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="<?php echo $sinif-> gith ; ?>" class="github"><i class="fa fa-github"></i></a>
      </div>
    </div>
  </section>

  <!-------- header -------->

  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto"><?php echo $sinif-> logoyazi ; ?> <span> <?php echo $sinif-> logoyazisiyah ; ?></span></a></h1>
        <!-- #body etiketi sayfayı yukarı atmıyor -->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#topbar"> Anasayfa</a></li>
          <!-- #body etiketi sayfayı en üste kaydırmadığı için #topbar etiketini kullanıldı -->
          <li class="menu-active"><a href="#hakkimizda"> Hakkımızda</a></li>
          <li class="menu-active"><a href="#hizmetler"> Hizmetlerimiz</a></li>
          <li class="menu-active"><a href="#araclar">Araçlar</a></li>
          <li class="menu-active"><a href="#iletisim"> İletişim</a></li>
        </ul>
      </nav>

    </div>
  </header>


  <!--------- INTRO --------->

  <section id="intro">

    <div class="intro-content">
      <h2><?php echo $sinif-> slogan; ?></h2>

    </div>

    <div id="intro-carousel" class="owl-carousel">
      <div class="item" style="background-image:url('img/carousel/1.jpg');"></div>
      <div class="item" style="background-image:url('img/carousel/2.jpg');"></div>
      <div class="item" style="background-image:url('img/carousel/3.jpg');"></div>
      <div class="item" style="background-image:url('img/carousel/4.jpg');"></div>
      <div class="item" style="background-image:url('img/carousel/5.jpg');"></div>
    </div>

  </section>



  <!---------- ana main ---------->

  <main id="main">


    <section id="hakkimizda" class="wow fadeInUp">
      <div class="container">

        <div class="row">

          <div class="col-lg-6 hakkimiz-img">
            <figcaption><img src="img/hakkimiz.jpg" alt="Hakkımızda adlı görsel: 
          Sol elin avucu üzerinde, içinde kalın puntolu 
          soru işareti bulunan mavi bir bulut çizimi."></figcaption>
          </div>

          <div class="col-lg-6 content">
            <h2> Lorem Ipsum</h2>
            <h3> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Proin vehicula aliquam porta. In a metus et libero elementum vulputate.
              Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
              posuere cubilia curae; Nullam eleifend lorem quis augue rhoncus,
              ac lacinia nunc semper. Pellentesque ac ipsum maximus,
              feugiat ante tincidunt, laoreet sapien. Donec lobortis venenatis diam.
              Etiam suscipit odio ut ultrices mattis. Vestibulum ipsum ante,
              dignissim in est quis, dictum bibendum nisl. Sed non enim sit amet
              massa scelerisque ultrices. Praesent volutpat, diam ut volutpat
              tempus, sem sem eleifend lacus, vitae tincidunt purus est et nisi.
              Mauris bibendum neque risus, vitae efficitur dui gravida non.
              Nunc et est lorem..</h3>
          </div>

        </div>
      </div>
    </section>

    <!---------- ana main ---------->

    <section id="hizmetler" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Hizmetlerimiz</h2>
          <p>Yılların vermiş olduğu tecrübe ve güvenle...</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay='0.2s'>
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="#">Lorem Ipsum 1</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin vehicula aliquam porta.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay='0.6s'>
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="#">Lorem Ipsum 2</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin vehicula aliquam porta.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay='1s'>
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="#">Lorem Ipsum 3</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin vehicula aliquam porta.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay='1.4s'>
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="#">Lorem Ipsum 4</a></h4>
              <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Proin vehicula aliquam porta.</p>
            </div>
          </div>

        </div>


      </div>
    </section>

    <!-------- referanslar -------->

    <section id="referanslar" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Referanslar</h2>
          <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum </p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/referans/ref1.png" alt="" />
          <img src="img/referans/ref2.png" alt="" />
          <img src="img/referans/ref3.png" alt="" />
          <img src="img/referans/ref4.png" alt="" />
          <img src="img/referans/ref5.png" alt="" />
          <img src="img/referans/ref6.png" alt="" />
          <img src="img/referans/ref7.png" alt="" />
          <img src="img/referans/ref8.png" alt="" />
          <img src="img/referans/ref8.png" alt="" />
          <img src="img/referans/ref8.png" alt="" />
          <img src="img/referans/ref8.png" alt="" />
        </div>
    </section>



    <!----------- Araçlar Kısmı ------------>



    <section id="araclar" class="wow fadeInUp">

      <div class="container">


        <div class="section-header">
          <h2>Araçlarımız</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing
            Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing
          </p>
        </div>
      </div>




      <div class="container">
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/1.jpg" class="araclar-popup">
                <img src="img/araclar/1.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/2.jpg" class="araclar-popup">
                <img src="img/araclar/2.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/3.jpg" class="araclar-popup">
                <img src="img/araclar/3.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/4.jpg" class="araclar-popup">
                <img src="img/araclar/4.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/5.jpg" class="araclar-popup">
                <img src="img/araclar/5.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/6.jpg" class="araclar-popup">
                <img src="img/araclar/6.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/7.jpg" class="araclar-popup">
                <img src="img/araclar/7.jpg" alt="" />
                <div class="araclar-overlay">

                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="araclar-item wow fadeInUp">
              <a href="img/araclar/8.jpg" class="araclar-popup">
                <img src="img/araclar/8.jpg" alt="" />
                <div class="araclar-overlay">
                </div>
              </a>
            </div>
          </div>






        </div>

      </div>
    </section>



    <!---------- müşteri yorumları kısmı ----------->

    <section id="yorumlar" class="wow fadeInUp">

      <div class="container">


        <div class="section-header">
          <h2>Yorumlar</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing
            Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing
          </p>
        </div>

        <div class="owl-carousel testimonials-carousel">


          <div class="testimonial-item">

            <p>
              <img src="img/sol.png" class="quote-sign-left" />
              Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur
              adipiscing
              <img src="img/sag.png" class="quote-sign-right" />
            </p>
            <img src="img/yorum.jpg" class="testimonial-img" alt="" />
            <h3>İsim</h3>
          </div>

          <div class="testimonial-item">

            <p>
              <img src="img/sol.png" class="quote-sign-left" />
              Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur
              adipiscing
              <img src="img/sag.png" class="quote-sign-right" />
            </p>
            <img src="img/yorum.jpg" class="testimonial-img" alt="" />
            <h3>İsim</h3>
          </div>

          <div class="testimonial-item">

            <p>
              <img src="img/sol.png" class="quote-sign-left" />
              Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur
              adipiscing
              <img src="img/sag.png" class="quote-sign-right" />
            </p>
            <img src="img/yorum.jpg" class="testimonial-img" alt="" />
            <h3>İsim</h3>
          </div>

          <div class="testimonial-item">

            <p>
              <img src="img/sol.png" class="quote-sign-left" />
              Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur
              adipiscing
              <img src="img/sag.png" class="quote-sign-right" />
            </p>
            <img src="img/yorum.jpg" class="testimonial-img" alt="" />
            <h3>İsim</h3>
          </div>

          <div class="testimonial-item">

            <p>
              <img src="img/sol.png" class="quote-sign-left" />
              Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur
              adipiscing
              <img src="img/sag.png" class="quote-sign-right" />
            </p>
            <img src="img/yorum.jpg" class="testimonial-img" alt="" />
            <h3>İsim</h3>
          </div>




        </div>
      </div>

    </section>





    <!--------------İletişim--------------->
    <section id="iletisim" class="wow fadeInUp">

      <div class="container">


        <div class="section-header">
          <h2>İletişim</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscingLorem ipsum dolor sit amet, consectetur adipiscing Lorem
            ipsum dolor sit amet, consectetur adipiscing </p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adresimiz</h3>
              <p><a href="https://maps.app.goo.gl/uasP2U1BBwiQDdsq8"> <?php echo $sinif-> normaladres; ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefon Numaramız</h3>
              <p><a href="tel:<?php echo $sinif-> telno; ?>">+<?php echo $sinif-> telno ; ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Mail</h3>
              <p><a href="mailto:<?php echo $sinif-> mailadres; ?>"><?php echo $sinif-> mailadres; ?></a></p>
            </div>
          </div>

        </div>

      </div>



      <!-- iframe olarak google -->

      <div class="container mb-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3059.3136345011385!2d32.8209668!3d39.93437369999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d34e673a18bba3%3A0xfa15286a61e04ca2!2zVC5DLiBNaWxsaSBFxJ9pdGltIEJha2FubMSxxJ_EsSwgWWVuaWxpayB2ZSBFxJ9pdGltIFRla25vbG9qaWxlcmkgR2VuZWwgTcO8ZMO8cmzDvMSfw7w!5e0!3m2!1str!2str!4v1721891051935!5m2!1str!2str"
          width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>



      <!-- form -->

      <section id="form">

        <div class="container">

          <div class="section-header">
            <h2>Bize ulaşın</h2>
            <p>İletmek istediğiniz bir mesajınız varsa aşağıdaki formu doldurarak bize ulaşabilirsiniz.
            </p>
          </div>

          <div class="form">

            <div id="mesajsonuc"></div>
            <div id="mesajhata"></div>

            <form id="mailform">

              <div class="form-row">

                <div class="form-group col-md-6">
                  <input type="text" name="isim" class="form-control" placeholder="Adınız" required="required" />

                </div>

                <div class="form-group col-md-6">
                  <input type="text" name="mail" class="form-control" placeholder="Mail Adresiniz"
                    required="required" />

                </div>
              </div>

              <div class="form-group">
                <input type="text" name="konu" class="form-control" placeholder="Mesaj Konusu" required="required" />
              </div>

              <div class="form-group">
                <textarea class="form-control" name="mesaj" rows="5"
                  placeholder="İletmek istediğiniz mesajı buraya yazınız." required="required"></textarea>
              </div>



              <div class="text-center"><input type="button" value="Gönder" id="gonderbtn" class="btn btn-info" /></div>

            </form>


          </div>
        </div>
      </section>
    </section>

  </main>

  <!---------------footer----------------->

  <footer id="footer">

    <div class="container">
      <div class="copyright">
      <?php echo $sinif-> metacopy; ?> &copy; Copyright <strong><?php echo $sinif-> metaown; ?></strong>
      </div>
      <div class="credits">
      <?php echo $sinif-> metaaut; ?>
      </div>
    </div>
  </footer>

<!-- yukarı ok -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>











<!-- Kütüphaneler -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="js/main.js"></script>

</body>

</html>