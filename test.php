<?php
   header("Content-Type: text/html;charset=utf-8");
   $username=$_POST['username'];
   if($username=='3116004725'){
    echo "用户名不可用";
      }else{
     echo "用户名可用";
      }
?>