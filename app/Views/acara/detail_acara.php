<?= $this->extend('layout/template'); ?>
<?= $this->section('content');?>
    <div class="row">
        <div class="col">
            <h1 class="my-3">Detail Acara</h1>
            <div class="card mb-3" style="padding: 20px;">
                <div class="row g-0" >
                    <div class="col-md-4">
                        <img src="/img/<?= $acara['gambar_acara'];?>" class="img-fluid rounded-start" alt="...">
                    </div>
                <div class="col-md-4">
                    <div class="card-body" style="text-align: left;font-size:1.2rem">
                        <h3 class="card-title"><strong><?= $acara['nama_acara'];?></strong></h3>
                        <p class="card-text"><small class="text-body-secondary"><b>Untuk : </b><?= $acara['audiens']; ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Tanggal Mulai : </b><?= str_replace("T", " ",  $acara['tanggal_mulai'] ); ?> WIB</small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Tanggal Berakhir : </b><?= str_replace("T", " ",  $acara['tanggal_berakhir'] ); ?> WIB</small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Tempat : </b><?= $acara['tempat']; ?></small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Link GMaps : </b><a href="<?= $acara['link_gmaps']; ?>" target="_blank" rel="noopener noreferrer">Klik disini</a></small></p>
                        <p class="card-text"><small class="text-body-secondary"><b>Deskripsi : </b></small></p>
                        <p class="card-text"><small class="text-body-secondary"><?= $acara['deskripsi']; ?></small></p>
                        <br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <a href="/acara/edit/<?= $acara['nama_acara']; ?>" class="btn btn-warning w-50">Ubah</a>
                        <br>
                        <br>
                        <form action="/acara/del/<?= $acara['id_acara']; ?>" method="post" class="d-inline">
                            <?= csrf_field();?>
                            <input type="hidden" name="_method" value="delete">
                            <button type="submit" class="btn btn-danger w-50" onclick="return confirm('apakah anda yakin ingin menghapusnya?')">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-success w-50" href="/acara">Kembali ke Daftar Acara</a>
    </div>
</div>
<?= $this->endSection();?>