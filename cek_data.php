<?php
date_default_timezone_set('Asia/Jakarta');
if (isset($_POST['kirim']))
{
   $nama        =$_POST['nama'];
   $tgl_lahir   =$_POST['tgl_lahir'];
   $cek_lahir   =(date('m-d', strtotime($tgl_lahir)));
} elseif (empty($nama)){
    header("Location:index.php?data=kosong");
} elseif (empty($tgl_lahir)){
    header("Location:index.php?data=kosong");
}
$tgl_ini    = date('m-d');

if ($tgl_ini == $cek_lahir){
    // echo "Selamat Ulang tahun!!";
}else{
    header("Location:index.php?nama=$nama&tgl=$tgl_lahir");
}
?>