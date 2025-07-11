<?= $this->extend('layout/template'); ?>
<?= $this->section('content');?>
<div class="container">
    <div class="row">
        <div class="col" style="align-items: center;">
            <h2 class="my-3">Form Tambah Data Acara</h2>
            <form action="/acara/save" method="post" enctype="multipart/form-data">
                <?= csrf_field();?>
                <div class="row mb-3">
                    <label for="nama_acara" class="col-sm-2 col-form-label">Nama Acara</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_acara" name="nama_acara" autofocus>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="audiens" class="col-sm-2 col-form-label">Audiens</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="audiens" name="audiens">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tanggal_berakhir" class="col-sm-2 col-form-label">Tanggal Berakhir</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="tanggal_berakhir" name="tanggal_berakhir">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tempat" name="tempat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="link_gmaps" class="col-sm-2 col-form-label">Link GMaps</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="link_gmaps" name="link_gmaps">
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
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>