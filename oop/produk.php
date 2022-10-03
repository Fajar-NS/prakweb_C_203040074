<?php

class produk{
    public $judul= "Judul",
    $penulis="penulis",
    $penerbit="penerbit",
    $harga=0;

    // public function sayHello(){
    //     return "Apa kabar Semuanya!!";
    // }

    public function getLabel(){
        return "$this->judul,$this->penulis, $this->penerbit";
    }
}

// $produk1 = new produk();
// $produk1->judul  ="Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "sasuke";
// $produk2->tambahproperty = "asloo";
// var_dump($produk2);


$produk3 = new produk();
$produk3->judul = "hinata";
$produk3->penulis ="dimas";
$produk3->penerbit = "egi anjay mabar";
$produk3->harga = 600;

//  echo "komik : $produk3->penulis,$produk3->penerbit";

//  echo "<hr>";
//  echo $produk3->getLabel();

 $produk4 = new produk();
 $produk4->judul = "caprioooooo";
 $produk4->penulis =    "anjay mabar";
 $produk4->penerbit= "slebewww";
 $produk4->harga = 00000;

 echo "komik : " .$produk3->getLabel();
 echo "<hr>";
 echo "orang : " .$produk4->getLabel();

?>