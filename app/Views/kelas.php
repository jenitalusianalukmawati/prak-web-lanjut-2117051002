<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<section class="vh-100" style="background-color: #94A684">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: 0.5rem">
            <div class="col-md-8">
              <div class="card-body p-4">
                <h4>Kelas</h4>
                <hr class="mt-0 mb-4" />
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Dosen PJ</h6>
                    <p class="text-muted"><?= $kelas['dosen_pj'] ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Lantai</h6>
                    <p class="text-muted"><?= $kelas['lantai'] ?></p>
                  </div>
                </div>
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Kelas</h6>
                    <p class="text-muted"><?= $kelas['nama_kelas'] ?></p>
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