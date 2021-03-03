<?php include 'inc/header.php';?>

<div class="container">
  <h1 style="margin: 20px 0 20px 0;"><b>Tambah Mahasiswa</b></h1>
  <form action="tambah_aksi.php" method="post">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" name="nama" class="form-control" id="nama" aria-describedby="textHelp" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">NPM</label>
      <input type="number" name="npm" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="textHelp" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>

<?php include 'inc/footer.php';?>