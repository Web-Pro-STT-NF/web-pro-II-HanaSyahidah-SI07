<?php
require_once 'person.php';
class Pasien extends Person{
    public $kode;
    public $tanggal;

    function __construct($kode,$nama){
        $this->kode = $kode;
        $this->nama = $nama;
    }
}