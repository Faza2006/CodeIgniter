<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1> UPDATE DATA</h1>

<form action="<?= base_url() ?>/admin/kategori/update" method="post">
    Kategori : <input type="text" name="kategori" value="<?=$kategori['kategori']?>" id="">
    <br>
    Keterangan : <input type="text" name="keterangan" value="<?=$kategori['keterangan']?>" id="">
    <br>
    <input type="hidden" name="idkategori" value="<?=$kategori['idkategori']?>">
    <input type="Submit" name="simpan" value="simpan" id="">

</form>

<?= $this->endSection() ?>