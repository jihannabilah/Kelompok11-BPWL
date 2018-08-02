<?php
$link = mysqli_connect("localhost", "root", "" , "chatbox");

$nama = $_GET['nama'];
$pesan = $_GET['pesan'];
date_default_timezone_set('Asia/Jakarta');
$waktu = date("H:i");
$akhir = $_GET['akhir'];

$json = '{"messages": {';
if($akhir == 0) {
    $nomor = mysqli_query($link, "select nomor from drzchat order by nomor desc limit 1");
    $n = mysqli_fetch_array($nomor);
    $no = $n['nomor'] + 1;
    $json .= '"pesan":[ {';
    $json .= '"id":"'.$no.'","nama":"Admin","teks":"Selamat datang di chatting room","waktu": "' .$waktu. '"}]';
    $masuk = mysqli_query($link, "INSERT INTO drzchat VALUES(null, 'Admin', '$nama bergabung dalam chat','$waktu')");
}else {
    if($pesan) {
        $masuk = mysqli_query($link, "INSERT INTO drzchat VALUES(null, '$nama', '$pesan', '$waktu')");
    }
    $query = mysqli_query($link, "SELECT * FROM drzchat WHERE nomor > $akhir ");
    $json .= '"pesan":[ ';
    while($x = mysqli_fetch_array($query)) {
        $json .= '{';
        $json .= '"id": "'. $x['nomor'] . '", "nama": "' . htmlspecialchars($x['nama']).'", "teks": "' . htmlspecialchars($x['pesan']). '", "waktu": "' . $x['waktu'] . '"},';
    }
    $json = substr($json,0,strlen($json)-1);
    $json .= ']';
}

$json .= '}}';
echo $json;
?>