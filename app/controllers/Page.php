<?php

class Page extends Controller {
    public function index()
    {

        $this->view('temp/header');
        $this->view('page/index');

    }

    public function buatberita(){
        $rs=$this->model('Berita')->tambahberita($_POST["judul"],$_POST["tanggal"],$_POST["sinop"],$_POST["isi"],$_FILES['file']);
        if (isset($rs)){
            if ($rs=="OKE DEH"){
                header("Location:".BASEURL."/page");
            }else if($rs=="BELUM"){
                header("Location:".BASEURL."/page");
            }
        }
    }


}
