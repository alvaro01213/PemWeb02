<?php

class Bola
{
    public $jarijari;

    
  function hitungVolume(){
    return 4/3 * 3.14 * ($this->jarijari ** 3);
  }

}

$objekBola = new Bola;
$objekBola->jarijari = 21;
echo $objekBola->hitungVolume();