<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrap">
    <header>

    </header>

    <div class="container">

      <aside>
        <nav class=”vertikal”>
          <ul>
            <li><a href=”#”>Islam</a></li>
            <li><a href=”#”>Ekonomi</a></li>
            <li><a href=”#”>Kesehatan</a></li>
            <li><a href=”#”>Motivasi</a></li>
            <li><a href=”#”>Travelling</a></li>
          </ul>
        </nav>
      </aside>

      <article>
        <?php
        if (isset($_POST['hitung'])) {
          $bil1 = $_POST['bil1'];
          $bil2 = $_POST['bil2'];
          $operasi = $_POST['operasi'];
          switch ($operasi) {
            case '+':
              $hasil = $bil1 + $bil2;
              break;
            case '-':
              $hasil = $bil1 - $bil2;
              break;
            case '*':
              $hasil = $bil1 * $bil2;
              break;
            case '/':
              $hasil = $bil1 / $bil2;
              break;
          }
        }
        ?>
        <div class="kalkulator">
          <h2 class="judul">KALKULATOR</h2>

          <form method="post" action="Tugas_Prak1.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">x</option>
              <option value="/">/</option>
            </select>
            <input type="submit" name="hitung" value="Hitung" class="tombol">
          </form>
          <?php if (isset($_POST['hitung'])) { ?>
            <input type="text" value="<?php echo $hasil; ?>" class="bil">
          <?php } else { ?>
            <input type="text" value="0" class="bil">
          <?php } ?>
        </div>
      </article>
    </div>
    <div class="clear"></div>
    <footer>
      <br>
      <h3>@M. Lukman Al Hakim 118140103 </h3>
    </footer>
  </div>
</body>

</html>