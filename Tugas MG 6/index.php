<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>118140103 - M Lukman Al Hakim</title>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
    <h2>Input data</h2>
    <form method="post" id="form_mahasiswa">
        <table>
            <tr>
                <td><label>NIM</label></td>
                <td><input type="number" name="nim"></td>
            </tr>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama"><br></td>
            </tr>
            <tr>
                <td><label>Prodi</label></td>
                <td>
                    <select name="prodi">
                        <option value="ARS">Arsitektur</option>
                        <option value="PWK">Perencanaan Wilayah dan Kota</option>
                        <option value="FI">Fisika</option>
                        <option value="EL">T. Elektro</option>
                        <option value="IF">T. Informatika</option>
                        <option value="MTK">Matematika</option>
                        <option value="SAK">Sains Atmosfer Keplanetan</option>
                    </select></td>
            </tr>
            <tr>
                <td><label>Angkatan</label></td>
                <td>
                    <select name="angkatan">
                        <option value="2016">2020</option>
                        <option value="2017">2019</option>
                        <option value="2018">2018</option>
                        <option value="2019">2017</option>
                        <option value="2020">2016</option>
                        <option value="2020">2015</option>
                        <option value="2019">2014</option>
                        <option value="2020">2013</option>
                        <option value="2020">2012</option>
                    </select>
                </td>
            </tr>
        </table>
    </form>
    <button id="btn_tampil">Tambah data</button>
    <br><br>
    <h2>Data Mahasiswa</h2>
    <div id="tampil_data"></div>
    <script>
        $(document).ready(function() {
            $('#tampil_data').load("view.php");
            $('#btn_tampil').click(function() {
                var data = $('#form_mahasiswa').serialize();
                $.ajax({
                    type: 'POST',
                    url: "add.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $('#tampil_data').load("view.php");
                    }
                });
            });
        });
    </script>
</body>

</html>