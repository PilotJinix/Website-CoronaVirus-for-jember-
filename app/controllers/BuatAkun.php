<?php

class BuatAkun extends Controller {
    private $dataubah;
    private $datatabel;

    public function index(){
        $this->akunme();
        $this->tabelakun();
        $ters=$this->datatabel;
        $ters1=$this->dataubah;
        $this->view('temp/header');
        $this->view('buatakun/index',$ters,$ters1);

    }

    public function tambahakun(){
        $rs=$this->model('Akun')->akuntambah($_POST["user"],$_POST["pass"]);
        if (isset($rs)){
            if ($rs=="OKE DEH"){
                header("Location:".BASEURL."/buatakun");
            }else if($rs=="BELUM"){
                header("Location:".BASEURL."/buatakun");
            }
        }
    }


    public function ubahakun1(){
        $rs= $this->model("Akun")-> ubahakun($_POST["user1"],$_POST["pass1"]);
        echo $rs;
        if($rs=="OKE DEH"){
            header("Location:".BASEURL."/buatakun");
        }elseif($rs=="BELUM"){
            header("Location:".BASEURL."/buatakun");
        }
    }

    public function hapusakun(){
        $rs= $this->model("Akun")-> hapus($_SESSION["username"]);
        echo $rs;
        if($rs=="OKE DEH"){
            header("Location:".BASEURL."/buatakun");
        }elseif($rs=="BELUM"){
            header("Location:".BASEURL."/buatakun");
        }
    }

    public function akunme(){
        $this->dataubah=$this->model('Akun')->ambildataubah();
    }

    public function tabelakun(){
        $this->datatabel=$this->model('Akun')->ambildata();
    }
}