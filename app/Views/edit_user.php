<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="edit-user">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit User</h3></div>
                    <div class="card-body">
                        <form action="<?= base_url('user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                            <div class="input-group mb-3">
                                <img src="<?= $user['foto'] ?? '<default-foto>'?>" class="edit_foto">
                                <input type="file" class="form-control" name="foto" id="inputGroupFile02" placeholder="Upload File">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>" id="nama" placeholder="Nama" autofocus>
                                <label>Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <!-- <label>Kelas</label> -->
                                <!-- <input type="text" class="form-control" placeholder="Kelas"> -->
                                <select name="kelas" id="kelas" class="form-control" placeholder="Kelas" type="text">
                                    <?php foreach ($kelas as $item){
                                        ?>
                                        
                                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                                            <?= $item['nama_kelas'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="npm" id="npm" value="<?= $user['npm'] ?>" placeholder="NPM" autofocus>
                                
                                <label>NPM</label>
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