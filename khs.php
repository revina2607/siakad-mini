<?php
session_start();

require_once "class/Mahasiswa.php";
require_once "class/MataKuliah.php";
require_once "class/Nilai.php";
require_once "class/KHS.php";

$mhs = new Mahasiswa("Revina Aureliya Juliani", "I43250133", "Bisnis Digital");

$matkuls = [
    new MataKuliah("Pemrograman OOP", 3),
    new MataKuliah("Basis Data", 3),
    new MataKuliah("UI/UX Design", 2),
    new MataKuliah("Digital Marketing", 2),
    new MataKuliah("Manajemen Bisnis", 2)
];

$nilais = [
    new Nilai(90),
    new Nilai(88),
    new Nilai(85),
    new Nilai(82),
    new Nilai(87)
];

$totalBobot = 0;
$totalSks = 0;

for ($i = 0; $i < count($matkuls); $i++) {
    $totalBobot += $nilais[$i]->getBobot() * $matkuls[$i]->sks;
    $totalSks += $matkuls[$i]->sks;
}

$ipk = $totalBobot / $totalSks;

$laporan = new KHS();
?>

<!DOCTYPE html>
<html>
<head>
    <title>KHS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    Sistem Informasi Akademik (SIAKAD)
</div>

<!-- MAIN CENTER -->
<div class="main">
    <div class="content">

        <div class="card">

            <h2>Kartu Hasil Studi</h2>

            <p><strong>Nama:</strong> <?= $mhs->getNama(); ?></p>
            <p><strong>NIM:</strong> <?= $mhs->getNim(); ?></p>
            <p><strong>Program Studi:</strong> <?= $mhs->getProdi(); ?></p>

            <table class="table">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Bobot</th>
                </tr>

                <?php for ($i = 0; $i < count($matkuls); $i++): ?>
                <tr>
                    <td><?= $matkuls[$i]->nama; ?></td>
                    <td><?= $matkuls[$i]->sks; ?></td>
                    <td><?= $nilais[$i]->getNilai(); ?></td>
                    <td><?= $nilais[$i]->getGrade(); ?></td>
                    <td><?= $nilais[$i]->getBobot(); ?></td>
                </tr>
                <?php endfor; ?>
            </table>

            <p style="margin-top:10px; color:green;">
                <?= $laporan->cetak(); ?>
            </p>

            <div class="ipk-box">
                IPK: <?= number_format($ipk, 2); ?>
            </div>

        </div>

    </div>
</div>

</body>
</html>