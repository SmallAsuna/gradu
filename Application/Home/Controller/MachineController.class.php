<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class MachineController extends Controller {
    public function index(){


       $Equipment = M("Equipment");
       $data =$Equipment->select();
       $length = count($data)-1;
       //dump($data);
       $this->assign('twice',$length);
       $this->display();


        for($i=0;$i<count($data);$i++)
        {

        echo '<script type="text/javascript">
          $(".machineid:eq(0)").replaceWith("<td>'.$data[$i]["serialnumber"].'</td>");
          $(".machinename:eq(0)").replaceWith("<td>'.$data[$i]["name"].'</td>");
          $(".machineown:eq(0)").replaceWith("<td>'.$data[$i]["owner"].'</td>");
          $(".time:eq(0)").replaceWith("<td>'.$data[$i]["time"].'</td>");
          $(".price:eq(0)").replaceWith("<td>'.$data[$i]["price"].'</td>");
          $("span.label.label-sm:eq('.$i.')").replaceWith("<span class=\"label label-sm label-success\">'.$data[$i]["status"].'</span>");
          $("form.used:eq('.$i.')").attr("action","index.php?m=home&c=machine&a=beuse&id='.$data[$i]["id"].'");
          </script>';
         }

         $this->display("repleace");
         

    }

     public function insertshow(){

        $this->display("insert");
        
    }



    public function insert(){
        dump($_POST);
        $Equipment=M("Equipment");
        $data['serialnumber']=$_POST["number"];
        $data['name']=$_POST["name"];
        $data['status']=$_POST["status"];
        $data['owner']=$_POST["owner"];
        $data['price']=$_POST["price"];  

    }


    public function upload(){
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize   =     3145728 ;// 设置附件上传大小
    $upload->exts      =     array('pdf', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
    $upload->savePath  =     ''; // 设置附件上传（子）目录
    // 上传文件
    $info   =   $upload->upload();
    if(!$info) {// 上传错误提示错误信息
    $this->error($upload->getError());
    }

    //else{// 上传成功 获取上传文件信息
    //foreach($info as $file){
    // echo $file['savepath'].$file['savename'];}
    //}
    }





    public function beuse($id){

      echo $id;
        
      

    }


}


?>