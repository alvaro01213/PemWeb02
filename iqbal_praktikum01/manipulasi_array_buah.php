<?php
//membuat array
$arrayBuah = ["Mangga","Durian","Melon","Sirsak","Nanas"];
//mengurutkan value dari array
sort($arrayBuah);

//menghapus value array paling belakang
array_pop($arrayBuah);

//menghapus spesifik value pada array
unset($arrayBuah [0]);

//menambah satu value array di akhir
array_push($arrayBuah, "Naga");

//menghapus value yang paling depan
array_shift($arrayBuah);

//menambah value array di awal
array_unshift($arrayBuah, "Salak");

//mengubah value array tertentu
$arrayBuah[2] = "Semangka";

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}