<?php
class MataKuliah {
    public $nama;
    public $sks;

    public function __construct($nama, $sks) {
        $this->nama = $nama;
        $this->sks = $sks;
    }
}
?>
<div class="page-container">
    <div class="box">
        <h2>Daftar Mata Kuliah</h2>

        <ul>
            <li>Pemrograman OOP</li>
            <li>Basis Data</li>
            <li>UI/UX Design</li>
        </ul>
    </div>
</div>
