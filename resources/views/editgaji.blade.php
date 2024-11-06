<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Gaji</title>
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

        h1 {
            color: #ecf0f1;
            font-size: 28px;
            margin-bottom: 20px;
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

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            color: #ecf0f1;
            font-size: 16px;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
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
        <h1>Edit Data Gaji</h1>
        <a href="/gaji">Kembali</a>
        <br/><br/>
        <form action="{{ route('gaji.update', $gaji->gaji_id) }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $gaji->gaji_id }}">
            
            <div class="form-group">
                <label for="pegawai_id">ID Pegawai</label>
                <input type="text" id="pegawai_id" name="pegawai_id" value="{{ $gaji->pegawai_id }}" required>
            </div>

            <div class="form-group">
                <label for="jumlah_gaji">Jumlah Gaji</label>
                <input type="number" id="jumlah_gaji" name="jumlah_gaji" value="{{ $gaji->jumlah_gaji }}" required>
            </div>

            <div class="form-group">
                <label for="jumlah_lembur">Jumlah Lembur</label>
                <input type="number" id="jumlah_lembur" name="jumlah_lembur" value="{{ $gaji->jumlah_lembur }}" required>
            </div>

            <div class="form-group">
                <label for="potongan">Potongan</label>
                <input type="number" id="potongan" name="potongan" value="{{ $gaji->potongan }}" required>
            </div>

            <div class="form-group">
                <label for="gaji_diterima">Gaji Diterima</label>
                <input type="number" id="gaji_diterima" name="gaji_diterima" value="{{ $gaji->gaji_diterima }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal_gaji">Tanggal Gaji</label>
                <input type="date" id="tanggal_gaji" name="tanggal_gaji" value="{{ $gaji->tanggal_gaji }}" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Update Data">
            </div>
        </form>
    </div>
</body>
</html>
