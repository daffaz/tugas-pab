<?php
include('koneksi.php')
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah data</title>
    </head>
    <body>
        <div class="wrapper-tambah">
            <center><h1>Tambah produk</h1></center>
            <form action="tambah_data.php" method="POST">
                <section class="base">
                    <div class="form">
                        <label for="nama">NIM</label>
                        <input type="text" id="nim" name="nim" autofocus required>
                    </div>

                    <div class="form">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" required>
                    </div>

                    <div class="form">
                        <label>Jenis kelamin</label><br />
                        <input type="radio" id="jk-pria" name="jk" required><label for="jk-pria">Pria</label> <br />
                        <input type="radio" id="jk-wanita" name="jk" required><label for="jk-wanita">Wanita</label>
                    </div>

                    <div class="form">
                        <label for="agama">Agama</label>
                        <input type="text" id="agama" name="nama" required>
                    </div>
                </section>
            </form>
        </div>
    </body>
</html>