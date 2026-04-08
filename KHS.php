<?php
require_once "CetakLaporan.php";

class KHS implements CetakLaporan {
    public function cetak() {
        return "✔ Laporan KHS berhasil dicetak";
    }
}
?>
<div class="page-container">
    <div class="box">
        <h2>Kartu Hasil Studi (KHS)</h2>

        <p>NIM: 2025001</p>
        <p>Nama: <?= $_SESSION["user"]; ?></p>

        <table>
            <tr>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>Pemrograman</td>
                <td>A</td>
            </tr>
        </table>

        <h3>IPK: 4.00</h3>
    </div>
</div>