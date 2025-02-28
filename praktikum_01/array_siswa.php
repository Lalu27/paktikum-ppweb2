<?php
    $ns1 = ["id" => 1, "nim" => "123456", "uas" => 80, "uts" => 77, "tugas" => 92];
    $ns2 = ["id" => 2, "nim" => "123435", "uas" => 84, "uts" => 70, "tugas" => 93];
    $ns3 = ["id" => 3, "nim" => "129753", "uas" => 86, "uts" => 72, "tugas" => 97];
    $ns4 = ["id" => 4, "nim" => "123012", "uas" => 81, "uts" => 75, "tugas" => 91];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
</head>
<body>
    <h3>Daftar Nilai Siswa</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>UAS</th>
                <th>UTS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uas'] + $ns['uts'] + $ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '</tr>';
                $nomor++;
                }
            ?>
        </tbody>
    </table>
</body>
</html>