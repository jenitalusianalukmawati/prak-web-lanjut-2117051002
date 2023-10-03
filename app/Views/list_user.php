<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<table class="content-table">
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
                    <i class="fa-solid fa-pen-to-square" type="button" style='color:#3E65B3'></i>
                    <i class="fa-solid fa-trash" type="button" style='color:#D32020'></i>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?= $this->endSection() ?>
