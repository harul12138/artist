<?php  
$db = mysql_connect("127.0.0.1","root","721714")   
    or die("�������ݿ�ʧ�ܣ�");    
mysql_select_db("artist",$db)  
    or die ("�������ӵ�user".mysql_error());  
?>