<?php

$data = [
    ["Nama" => "Nashir Fuad", "NIM" => "0001", "Nilai" => 90],
    ["Nama" => "Ahmad Jazim", "NIM" => "0002", "Nilai" => 95],
    ["Nama" => "Sunawawi", "NIM" => "0003", "Nilai" => 80],
    ["Nama" => "Bhatito Sharoni", "NIM" => "0004", "Nilai" => 95],
    ["Nama" => "Krisna Gardiawan", "NIM" => "0005", "Nilai" => 75],
    ["Nama" => "Annafi Fakhruddin", "NIM" => "0006", "Nilai" => 85],
    ["Nama" => "Arif Hermawan", "NIM" => "0007", "Nilai" => 75],
    ["Nama" => "Ihsan Tremor", "NIM" => "0008", "Nilai" => 60],
    ["Nama" => "Anggie Tri W", "NIM" => "0009", "Nilai" => 90],
    ["Nama" => "Rendy Orton", "NIM" => "0010", "Nilai" => 85],
    ["Nama" => "Rizky Chendi", "NIM" => "0011", "Nilai" => 70],
    ["Nama" => "Raffi Ardhani", "NIM" => "0012", "Nilai" => 90]
];


// deklarasi nama judul pada tabel header
$header = ['No', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Table Mahasiswa</title>
    <style>
        body {
            background-color: #F8F6E3;
        }

        #table-container {
            margin: 0 auto;
            width: 50%;

        }

        h2 {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #333;
            text-transform: uppercase;

        }

        table {
            border-collapse: collapse;
            width: 100%;
            border: 2px solid #7AA2E3;

        }

        td {
            text-align: center;
        }

        th,
        td {

            padding: 8px;
            border: 1px solid #7AA2E3;
        }

        th {
            background-color: #97E7E1;
        }

        /* 
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        */
        tr {
            background-color: #F8F6E3;
        }

        tr:hover {
            background-color: #6AD4DD;
        }

        .bold-text {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div id="table-container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table>
            <thead>
                <tr>

                    <?php
                    foreach ($header as $judul) { ?>
                        <th>
                            <?= $judul ?>
                        </th>

                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $isi) {
                    // menentukan keterangan menggunakan ternary
                    $ket = ($isi["Nilai"] > 65) ? "Lulus" : "Gagal";

                    //memnentukan Grade menggunakan if
                    if ($isi["Nilai"] >= 90) {
                        $grade = "A";
                    } elseif ($isi["Nilai"] >= 75 && $isi["Nilai"] < 90) {
                        $grade = "B";
                    } elseif ($isi["Nilai"] >= 65 && $isi["Nilai"] < 75) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    // menentukan predikat berdasarkan hasil dari grade menggunakan switch case
                    switch (true) {
                        case $grade == 'A':
                            $predikat = "Memuaskan";
                            break;
                        case $grade == 'B':
                            $predikat = "Bagus";
                            break;
                        case $grade == 'C':
                            $predikat = "Kurang";
                            break;
                        case $grade == 'D':
                            $predikat = "Buruk";
                            break;
                    }

                    $jumlahdata = array_column($data, 'Nilai');
                    $rata2 = array_sum($jumlahdata) / count($jumlahdata);
                    $Ntinggi = max($jumlahdata);
                    $Nrendah = min($jumlahdata);
                    $jmlhmhs = count($data);
                    $jmlNtot = array_sum($jumlahdata);

                    $foot = [
                        'Nilai Tertinggi' => $Ntinggi,
                        'Nilai Terendah' => $Nrendah,
                        'Nilai Rata-Rata' => $rata2,
                        'Jumlah Mahasiswa' => $jmlhmhs,
                        'Jumlah keseluruhan Nilai' => $jmlNtot
                    ];

                    ?>
                    <tr>
                        <td>
                            <?= $no++ ?>
                        </td>
                        <td>
                            <?= $isi['Nama'] ?>
                        </td>
                        <td>
                            <?= $isi['NIM'] ?>
                        </td>
                        <td>
                            <?= $isi['Nilai'] ?>
                        </td>
                        <td>
                            <?= $ket ?>
                        </td>
                        <td>
                            <?= $grade ?>
                        </td>
                        <td class="bold-text">
                            <?= $predikat ?>
                        </td>

                    </tr>
                <?php } ?>
            </tbody>
            <tfoot>
                <?php
                foreach ($foot as $lbl => $hasil) {
                    ?>
                    <tr>
                        <th colspan="3" align="right">
                            <?= $lbl ?>
                        </th>
                        <th colspan="5">
                            <?= $hasil ?>
                        </th>
                    </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>

</body>

</html>