<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $npm = $_POST['npm'];
  $alamat = $_POST['alamat'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $koneksi->query("UPDATE mahasiswa SET nama = '$nama', npm = '$npm', alamat = '$alamat' WHERE id = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data mahasiswa berhasil diubah'); window.location.href='admin.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data mahasiswa gagal diubah'); window.location.href='edit.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: admin.php');
}