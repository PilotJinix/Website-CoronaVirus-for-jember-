<?php
class Laporan{

    public function __construct()
    {
        $this->db=new DB();
    }

    public function dataharian($d1,$d2,$d3,$d4){
        $konek=$this->db->getps();
        $v1=$d1;
        $v2=$d2;
        $v3=$d3;
        $v4=$d4;
        $q="INSERT INTO laporan
            Values
            ('','$v4','$v1','$v2','$v3')
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
    public function htgpositif(){
        $q="SELECT SUM(positif) AS JMLPOS FROM laporan";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)) {
            $pos[] = $temp;
        }
        return $pos;
    }

    public function htgsembuh(){
        $q="SELECT SUM(sembuh) AS JMLSEM FROM laporan";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)) {
            $sem[] = $temp;
        }
        return $sem;

    }
    public function htgmeninggal(){
        $q="SELECT SUM(meninggal) AS JMLMEN FROM laporan";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)) {
            $meninggal[] = $temp;
        }
        return $meninggal;

    }

    public function htgtot(){
        $q="SELECT SUM(positif+sembuh+meninggal) AS JMLTOT FROM laporan";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)) {
            $tot[] = $temp;
        }
        return $tot;

    }
}
