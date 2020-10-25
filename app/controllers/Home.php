<?php

class Home extends Controller {

    private $news;
    private $pos2;
    private $sem2;
    private $men2;
    private $tot2;

    public function index(){
        $this->ambilberita1();
        $yah=$this->news;
        $ters=$this->poss();
        $ters1=$this->semm();
        $ters2=$this->menn();
        $ters3=$this->tott();
        $data['judul']='Beranda';
        $this->view('temp/header',$data);
        $this->view('home/index',$yah,$ters,$ters1,$ters2,$ters3);
        $this->view('temp/footer');


    }

    public function ambilberita1(){
        $this->news=$this->model('Berita')->ambilberita();
    }

    public function poss(){
        $this->pos2=$this->model('Laporan')->htgpositif();
        return $this->pos2;
    }
    public function semm(){
        $this->sem2=$this->model('Laporan')->htgsembuh();
        return $this->sem2;
    }
    public function menn(){
        $this->men2=$this->model('Laporan')->htgmeninggal();
        return $this->men2;
    }
    public function tott(){
        $this->tot2=$this->model('Laporan')->htgtot();
        return $this->tot2;
    }


}
