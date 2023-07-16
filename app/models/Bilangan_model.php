<?php

class Bilangan_model{
    private $sisaBilangan = 0;
    private $bilanganBageConcat = 0;

    public function getBilangan(){
        return $this->sisaBilangan;
    }

    public function getBageConcat($bilangan,$jumlah){
        $hasil = $jumlah;
        if($this->getHasil($bilangan,$jumlah) === "Bage Concat"){
            $hasil++;
        }
        $this->bilanganBageConcat = $hasil;
        return $hasil;
    }


    public function setBilangan($jumlah){
        $this->sisaBilangan = $jumlah;
    }

    public function kurangiBilangan(){
        $this->sisaBilangan--;
    }

    public function getHasil($bilangan,$jumlah){
        $kelipatan3 = 3;
        $kelipatan5 = 5; 
        $totalBilangan = $this->bilanganBageConcat;

        if((int)$bilangan % (int)$kelipatan3 === 0){
            if((int)$bilangan % (int)$kelipatan5 === 0){
                return "Bage Concat";
            }
            if($jumlah < 2){
                return "Bage";
            }else{
                return "Concat";
            }
        }else{
            if((int)$bilangan % (int)$kelipatan5 === 0) {
                if($jumlah < 2){
                    return "Concat";
                }else{
                    return "Bage";
                }
            }
        }
    }
}