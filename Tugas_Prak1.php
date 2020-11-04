<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Praktikum 1</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="wrap">
    <header>
    <h1>Hello, Everyone</h1>
    </header>

    <div class="container">

      <aside>
        <nav class='N2'>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Contact</a></li>
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

            default:
              $hasil = "Pilih Operatornya dulu dong !!!";
              break;
          }
        }
        ?>
        <div class="kalkulator">
          <h1 class="judul">KALKULATOR</h1>

          <form method="post" action="Tugas_Prak1.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
            <select class="opt" name="operasi">
              <option value="#">Pilih Operator</option>
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
      <h3>@M. Lukman Al Hakim 118140103 </h3>
    </footer>
  </div>
</body>

</html>