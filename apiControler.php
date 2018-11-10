<?php
class TestController{
    private $db = null;

    // function __construct(){
    //     require './db.class.php';
    //     $this -> db = new db();
    // }

    private function jsonReturn($data){
        $return = array(
            'status' => 200,    /* 返回状态，200 成功，500失败 */
            'data' => $data   ,
            'message' => '获取成功',
        );
        echo json_encode($return);die;
    }

 
    private function success($message){
        $return = array(
            'status' => 200,    /* 返回状态，200 成功，500失败 */
            'message' => $message,
        );
        echo json_encode($return);die;
    }


    private function error($message){
        $return = array(
            'status' => 500,    /* 返回状态，200 成功，500失败 */
            'message' => $message,
        );
        echo json_encode($return);die;
    }


    public function getList(){
        // $class_id = (int) $_GET['class_id'];
        // $sql = " select student_id,student_name,gander from student where class_id = '$class_id' and is_delete = 0 ";
        // $list = $this -> db -> getAll($sql);
        // if(empty($list)){
        //     $this -> error('暂无数据');
        // }
        // $data['list'] = $list;
        $data = array('name' =>'wzq' ,'age' => '58' );
        $this -> jsonReturn($data);
    }
     
    public function getSignStatus(){
        // $student_id = (int) $_GET['student_id'];
        $time = time();
        $start_time = strtotime(date('Y-m-d',$time) . ' 00:00:00');
        $end_time = $start_time = 3600 * 24;
        // $sql = " select status from student_status where student_id = '$student_id' ";
        // $status = $this -> db -> getOne($sql);
        if($status == 1){
            $this -> success('已打卡');
        }else{
            $this -> error('未打卡');
        }
    }

}
$print = new TestController();
echo "<pre>";
$print -> getSignStatus();