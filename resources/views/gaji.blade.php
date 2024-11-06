<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Gaji Pegawai</title>
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
            color: #333;
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Dashboard */
        .sidebar {
            width: 250px;
            background-color: #2c3e50; /* Warna tema gelap modern */
            padding: 20px;
            color: #ecf0f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar h2 {
            color: #fff;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .sidebar a:hover {
            background-color: #1abc9c; /* Efek hover untuk link sidebar */
        }

        /* Konten Utama */
        .content {
            margin-left: 250px; /* Menggeser konten utama untuk memberikan ruang untuk sidebar */
            padding: 20px;
            width: calc(100% - 250px);
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
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #f0f0f0; /* Warna saat hover */
        }

        /* Tabel Container */
        .table-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #2c3e50; /* Latar belakang tabel */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Judul Tabel */
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #fff;
        }

        /* Tombol Tambah */
        .btn-add {
            display: inline-block;
            padding: 10px 20px;
            background-color: #2a4e5c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            float: right;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-add:hover {
            background-color: #5e8a9c;
        }

        /* Tabel */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        /* Header Tabel */
        table th {
            background-color: #333;
            color: #fff;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            text-transform: uppercase;
            border: 1px solid #dee2e6;
        }

        /* Sel Tabel */
        table td {
            padding: 12px;
            border: 1px solid #dee2e6;
            font-weight: bold;
            color: #1abc9c;
        }

        /* Baris Ganjil dan Genap */
        table tr:nth-child(even) {
            background-color: #e0e0e0; /* Abu agak muda untuk baris genap */
        }

        table tr:nth-child(odd) {
            background-color: #f9f9f9; /* Putih agak tua untuk baris ganjil */
        }

        /* Hover Effect */
        table tr:hover {
            background-color: #d4d4d4; /* Efek hover ringan */
        }

        /* Tombol Edit dan Hapus */
        /* .btn-edit {
            color: #4caf50;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #e7f4e4;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-edit:hover {
            background-color: #c8e6c9;
        }

        .btn-delete {
            color: #f44336;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 10px;
            background-color: #fce4e4;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn-delete:hover {
            background-color: #ffcdd2;
        } */

        /* Background Bintang */
        .stars {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120%;
            transform: rotate(-45deg);
            pointer-events: none;
        }

      

    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Dashboard</h2>
        <a href="{{ url('home') }}">Home</a>
        <a href="{{ url('golongan') }}">Golongan</a>
        <a href="{{ url('lembur') }}">Lembur</a>
        <a href="{{ url('pegawai') }}">Pegawai</a>
        <a href="{{ url('gaji') }}">Gaji</a>
    </div>

    <div class="content">
        <nav>
            <ul>
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a href="{{ url('golongan') }}">Golongan</a></li>
                <li><a href="{{ url('lembur') }}">Lembur</a></li>
                <li><a href="{{ url('pegawai') }}">Pegawai</a></li>
                <li><a href="{{ url('gaji') }}">Gaji</a></li>
            </ul>
        </nav>

        <div class="table-container">
            <h1>Data Gaji Pegawai</h1>
            <a href="/gaji/tambah" class="btn-add">+ Tambah Gaji Baru</a>

            <table>
                <thead>
                    <tr>
                        <th>ID Gaji</th>
                        <th>ID Pegawai</th>
                        <th>Jumlah Gaji</th>
                        <th>Jumlah Lembur</th>
                        <th>Potongan</th>
                        <th>Gaji Diterima</th>
                        <th>Tanggal Gaji</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gaji as $g)
                    <tr>
                        <td>{{ $g->gaji_id }}</td>
                        <td>{{ $g->pegawai_id }}</td>
                        <td>{{ $g->jumlah_gaji }}</td>
                        <td>{{ $g->jumlah_lembur }}</td>
                        <td>{{ $g->potongan }}</td>
                        <td>{{ $g->gaji_diterima }}</td>
                        <td>{{ $g->tanggal_gaji }}</td>
                        <td>
                            <a href="{{ url('gaji/edit', $g->gaji_id) }}" class="btn-edit">Edit</a>
                            <a href="{{ url('gaji/delete', $g->gaji_id) }}" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="stars">
        @for($i = 0; $i < 100; $i++)
            <div class="star" style="left: {{ mt_rand(0, 100) }}vw; top: {{ mt_rand(0, 100) }}vh; transform: rotate({{ mt_rand(0, 360) }}deg)"></div>
        @endfor
    </div>
</body>
</html>
