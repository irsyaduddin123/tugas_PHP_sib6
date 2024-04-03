<?php
require_once 'siswa.php';

// ambil data inputam berupa post karena method di formnya post
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$nim = $_POST['nim'];
$prodi = $_POST['prodi'];
$matkul = $_POST['matkul'];

// membuat clas baro
$siswa_baru = new Siswa($nama, $nilai, $nim, $prodi, $matkul);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Result</title>
    <style>
        body {
            background-color: #ECE3CE;
        }

        /* Style for button container */
        .button-container {
            margin-top: 20px;
            text-align: center;
        }

        /* Style for button */
        .button-container button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .button-container button:hover {
            background-color: #45a049;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th,
        td {
            border: 2px solid #3A4D39;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #739072;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Hasil Input Data Siswa</h2>
    <table>
        <thead>
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Kuliah</th>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Predikat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $siswa_baru->nim; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->nama; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->prodi; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->matkul; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->nilai; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->grade; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->predikat; ?>
                </td>
                <td>
                    <?php echo $siswa_baru->status; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="button-container">
        <button onclick="window.history.back()">Kembali</button>
    </div>

</body>

</html>