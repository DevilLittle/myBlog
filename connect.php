<?php
   
   require_once('config.php');

   if(!($con=mysql_connect(HOST,USERNAME,PASSWORD))){

    echo mysql_error();
   }

   if(!mysql_select_db('myblog')){
    
      echo mysql_error();
   }else{

    echo mysql_error();
   }

   if (!mysql_query('set names utf8')) {
       
       echo mysql_error();
   }
?>