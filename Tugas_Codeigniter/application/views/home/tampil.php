<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
</head>

<body>

    <div class="text-center-title banner">
        <h2>Daftar Article</h2>
        <a href=" <?php echo base_url('index.php/home/tambah'); ?> ">Tambah Article</a>
    </div>

    <div class="container">

        <div class="infoUser">
            <p>Selamat Datang, <b><?php echo $this->session->userdata('username'); ?></b></p>
            <?php echo anchor('home/logout', 'Logout', ['class' => 'redDelete']); ?>
        </div>

        <?php
        if ($this->session->flashdata('success') <> '') {
        ?>
            <p class="success"><?php echo $this->session->flashdata('success'); ?></p>
        <?php
            echo br(2);
        } else if ($this->session->flashdata('danger') <> '') {
        ?>
            <p class="danger"><?php echo $this->session->flashdata('danger'); ?></p>
        <?php
            echo br(2);
        }
        ?>

        <div class="d-flex">

            <?php foreach ($dataArticle as $data) { ?>
                <div class="card">
                    <div class="img">
                        <img src="<?php echo base_url('upload/') . $data->cover_img; ?>" alt="">
                    </div>
                    <div class="card-body">
                        <a href=""><?php echo $data->title; ?></a>
                        <br><br>

                        <p> <?php echo substr($data->article, 0, 120) ?> </p>
                    </div>
                    <?php if ($this->session->userdata('role') == 1001 || $data->user_id == $this->session->userdata('id')) { ?>
                        <div class="card-footer">
                            <div class="d-flex space-around">
                                <?php echo anchor('home/ubah/' . $data->id, 'Update', ['class' => '']); ?>
                                <?php echo anchor('home/deleteArticle/' . $data->id, 'Hapus', ['class' => 'redDelete']); ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

        </div>
    </div>

</body>

</html>