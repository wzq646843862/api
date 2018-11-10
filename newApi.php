<?php 
header("Content-type:text/html;charset=utf-8");
class TestApi
{
	
	public function jsonReturn($data){
        $return = array(
            'status' => 200,    /* 返回状态，200 成功，500失败 */
            'data' => $data   ,
            'message' => '获取成功',
        );
        echo json_encode($return);die;
    }

    

    public function success($message){
           $return = array(
               'status' => 200,    /* 返回状态，200 成功，500失败 */
               'message' => $message,
           );
           echo json_encode($return);die;
       }


     public function error($message){
          $return = array(
              'status' => 500,    /* 返回状态，200 成功，500失败 */
              'message' => $message = '获取失败',
          );
          echo json_encode($return);die;
        }

     public function getList(){
        $data = array('name' =>'wzq' ,'age' => '58' );
        $this -> jsonReturn($data);
       }

}

      $print = new TestApi();
      $print -> getList();
    
 ?>