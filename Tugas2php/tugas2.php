<!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Pembelian</h2>
        <?php
        // Inisialisasi variabel
        $namaPelanggan = isset($_POST['pelanggan']) ? $_POST['pelanggan'] : "";
        $produkPilihan = isset($_POST['select']) ? $_POST['select'] : "";
        $jumlahBeli = isset($_POST['beli']) ? $_POST['beli'] : "";
        $totalBelanja = "";
        $diskon = "";
        $ppn = "";
        $hargaBersih = "";

        // Periksa apakah form telah dikirim
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Fungsi untuk menghitung total belanja
            function hitungTotalBelanja($produk, $jumlahBeli)
            {
                // Inisialisasi harga satuan
                $hargaSatuan = 0;
                
                // Tentukan harga satuan sesuai produk
                switch ($produk) {
                    case 'TV':
                        $hargaSatuan = 2000000;
                        break;
                    case 'Kulkas':
                        $hargaSatuan = 3000000;
                        break;
                    case 'Mesin Cuci':
                        $hargaSatuan = 1500000;
                        break;
                    case 'AC':
                        $hargaSatuan = 4000000;
                        break;
                    default:
                        // Jika tidak ada produk dipilih, kembalikan 0
                        return 0;
                }
                
                // Hitung total belanja
                $totalBelanja = $hargaSatuan * $jumlahBeli;
                
                return $totalBelanja;
            }

            // Ambil nilai dari form
            $namaPelanggan = $_POST['pelanggan'];
            $produkPilihan = $_POST['select'];
            $jumlahBeli = $_POST['beli'];

            // Hitung total belanja
            $totalBelanja = hitungTotalBelanja($produkPilihan, $jumlahBeli);

            // Hitung diskon
            $diskon = $totalBelanja * 0.2;

            // Hitung PPN
            $ppn = ($totalBelanja - $diskon) * 0.1;

            // Hitung harga bersih
            $hargaBersih = ($totalBelanja - $diskon) + $ppn;

            // // Set nilai-nilai formulir ke string kosong
            // $namaPelanggan = "";
            // $produkPilihan = "";
            // $jumlahBeli = "";
        }
        ?>

        <!-- Formulir -->
        <form method="post">
            <div class="form-group row">
                <label for="pelanggan" class="col-4 col-form-label">Nama Pelanggan</label> 
                <div class="col-8">
                    <input id="pelanggan" name="pelanggan" type="text" class="form-control" value="<?php echo $namaPelanggan; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Produk Pilihan</label> 
                <div class="col-8">
                    <select id="select" name="select" class="custom-select">
                        <option value="">---- Pilih Produk ----</option>
                        <option value="TV">TV</option>
                        <option value="Kulkas">Kulkas</option>
                        <option value="Mesin Cuci">Mesin Cuci</option>
                        <option value="AC">AC</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="beli" class="col-4 col-form-label">Jumlah Beli</label> 
                <div class="col-8">
                    <input id="beli" name="beli" type="text" class="form-control" value="<?php echo $jumlahBeli; ?>">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
        // Jika form telah dikirim, tampilkan hasil pembelian
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h2>Hasil Pembelian</h2>";
            echo "<p>Nama Pelanggan: $namaPelanggan</p>";
            echo "<p>Produk Pilihan: $produkPilihan</p>";
            echo "<p>Jumlah Beli: $jumlahBeli</p>";
            echo "<p>Total Belanja: " . number_format($totalBelanja, 2) . "</p>";
            echo "<p>Diskon 20%: " . number_format($diskon, 2) . "</p>";
            echo "<p>PPN 10%: " . number_format($ppn, 2) . "</p>";
            echo "<p>Harga Bersih: " . number_format($hargaBersih, 2) . "</p>";
        }
        ?>
    </div>
</body>
</html>
