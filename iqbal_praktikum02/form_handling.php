<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Form Handling</title>
    <style>
        body {
            background : lightseagreen;
        }
        
        .btn-kirim{
            background:green;
            color: white;
            padding:5px;
            border:0;
            border-radius: 10px;
        }

        .btn-reset{
            background:red;
            color: white;
            padding:5px;
            border:0;
            border-radius: 10px;
        }
        </style>

</head>
<body>
    <h1> Form Pendaftaran </h1>
    <form action="belajar_post.php" method="POST"> 
        <!-- tipe teks -->
        <label for=""> Nama Mahasiswa </label>
        <br>
        <input type="text" name="nama">
        <br><br>

        <!-- tipe radio -->
        <label for=""> Jenis Kelamin </label>
        <br>
        <input type="radio" name="jenis_kelamin" value="Laki laki"><label for="">Laki-laki</label>
        <br>
        <input type="radio" name="jenis_kelamin" value="Perempuan"><label for="">Perempuan</label>
        <br><br>

        <!-- tipe checkbox -->
        <label for=""> Mata Kuliah </label>
        <br>
        <input type="checkbox" name="matkul" value="Matematika Komputer" >
         <label for="">Matematika Komputer</label>
         <br>
         <input type="checkbox" name="matkul" value="Pemograman Web 2" >
         <label for="">Pemograman Web 2</label>
        <br><br>

         <label for="">Nomor Telepon</label>
         <br>
         <input type="number" name="nomor_telpon">
         <br><br>

         <!-- button -->
         <button type="submit" class="btn-kirim">Kirim</button>
         <button type="reset" class="btn-reset">Reset data</button>
    </form>
</body>
</html>