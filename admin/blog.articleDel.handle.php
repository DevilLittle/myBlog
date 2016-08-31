<?php
   
   require_once('../connect.php');
   
   $id=$_GET['id'];
   $deletesql="delete from article where id=$id";

   if(mysql_query($deletesql)){

    echo "<script>alert('删除博客成功');</script>";
   }else  {
       echo "<script>alert('删除博客失败');</script>";
   }
?>