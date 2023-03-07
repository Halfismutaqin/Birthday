<?php
date_default_timezone_set('Asia/Jakarta');
// $tgl_ini    = date('m-d');
// echo $tgl_ini;
    if (@$_GET['data']=="kosong"){
        $alert =  
        '<div class="alert alert-danger text-center" role="alert">
        Maaf data tidak boleh kosong!
        </div>';
    }
    if (@$_GET['nama']!=""){
        $alert =  
        '<div class="alert alert-warning text-center" role="alert">
        Hii... Selamat Datang '.$_GET['nama'].'
        </div>';
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hay...Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="assets/style.css"> -->
</head>

<style>
    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }
</style>

<body>
    <div class="row">
        <?= @$alert ?>
        <div class="col-3"></div>
        <div class="col-6">
    <div class="container-sm  py-5">
        <div class="card h-100 rounded-3 gradient-custom-2">
            <br>
            <div class="container py-2 h-100">
                <form action="ultah.php" method="post">
                    <div class="row text-center">
                        <strong>
                            <h3 class="four text-white">
                                Hi... Selamat datang, aku punya sesuatu untukmu !!!
                            </h3>
                        </strong>
                        <hr width="90%"><br>
                    </div>
                    <div class="row text-center">
                        <div class="col-3 text-start text-white">
                            <h5><label for="">&nbsp; Nama </label></h5><br>
                        </div>
                        <div class="col-9">
                            <input type="text" name="nama" class="form-control" placeholder="Siapa Namamu" required>
                        </div>

                        <div class="col-3 text-start text-white">
                            <h5><label for="">&nbsp; Tgl Lahir </label></h5><br>
                        </div>
                        <div class="col-9">
                            <input type="Date" name="tgl_lahir" class="form-control" required>
                        </div>
                    </div>
                    <div class="col text-center">
                        <button type="submit" name="kirim" class="btn btn-primary">Oke</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
        </div>
        <div class="col-3"></div>
    </div>
</body>
<!-- <script src="assets/main.js"></script> -->

</html>