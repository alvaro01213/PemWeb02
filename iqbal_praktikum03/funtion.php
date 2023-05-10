<?php
function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}
hitungUmur(2003);
echo "<br>";
hitungUmur(2002);
echo "<br>";
hitungUmur(2001);
echo "<br>";

function welcome($nama = "Iqbal")
{
    echo "Hello selamat datang $nama !";
}

welcome("wahyu");