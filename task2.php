<?php
class person{
    public $name = "name"   ;
    private  $gender = "gender";
    protected  $pekerjaan   ;
    
    public function setname($name){
        $this ->name = $name ;
        return $name ;
    }
    public function setgender($gender){
        echo $this ->gender = $gender ;
        
    }
   
}

class kerjaan extends person{

    public function setkerja($pekerjaan){
        $this-> pekerjaan = $pekerjaan ;
    }
    public function tampilkrj(){
        $nah = "pekerjaan $this->name adalah $this->pekerjaan";
        return $nah;
    }
}
        

$p1 = new person() ;
echo $p1-> setname("salma hayya<br>") ;

$p1->setgender("Wanita");

echo "<hr>" ;


$krj1 = new kerjaan();
$krj1 ->setkerja("programmer");
echo $krj1-> tampilkrj() ;

