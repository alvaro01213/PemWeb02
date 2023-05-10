<?php

class Balok
{
    public $panjang, $lebar, $tinggi;

    
  function hitungVolume(){
    return $this->panjang * $this->lebar * $this->tinggi;
  }

}

$objekBalok = new Balok;
$objekBalok->panjang = 10;
$objekBalok->lebar = 15;
$objekBalok->tinggi = 17;

echo $objekBalok->hitungVolume();