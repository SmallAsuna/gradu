<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class MachineController extends Controller {
    public function index(){
      $this->assign('machinenumber',"123");
      $this->assign('machinename',"示波器");
      $this->assign('machineown',"图像所");
      $this->assign('machinetime',"买入时间");
    	$this->display();


      $this->assign('machinenumber',"1234");
      $this->assign('machinename',"频谱仪");
      $this->assign('machineown',"电磁所");
      $this->assign('machinetime',"2007");


      echo '<script type="text/javascript">
           window.onload = function(){
              $("#display2").append($(".displaytable").clone());
            };
            </script>';




    }




}


?>