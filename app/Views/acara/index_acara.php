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
        <h1>Acara yang Akan Datang</h1>
        <div class="col">
        <?php for ($i = 0; $i < count($acara); $i++) : ?>
            <div class="d-flex align-items-center mb-3">
                <img style="width: 25%;height:auto" src="/img/<?= $acara[$i]['gambar_acara'];?>" alt="" class="gambar_ikan me-3">
                <div style="text-align: left;" >
                    <h4><strong><?= $acara[$i]['nama_acara']; ?></strong></h4>
                    <p><small><b><?= $acara[$i]['tempat']; ?></b></small></p>
                    <p><?= str_replace("T", " ",  $acara[$i]['tanggal_mulai'] ); ?> WIB</p>
                    <p><small>Untuk : <?= $acara[$i]['audiens']; ?></small></p>
                </div>
                <a href="/acara/detail/<?= $acara[$i]['nama_acara']; ?>" class="btn btn-success" style="justify-content: flex-end;">Detail</a>
            </div>
        <?php endfor; ?>
        </div>
    </div>
</div>
<a href="/acara/tambah" class="btn btn-primary mt-2">Tambah Data Acara</a>
<?= $this->endSection();?>