<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gaji</title>
    <style>
        /* Umum */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #292b2b; /* Warna latar belakang gelap */
            color: #ecf0f1; /* Warna teks yang lebih terang */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding: 20px;
        }

        h2 {
            color: #ecf0f1;
            font-size: 28px;
            margin-bottom: 20px;
        }

        /* Navbar */
        nav {
            background-color: #333; /* Warna background navbar yang gelap */
            padding: 10px 0;
            text-align: center;
            margin-bottom: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #bdc3c7; /* Warna saat hover */
        }

        /* Form Container */
        .form-container {
            background-color: #2c3e50; /* Warna latar belakang form */
            padding: 20px;
            border-radius: 12px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1abc9c;
            color: #ecf0f1;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }

        .form-container a:hover {
            background-color: #16a085;
        }

        /* Form Input */
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            color: #ecf0f1;
            font-size: 16px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            padding: 10px;
            border: 1px solid #34495e;
            border-radius: 5px;
            background-color: #fff;
            color: #333;
            font-size: 16px;
        }

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #2a4e5c;
            color: #ecf0f1;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #5e8a9c;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('golongan') }}">Golongan</a></li>
            <li><a href="{{ url('lembur') }}">Lembur</a></li>
            <li><a href="{{ url('pegawai') }}">Pegawai</a></li>
            <li><a href="{{ url('gaji') }}">Gaji</a></li>
        </ul>
    </nav>

    <div class="form-container">
        <a href="/gaji">Kembali</a>
        <h2>Tambah Gaji Baru</h2>
        <form action="/gaji/store" method="post">
            {{ csrf_field() }}
            <label for="pegawai_id">ID Pegawai:</label>
            <input type="number" id="pegawai_id" name="pegawai_id" required="required">

            <label for="jumlah_gaji">Jumlah Gaji:</label>
            <input type="number" id="jumlah_gaji" name="jumlah_gaji" required="required">

            <label for="jumlah_lembur">Jumlah Lembur:</label>
            <input type="number" id="jumlah_lembur" name="jumlah_lembur" required="required">
            
            <label for="potongan">Potongan:</label>
            <input type="number" id="potongan" name="potongan" required="required">

            <label for="gaji_diterima">Gaji Diterima:</label>
            <input type="number" id="gaji_diterima" name="gaji_diterima" required="required">

            <label for="tanggal_gaji">Tanggal Gaji:</label>
            <input type="date" id="tanggal_gaji" name="tanggal_gaji" required="required">

            <input type="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>
