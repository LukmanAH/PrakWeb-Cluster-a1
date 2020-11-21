<?php
        $key = $_GET['keyhapus'];
        $koneksi = mysqli_connect("localhost","root","","data");
        $hasil = mysqli_query($koneksi, "DELETE FROM mahasiswa where nrp = '$key'");

        mysqli_query($koneksi,$hasil);
        echo '<script type="text/javascript">alert("Berhasil Hapus Data !!!!");</script>'; 

        echo "<a href='index.php'><button>KEMBALI</button></a>";
   ?>
