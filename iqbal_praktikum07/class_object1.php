<?php
class Mamalia
{
public $namaHewan;
public $warnaHewan;
public $habitat;
public $makanan;

function menyusui ()
{
    return "$this->namaHewan adalah hewan menyusui";
}

function beranak()
{
    return "$this->namaHewan adalah hewan yang melahirkan";
}

function makan()
{
    return "$this->namaHewan suka makan $makanan" ;
}
}

$objek = new Mamalia ();
$objek -> namaHewan = "Kucing";
$objek -> warnaHewan = "coklat";
$objek -> habitat = "Sekitar manusia";
$objek -> makanan = "Whiskas";
echo $objek -> menyusui ();