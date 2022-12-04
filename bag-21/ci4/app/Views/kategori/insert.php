<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<?php 
    echo session()->getFlashdata('info');
?>

<div class="col">
    <h1> INSERT DATA</h1>
</div>

<div class="col-8">
    <form action="<?= base_url() ?>/admin/kategori/insert" method="post">
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" id="" required class="form-control">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" name="keterangan" id="" required class="form-control">
        </div>
        <div class="form-group">
        <input type="Submit" name="simpan" value="simpan" id="">
        </div>
    </form>

</div>

<?= $this->endSection() ?>