<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "bale" && $password="01234"){
    echo "Login Berhasil";
}else{
    echo "Login Gagal";
}