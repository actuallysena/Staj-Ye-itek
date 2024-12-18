<?php

try 
{
  $baglanti - new PDO("mysql:host-localhost; dbname-kurumsal; charset=utf8", "root", "");
  $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

catch (PDOException $e) 
{
  die($e->getMessege());
}

class kurumsal
{

  public $normaltitle, $metatitle, $metadesc, $metakey, $metaout, $metaown, $metacopy, $logoyazi, $tvit, $face, $ints, $telno, $mailadres, $normaladres;


  function __construct()
  {
    
  }


}


?>