<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="edit-kelas">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Kelas</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="dosen_pj" value="<?= $kelas['dosen_pj'] ?>" id="dosen_pj" placeholder="dosen_pj" autofocus>
                                <label>Dosen PJ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama_kelas" id="nama_kelas" placeholder="Nama Kelas" value="<?= $kelas['nama_kelas'] ?>">
                                <label>Nama Kelas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="lantai" id="lantai" value="<?= $kelas['lantai'] ?>" placeholder="lantai" autofocus>
                                
                                <label>Lantai</label>
                            </div><br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>