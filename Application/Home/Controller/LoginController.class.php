<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class LoginController extends Controller {
    public function index(){
    	$this->display();
    }


    public function doLogin(){
    	//dump($_POST);
    	//echo $_POST["usern"];
    	$User = M("User");
    	$where['username']=$_POST["usern"];
    	$where['password']=$_POST["passw"];
    	$data = $User->field('username')->where($where)->find();
    	if($data){

    			$_SESSION['username']=$_POST["usern"];

            echo '<script>window.location.href="index.php?"</script>';
    	}
    	else{
          echo "用户名或者密码错误";
       }
       //dump($data);
       }

       public function doLogout()
       {
        unset($_SESSION['username']);
        header('location:index.php?');
       }


       public function register(){
        //dump($_POST);
        $User=M("User");
        $data['username'] = $_POST["username"];
        if($User->where($data)->find()){echo "用户已经存在";}

        else if($_POST["password"]!=$_POST["repeate"]){echo "两次输入密码不一致";}

        
        else{
          $data['password'] = $_POST["password"];
          $data['email'] = $_POST["Email"];
          $data['type'] = "student";
          $User->add($data);
          echo "注册成功";
        }

       }


}


?>