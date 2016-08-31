<?php
   require_once('../connect.php');
   
   $id=$_POST['id'];
   $title=$_POST['title'];
   $description=$_POST['description'];
   $content=$_POST['content'];
   $dateline=time();

   $updatesql="update article set title='$title',description='$description',connect='$connect',dateline=$dateline where id=$id";

   if (mysql_query($updatesql)) {
       
       echo "<script>alert('博客修改成功');window.location.href='blog.articleManage.php';</script>";
   }else  {

       echo "<script>alert('博客修改失败');window.location.href='blog.articleManage.php';</script>";
   }
?>