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
    	//echo $_POST["usern"];
    	$User = M("User");
    	$where['username']=$_POST["usern"];
    	$where['password']=$_POST["passw"];
    	$data = $User->field('username')->where($where)->find();
    	if($data){
    			dump($data);
    			//$_SESSION['username']=$_POST["usern"];
    			//echo $_SESSION["username"];
    			unset($_SESSION['username']);
    			echo $_SESSION["username"];
    	}
    	else{
          echo "用户名或者密码错误";
       }
       //dump($data);
       }



}


?>