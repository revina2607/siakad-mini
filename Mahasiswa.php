<?php
require_once __DIR__ . "/User.php";

class Mahasiswa extends User {
    private $nim;
    private $prodi;

    public function __construct($nama, $nim, $prodi) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getProdi() {
        return $this->prodi;
    }

    public function getRole() {
        return "Mahasiswa";
    }
}
?>
<div class="page-container">
    <div class="box">
        <h2>Data Mahasiswa</h2>

        <form method="post">
            Nama:
            <input type="text" name="nama">

            NIM:
            <input type="text" name="nim">

            Prodi:
            <input type="text" name="prodi">

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>
