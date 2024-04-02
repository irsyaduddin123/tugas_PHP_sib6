<?php

class Siswa
{
    public $nama;
    public $nilai;
    public $nim;
    public $prodi;
    public $matkul;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nama, $nilai, $nim, $prodi, $matkul )
    {
        $this->nama = $nama;
        $this->nilai = $nilai;
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->matkul = $matkul;
        $this->cekKelulusan();
        $this->hitungGrade();
        $this->hitungPredikat();
    }

    public function cekKelulusan()
    {
        if ($this->nilai >= 65) {
            $this->status = "Lulus";
        } else {
            $this->status = "Tidak Lulus";
        }
    }

    public function hitungGrade()
    {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 55) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    public function hitungPredikat()
    {
        switch ($this->grade) {
            case 'A':
                $this->predikat = 'Sangat Memuaskan';
                break;
            case 'B':
                $this->predikat = 'Memuaskan';
                break;
            case 'C':
                $this->predikat = 'Cukup';
                break;
            case 'D':
                $this->predikat = 'Kurang';
                break;
            case 'E':
                $this->predikat = 'Sangat Kurang';
                break;
        }
    }
}

?>
