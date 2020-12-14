<table border="1" cellpadding="5px">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Angkatan</th>
        <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $hasil = mysqli_query(
        $connect,
        "select * from mahasiswa order by nim asc"
    );
    $no = 0;
    foreach ($hasil as $key => $data) {

        $no++;
    ?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['nim']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['prodi']; ?></td>
            <td><?php echo $data['angkatan']; ?></td>
            <td>
                <button id="<?php echo $data['nim']; ?>" class="edit"> Edit </button>
                <button id="<?php echo $data['nim']; ?>" class="hapus"> Hapus </button>
            </td>
        </tr>
    <?php  } ?>
</table>
<script type='text/javascript'>
    $(document).on('click', '.hapus', function() {
        var id = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "delete.php",
            data: {
                id: id
            },
            success: function() {
                $('#tampil_data').load("view.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
    $(document).on('click', '.edit', function() {
        var id = $(this).attr('id');
        var nim = document.getElementsByName('nim')[0].value;
        var nama = document.getElementsByName('nama')[0].value;
        var prodi = document.getElementsByName('prodi')[0].value;
        var angkatan = document.getElementsByName('angkatan')[0].value;
        $.ajax({
            type: 'POST',
            url: "update.php",
            data: {
                id: id,
                nim: nim,
                nama: nama,
                prodi: prodi,
                angkatan: angkatan

            },
            success: function() {
                $('#tampil_data').load("view.php");
            },
            error: function(response) {
                console.log(response.responseText);
            }
        });
    });
</script>