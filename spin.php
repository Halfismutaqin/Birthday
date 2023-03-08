<?php
// include 'cek_data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!---------------  CSS  --------------------->
    <link rel="stylesheet" href="assets/styles/spin.css">
    <!---------------  Font Aewsome  --------------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---------------  Chart JS  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <!---------------  Chart JS Plugin  --------------------->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"></script>
</head>

<body>
    <h1>Hai.. <?= @$_GET['nama']; ?></h1>
    <div class="container">
        <div class="card" >
            <br>
            <h2 class="mb-0">Silahkan input hadiahmu</h2>
            <hr>
            <div class="p-3">
                <h4>Hadiah 1:</h4>
                <input class="form-control" type="text" id="gift1">
            </div>
            <div class="p-3">
                <h4>Hadiah 2:</h4>
                <input class="form-control" type="text" id="gift2">
            </div>
            <div class="p-3">
                <h4>Hadiah 3:</h4>
                <input class="form-control" type="text" id="gift3">
            </div>
            <br>
            <div class="text-center" id="tampilan">Hadiah yang kamu pilih :</div>
        </div>
        <div class="row">
            <div class="col text-center">
            <button onclick="kirim()" class="btn btn-primary">Oke</button>
            </div>
        </div>
        <br>
        <hr width="40%">
        <div class="wheel_box">
            <canvas id="spinWheel"></canvas>
            <button id="spin_btn">Spin</button>
            <i class="fa-solid fa-location-arrow"></i>
        </div>
        <div id="text">
            <p>Semoga Beruntung :)</p>
        </div>
    </div>
    <!---------------  SCRIPT  --------------------->
    <script src="assets/script/spin.js"></script>
</body>

</html>