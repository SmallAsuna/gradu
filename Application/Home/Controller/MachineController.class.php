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
        
        $Equipment->add($data);
      

    }


}


?>