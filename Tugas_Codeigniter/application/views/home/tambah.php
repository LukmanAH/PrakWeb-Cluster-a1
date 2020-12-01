<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Article</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <div class="text-center-title banner">
        <h2>Tambah Article</h2>
    </div>

    <?php validation_errors(); ?>
    <?php echo $error; ?>

    <div class="container mt-5">
        <?php echo form_open_multipart('home/tambah'); ?>
        <div class="form-group">
            <label>Judul Artikel</label>
            <input type="text" class="form-control" name="title" placeholder="Masukkan Judul Artikel">
            <p><?php echo  form_error('title'); ?></p>
        </div>
        <div class="form-group">
            <label>Artikel</label>
            <textarea class="form-control" name="article" rows="4"></textarea>
            <p><?php echo  form_error('article'); ?></p>
        </div>
        <div class="form-group">
            <label>Masukkan Cover Artikel (Berupa Gambar .jpg/.png)</label><br>
            <input type="file" name="cover_img">
        </div>
        <?php echo  form_error('cover_img'); ?>
        <br>
        <input type="submit" value="Tambah Artikel" class="btn btn-primary w-100">
        </form>
    </div>

</body>

</html>