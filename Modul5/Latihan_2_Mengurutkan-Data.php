<?php
$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "akjdh", "klfdsjls", "fuacd");

echo "Data acak sebelum diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
//karena pada ketentuan yg ditulis hanya tugas nomor 3 yang tidak boleh menggunakan fungsi bawaan,,,
//maka pada tugas nomor 2 ini saya memakai fungsi bawaan agar lebih mudah
sort($data); //fungsi mengurutkan dari kecil ke besar

echo "<br>Data acak Setelah diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
