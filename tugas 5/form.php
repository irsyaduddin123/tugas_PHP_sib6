<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F0EBE3;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #E4DCCF;
            padding: 20px;
            border-radius: 5px ;
            box-shadow: 0px 0px 10px #576F72;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button[type="submit"]:hover {
            background-color: #576F72;
        }
    </style>
</head>

<body>
    <h1>Form Nilai Ujian</h1>


    <form action="table.php" method="POST">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label>
            <div class="col-8">
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="prodi" class="col-4 col-form-label">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" class="custom-select">
                    <option value="">---------- Pilih Prodi ----------</option>
                    <option value="Sistem Informasi">S1 Sistem Informasi</option>
                    <option value="Teknis Komputer">S1 Teknik Komputer</option>
                    <option value="d3">D3 Sistem Informasi</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
            <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="">---------- Pilih Matkul ----------</option>
                    <option value="Pemrograman WEB Dasar">Web Dasar</option>
                    <option value="Pembuatan Robot">Robotik</option>
                    <option value="Pemrograman Mobile">Android</option>
                    <option value="Basis Data SQL">SQL</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="text" class="col-4 col-form-label">Nilai</label>
            <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control">
            </div>
        </div>
        
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</body>

</html>