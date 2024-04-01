    <style>
        

        h2 {
            text-align: center;
            color: #333;
            /* margin-top: 10px; */
        }

        form {
            background-color: #fff;
            width: 60%;
            margin: 0 auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="radio"],
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .submit a{
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
            
        }

       .submit a{
            background-color: #0056b3;

        }
    </style>
    <h2 color>Pendaftaran Mahasiswa Baru</h2>
    <form>
        <label for="nama">Nama :</label><br>
        <input type="text"></input><br><br>
        <label for="jk">Jenis Kelamin :</label><br>
        <input type="radio" id="lakilaki" name="jk" value="lakilaki">
        <label for="laki"> lakilaki</label><br>
        <input type="radio" id="perempuan" name="jk" value="perempuan">
        <label for="perempuan"> perempuan</label><br>
        <br>
        <label for="alamat"> Alamat :</label><br>
        <input type="text" id="alamat" name="alamat" placeholder="co: jl gresik 39"></input><br>
        <br><label for="Kota">Kota :</label>
        <select id="Kota" name="Kota">
        <option value="Surabaya" >Surabaya</option>
        <option value="gresik" >gresik</option>
        <option value="Sidoarjo" >Sidoarjo</option>
        <option value="other" >other</option>
        <br>
        </select>
        <br><br>
            <textarea name= "keterangan" rows="10" cols="30">Kami dengan ini Memberikan informasi terkait.......
            </textarea>
            <br>
  
            <div class = "submit">
            <a href="#">Submit</a>
            </div>
    </form>
