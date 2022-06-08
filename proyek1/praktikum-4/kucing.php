<?php
//class kucing
class kucing {
    //atribut
        //visibility : public & private
    public $nama;
    public $umur;
    public $warna;

    //membuat constructor
    public function __construct($nama, $umur, $warna){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->warna = $warna;
    }

    //method/function/behavior
    public function makan(){
        return "{$this->nama} sedang makan";
    }

    public function tidur(){
        return "{$this->nama} sedang tidur";
    }

    public function lari(){
        return "{$this->nama} sedang berlari";
    }
}