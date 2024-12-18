<?php

//construct olmayan diğer fonksiyonların da veritabanı bağlantısını alabilmesini sağlar.
try {
  $baglanti=new PDO("mysql:host=localhost;
  dbname=kurumsal;charset=utf8","root","");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, 
  PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die($e->getMessage());
}


class kurumsal
{
  public $normaltitle, $metatitle, $metadesc, $metakey, $metaaut,
  $metaown, $metacopy, $logoyazi, $logoyazisiyah, 
  $twit, $face, $inst, $linkd, $gith, $telno,
  $mailadres, $normaladres, $slogan;

  function __construct()
  {
    try {
      $baglanti=new PDO("mysql:host=localhost;
      dbname=kurumsal;charset=utf8","root","");
      $baglanti->setAttribute(PDO::ATTR_ERRMODE, 
      PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage());
    }

    $ayarcek = $baglanti->prepare("SELECT * FROM ayarlar");
    $ayarcek->execute();
    $sorguson = $ayarcek->fetch();

    $this->normaltitle = $sorguson["title"];
    $this->metatitle = $sorguson['metatitle'];
    $this->metadesc = $sorguson['metadesc']; 
    /*bu şekilde atamalarla devam ediyor...*/
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

  }


  function intro($baglanti) 
  {
    $introal=$baglanti->prepare("SELECT * FROM intro");
    $introal->execute();

    while ($sonucum=$introal->fetch(PDO::FETCH_ASSOC)):      
      echo '<div class="item" style="background-image: url('.$sonucum["resimyol"].');"></div>';
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
              <figcaption><img src="'.$sonucum["resim"].'" alt=" '.$sonucum["resim"].' adlı görsel: 
              Sol elin avucu üzerinde, içinde kalın puntolu soru işareti bulunan mavi bir bulut çizimi."></figcaption>
          </div>

          <div class="col-lg-6 content">
              <h2> '.$sonucum["baslik"].'</h2>
              <h3> '.$sonucum["icerik"].'</h3>
          </div>

      </div>';
  }
  
  
  



}

