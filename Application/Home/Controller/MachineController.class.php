<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class MachineController extends Controller {
    public function index(){

    	

    //  $a=0;

       $Equipment = M("Equipment");
       $data =$Equipment->select();
       //dump($data);
       $length = count($data)-1;
       $this->assign('twice',$length);
       $this->display();


        for($i=0;$i<count($data);$i++)
        {

        echo '<script type="text/javascript">
          $(".machineid:eq(0)").replaceWith("<td>'.$data[$i]["serialnumber"].'</td>");
          $(".machinename:eq(0)").replaceWith("<td>'.$data[$i]["name"].'</td>");
          $(".machineown:eq(0)").replaceWith("<td>'.$data[$i]["owner"].'</td>");
          $(".time:eq(0)").replaceWith("<td>'.$data[$i]["time"].'</td>");
          </script>';
          }

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
        $data['new']=$_POST["new1"];
        $data['owner']=$_POST["owner"];
        
        $Equipment->add($data);
      

    }


}


?>