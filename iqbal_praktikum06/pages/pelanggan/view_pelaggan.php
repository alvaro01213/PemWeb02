<?php 
require_once '../../database/dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<div class="container">
    <h2 class="text-center">View Pelanggan</h2>
    <table class="table table-striped">
        <tbody>
            <tr>
                <td>ID</td>
                <td><?=$row['id']?></td>
            </tr>
            <tr>
                <td>Kode Pelanggan</td>
                <td><?=$row['kode']?></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td><?=$row['nama']?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?=$row['jk']?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?=$row['tmp_lahir']?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><?=$row['tgl_lahir']?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$row['email']?></td>
            </tr>
            <tr>
                <td>Kartu</td>
                <td><?=$row['kartu_id']?></td>
            </tr>
        </tbody>
    </table>
</div>