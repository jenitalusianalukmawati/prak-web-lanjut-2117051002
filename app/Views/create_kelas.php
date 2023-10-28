<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card-createkelas">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Kelas</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('kelas/store') ?>" method="POST" enctype="multipart/form-data">
                             <div class="form-floating mb-3">
                                <input type="text" class="form-control <?= ($validation->hasError('dosen_pj')) ? 
                                'is-invalid' : ''; ?>" name="dosen_pj" id="dosen_pj" placeholder="dosen_pj" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('dosen_pj'); ?>
                                </div>
                                <label>Dosen PJ</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" name="nama_kelas" id="floatingInput" placeholder="Nama Kelas"">
                                    <label for="floatingInput">Nama Kelas</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" <?= ($validation->hasError('lantai')) ? 
                                'is-invalid' : ''; ?>" name="lantai" id="lantai" placeholder="lantai" autofocus>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('lantai'); ?>
                                </div>
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