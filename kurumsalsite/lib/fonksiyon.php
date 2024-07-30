<?php

class kurumsal
{
  public $normaltitle, $metatitle, $metadesc, $metakey, $metaaut,
  $metaown, $metacopy, $logoyazi, $twit, $face, $inst, $telno,
  $mailadres, $normaladres, $slogan;
//... kod tablodaki verilerime karşılık gelecek sınıf özelliklerini oluşturarak devam ediyor


  function __construct()
  {
    try {
      $baglanti=new PDO("mysql:host=localhost;dbname=kurumsal;charset=utf8","root","");
      $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage());
    }

    $ayarcek = $baglanti->prepare("SELECT * FROM ayarlar");
    $ayarcek->execute();
    $sorguson = $ayarcek->fetch();

    $this->normaltitle = $sorguson["title"];
    $this->metatitle = $sorguson['metatitle'];
    $this->metadesc = $sorguson['metadesc']; 
    $this->metakey = $sorguson['metakey'];
    $this->metaaut = $sorguson['metaaut'];
    $this->metaown = $sorguson['metaown'];
    $this->metacopy = $sorguson['metacopy'];
    $this->logoyazi = $sorguson['logoyazi'];
    $this->twit = $sorguson['twit'];
    $this->face = $sorguson['face'];
    $this->inst = $sorguson['inst'];
    $this->telno = $sorguson['telno'];
    $this->mailadres = $sorguson['mailadres'];
    $this->normaladres = $sorguson['adres'];
    $this->slogan = $sorguson['slogan'];

  }
}

