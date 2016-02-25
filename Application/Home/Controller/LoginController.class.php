<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }


    public function doLogin(){
    	dump($_POST);
    	echo $_POST["usern"];
    }



}


?>