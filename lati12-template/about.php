<style>
    .container {
        max-width: 800px;
        margin: 10px auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        font-family: Arial, sans-serif;

    }

    fieldset {
        border: 2px solid #007bff;
        border-radius: 10px;
        padding: 20px;
    }

    .st {
        width: 100%;
        border-collapse: collapse;
    }

    .st th,
    .st td {
        padding: 10px;
        border: 1px solid #ddd;
    }

    .st th {
        background-color: #007bff;
        /* Warna latar belakang header */
        color: #fff;
        /* Warna teks header */
    }

    .st tr:nth-child(even) {
        background-color: #f2f2f2;
        /* Warna latar belakang baris genap */
    }

    .st tr:hover {
        background-color: #ddd;
        /* Warna latar belakang saat dihover */
    }

    #judul {
        text-align: center;
        font-size: 20px;
        font-weight: bold;
    }
</style>



    <div class="container">
        <fieldset style="width: 100%;">


            <table class="st" align="center">
                <thead>
                    <tr>
                        <th colspan="3">Daftar Riwayat Pendidikan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="std">Nama</td>
                        <td id="std">Ahmad Jazim Irsyaduddin</td>

                        <td id="std" rowspan="3"><img src="https://avatars.githubusercontent.com/u/105960942?v=4" alt=""
                                width="80%"></td>
                    </tr>
                    <tr>
                        <td id="std">Agama</td>
                        <td id="std">Islam</td>
                    </tr>
                    <tr>
                        <td id="std">Tempat/Tgl.Lahir</td>
                        <td id="std">Surabaya. 26 April 2001</td>
                    </tr>

                </tbody>
            </table>

            <table class="st">
                <tbody>
                    <tr>
                        <td colspan="3" class="st" id="judul"><b>Riwayat Pendidikan</b></td>
                    </tr>
                    <tr>
                        <td class="st">Jenjang Pendidikan</td>
                        <td class="st">Periode Tahun</td>
                        <td class="st">Nama Instansi / Pendidikan</td>
                    </tr>
                    <tr>
                        <td class="st">SD</td>
                        <td class="st">2007 - 2013</td>
                        <td class="st">SD Muhammdiyah 11 Surabaya</td>
                    </tr>
                    <tr>
                        <td class="st">SMP</td>
                        <td class="st">2013 - 2016</td>
                        <td class="st">SMP Negeri 7 Surabaya</td>
                    </tr>
                    <tr>
                        <td class="st">SMA</td>
                        <td class="st">2016 - 2019</td>
                        <td class="st">SMA Negeri 8 Surabaya</td>
                    </tr>
                    <tr>
                        <td class="st">S1 (Strata-1)</td>
                        <td class="st">2021 - Sekarang</td>
                        <td class="st">Universitas Dinamika</td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
