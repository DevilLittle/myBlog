<?php
   require_once('../connect.php');
  
   if(!(isset($_POST['title'])&&(!empty($_POST['title'])))){

    echo "<script >alert('标题不能为空');window.location.href='blog.articleAdd.php';</script>";
   }

   $title=$_POST['title'];
   $description=$_POST['description'];
   $content=$_POST['content'];
   $dateline=time();

   $insertsql="insert into article(title,description,content,dateline) values('$title','$description','$content','$dateline') ";

   $sql="select * from article";
   $query=mysql_query($sql);
  for ($i=0; $i <mysql_num_rows($query) ; $i++) { 
    $id=$id+1;
    $updatesql="update article set id=$id";
  }

   if (mysql_query($insertsql)) {
       
       echo "<script>alert('博客发布成功');window.location.href='blog.articleManage.php';</script>";
   }else  {
    echo "<script>alert('博客发布失败');window.location.href='blog.articleManage.php';</script>";
   }
?>