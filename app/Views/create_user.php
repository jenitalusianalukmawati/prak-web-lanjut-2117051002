<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="<?=base_url("assets/css/style.css")?>">
</head>
<body>
    <section class="wrapper">
        <div class="form">
            <header>FORM</header>
            <form action="<?= base_url('/user/store') ?>" method="POST">
                <input type="text" name="nama" placeholder="Nama" class="form-control <?= ($validation->hasError('nama')) ?
                'is-invalid' : ''; ?>" id="nama" autofocus>
                <div class="invalid-feedback">                    <?= $validation->getError('nama') ?>
                </div>
                <select name="kelas" id="kelas">
                    <?php
                    foreach ($kelas as $item){
                    ?>
                        <option value="<?= $item['id'] ?>">
                            <?= $item['nama_kelas'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
                <input type="text" name="npm" placeholder="NPM" class="form-control <?= ($validation->hasError('npm')) ?
                'is-invalid' : ''; ?>" id="npm" autofocus>
                <div class="invalid-feedback">
                    <?= $validation->getError('npm') ?>
                </div>
                <input type="submit" name="submit" value="Send" />
            </form>
        </div>
    </section>
</body>
</html>