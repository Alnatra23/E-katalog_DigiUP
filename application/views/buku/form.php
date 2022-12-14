<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h3>
    <?= validation_errors(); ?>
</h3>
<form method="post" action="<?= base_url('buku/save') ?>">
<input type="hidden" name="id" value="<?= isset($id) ? $id : '' ?>"/>
<div>
    <label></label>
    <div>
    <h3>Tambah/Ubah Buku</h3>
    </div>
</div>
<div class="row mb-3">
<label class="form-label">Judul</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="judul" id="judul" value="<?= $judul ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">ISBN</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="isbn" id="isbn" value="<?= $isbn ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Pengarang</label>
<div class="col-sm-6">
<input class="form-control" type="text" name="pengarang" id="pengarang" value="<?= $pengarang ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Jumlah Halaman</label>
<div class="col-sm-6">
<input class="form-control" type="number" name="jumlah_halaman" id="jumlah_halaman" value="<?= $jumlah_halaman ?>" required/>
</div>
</div>

<div class="row mb-3">
<label class="form-label">Sinopsis</label>
<div class="col-sm-6">
<textarea class="form-control" type="text" name="sinopsis" id="sinopsis">
<?= $sinopsis ?>
</textarea>
</div>
</div>
<div class="row mb-3">
<label class="form-label">Tanggal Rilis</label>
<div class="col-sm-6">
<input class="form-control" type="date" name="tanggal_rilis" id="tanggal_rilis" value="<?= $tanggal_rilis ?>" required/>
</div>
</div>

<div>
    <input class="btn btn-dark btn-sm" type="button" value="Cancel" onclick="history.back()" />
    <input class="btn btn-primary btn-sm" type="submit" value="Simpan" />
</div>

</form>