<?php
class Nilai {
    private $nilai;

    public function __construct($nilai) {
        $this->nilai = $nilai;
    }

    public function getNilai() {
        return $this->nilai;
    }

    public function getBobot() {
        if ($this->nilai >= 85) return 4;
        elseif ($this->nilai >= 75) return 3;
        elseif ($this->nilai >= 65) return 2;
        elseif ($this->nilai >= 50) return 1;
        else return 0;
    }

    public function getGrade() {
        if ($this->nilai >= 85) return "A";
        elseif ($this->nilai >= 75) return "B";
        elseif ($this->nilai >= 65) return "C";
        elseif ($this->nilai >= 50) return "D";
        else return "E";
    }
}
?>
<div class="page-container">
    <div class="box">
        <h2>Input Nilai</h2>

        <form method="post">
            Mata Kuliah:
            <input type="text" name="matkul">

            Nilai:
            <input type="text" name="nilai">

            <button type="submit">Simpan</button>
        </form>
    </div>
</div>
<div class="main">
    <div class="page-container">
        <div class="box">

            <h2>Data Nilai</h2>
            <p>Nilai ditampilkan di halaman KHS</p>

        </div>
    </div>
</div>