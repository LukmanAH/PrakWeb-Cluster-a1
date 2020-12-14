<?php
    include "koneksi.php";
    $nim = $_POST["id"];
    $newnim = $_POST["nim"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $angkatan = $_POST["angkatan"];
    $sql = "UPDATE mahasiswa set nim='$newnim', nama='$nama', prodi='$prodi', angkatan='$angkatan' where nim='$nim'";
    $hasil = mysqli_query($connect, $sql);
?>