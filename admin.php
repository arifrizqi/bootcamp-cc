<?php 
session_start();
 include 'koneksi.php';
 
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}

if(isset($_GET['pesan'])){
    $pesan = $_GET['pesan'];
    if($pesan == "input"){
    echo "Data berhasil di input.";
    }else if($pesan == "update"){
    echo "Data berhasil di update.";
    }else if($pesan == "hapus"){
    echo "Data berhasil di hapus.";
    }
}
require_once 'inc/header.php';
?>

<div class="container">
    <h1 style="margin: 20px 0 20px 0;">Admin Page</h1>
    <p>Halo <b><?php echo $_SESSION['email']; ?></b> Anda telah login sebagai
        <b><?php echo $_SESSION['level']; ?></b>. <a href="logout.php"><button type="button"
                class="btn btn-danger btn-sm">Logout</button></a></a></p>
    <h1 style="margin: 50px 0 20px 0;">
        <center>Daftar Mahasiswa</center>
    </h1>
    <a href="tambah.php"><button type="button" class="btn btn-success btn-sm">Tambah Data</button></a>
    <table style="text-align: center;" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NPM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <?php
    // Tampilkan semua data
    $query = $koneksi->query("SELECT * FROM mahasiswa");

    $no = 1; // nomor urut
    while ($data = $query->fetch_assoc()) :
    ?>
        <tbody>
            <tr>
                <th scope="row"><?= $no++; ?></th>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['npm']; ?></td>
                <td><?= $data['alamat']; ?></td>
                <td>
                    <a href="view.php?id=<?= $data['id']; ?>"><button type="button"
                            class="btn btn-primary btn-sm">View</button></a>
                    <a href="edit.php?id=<?= $data['id']; ?>"><button type="button"
                            class="btn btn-warning btn-sm">Edit</button></a>
                    <a href="delete.php?id=<?= $data['id']; ?>"><button type="button"
                            class="btn btn-danger btn-sm">Delete</button></a>
                </td>
            </tr>
        </tbody>
        <?php
    endwhile;
    ?>
    </table>
</div>

<?php include 'inc/footer.php' ?>