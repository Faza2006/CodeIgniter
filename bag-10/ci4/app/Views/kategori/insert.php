<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1> INSERT DATA</h1>

<form action="<?= base_url() ?>/admin/kategori/insert" method="post">
    Kategori : <input type="text" name="kategori" id="">
    <br>
    Keterangan : <input type="text" name="keterangan" id="">
    <br>
    <input type="Submit" name="simpan" value="simpan" id="">

</form>

<?= $this->endSection() ?>