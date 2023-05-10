<?php
class Buah
{
    public $warna = "Oranye";
    public $nama = "Jeruk";
    public $rasa = "Kecut";

    function tumbuh()
    {
        return "$this->nama itu bisa tumbuh";
    }

    function busuk()
    {
        return "$this->nama itu bisa busuk";
    }
}
$objekBuah = new Buah;
$objekBuah->nama = "Semangka";
$objekBuah->warna = "Hijau";
$objekBuah->rasa = "Manis";
echo $objekBuah->tumbuh();
echo "<br>";
echo $objekBuah->busuk(); 