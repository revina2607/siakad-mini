<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>SIAKAD MINI</title>

    <style>
    /* RESET */
    body {
        margin: 0;
        font-family: 'Segoe UI', sans-serif;
        background: linear-gradient(135deg, #0f172a, #1e3c72);
        color: white;
    }

    /* HEADER */
    .header {
        text-align: center;
        margin-top: 25px;
    }

    .header .kampus {
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 2px;
        color: #cbd5f5;
    }

    .header .title {
        font-size: 42px;
        font-weight: bold;
        margin-top: 5px;
    }

    .header .title span {
        color: #facc15;
        text-shadow: 0 0 12px rgba(250,204,21,0.8);
    }

    .header .subtitle {
        font-size: 15px;
        color: #94a3b8;
        margin-top: 5px;
    }

    /* MENU */
    .menu {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin: 20px;
    }

    .menu a {
        color: white;
        text-decoration: none;
        padding: 10px 18px;
        border-radius: 10px;
        background: rgba(255,255,255,0.1);
        transition: 0.3s;
    }

    .menu a:hover {
        background: #22c55e;
        transform: scale(1.05);
    }

    /* MAIN */
    .main {
        display: flex;
        justify-content: center;
        padding-top: 30px;
    }

    .content {
        width: 800px;
    }

    /* CARD */
    .card {
        background: rgba(15, 23, 42, 0.75);
        padding: 25px;
        border-radius: 16px;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.4);
        transition: 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        background: rgba(30, 64, 175, 0.4);
    }

    .card h3 {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .card p {
        color: #cbd5f5;
    }

    .card a {
        color: #22c55e;
        text-decoration: none;
        font-weight: bold;
    }

    .card a:hover {
        color: #4ade80;
    }
    </style>

</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="kampus">POLITEKNIK NEGERI JEMBER</div>
    <div class="title">Sistem Informasi Akademik <span>(SIAKAD)</span></div>
    <div class="subtitle">Sistem Akademik Berbasis Web</div>
</div>

<!-- MENU -->
<div class="menu">
    <a href="mahasiswa.php">🎓 Mahasiswa</a>
    <a href="matakuliah.php">📘 Mata Kuliah</a>
    <a href="nilai.php">📊 Nilai</a>
    <a href="khs.php">📄 KHS</a>
</div>

<!-- CONTENT -->
<div class="main">
    <div class="content">

        <div class="card">
            <h3>Mahasiswa</h3>
            <p>Manajemen data mahasiswa</p>
            <a href="mahasiswa.php">Akses</a>
        </div>

        <div class="card">
            <h3>Mata Kuliah</h3>
            <p>Informasi mata kuliah</p>
            <a href="matakuliah.php">Akses</a>
        </div>

        <div class="card">
            <h3>Nilai</h3>
            <p>Input nilai mahasiswa</p>
            <a href="nilai.php">Akses</a>
        </div>

        <div class="card">
            <h3>KHS</h3>
            <p>Kartu hasil studi</p>
            <a href="khs.php">Akses</a>
        </div>

    </div>
</div>

</body>
</html>