<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Tambah data</title>
    </head>
    <body>
        <div class="wrapper-tambah">
            <center><h1 style="font-weight: bold;">Tambah data</h1></center>
            <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">
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
                        <label>Jenis kelamin</label>
                        <div class="input-grup">
                            <label for="jk-pria" class="input-label ppria">
                            <input type="radio" id="jk-pria" name="jk" value="Pria" required>
                            Pria
                            </label>
                        </div>
                        <div class="input-grup">
                            <label for="jk-wanita" class="input-label wawanita">
                            <input type="radio" id="jk-wanita" name="jk" value="Wanita" required>
                            Wanita
                            </label>
                        </div>
                    </div>

                    <div class="form aagama">
                        <label for="agama">Agama</label><br /><br />
                        <select name="agama" id="agama" required>
                            <option value="null" disabled selected>Pilih agama anda</option>
                            <option value="islam">Islam</option>
                            <option value="kristen protestan">Kristen Protestan</option>
                            <option value="kristen katolik">Kristen Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                        </select>
                    </div>

                    <div class="form form-checkbox">
                        <label for="olahraga">Olahraga favorit</label> <br />
                        <label for="bola" class="label-checkbox">
                        <input type="checkbox" id="bola" name="olahraga[]" value="Sepak Bola">
                        Sepak bola
                        </label>
                        <label for="basket" class="label-checkbox">
                        <input type="checkbox" id="basket" name="olahraga[]" value="Basket">
                        Basket
                        </label>
                        <label for="futsal" class="label-checkbox">
                        <input type="checkbox" id="futsal" name="olahraga[]" value="Futsal">
                        Futsal
                        </label>
                        <label for="renang" class="label-checkbox">
                        <input type="checkbox" id="renang" name="olahraga[]" value="Renang">
                        Berenang
                        </label>
                        <label for="badminton" class="label-checkbox">
                        <input type="checkbox" id="badminton" name="olahraga[]" value="Badminton">
                        Badminton
                        </label>
                    </div>
                    <div class="form">
                        <label>Foto mahasiswa</label>
                        <input type="file" name="foto" required>
                    </div>
                    <div class="form-submit">
                        <button type="submit" class="btn-submit" name="submit">Simpan data</button>
                        <button type="reset" class="btn-reset">Reset!!!</button>
                    </div>
                </section>
            </form>
        </div>
    </body>
</html>