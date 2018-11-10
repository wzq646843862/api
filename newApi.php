<?php 
header("Content-type:text/html;charset=utf-8");
class TestApi  //类名
{
	
	public function jsonReturn($data){
        $return = array(
            'status' => 200,    /* 返回状态，200 成功，500失败 */
            'data' => $data   ,
            'message' => '获取成功',
        );
        echo json_encode($return);die;// json_encode()是转成json数据的函数  解除json的函数是 json_decode();
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
 /***************************************数据库连接***************************************************/  

     $link = @mysqli_connect('localhost','root','avonline','five') or die(mysqli_connect_error());
     mysqli_set_charset($link,'utf8');//设置字符集
     $sql = "select * from shop_users ";//sql语句
     $res = mysqli_query($link,$sql); //请教函数
     if(!$res)
     {
      die( mysqli_error($link) );//判断请求是否存在抛出异常
     }

     if( mysqli_num_rows($res)>0 )//判断结果集
     {
            //把结果集中所有的记录都取出来,放入$row数组中
            while($tmp= mysqli_fetch_object($res))   //mysqli_fetch_array($res)数组形式查找
            {
                $data[] = $tmp;//将查询出来的对象放入到数组中；
            }
        
     }
/********************************************数据库结束***********************************************/        
         $this -> jsonReturn($data);//返回闭包函数 转换json数组
   }

}

      $print = new TestApi(); //实例化
      $print -> getList(); //调用类下的方法
    
 ?>