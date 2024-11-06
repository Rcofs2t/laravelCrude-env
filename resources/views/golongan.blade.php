<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Golongan</title>
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
        }

        /* Navbar */
        nav {
            background-color: #333;
            padding: 15px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #f0f0f0;
        }

        /* Table Container */
        .table-container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #2c3e50; /* Latar belakang tabel */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Judul Tabel */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
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
            background-color: #2c3e50;
            color: #fff;
            padding: 12px;
            text-align: left;
            font-weight: bold;
            text-transform: uppercase;
            border: 1px solid #dee2e6;
        }

        /* Sel Tabel */
        table td {
            background-color: #f9f9f9;
            padding: 12px;
            border: 1px solid #dee2e6;
            font-weight: bold;
            color: #1abc9c;
        }

        /* Baris Ganjil dan Genap */
        table tr:nth-child(even) {
            background-color: #e0e0e0;
        }

        table tr:hover {
            background-color: #d4d4d4;
        }

        /* Tombol Edit dan Hapus */
        .btn-edit {
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
        }

        /* Sidebar Dashboard */
        .dashboard-container {
            width: 250px; /* Lebar Sidebar */
            background-color: #2c3e50; /* Warna latar gelap */
            color: #ecf0f1; /* Warna teks */
            padding: 20px;
            position: fixed; /* Agar tetap di sebelah kiri */
            top: 0;
            left: 0;
            height: 100vh; /* Setinggi layar */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .dashboard ul {
            list-style-type: none;
            padding: 0;
        }

        .dashboard ul li {
            margin: 20px 0;
        }

        .dashboard ul li a {
            color: #ecf0f1;
            text-decoration: none;
            font-size: 18px;
            display: flex;
            align-items: center;
            transition: color 0.3s ease;
        }

        .dashboard ul li a:hover {
            color: #1abc9c; /* Warna saat hover */
        }

        .dashboard ul li i {
            margin-right: 10px;
            font-size: 20px;
        }

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

        .star {
            position: absolute;
            top: 0;
            left: 0;
            width: 6em;
            height: 2px;
            background: linear-gradient(45deg, #ffffff, transparent);
            border-radius: 50%;
            filter: drop-shadow(0 0 6px #ffffff);
            transform: translate3d(104em, 0, 0);
            animation: fall 9s linear infinite, tail-fade 9s ease-out infinite;
        }

        .star:nth-child(odd) {
            width: 7.5em;
            height: 2px;
            animation-duration: 12s;
        }

        .star:nth-child(even) {
            width: 5em;
            height: 2px;
            animation-duration: 6s;
        }

        @keyframes fall {
            to {
                transform: translate3d(-30em, 0, 0);
            }
        }

        @keyframes tail-fade {
            0%, 50% {
                width: 6em;
                opacity: 1;
            }
            70%, 80% {
                width: 0;
                opacity: 0.4;
            }
            100% {
                width: 0;
                opacity: 0;
            }
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

    <div class="dashboard-container">
        <div class="dashboard">
            <ul>
                <li><a href="#about-me"><i class="icon-about-me"></i> About Me</a></li>
                <li><a href="#contact"><i class="icon-contact"></i> Contact</a></li>
                <li><a href="#free-example"><i class="icon-free-example"></i> Free Example</a></li>
            </ul>
        </div>
    </div>

    <div class="table-container">
        <h2>Data Golongan</h2>
        <a href="/golongan/tambah" class="btn-add">+ Tambah Golongan Baru</a>
        <table>
            <thead>
                <tr>
                    <th>ID Golongan</th>
                    <th>Nama Golongan</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Tunjangan Transportasi</th>
                    <th>Tunjangan Makan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($golongan as $g)
                <tr>
                    <td> {{$g->golongan_id}} </td>
                    <td> {{$g->golongan_nama}} </td>
                    <td> {{$g->gaji_pokok}} </td>
                    <td> {{$g->tunjangan_keluarga}} </td>
                    <td> {{$g->tunjangan_transport}} </td>
                    <td> {{$g->tunjangan_makan}} </td>
                    <td>
                    <a href="{{ route('golongan.edit', $g->golongan_id) }}" class="btn-edit">Edit</a>
                    <a href="{{ route('golongan.delete', $g->golongan_id) }}" class="btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional: Stars background effect -->
    <div class="stars">
        <!-- Add multiple .star elements here if desired -->
        <div class="star"></div>
        <div class="star"></div>
        <div class="star"></div>
    </div>
</body>
</html>