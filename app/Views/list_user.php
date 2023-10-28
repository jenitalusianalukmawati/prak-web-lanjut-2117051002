<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<br>
    <div class="data-mahasiswa">
        <div class="card mb-4">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('user/create') ?>" method="POST">
                    <button class="btn btn-success">Tambah Data</button>
                </form>
                <table cellpadding="10" class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($users as $user){
                        ?>
                        <tr>
                            <td><?= $user['nama'] ?></td>
                            <td><?= $user['npm'] ?></td>
                            <td><?= $user['nama_kelas'] ?></td>
                            <td>
                            <a class="btn btn-dark" href="<?= base_url('user/' . $user['id']) ?>"><i class="bi bi-info-circle" aria-hidden="true"></i></a>
                            <a class="btn btn-warning" href="<?= base_url('user/' . $user['id'] . '/edit') ?>"><i class="bi bi-pencil-square" aria-hidden="true"></i></a>
                            <form action="<?= base_url('user/' . $user['id']) ?>" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <?= csrf_field() ?>
                                <button class="btn btn-danger">
                                    <i class="bi bi-trash3" aria-hidden="true"></i>
                                </button>
                            </form> 
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
<?= $this->endSection() ?>