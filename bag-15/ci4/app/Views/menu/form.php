<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1> UPLOAD IMAGE</h1>

<form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
    Gambar : <input type="file" name="gambar" id="">
    <br>
    <input type="Submit" name="simpan" value="simpan" id="">

</form>

<?= $this->endSection() ?>