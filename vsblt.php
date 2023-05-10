<?php
class sekolah{
    public $nama ;
    private $alamat = "Bogor";
    protected $telepon ;

    function tampilSekolah(){
        return $this-> alamat;

    }
}

$sekolah1 = new sekolah();
echo $sekolah1 -> alamat ;