<?php
include 'koneksi.php';

// var_dump($_GET['id']);
if(isset($_GET['id'])) { //checking apakah di url ada nilai GET id
    $id = $_GET['id']; //Ambil nilai id dari url dan simpan ke variabel id

    $query = "SELECT * FROM mahasiswa2 WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result) { //jika data gagal diambil / $result tidak ada hasilnya
        die("Query error".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    // $sql = mysqli_query($koneksi,$query);
    $data_olahraga = explode(" , ", $data['olahraga']);
    // print_r($result);
    if(!count($data)) { //Jika pada result tidak terdapat apa2 atau kosong (!data) 
        echo "<script>alert('Kesalahan pada databases (data tidak ditemukan)');window.location='index.php';</script>";
    }
}else { //Apabila tidak ada data GET id, akan di redirect ke index
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>

<!doctype html>
<html>
<head>
    <title>Edit data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>Edit data <?php echo $data['nama'] ?></h1></center>
    <div class="wrapper-tambah">
        <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
            <section class="base">
                <!-- Menampung id data mahasiswa yang akan di edit, tetapi tidak perlu kita tampilkan -->
                <input value="<?php echo $data['id'] ?>" name="id" hidden>
                <div class="form">
                    <label for="nama">NIM</label>
                    <input type="text" id="nim" name="nim" value="<?php echo $data['nim'] ?>" autofocus required>
                </div>

                <div class="form">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>" required>
                </div>

                <div class="form">
                    <label>Jenis kelamin</label>
                    <div class="input-grup">
                        <label for="jk-pria" class="input-label ppria">
                        <input type="radio" id="jk-pria" name="jk" value="Pria" required <?php if($data['jeniskelamin']=="Pria") echo 'checked'?>>
                        Pria
                        </label>
                    </div>
                    <div class="input-grup">
                        <label for="jk-wanita" class="input-label wawanita">
                        <input type="radio" id="jk-wanita" name="jk" value="Wanita" required <?php if($data['jeniskelamin']=="Wanita") echo'checked'?>>
                        Wanita
                        </label>
                    </div>
                </div>

                <div class="form aagama">
                    <label for="agama">Agama</label><br /><br />
                    <select name="agama" id="agama" required>
                        <option value="null" disabled>Pilih agama anda</option>
                        <option value="Islam" <?php if($data['agama'] == "Islam") echo 'selected'?>>Islam</option>
                        <option value="Kristen Protestan" <?php if($data['agama'] == "Kristen Protestan") echo 'selected'?>>Kristen Protestan</option>
                        <option value="Kristen Katolik" <?php if($data['agama'] == "Kristen Katolik") echo 'checked'?>>Kristen Katolik</option>
                        <option value="Budha" <?php if($data['agama'] == "Budha") echo 'selected'?>>Budha</option>
                        <option value="Hindu" <?php if($data['agama'] == "Hindu") echo 'selected'?>>Hindu</option>
                    </select>
                </div>

                <div class="form form-checkbox">
                    <label for="olahraga">Olahraga favorit</label> <br />
                    <label for="bola" class="label-checkbox">
                    <input type="checkbox" id="bola" name="olahraga[]" value="Sepak Bola" <?php if(in_array("Sepak Bola", $data_olahraga)) echo 'checked'?>>
                    Sepak bola
                    </label>
                    <label for="basket" class="label-checkbox">
                    <input type="checkbox" id="basket" name="olahraga[]" value="Basket" <?php if(in_array("Basket", $data_olahraga)) echo 'checked'?>>
                    Basket
                    </label>
                    <label for="futsal" class="label-checkbox">
                    <input type="checkbox" id="futsal" name="olahraga[]" value="Futsal" <?php if(in_array("Futsal", $data_olahraga)) echo 'checked'?>>
                    Futsal
                    </label>
                    <label for="renang" class="label-checkbox">
                    <input type="checkbox" id="renang" name="olahraga[]" value="Renang" <?php if(in_array("Renang", $data_olahraga)) echo 'checked'?>>
                    Berenang
                    </label>
                    <label for="badminton" class="label-checkbox">
                    <input type="checkbox" id="badminton" name="olahraga[]" value="Badminton" <?php if(in_array("Badminton", $data_olahraga)) echo 'checked'?>>
                    Badminton
                    </label>
                </div>
                <div class="form">
                    <label>Foto mahasiswa</label>
                    <img src="./images/<?php echo $data['foto']?>" alt="Foto profil" style="float: left; margin-bottom: 5px; width: 120px;">
                    <input type="file" name="foto">
                    <i style="float: left; font-size: 11px; color: red;">Abaikan jika tidak merubah foto</i>
                </div>
                <div class="form-submit" style="margin-top: 17px;">
                    <button type="submit" class="btn-submit" name="submit">Simpan data</button>
                </div>
            </section>
        </form>
    </div>
</body>
</html>