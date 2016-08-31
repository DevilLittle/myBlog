<?php
    
    require_once('../connect.php');

    $sql="select * from article order by dateline desc";

    $query=mysql_query($sql);
    if ($query&&mysql_num_rows($query)) {
        
        while ($row=mysql_fetch_assoc($query)) {
            $data[]=$row;
        }
    }else{
        $data=array();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>文章列表-博客频道</title>
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
    }
    img{
    vertical-align:bottom;
    display: block;
    }
    #top{
        width: 100%;
    }

    #top .person{
        width: 71%;
        height: 150px;
        margin: 0 auto;
        position: relative;
    }
    #top .person img{
        width: 100px;
        height: 100px;
    }
    #top .person .span1{
        position: absolute;
        top: 30px;
        left: 110px;
        font-size: 18px;
    }
    #top .person .span2{
        position: absolute;
        top: 30px;
        left:220px;
        font-size: 19px;
        color: blue;
    }
    #top .person .span3{
        position: absolute;
        top: 65px;
        left: 110px;
        font-size: 15px;
        color: blue;
    }
    #top .person .span4{
        position: absolute;
        top: 65px;
        left: 185px;
        font-size: 15px;
        color: blue;
    }

    #middle #list{
        width: 71%;
        margin: 0 auto;
    }
    #list .fuxuan{
        height: 30px;
        padding: 15px 500px 0px 0px;
        border-bottom: 1px solid black;
        margin-bottom: 10px;
    }
    #list table{
        width: 100%;
    }
    #list table .tr1{
        height: 30px;
        font-size: 18px;
        font-weight: bold;
    }
    #list table .tr1 td{
        border-radius: 25px;
        -webkit-box-shadow: 1px 1px 3px #ccc;
        -moz-box-shadow:1px 1px 3px #ccc;
        box-shadow:1px 1px 3px #ccc;
    }
    #list table .tr2 .juzhong{
        text-align: center;
    }
    #list table .tr2 .active{
        text-indent: 30px;
    }
    #list .number{
        width: 8%;
        text-align: center;
    }
    #list .title{
        width: 67%;
        text-indent: 30px;
    }
    #list .caozuo{
        width: 25%;
        text-align: center;
    }

    #list td a{
        text-decoration: none;
    }
    #list td a:hover{
        color: red;
    }
    #bottom{
        position: absolute;
        bottom: 0px;
    }
    </style>
</head>
<body>
<div id="top">
    <img src="image/articleManage.jpg">
    <div class="person">
        <img src="image/touxiang.jpg">
        <span class="span1">DevilLittle</span>
        <span class="span2">十里春风不如你</span>
        <span class="span3">个人主页</span>
        <span class="span4">我的博客</span>
    </div>
</div>

<div id="middle">
    <img src="image/daohang.jpg">
    <div id="list">
        <div class="fuxuan">
            类别：
            <select>
                <option value="0">全部</option>
                <option value="1">Javascript错误</option>
                <option value="2">CSS</option>
                <option value="3">AJAX</option>
                <option value="4">git</option>      
                <option value="5">Node.js</option>
            </select>
            类型：
            <select>
                <option value="0">全部</option>
            </select>
            属性：
            <select>
                <option value="0">请选择</option>
            </select>
        </div>
        <table>    
            <tr class="tr1">
                <td class="number">编号</td>
                <td class="title">标题</td>
                <td class="caozuo">操作</td>
            </tr>
            <?php
               if (!empty($data)) {
                   foreach ($data as $value) {
            ?>
            <tr class="tr2">
                <td class="juzhong"><?php echo $value['id']?></td>
                <td class="active"><?php echo $value['title']?></td>
                <td class="juzhong">
                    <a href="blog.articleModify.php?id=<?php echo $value['id'];?>">修改</a>&nbsp;&nbsp;&nbsp;
                    <a href="blog.articleDel.php?id=<?php echo $value['id'];?>">删除</a>
                </td>
            
            </tr>
            <?php
                    }
               }
            ?>
        </table>
    </div>
</div>
<div id="bottom">
    <img src="image/bottom.jpg">
</div>
</body>
</html>