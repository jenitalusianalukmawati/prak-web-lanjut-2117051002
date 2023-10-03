<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
    <div class="profile-area">
        <div class="container">
            <div class="row">
                <div class="main">
                    <div class="card">
                        <div class="img1"><img src="<?=base_url("assets/img/bg.jpg")?>"></div>
                        <div class="img2"><img src="<?=base_url("assets/img/jen.png")?>"></div>
                        <div class="text">
                            <h2><?=$nama?></h2>
                            <p><?=$id_kelas?></p>
                            <p><?=$npm?></p>
                        </div>
                        <div class="sosmed">
                            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                            <a href="https://instagram.com"><i class="fa fa-instagram"></i></a>
                            <a href="https://linkedin.com"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection() ?>