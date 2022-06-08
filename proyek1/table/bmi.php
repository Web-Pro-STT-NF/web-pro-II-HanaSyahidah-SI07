<?php
class Bmi{
    public $berat_badan;
    public $tinggi_badan;
    public $nilai_bmi;
    public $status_bmi;

    function __construct($berat_badan,$tinggi_badan,$nilai_bmi,$status_bmi){
        $this->berat_badan = $berat_badan;
        $this->tinggi_badan = $tinggi_badan;
        $this->nilai_bmi = $nilai_bmi;
        $this->status_bmi = $status_bmi;
    }
}