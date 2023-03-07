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


    <style>
        text {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 11px;
            pointer-events: none;
        }

        #chart {
            position: relative;
            width: 500px;
            height: 500px;
            top: 0;
            left: 0;
        }
    </style>
</head>
<?php
if (@$_GET['nama']!=""){
        $alert =  
        '<div class="alert alert-warning text-center" role="alert">
        Hii... Selamat Datang '.$_GET['nama'].'
        </div>';
    }
    ?>
<body>
    <div class="container-sm text-center">
        <br>
        <h1>Haii.. <?= @$_GET['nama'] ?></h1>
        <hr>
        <br>
        <div id="chart">Silahkan Pilih Hadiahmu.. :)</div>
        <div id="question">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>

</body>
<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="application/javascript" src="assets/script/spin.js"></script>

</html>