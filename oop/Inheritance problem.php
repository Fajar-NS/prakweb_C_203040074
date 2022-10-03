<?php

class produk{
    public $judul= "Judul",
    $penulis="penulis",
    $penerbit="penerbit",
    $harga=0,
    $jmlHalaman="jmlHalaman",
    $asal="asal",
    $tipe;

    public function __construct( $judul= "judul", $penulis = "penulis",$penerbit = "penerbit",$harga = "harga", $jmlHalaman =0, $asal="", $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga; 
        $this->jmlHalaman= $jmlHalaman;
        $this->asal= $asal;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->judul,$this->penulis, $this->penerbit";
    }

     public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} Rp. {$this->harga}";
        if ($this->tipe == "komik") {
            $str .= "- {$this->jmlHalaman} halaman.";
        } else if ($this->tipe == "asal") {
            $str .= "- {$this->asal} asal.";
        }
        return $str;
     }


}


class CetakInfoProduk {
    public function cetak(produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} Rp. {$produk->harga}";
        return $str;
    }
}



$produk1 = new produk("hinata", "dimas", "egi anjay mabar", 33333,200,0 ,"komik");
$produk2 = new produk("caprioooooo","anjay mabar","slebewww",00000,null,"bandung", "asal");

 echo $produk1->getInfoLengkap();
 echo "<hr>";
 echo $produk2->getInfoLengkap();

?>