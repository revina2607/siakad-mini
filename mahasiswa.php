<?php
require_once "class/Mahasiswa.php";

$mahasiswa = [];

// CEK FORM DIKIRIM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];

    $mahasiswa[] = new Mahasiswa($nama, $nim, $prodi);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">Sistem Informasi Akademik</div>

<div class="container">

    <!-- FORM -->
    <div class="card">
        <h2>Input Data Mahasiswa</h2>

        <form method="POST">
            <input type="text" name="nama" placeholder="Nama" required><br><br>
            <input type="text" name="nim" placeholder="NIM" required><br><br>
            <input type="text" name="prodi" placeholder="Program Studi" required><br><br>

            <button type="submit">Simpan</button>
        </form>
    </div>

    <br>

    <!-- HASIL -->
    <div class="card">
        <h2>Data Mahasiswa</h2>

        <?php if (!empty($mahasiswa)): ?>
        <table class="table">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Prodi</th>
            </tr>

            <?php foreach ($mahasiswa as $m): ?>
            <tr>
                <td><?= $m->getNama(); ?></td>
                <td><?= $m->getNim(); ?></td>
                <td><?= $m->getProdi(); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php else: ?>
            <p>Belum ada data</p>
        <?php endif; ?>

    </div>

</div>

</body>
</html>