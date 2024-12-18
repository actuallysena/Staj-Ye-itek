<?php
//construct olmayan diðer fonksiyonlarýn da veritabaný baðlantýsýný alabilmesini saðlar.
try {
  $baglanti = new PDO("mysql:host=localhost;
  dbname=kurumsal;charset=utf8", "root", "");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
  );
} catch (PDOException $e) {
  die($e->getMessage());
}

class kurumsal
{
  public $normaltitle, $metatitle, $metadesc, $metakey, $metaaut,
  $metaown, $metacopy, $logoyazi, $logoyazisiyah,
  $twit, $face, $inst, $linkd, $gith, $telno,
  $mailadres, $normaladres, $slogan, $referans, $araclar, $yorum, $iletisim;



  function __construct()
  {
   try {
      $baglanti = new PDO("mysql:host=localhost;
      dbname=kurumsal;charset=utf8", "root", "");
      $baglanti->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
      );
    } catch (PDOException $e) {
      die($e->getMessage());
    }

    $ayarcek = $baglanti->prepare("SELECT * FROM ayarlar");
    $ayarcek->execute();
    $sorguson = $ayarcek->fetch();

    $this->normaltitle = $sorguson["title"];
    $this->metatitle = $sorguson['metatitle'];
    $this->metadesc = $sorguson['metadesc'];
    /*bu þekilde atamalarla devam ediyor...*/
    $this->metakey = $sorguson['metakey'];
    $this->metaaut = $sorguson['metaaut'];
    $this->metaown = $sorguson['metaown'];
    $this->metacopy = $sorguson['metacopy'];
    $this->logoyazi = $sorguson['logoyazi'];
    $this->logoyazisiyah = $sorguson['logoyazisiyah'];
    $this->twit = $sorguson['twit'];
    $this->face = $sorguson['face'];
    $this->inst = $sorguson['inst'];
    $this->linkd = $sorguson['linkd'];
    $this->gith = $sorguson['gith'];
    $this->telno = $sorguson['telno'];
    $this->mailadres = $sorguson['mailadres'];
    $this->normaladres = $sorguson['adres'];
    $this->slogan = $sorguson['slogan'];
    $this->referans = $sorguson['referansaciklama'];
    $this->araclar= $sorguson['araçlaraciklama'];
    $this->yorum = $sorguson['yorumaciklama'];
    $this->iletisim = $sorguson['iletisimaciklama'];

  }


  function intro($baglanti)
  {
    $introal =$baglanti->prepare("SELECT * FROM intro");
    $introal->execute();

    while ($sonucum = $introal->fetch(PDO::FETCH_ASSOC)):
      echo '<div class="item" style="background-image: url(' . $sonucum["resimyol"] . ');"></div>';
    endwhile;
  }


  function hakkimizda($baglanti)
  {
    $hakkimizda = $baglanti->prepare("SELECT * FROM hakkimizda");
    $hakkimizda->execute();

    $sonucum = $hakkimizda->fetch(PDO::FETCH_ASSOC);

    echo
      '<div class="row">

          <div class="col-lg-6 hakkimiz-img">
              <figcaption><img src="' . $sonucum["resim"] . '" alt=" ' . $sonucum["resim"] . ' adlý görsel: 
              Sol elin avucu üzerinde, içinde kalýn puntolu soru iþareti bulunan mavi bir bulut çizimi."></figcaption>
          </div>

          <div class="col-lg-6 content">
              <h2> ' . $sonucum["baslik"] . '</h2>
              <h3> ' . $sonucum["icerik"] . '</h3>
          </div>

      </div>';
  }


  function hizmetler($baglanti)
{
    $hizmetler = $baglanti->prepare("SELECT * FROM hizmetler");
    $hizmetler->execute();

    $sonucum = $hizmetler->fetch(PDO::FETCH_ASSOC);

    echo
    '<div class="section-header">
        <h2>' . $sonucum["hizmetlerbaslik"] . '</h2>
        <p>' . $sonucum["hizmetleraciklama"] . '</p>
    </div>

    <div class="row">

        <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
                <div class="icon"><i class="fa fa-bar-chart"></i></div>
                <h4 class="title"><a href="#">' . $sonucum["baslik1"] . '</a></h4>
                <p class="description">' . $sonucum["icerik1"] . '</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.6s">
                <div class="icon"><i class="fa fa-map"></i></div>
                <h4 class="title"><a href="#">' . $sonucum["baslik2"] . '</a></h4>
                <p class="description">' . $sonucum["icerik2"] . '</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="1s">
                <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                <h4 class="title"><a href="#">' . $sonucum["baslik3"] . '</a></h4>
                <p class="description">' . $sonucum["icerik3"] . '</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="1.4s">
                <div class="icon"><i class="fa fa-picture-o"></i></div>
                <h4 class="title"><a href="#">' . $sonucum["baslik4"] . '</a></h4>
                <p class="description">' . $sonucum["icerik4"] . '</p>
            </div>
        </div>

    </div>';
}



function referans($baglanti)
  {
    $refal = $baglanti->prepare("SELECT * FROM referans");
    $refal->execute();
    
    echo ' <div class="section-header">
	<h2>Referanslarimiz</h2>
	<p>';
		echo $this->referans;
		echo ' </p>
	</div>
	<div class="owl-carousel clients-carousel">';

		while ($sonucum = $refal->fetch(PDO::FETCH_ASSOC)):
			echo '<img src="' . $sonucum['resimyol'] . '" alt="referanslarý gösteren görseller" />';
		endwhile;
		echo '</div>';

  }

  function araclar($baglanti)
  {
    $refal = $baglanti->prepare("SELECT * FROM araclar");
    $refal->execute();
    
    echo ' <div class="section-header">
	<h2>Referanslarimiz</h2>
	<p>';
		echo $this->referans;
		echo ' </p>
	</div>
	<div class="owl-carousel clients-carousel">';

		while ($sonucum = $refal->fetch(PDO::FETCH_ASSOC)):
			echo '<img src="' . $sonucum['resimyol'] . '" alt="" />';
		endwhile;
		echo '</div>';

  }



}

