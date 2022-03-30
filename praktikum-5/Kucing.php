<?php
class Kucing {
    private $nama;
    private $umur;
    private $energi;

    public function __construct($nama, $umur, $energi)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->energi = $energi; 
    }

    public function makan(){
        $this->energi += 5;
        return "{$this->nama} sedang makan dan energinya bertambah 5";
    }

    public function tidur(){
        $this->energi -= 3;
        return "{$this->nama} sedang tidur dan energinya berkurang 3";
    }

    public function lari(){
        $this->energi -= 5;
        return "{$this->nama} sedang berlari dan energinya berkurang 5";
    }
    //method getter : untuk mendapat akses nilai properti yang private
    public function getNama(){
        return $this->nama;
    }

    public function getUmur(){
        return $this->umur;
    }

    public function getEnergi(){
        return $this->energi;
    }
    //method setter : untuk memberi nilai ulang properti yang private
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setUmur($umur){
        $this->umur = $umur;
    }
    public function setEnergi($energi){
        $this->energi = $energi;
    }
}