<?php
    include APPPATH . 'views/fragment/header.php'; 
    include APPPATH . 'views/fragment/menu.php' ;
?>
<h1>List Buku</h1>
<a class="btn btn-success btn-sm" href="<?= base_url("buku/form")?>">Tambah</a>
<table class="table table-striped"> 
    <tr>
        <th>Pengarang</th>
        <th>Judul</th>
        <th>ISBN</th>
        <th>Sinopsis</th>
        <th>Jumlah Halaman</th>
        <th>Aksi</th>
    </tr>
    <?php
    foreach($records as $idx => $data){
        ?>
        <tr>
            <td><?= $data['pengarang'] ?></td>
            <td><?= $data['judul'] ?></td>
            <td><?= $data['isbn'] ?></td>
            <td><?= $data['sinopsis'] ?></td>
            <td><?= $data['jumlah_halaman'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?= base_url("buku/detail/{$data['id']}")?>">Detail</a>
                <a class="btn btn-dark btn-sm" href="<?= base_url("buku/form/{$data['id']}")?>">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="return confirm('menghapus data?')" href="<?= base_url("buku/hapus/{$data['id']}")?>">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
include APPPATH . 'views/fragment/footer.php' ;
?>