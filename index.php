<?php 
// koneksi db
include 'koneksi.php';

// periksa jika gagal login akan menampilkan pesan error
if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
        echo "Email atau kata sandi salah!";
    }
}
?>
<!-- link css -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<body class="bg-primary bg-gradient">
    <div class="container" style="margin: 100px auto 0 auto">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <!-- link cek login -->
                        <form action="cek_login.php" method="post">
                            <form class="form-signin">
                                <div class="form-label-group">
                                <label for="inputEmail">Email address</label>
                                    <input type="email" id="inputEmail" name="email" class="form-control"
                                        placeholder="Email address" required autofocus>
                                </div>

                                <div class="form-label-group">
                                
                                    <label for="inputPassword">Password</label>
                                    <input type="password" id="inputPassword" class="form-control" name="password"
                                        placeholder="Password" required>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Sign
                                    in</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>