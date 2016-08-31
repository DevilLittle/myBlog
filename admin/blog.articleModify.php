<?php
   require_once('../connect.php');

   $id=$_GET['id'];
   $query=mysql_query("select * from article where id=$id");

   $data=mysql_fetch_assoc($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSDN-markdown编辑器</title>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    img{
        vertical-align:bottom;
        display: block;
}
    #up{
        width: 100%;
        height: 600px;

    }

    #up #form{
        position: relative;
    }
    #up #form p{
        width: 100%;
        height: 30px;
        background: #FFF5D4;
        font-size: 25px;
        margin: 0;
    }
    #up #form .modify{
        font-size: 30px;
        color: white;
        width: 120px;
        height: 50px;
        background: #C21120;
        position: absolute;
        top: 40px;
        right: 50px;
    }
    
    </style>
</head>
<body>
<div id="up">
    <img src="image/articleAdd1.jpg" />

    <form id="form" method="post" action="blog.articleAdd.handle.php">
    <input type="hidden" name="id" value="<?php echo $data['id']?>" />
        <p>文章标题</p>
        <label for="title"></label>
        <textarea name="title" id="title" cols="120" rows="5"><?php echo $data['title'];?></textarea>
        <img src="image/articleAdd2.jpg" />

        <p class="p1">文章描述</p>
        <label for="description"></label>
        <textarea name="description" id="description" cols="190" rows="5"><?php echo $data['description'];?></textarea>
               
        <p class="p2">文章内容</p>
        <label for="content"></label>
        <textarea name="content" id="content" cols="190" rows="100%"><?php echo $data['content'];?></textarea>
                    
        <input class="modify" type="submit" name="button" id="button" value="发布博客" />           
        
    </form>
        
   
</div>
</body>
</html>