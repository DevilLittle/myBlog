<?php

    require_once('connect.php');

    $sql="select * from article order by dateline desc";

    $query=mysql_query($sql);

    if ($query&&mysql_num_rows($query)) {
        
        while ($row=mysql_fetch_assoc($query)) {
            
            $data[]=$row;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>十里春风不如你-博客频道</title>
    <link rel="stylesheet" type="text/css" href="blog.list.css">
</head>
<body>
<!--start top-->
<div id="top">
    <div class="head">
        <img class="cflag" src="images/top/Cflag.jpg" />
        <span class="span1">博客</span>
        <span>登录</span>
        <span>|</span>
        <span>注册</span>
    </div>
    <div class="view">
        <img src="images/top/bigview.jpg" />
    </div>
</div>
<!--end top-->

<!--start middle-->
<div id="middle">
    <div id="mid_top">
        <img src="images/middle/mid_top.jpg" />
    </div>
    <div id="left">
        <div class="person">
            <p class="per_bac">个人资料</p>
            <div class="picture">
                <img class="touxiang" src="images/middle/touxiang.jpg" />
                <p class="name">DevilLittle</p>
                <input type="button" value="加关注" />
                <input type="button" value="发私信" />
                <br />
                <p>---------------------------------------</p>
                <p>访问：210次</p>
                <p>积分：140</p>
                <p>等级：
                <img src="等级.jpg" />
                </p>
                <p>排名：千里之外</p>
                <br />
                <p>---------------------------------------</p>
                <p>原创：30篇</p>
                <p>转载：0篇</p>
                <p>评论：0条</p>
                <p>译文：0条</p>
            </div>
        </div>
        <div class="search">
            <p class="sea_bac">文章搜索</p>
            <input class="sea" type="text" />
            <input class="btn" type="button" value="搜索" />
        </div>

    </div>

    <div id="right">
        <div class="right_top">
            <p>【专家问答】韦玮：Python基础编程实战专题          【公告】博客新皮肤上线啦     快来领福利：C币、机械键盘 </p>
        </div>
        

        <?php

            if (empty($data)) {
                echo "当前没有文章，请管理员在后台添加文章";
            }else{

                foreach ($data as $value) {
            
        ?>
        <div class="content">
            <div class="yiduan">
                <h2><?php echo $value['title'] ?></h2>
            <p><?php echo  $value['description']; ?></p>
            </div>
           
        </div>

        <?php
                 }
             }  
        ?>
    </div>
</div>
<!--end middle-->

<!--start bottom-->
<div id="bottom">
    <img src="images/bottom/bottom.jpg">
</div>
<!--end bottom-->
</body>
</html>