<?php 

include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$npm = $_POST['npm'];
$alamat = $_POST['alamat'];
 
// menginput data ke database
$q = mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$npm','$alamat')");
 
if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data Mahasiswa berhasil ditambahkan'); window.location.href='admin.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data Mahasiswa gagal ditambahkan'); window.location.href='tambah.php'</script>";
  };

?>
