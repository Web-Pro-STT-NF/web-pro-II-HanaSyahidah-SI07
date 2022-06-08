<?php
require_once 'pasien.php';
require_once 'bmi.php';

class bmipasien{
    public $bmi;
    public $tanggal;
    public $pasien;

    function __construct($pasien,$bmi,$tanggal){
        $this->bmi = $bmi;
        $this->tanggal = $tanggal;
        $this->pasien = $pasien;
    }
}