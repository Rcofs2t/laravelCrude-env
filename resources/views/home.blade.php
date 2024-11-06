<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX Design</title>
    <style>
        /* Umum */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Background dan warna teks */
        body {
            background: linear-gradient(45deg, #333333, #000000);
            color: #fff;
            overflow: hidden;
            position: relative;
        }

        /* Floating Squares */
        .floating-squares {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .floating-squares div {
            position: absolute;
            background: rgba(255, 255, 255, 0.2);
            width: 100px;
            height: 100px;
            animation: float 15s infinite linear;
            border-radius: 5px;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }
            100% {
                transform: translateY(-100vh) rotate(360deg);
            }
        }

        /* Navbar */
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 10px 0;
            text-align: center;
            position: relative;
            z-index: 1;
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
            color: #f0f0f0;
        }

        /* Hero Section */
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .content {
            text-align: center;
        }

        .content h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        /* Tombol */
        button {
            background-color: #000;
            border: none;
            padding: 10px 20px;
            color: #fff;
            font-size: 16px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            position: relative;
        }

        button:hover {
            background-color: #00ff99;
        }

        /* Dropdown menu untuk tombol NEXT */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            top: 40px;
            left: 0;
            background-color: #333;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
            transition: background-color 0.3s ease;
        }

        .dropdown-content a:hover {
            background-color: #00ff99;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <div class="floating-squares">
        <div style="top: 20%; left: 10%;"></div>
        <div style="top: 50%; left: 30%;"></div>
        <div style="top: 80%; left: 70%;"></div>
        <div style="top: 30%; left: 80%;"></div>
        <div style="top: 60%; left: 40%;"></div>
    </div>

    <nav>
        <ul>
            <li><a href="{{ url('home') }}">Home</a></li>
            <li><a href="{{ url('golongan') }}">Golongan</a></li>
            <li><a href="{{ url('lembur') }}">Lembur</a></li>
            <li><a href="{{ url('pegawai') }}">Pegawai</a></li>
            <li><a href="{{ url('gaji') }}">Gaji</a></li>
        </ul>
    </nav>

    <div class="hero">
        <div class="content">
            <h1>Laravel Crud Design</h1>
            <p>Welcome to my design <b>Crud</b>.</p>

            <!-- Tombol PREVIOUS -->
            <button>PREVIOUS</button>

            <!-- Tombol NEXT dengan dropdown -->
            <div class="dropdown">
                <button>NEXT</button>
                <div class="dropdown-content">
                    <a href="{{ url('login') }}">Login</a>
                    <a href="{{ url('about') }}">About</a>
                    <a href="{{ url('logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
