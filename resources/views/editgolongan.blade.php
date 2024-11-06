<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Golongan</title>
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

        h3 {
            color: #ecf0f1;
            font-size: 24px;
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
        input[type="number"] {
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
    <div class="form-container">
        <a href="/golongan">Kembali</a>
        <h3>Edit Data Golongan</h3>
        <form action="{{ route('golongan.update', $golongan->golongan_id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            
            <input type="hidden" name="id" value="{{ $golongan->golongan_id }}">
            
            <label>Nama Golongan:</label>
            <input type="text" name="golongan_nama" value="{{ $golongan->golongan_nama }}" required>
            
            <label>Gaji Pokok:</label>
            <input type="number" name="gaji_pokok" value="{{ $golongan->gaji_pokok }}" required>
            
            <label>Tunjangan Keluarga:</label>
            <input type="number" name="tunjangan_keluarga" value="{{ $golongan->tunjangan_keluarga }}" required>
            
            <label>Tunjangan Transport:</label>
            <input type="number" name="tunjangan_transport" value="{{ $golongan->tunjangan_transport }}" required>
            
            <label>Tunjangan Makan:</label>
            <input type="number" name="tunjangan_makan" value="{{ $golongan->tunjangan_makan }}" required>
            
            <input type="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>
