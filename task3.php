<?php

class sekolah{
    public $nama ;
    public $alamat;
    protected $jumlahSiswa = "600";
    protected $jumlahGuru = "80";
    private $jumlahKelas;

    public function setNama($nama){
        $this -> nama = $nama ;
        return $nama ;
    }
    public function setalm($alamat){
        $this ->alamat = $alamat ;
        return $alamat ;
    }
    public function setJS($jumlahSiswa){
        $this ->js = $jumlahSiswa ;
        return $jumlahSiswa ;
    }
    public function setJG($jumlahGuru){
        $this ->jg = $jumlahGuru ;
        return $jumlahGuru ;
    }
    public function setJK($jumlahKelas){
        echo $this ->jk = $jumlahKelas ;
    }
   
}

class JS extends sekolah{

    public function setJS($jumlahSiswa){
        $this-> jumlahSiswa = $jumlahSiswa ;
    }
    public function tampilJS(){
        $nah = "jumlah siswa adalah:  $this->jumlahSiswa";
        return $nah;
    }
}
class JG extends sekolah{

    public function setJG($jumlahGuru){
        $this-> jumlahGuru = $jumlahGuru ;
    }
    public function tampilJG(){
        $ohh = "jumlah guru adalah:  $this->jumlahGuru";
        return $ohh;
    }
}

$s1 = new sekolah() ;
$s1-> setNama("SMK Wikrama") ;
echo "<br>" ;
$s1-> setalm("Wangun ") ;
echo "<br>" ;
$js1 = new JS();
$js1 ->tampilJS();
echo $js1-> tampilJS() ;
echo "<br>" ;
$jg1 = new JG();
$jg1 ->tampilJG();
echo $jg1-> tampilJG() ;
