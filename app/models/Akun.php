<?php
session_start();
class Akun{

    private $db;

    public function __construct()
    {
        $this->db=new DB();
    }

    public function buatlogin($c,$d){
    $username =mysqli_real_escape_string($this->db->getps(),$c);
    $password =mysqli_real_escape_string($this->db->getps(),$d);
    $q="select * from akun where username='$username' and password='$password'";
    $q1 = mysqli_query($this->db->getps(),$q);
    $result=mysqli_fetch_assoc($q1);
    if (isset($result)){
        $_SESSION["status"]=true;
        $_SESSION["username"]=$c;
    }else{
        $_SESSION["status"]=false;
    }
    }

    public function akuntambah($d1,$d2){
        $konek=$this->db->getps();
        $v1=$d1;
        $v2=$d2;

        $q="INSERT INTO akun
            Values
            ('','$v1','$v2')
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

    public function ambildataubah(){
        $user=$_SESSION['username'];

        $q="SELECT * FROM akun WHERE Username = '$user' ";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)){
            $hasil1[] = $temp;
        }
        return $hasil1;
    }

    public function ambildata(){
        $q="SELECT * FROM akun";
        $d=mysqli_query($this->db->getps(),$q);
        while($temp = mysqli_fetch_array($d)){
            $hasil[] = $temp;
        }
        return $hasil;
    }

    public function ubahakun($d1,$d2){
        $konek=$this->db->getps();
        $user=$_SESSION['username'];
        $d1;
        $d2;

        $q="SELECT id_akun FROM akun WHERE Username = '$user'";
        $rs=mysqli_query($konek,$q);
        $rs1=mysqli_fetch_assoc($rs);

        $q2="UPDATE akun set Username = '$d1',Password = '$d2' where id_akun={$rs1["id_akun"]} ";

        mysqli_query($konek,$q2);

        if (mysqli_affected_rows($konek)>0){
            $_SESSION['username']=$d1;
            $stat="OKE DEH";
            return $stat;
        }else{
            $stat="BELUM";
            return $stat;
        }
    }

    public function  hapus(){
        $konek=$this->db->getps();
        $user=$_SESSION['username'];

        $q= " DELETE from akun where Username ='$user'";
        mysqli_query($konek,$q);
        // var_dump(mysqli_affected_rows($con));
        echo mysqli_error($konek);
        if(mysqli_affected_rows($konek)>0){
            $stat="OKE DEH";
            return $stat;
        }else {
            $stat="BELUM";
            return $stat;
        }
    }

    public function clearsession(){
        session_destroy();
    }
}
