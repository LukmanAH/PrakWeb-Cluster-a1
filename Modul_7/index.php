<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>DATA MAHASISWA PENS</h2>
    ====================================================
    <h2>TAMBAH DATA</h2>
    <form action="tambah.php" method="post">
    NRP     : <input type="text" name="nrp">
    <br>Nama    : <input type="text" name="nama">
    <br>alamat  : <input type="text" name="alamat">
    <br>Jurusan :
        <select name="id_jurusan">
        <?php
            $koneksi = mysqli_connect("localhost","root","","data");
            $hasil = mysqli_query($koneksi, "select * from jurusan");
            while ($nama_jur = mysqli_fetch_array($hasil)){
                echo "<option value=".$nama_jur['id_jurusan'].">".$nama_jur['nama_jurusan']."</option>";
            }
        ?>

        </select>
    <br><input type="submit" name="tambahin" value="Tambahdata">
    </form>
    ====================================================
    <h2>SEARCH DATA</h2>
    <form action="cari.php"  method="POST">
        <br>Nama : <input type="text" name="keycari">
        <input type="submit" name="cari" value="cari">
    </form>
    ====================================================
    <h2>HAPUS DATA</h2>
    <form action="hapus.php">
        NRP : <input type="text" name="keyhapus">
        <input type="submit" name="hapus" value="Hapus">
    </form>
</body>
</html>
