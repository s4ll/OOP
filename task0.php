<?php

class Novel{

    //properti
    public $judul   ,
           $penulis ,
           $terbit  ;
    
    //constructor
    function __construct($judul , $penulis , $terbit ){
        $this->judul   = $judul ;
        $this->penulis = $penulis ;
        $this->terbit  = $terbit ;
    }
   
    // Method
    function cetak(){
        return "judul  : $this->judul , <br>
                penulis: $this->penulis , <br>
                terbit : $this->terbit"  ;
    }

    function __destruct(){
        echo " <br>SELESAI!! " ;
    }
}

//membuat object instance dari class
$nov1 = new novel("Harry potter" , "J.K Rowling" , 1997 ) ;
// $nov2 = new novel("Laskar pelangi" , "Andrea Hirata" , 2005 ) ;

echo "<br>Novel 1  <br>" . $nov1->cetak();
// echo "<hr>" ;
// echo "<br>Novel 2  <br>" . $nov2->cetak();