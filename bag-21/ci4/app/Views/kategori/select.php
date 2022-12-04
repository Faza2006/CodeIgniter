<?= $this->extend('template/admin') ?>



<?= $this->section('content') ?>

<div class="row">

<div class="col-4">
    <a class="btn btn-outline-primary" href="<?= base_url()  ?>/admin/kategori/create" role="button">Tambah Data</a>
</div>

<div class="col-4">
    <h3> <?= $judul; ?> </h3>
</div>

</div>






<div class="row mt-2">

<table class="table">

    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Keterangan</th>
        <th>Aksi</th>

    </tr>
    <?php $no=1 ?>
    <?php foreach($kategori as $key => $value): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $value['kategori'] ?></td>
        <td><?= $value['keterangan'] ?></td>
        <td><a href="<?=base_url() ?>/admin/kategori/delete/<?= $value['idkategori'] ?>">
            <img src="<?=base_url('/icon/can.svg')?>"></a>
        <a href="<?=base_url() ?>/admin/kategori/find/<?= $value['idkategori'] ?>">
            <img src="<?=base_url('/icon/pen.svg')?>"></a></td>

    </tr>
    <?php endforeach; ?>

</table>

<?= $pager->links('group1','bootstrap')?>

</div>


<?= $this->endSection() ?>