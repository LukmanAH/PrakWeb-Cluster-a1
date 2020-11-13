<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bilangan Prima</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <article>
    <?php
    if (isset($_POST['cek'])) {
      $bil = $_POST['bil'];
      $prima = true;
      for ($i = 2; $i < $bil; $i++) {
        if ($bil % $i == 0)
          $prima = false;
      }
      if ($prima) {
        $hasil = " Bilangan prima";
      } else {
        $hasil = "Bukan bilangan prima";
      }
    }
    ?>
    <h1 class="judul">CEK BILANGAN PRIMA</h1>

    <form method='post' action='Latihan_3_Prima.php'>
      <input type='number' name='bil' class='bil' autocomplete='off' placeholder='Masukan Bilangan'>
      <input type='submit' name='cek' value='Cek' class='tombol'>
    </form>
    <?php if (isset($_POST['cek'])) { ?>
      <input type="text" value='<?php echo "$bil $hasil"; ?>' class="bil">
    <?php } else { ?>
      <input type="text" value=":(" class="bil">
    <?php } ?>
  </article>
  </div>
</body>

</html>