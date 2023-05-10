<?php
//jualan Novel and DVD
class Produk {
    
    // Properti
    public $judul = 'judul',
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0 ;

    //constructor
    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" , $harga = 0 ){
        $this->judul = $judul ;
        $this->penulis = $penulis ;
        $this->penerbit = $penerbit ;
        $this->harga = $harga ;
    }
    
    // Method
    public function getLabel(){
        return "$this->penulis , $this->penerbit"  ;
    }
    public function getInfoProduk(){
        $str = "{$this->judul} |  {$this->getLabel() }, (RP. {$this->harga})"  ;
        return $str ;
    } 
} 
//class novel
class Novel extends produk{
    public $jmlHalaman;

    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" ,
    $harga = 0 , $jmlHalaman = 0 ) {
        parent::__construct( $judul , $penulis , $penerbit , $harga ) ;

        $this -> jmlHalaman = $jmlHalaman ;
    }

    public function getInfoProduk() {
        $str = "novel: " . parent::getInfoProduk() . " - {$this ->jmlHalaman} Halaman. " ;
        
        return $str; 
    }
}
// clas film
class film extends produk{
    public $waktu;

    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit" ,
    $harga = 0 , $waktu = 0 ) {
        parent::__construct( $judul , $penulis , $penerbit , $harga ) ;

        $this -> waktu = $waktu ;
    }

    public function getInfoProduk() {
        $str = "film: " . parent::getInfoProduk() . " - {$this ->waktu} waktu. " ;
        
        return $str; 
    }
}

//membuat object instance dari class

//Novel 
$p1 = new Produk("Harry potter" , "J.K Rowling" , "Bloomsbury" , 500.000 );


//Film
$p2 = new Produk( "Enola Holmes" , "Nancy Springer" , "Clara" , 67.000 );


echo "Novel : " . $p1->getInfoProduk();
echo "<br>" ;
echo "Film : " . $p2->getInfoProduk();
