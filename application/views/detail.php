<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>Detail Buku</h1>
<dl>
  <dt>ISBN</dt>
  <dd><?= $isbn ?></dd>

  <dt>Judul</dt>
  <dd><?= $judul ?></dd>

  <dt>Pengarang</dt>
  <dd><?= $pengarang ?></dd>

  <dt>Tanggal Liris</dt>
  <dd><?= $tanggal_rilis ?></dd>

  <dt>Jumlah Halaman</dt>
  <dd><?= $jumlah_halaman ?></dd>

  <dt>Sinopsis</dt>
  <dd><?= $sinopsis ?></dd>

  <dt>Gambar</dt>
  <dd><img src="<?= empty($gambar) ? BASE_ASSETS . 'uploads/noimage.jpg' : BASE_ASSETS . 'uploads/' . $gambar ?>" class="card-img-top"></dd>
</dl>

<a class="btn btn-primary btn-sm" href='#' onclick="history.back()">Back</a>