<?php
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$indo = $_POST['Bindo'];
$ingg = $_POST['Bing'];
$mtka = $_POST['Mtk'];
$ipas = $_POST['ipas'];
$dkom = $_POST['komputer'] ;

$abnormal = false;
$tidaklulus = false;

if ($nama == "" || $nisn == "" || $indo == "" || $ingg == "" || $mtka == "" || $ipas == "" || $dkom == "") {
    echo "Data belum lengkap.";
    exit;
}

if ($indo < 0 || $indo > 100) {
    $hasil['indo'] = "ABNORMAL";
    $abnormal = true;
} elseif ($indo <= 73) {
    $hasil['indo'] = "TIDAK LULUS";
    $tidaklulus = true;
} else {
    $hasil['indo'] = "LULUS";
}

if ($ingg < 0 || $ingg > 100) {
    $hasil['ingg'] = "ABNORMAL";
    $abnormal = true;
} elseif ($ingg <= 73) {
    $hasil['ingg'] = "TIDAK LULUS";
    $tidaklulus = true;
} else {
    $hasil['ingg'] = "LULUS";
}

if ($mtka < 0 || $mtka > 100) {
    $hasil['mtka'] = "ABNORMAL";
    $abnormal = true;
} elseif ($mtka <= 70) {
    $hasil['mtka'] = "TIDAK LULUS";
    $tidaklulus = true;
} else {
    $hasil['mtka'] = "LULUS";
}

if ($ipas < 0 || $ipas > 100) {
    $hasil['ipas'] = "ABNORMAL";
    $abnormal = true;
} elseif ($ipas <= 75) {
    $hasil['ipas'] = "TIDAK LULUS";
    $tidaklulus = true;
} else {
    $hasil['ipas'] = "LULUS";
}

if ($dkom < 0 || $dkom > 100) {
    $hasil['dkom'] = "ABNORMAL";
    $abnormal = true;
} elseif ($dkom <= 75) {
    $hasil['dkom'] = "TIDAK LULUS";
    $tidaklulus = true;
} else {
    $hasil['dkom'] = "LULUS";
}

$rata = ($indo + $ingg + $mtka + $ipas + $dkom) / 5;

if ($abnormal) {
    $hasilRata = "ABNORMAL";
} elseif ($tidaklulus) {
    $hasilRata = "TIDAK LULUS";
} elseif ($rata >= 75) {
    $hasilRata = "LULUS";
} else {
    $hasilRata = "LULUS";
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
</head>
<body>
    <h1 align="center">HASIL</h1>
    <h2 align="center">DATA SISWA</h2>

    <center>
    <table border="1">
        <tr>
            <th>NAMA :</th>
            <th><?= $nama ?></th>
        </tr>
        <tr>
            <th>NISN :</th>
            <th><?= $nisn ?></th>
        </tr>
    </table>
    </center>
    
    <h2 align="center">NILAI</h2>
    
    <center>
    <table border="1">
        <tr bgcolor="grey">
            <th width="250" align="center">MATA PELAJARAN</th>
            <th width="70">NILAI</th>
            <th width="70">KKM</th>
            <th width="100">HASIL</th>
        </tr>

        <tr align="center">
            <td>BAHASA INDONESIA</td>
            <td><?= $indo ?></td>
            <td>73</td>
            <td><?= $hasil['indo'] ?></td>
        </tr>

        <tr align="center">
            <td>BAHASA INGGRIS</td>
            <td><?= $ingg ?></td>
            <td>73</td>
            <td><?= $hasil['ingg'] ?></td>
        </tr>

        <tr align="center">
            <td>MATEMATIKA</td>
            <td><?= $mtka ?></td>
            <td>70</td>
            <td><?= $hasil['mtka'] ?></td>

        </tr>

        <tr align="center">
            <td>IPAS</td>
            <td><?= $ipas ?></td>
            <td>75</td>
            <td><?= $hasil['ipas'] ?></td>
        </tr>

        <tr align="center">
            <td>DASAR-DASAR KOMPUTER</td>
            <td><?= $dkom ?></td>
            <td>75</td>
            <td><?= $hasil['dkom'] ?></td>
        </tr>

        <tr align="center" >
            <td bgcolor="lightgrey">RATA-RATA</td>
            <td><?= $rata ?></td>
            <td>75</td>
            <td><?= $hasilRata ?></td>
        </tr>
    </table>
</center>
</body>
</html>