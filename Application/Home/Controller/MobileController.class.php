<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model; //记得改变类名
class MobileController extends Controller {
    public function index(){

    	if(isset($_SESSION['username']) && $_SESSION['username']!=""){ 


        $this->assign('name',$_SESSION['username']);
        $Equipment = M("Equipment");
        $data =$Equipment->select();
        $length = count($data)-1;
        $this->assign('twice',$length);
        $this->display("index");

        for($i=0;$i<count($data);$i++)
        {

        echo '<script type="text/javascript">
          $(".machineid:eq(0)").replaceWith("<td>'.$data[$i]["serialnumber"].'</td>");
          $(".machinename:eq(0)").replaceWith("<td>'.$data[$i]["name"].'</td>");
          $("span.label.label-sm:eq('.$i.')").replaceWith("<span class=\"label label-sm label-success\">'.$data[$i]["status"].'</span>");
          $("a.blue1:eq('.$i.')").attr("href","index.php?m=home&c=machine&a=beuse&id='.$data[$i]["id"].'");
          $("a.blue2:eq('.$i.')").attr("href","/gradu/uploads/'.$data[$i]["dir"].'");

          </script>';
         }

         $this->display("repleace");


      }
        else{header('location:index.php?m=home&c=login');}
    }
     public function mobilemachine(){
      
       $Equipment = M("Equipment");
       $data =$Equipment->select();
       $length = count($data)-1;
       $this->assign('twice',$length);
       $this->display("index");

        for($i=0;$i<count($data);$i++)
        {

        echo '<script type="text/javascript">
          $(".machineid:eq(0)").replaceWith("<td>'.$data[$i]["serialnumber"].'</td>");
          $(".machinename:eq(0)").replaceWith("<td>'.$data[$i]["name"].'</td>");
          $("span.label.label-sm:eq('.$i.')").replaceWith("<span class=\"label label-sm label-success\">'.$data[$i]["status"].'</span>");
          $("a.blue1:eq('.$i.')").attr("href","index.php?m=home&c=machine&a=beuse&id='.$data[$i]["id"].'");
          $("a.blue2:eq('.$i.')").attr("href","/gradu/uploads/'.$data[$i]["dir"].'");

          </script>';
         }

         $this->display("repleace");

     }



     public function search($value){
       $Equipment = M("Equipment");
       $condition['serialnumber'] = array('like',$value.'%');
       $data =$Equipment->where($condition)->select();
       
       $length = count($data)-1;
       $this->assign('twice',$length);
       $this->display("231search");


        for($i=0;$i<count($data);$i++)
        {

        echo '<script type="text/javascript">
          $(".machinename:eq(0)").replaceWith("<td>'.$data[$i]["name"].'</td>");
          $("span.label.label-sm:eq('.$i.')").replaceWith("<span class=\"label label-sm label-success\">'.$data[$i]["status"].'</span>");
          $("a.blue1:eq('.$i.')").attr("href","index.php?m=home&c=machine&a=beuse&id='.$data[$i]["id"].'");
          $("a.blue2:eq('.$i.')").attr("href","/gradu/uploads/'.$data[$i]["dir"].'");

          </script>';
         }

         $this->display("repleace");
         if(!$data){
          echo '<script type="text/javascript">alert("此设备还没有录入系统");</script>';
          echo '<script>window.location.href="index.php?m=home&c=machine&a=insertvalue&value='.$value.'";</script>';
       }


    }

}