<?php
session_start();
class Berita{

    public function __construct()
    {
        $this->db=new DB();
    }

    public function tambahberita($d1,$d2,$d3,$d4,$d5){


        $konek=$this->db->getps();
        $v1=$d1;
        $v2=$d2;
        $v3=$d3;
        $v4=$d4;
        $d5=$this->up();

        if (!$d5){
            return false;
        }

        $q="INSERT INTO berita
            Values
            ('','$v2','$v1','$v3','$v4','$d5')
            ";
        mysqli_query($konek,$q);
        if (mysqli_affected_rows($konek)>0){
            $stat="OKE DEH";
            return $stat;
        }else{
            $stat="BELUM";
            return $stat;
        }

    }

    public function up(){
        $namefile=$_FILES['file']['name'];
        $ukfile=$_FILES['file']['size'];
        $er=$_FILES['file']['error'];
        $tmpName=$_FILES['file']['tmp_name'];

        if ($er===4){
            echo 'hello';
            return false;
        }

        $valid=['jpg','jpeg','png'];
        $valid1=explode('.',$namefile);
        $valid1=strtolower(end($valid1));

        if (!in_array($valid1,$valid)){
            echo 'tidak';
            return false;
        }
        if ($ukfile>1000000000){
            return false;
        }
        move_uploaded_file($tmpName,'img/'.$namefile);
        return $namefile;

    }

    public function ambilberita(){
        $q="SELECT * FROM berita order by id_berita desc LIMIT 3 ";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)){
            $berita[] = $temp;
        }
        return $berita;
    }



}
