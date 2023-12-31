<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="vh-100" style="background-color: #94A684">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: 0.5rem">
          <div class="row g-0">
            <div
              class="col-md-4 gradient-custom text-center text-white"
              style="
                border-top-left-radius: 0.5rem;
                border-bottom-left-radius: 0.5rem;
              "
            ><br><br>
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="img-fluid my-5" style="width: 120px; border-radius: 100px;"/>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h4>Profile</h4>
                <hr class="mt-0 mb-4" />
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Nama</h6>
                    <p class="text-muted"><?= $user['nama'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>NPM</h6>
                    <p class="text-muted"><?= $user['npm'] ?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Kelas</h6>
                    <p class="text-muted"><?= $user['nama_kelas'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection() ?>