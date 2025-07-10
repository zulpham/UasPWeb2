<?= $this->extend('layout/template');?>
<?= $this->section('content');?>
<style>
    .gambar_ikan {
        max-width: 48%;
        height: auto;
    }
    .d-flex {
        margin-top: 5%;
        margin-left: 5%;
        margin-right: 5%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: rgba(250, 245, 240, 1);
        border-radius: 10px;
        padding: 20px;
    }
    .d-flex .btn {
        margin-left: auto;
    }
</style>
<?php if (session()->getFlashdata('pesan')) :?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan');?>
    </div>
<?php endif; ?>
<div class="container">
    <div class="row">
        <h1>Daftar Ikan</h1>
        <div class="col">
        <?php for ($i = 0; $i < count($ikan); $i += 2) : ?>
            <div class="d-flex align-items-center mb-3">
                <img src="/img/<?= $ikan[$i]['gambar_ikan'];?>" alt="" class="gambar_ikan me-3">
                <h4><?= $ikan[$i]['nama_ikan']; ?></h4>
                <a href="/detail/<?= $ikan[$i]['nama_ikan']; ?>" class="btn btn-success" style="justify-content: flex-end;">Detail</a>
            </div>
        <?php endfor; ?>
        </div>
        <div class="col">
        <?php for ($i = 1; $i < count($ikan); $i += 2) : ?>
            <div class="d-flex align-items-center mb-3">
                <img src="/img/<?= $ikan[$i]['gambar_ikan'];?>" alt="" class="gambar_ikan me-3">
                <h4><?= $ikan[$i]['nama_ikan']; ?></h4>
                <a href="/detail/<?= $ikan[$i]['nama_ikan']; ?>" class="btn btn-success" style="justify-content: flex-end;">Detail</a>
            </div>
        <?php endfor; ?>
        </div>
    </div>
</div>
<a href="/ikanku/tambah" class="btn btn-primary mt-2">Tambah Data Ikan</a>
<?= $this->endSection();?>