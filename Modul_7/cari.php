<?php
            $kunci = $_POST['keycari'];
            $koneksi = mysqli_connect("localhost","root","","data");
            $tes = mysqli_query($koneksi, "SELECT * FROM  mahasiswa where nama like '%$kunci%'");

            while($baris = mysqli_fetch_array($tes)){
                echo "Nama : "; echo $baris[0]; echo "<br>";
                echo "NPM : "; echo $baris[1]; echo "<br>";
                echo "Alamat : "; echo $baris[2]; echo "<br>";
                echo "Id_Jurusan : "; echo $baris[3]; echo "<br><br>";
            }

            echo "<a href='idx.php'><button>KEMBALI</button></a>";
   ?>