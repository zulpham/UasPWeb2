<?= $this->extend('layout/template'); ?>
<?= $this->section('content');?>
    <div class="row">
        <div class="col">
            <h1 class="my-3">Detail Ikan</h1>
            <div class="card mb-3">
                <div class="row g-0" style="align-items: center;">
                    <div class="col-md-4">
                        <img src="<?= $ikan['gambar_ikan'];?>" class="img-fluid rounded-start" alt="...">
                    </div>
                <div class="col-md-4">
                    <div class="card-body" style="text-align: left;font-size:1.2rem">
                        <h3 class="card-title"><strong><?= $ikan['nama_ikan'];?></strong></h3>
                        <p class="card-text"><?= $ikan['nama_latin'];?></p>
                        <p class="card-text"><small class="text-body-secondary"><b>habitat : </b><?= $ikan['habitat']; ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Diet    : </b><?= $ikan['diet']; ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Asal    : </b><?= $ikan['asal']; ?></small></p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <a href="/ikanku/edit/<?= $ikan['nama_ikan']; ?>" class="btn btn-warning w-50">Ubah</a>
                        <br>
                        <br>
                        <form action="/ikanku/del/<?= $ikan['id_ikan']; ?>" method="post" class="d-inline">
                            <?= csrf_field();?>
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger w-50" onclick="return confirm('apakah anda yakin ingin menghapusnya?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-success w-50" href="/">Kembali ke Daftar Ikan</a>
    </div>
</div>
<?= $this->endSection();?>