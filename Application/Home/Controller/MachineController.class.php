<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class MachineController extends Controller {
    public function index(){
      $this->assign('machinenumber',"123");
      $this->assign('machinename',"示波器");
      $this->assign('machineown',"图像所");
      $this->assign('machinetime',"2007");
    	$this->display();

      $a=0;
  //    $this->assign('machinenumber',"1234");
  //    $this->assign('machinename',"频谱仪");
  //    $this->assign('machineown',"电磁所");
  //    $this->assign('machinetime',"2007");


          echo '<script type="text/javascript">
          $(".displaytbody").append($(".displaytable").clone());
          $(".one:eq('.$a.')").replaceWith("<td>测试2</td>");
          </script>';




    }




}


?>