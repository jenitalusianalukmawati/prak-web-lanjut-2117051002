<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
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
<?= $this->endSection() ?>