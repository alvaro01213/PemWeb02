<?php
class Persegi
{
    function __construct($sisi)
    {
        $this->sisi = $sisi;
    }
    function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}
$objek = new Persegi(7);
echo $objek->hitungLuas();