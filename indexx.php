<?php
include('koneksi.php')
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Selamat datang</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <center><h1>Data mahasiswa</h1></center>
        <center><a href="tambah_data.php">+ &nbsp; Tambah data</a></center>
        <br />
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Olahraga favorit</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM mahasiswa2 ORDER BY id ASC"; //menjalankan query untuk menampilkan semua data
                $hasil = mysqli_query($koneksi, $query);

                if(!$hasil) {
                    die("Query error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                }
                $nomor = 1;
                while($baris = mysqli_fetch_assoc($hasil))
                ?>
            </tbody>
        </table>
    </body>
</html>