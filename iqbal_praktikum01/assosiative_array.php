<?php
//membuat array assosiatif
$profileArray = [
    "nama" => "Toni Stank", 
    "Kelas" => "SI14"
];

// print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'Siti',
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XIRPL3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPLE3'
    ]
];
foreach($profileMultiArray as $profile) {
    echo $profile ['nama'] . "<br>";
}
// foreach($profileArray as $profile){
//     echo $profile['nama'];
// }