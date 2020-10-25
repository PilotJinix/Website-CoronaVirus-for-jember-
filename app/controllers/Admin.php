<?php

class Admin extends Controller {

    public  function index(){

        $this->model("Akun")->clearsession();
        $this->view('temp/header');
        $this->view('admin/index');
        $this->view('temp/footer');


    }

    public function masuk(){
        $_SESSION['username'] = $_POST['email'];
        $name=$_POST["email"];
        $password=$_POST["password"];
        $this->model('Akun')->buatlogin($name,$password);
        if(isset($_SESSION["status"])){
            if($_SESSION["status"]=== true){
                header("Location:".BASEURL."/HomeAdmin/");
            }else if($_SESSION["status"]=== false){
                header("Location:".BASEURL."/admin/");
                $_SESSION['error']=true;

            }
        }

    }


}
