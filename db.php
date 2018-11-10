<?php 

 $link = @mysqli_connect('localhost','root','avonline','five') or die(mysqli_connect_error());

        //2.设置字符集
          mysqli_set_charset($link,'utf8');

          $sql = "select * from shop_users  ";
          $res = mysqli_query($link,$sql);

          // print_r($link);
          if(!$res){
            die( mysqli_error($link) );
           }
          if( mysqli_num_rows($res)>0 ){
            //把结果集中所有的记录都取出来,放入$row数组中
            while($tmp= mysqli_fetch_array($res)){     //mysqli_fetch_object($res)对象
                // $row[]=$tmp;
                echo "<pre>";
                print_r($tmp);
            }
          }
             //print_r($row);
           // }else{
           //   return false;
           // }


 ?>


  $link = @mysqli_connect('localhost','root','avonline','five') or die(mysqli_connect_error());

        //2.设置字符集
          mysqli_set_charset($link,'utf8');

          $sql = "select * from shop_users ";
          $res = mysqli_query($link,$sql);

          // print_r($link);
          if(!$res){
            die( mysqli_error($link) );
           }
          if( mysqli_num_rows($res)>0 ){
            //把结果集中所有的记录都取出来,放入$row数组中
            while($tmp= mysqli_fetch_object($res)){
                $row[]=$tmp;
           }