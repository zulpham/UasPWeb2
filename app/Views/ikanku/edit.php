<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3">Form Ubah Data Ikan</h2>
            <form action="/ikanku/update/<?= $ikan['id_ikan'];?>" method="post" enctype="multipart/form-data">
                <?= csrf_field();?>
                <input type="hidden" name="nama_ikan" value="<?= $ikan['nama_ikan'];?>">
                <input type="hidden" name="gambar_ikanLama" value="<?= $ikan['gambar_ikan'];?>">
                <div class="row mb-3">
                    <label for="nama_ikan" class="col-sm-2 col-form-label">Nama Ikan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_ikan" name="nama_ikan" autofocus value="<?= (old('nama_ikan')) ? old('nama_ikan') : $ikan['nama_ikan'] ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_latin" class="col-sm-2 col-form-label">Nama Latin</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_latin" name="nama_latin" value="<?= (old('nama_latin'))? old('nama_latin') : $ikan['nama_latin']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="habitat" class="col-sm-2 col-form-label">Habitat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="habitat" name="habitat" value="<?= (old('habitat'))? old('habitat') : $ikan['habitat']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="diet" class="col-sm-2 col-form-label">Diet</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="diet" name="diet" value="<?= (old('diet'))? old('diet') : $ikan['diet']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="asal" class="col-sm-2 col-form-label">Asal</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="asal" name="asal" value="<?= (old('asal'))? old('asal') : $ikan['asal']?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="gambar_ikan" class="col-sm-2 col-form-label">Gambar Ikan</label>
                    <div class="col-sm-5">
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="gambar_ikan" name="gambar_ikan" onchange="previewImg()">
                        <label  class="input-group-text" for="gambar_ikan">Upload</label>
                    </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection();?>