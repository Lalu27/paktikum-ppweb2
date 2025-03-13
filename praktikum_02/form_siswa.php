<?php
$proses = $_POST['proses'];
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];

$nilai_akhir = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

if ($nilai_akhir > 55) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

if ($nilai_akhir >= 0 && $nilai_akhir <= 35) {
    $grade = "E";
} elseif ($nilai_akhir >= 36 && $nilai_akhir <= 55) {
    $grade = "D";
} elseif ($nilai_akhir >= 56 && $nilai_akhir <= 69) {
    $grade = "C";
} elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
    $grade = "B";
} elseif ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
    $grade = "A";
} else {
    $grade = "I";
}

switch ($grade) {
    case "E":
        $predikat = "Sangat Kurang";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    default:
        $predikat = "Tidak Ada";
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Penilaian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h3>Hasil Penilaian</h3>
        <hr>
        <p>Proses : <?= $proses ?></p>
        <p>Nama : <?= $nama_siswa ?></p>
        <p>Mata Kuliah : <?= $mata_kuliah ?></p>
        <p>Nilai UTS : <?= $nilai_uts ?></p>
        <p>Nilai UAS : <?= $nilai_uas ?></p>
        <p>Nilai Tugas : <?= $nilai_tugas ?></p>
        <p>Nilai Akhir : <?= number_format($nilai_akhir, 2) ?></p>
        <p>Status : <?= $status ?></p>
        <p>Grade : <?= $grade ?></p>
        <p>Predikat : <?= $predikat ?></p>
    </div>
</body>

</html>