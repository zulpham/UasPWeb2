<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Ubah Data Acara</h2>
            <form action="/acara/update/<?= $acara['id_acara'];?>" method="post" enctype="multipart/form-data">
                <?= csrf_field();?>
                <input type="hidden" name="nama_acara" value="<?= $acara['nama_acara'];?>">
                <input type="hidden" name="gambar_acaraLama" value="<?= $acara['gambar_acara'];?>">
                <div class="row mb-3">
                    <label for="nama_acara" class="col-sm-2 col-form-label">Nama Acara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_acara" name="nama_acara" autofocus value="<?= (old('nama_acara')) ? old('nama_acara') : $acara['nama_acara'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="audiens" class="col-sm-2 col-form-label">Audiens</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="audiens" name="audiens" autofocus value="<?= (old('audiens'))? old('audiens') : $acara['audiens']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tanggal_mulai" name="tanggal_mulai" autofocus value="<?= (old('tanggal_mulai'))? old('tanggal_mulai') : $acara['tanggal_mulai']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir" autofocus value="<?= (old('tanggal_berakhir'))? old('tanggal_berakhir') : $acara['tanggal_berakhir']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempat" name="tempat" autofocus value="<?= (old('tempat'))? old('tempat') : $acara['tempat']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="link_gmaps" class="col-sm-2 col-form-label">Link GMaps</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_gmaps" name="link_gmaps" autofocus value="<?= (old('link_gmaps'))? old('link_gmaps') : $acara['link_gmaps']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar_acara" class="col-sm-2 col-form-label">Gambar Acara</label>
                    <div class="col-sm-5">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" id="gambar_acara" name="gambar_acara" onchange="previewImg()">
                            <label  class="input-group-text" for="gambar_acara">Upload</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" autofocus><?= (old('deskripsi'))? old('deskripsi') : $acara['deskripsi']?></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>