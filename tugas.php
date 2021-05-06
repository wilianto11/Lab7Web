<title>OUTPUT</title>
<h2>Form Output</h2>
<?php
    $nama = $_POST['nama'];
    echo  "Nama : <b>".$nama."</b>" ;
    ?> <br>
<?php 
    $tgl_lahir = $_POST['tgl_lahir'];
    $rubah = date_format(date_create($tgl_lahir), 'Y');
    $thn_skrg = date('Y');
    $umur = $thn_skrg - $rubah;
    echo 'Tanggal lahir : <b>'.$tgl_lahir.'</b>, Umur : <b>'.$umur.'</b> tahun';
    ?><br>
<?php
    $pekerjaan = $_POST['pekerjaan'];
    if($pekerjaan =='Android Developer') {
        $gaji = 5000000;
    }
    elseif($pekerjaan =='IOS Developer') {
        $gaji = 6000000;
    }
    elseif($pekerjaan =='Desainer Grafis') {
        $gaji = 7000000;
    }
    elseif($pekerjaan =='Web Desainer') {
        $gaji = 7500000;
    }
    echo "Pekerjaan :<b> ".$pekerjaan."</b> , Gaji : <b>Rp.".$gaji."</b>";
    ?>