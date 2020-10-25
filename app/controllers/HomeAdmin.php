<?php

class HomeAdmin extends Controller {

    private $pos1;
    private $sem1;
    private $men1;
    private $tot1;

    public function index()
    {
        $ters=$this->pos();
        $ters1=$this->sem();
        $ters2=$this->men();
        $ters3=$this->tot();
        $data['judul']='Home Admin';
        $this->view('temp/header' , $data);
        $this->view('homeadmin/index',$ters,$ters1,$ters2,$ters3);
        $this->view('temp/footer');

    }


    public function jumlahharian(){
        $rs=$this->model('Laporan')->dataharian($_POST["positif"],$_POST["sembuh"],$_POST["meninggal"],$_POST["tanggal"]);
        if (isset($rs)){
            if ($rs=="OKE DEH"){
                header("Location:".BASEURL."/homeadmin");
            }else if($rs=="BELUM"){
                header("Location:".BASEURL."/homeadmin");
            }
        }
    }

    public function pos(){
        $this->pos1=$this->model('Laporan')->htgpositif();
        return $this->pos1;
    }
    public function sem(){
        $this->sem1=$this->model('Laporan')->htgsembuh();
        return $this->sem1;
    }
    public function men(){
        $this->men1=$this->model('Laporan')->htgmeninggal();
        return $this->men1;
    }
    public function tot(){
        $this->tot1=$this->model('Laporan')->htgtot();
        return $this->tot1;
    }

}