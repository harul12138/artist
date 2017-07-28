<?php  
$db = mysql_connect("127.0.0.1","root","721714")   
    or die("连接数据库失败！");    
mysql_select_db("artist",$db)  
    or die ("不能连接到user".mysql_error());  
?>