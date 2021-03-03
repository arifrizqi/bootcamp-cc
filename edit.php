<?php

include 'koneksi.php';
include 'inc/header.php';
// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q = $koneksi->query("SELECT * FROM mahasiswa WHERE id = '$id'");

  foreach ($q as $dt) :
  ?>

<div class="container">
  <h1 style="margin: 20px 0 20px 0;"><b>View Mahasiswa</b></h1>
  <form action="edit_aksi.php" method="post">
    <div class="mb3">
      <input type="hidden" name="id" value="<?= $dt['id'] ?>">
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" aria-describedby="textHelp"
        value="<?= $dt['nama'] ?>" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">NPM</label>
      <input type="number" name="npm" class="form-control" id="exampleInputPassword1" value="<?= $dt['npm'] ?>"
        required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="textHelp"
        value="<?= $dt['alamat'] ?>" required>
    </div>
    <button type="submit" class="btn btn-warning">Save</button>
  </form>
</div>

<?php
  endforeach;
  include 'inc/header.php';
}
