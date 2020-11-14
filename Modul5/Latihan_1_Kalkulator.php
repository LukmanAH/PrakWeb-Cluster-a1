<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1 Praktikum 2</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <article>
    <?php
    if (isset($_POST['hitung'])) {
      $bil1 = $_POST['bil1'];
      $bil2 = $_POST['bil2'];
      if ($bil2 !=  0 && $bil1 != 0) {
        $tambah = $bil1 + $bil2;
        $kurang = $bil1 - $bil2;
        $kali = $bil1 * $bil2;
        $bagi = $bil1 / $bil2;
        $mod = $bil1 % $bil2;
      } else {
        $tambah = 0;
        $kurang = 0;
        $kali = 0;
        $bagi = 0;
        $mod = 0;
      }
    }
    
    ?>
    <div class="kalkulator">
      <h1 class="judul">KALKULATOR</h1>

      <form method="post" action="Latihan_1_Kalkulator.php">
        <input type="number" name="bil1" class="bil" autocomplete="on" placeholder="Masukkan Bilangan Pertama"><br>
        <input type="number" name="bil2" class="bil" autocomplete="on" placeholder="Masukkan Bilangan Kedua"><br>
        <input type="submit" name="hitung" value="Hitung" class="tombol"><br>
      </form>
      <?php if (isset($_POST['hitung'])) { ?>
        <h2 class="judul">Hasil Dari Tiap Operasi :</h2>
        <input type="text" value="<?php echo "Penjumlahan (+)  :   " . $tambah; ?>" class="bil"><br>
        <input type="text" value="<?php echo "pengurangan (-)  :   " . $kurang; ?>" class="bil"><br>
        <input type="text" value="<?php echo "Perkalian (x)    :   " . $kali; ?>" class="bil"><br>
        <input type="text" value="<?php echo "Pembagian (/)    :   " . $bagi; ?>" class="bil"><br>
        <input type="text" value="<?php echo "Modulo (%)       :   " .  $mod; ?>" class="bil"><br>
      <?php } else { ?>
        <input type="text" value="0" class="bil"><br>
        <input type="text" value="0" class="bil"><br>
        <input type="text" value="0" class="bil"><br>
        <input type="text" value="0" class="bil"><br>
        <input type="text" value="0" class="bil"><br>
      <?php } ?>
    </div>
  </article>
  </div>
</body>

</html>
