<?php 
@session_start();
?>
<?php  
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{   echo"<script type='text/javascript'>alert('����д�û���');location='login.php';</script>"; 

}  
elseif($password == "")  
{    
  echo"<script type='text/javascript'>alert('����д����');location='login.php';</script>";      

}  
{  //��¼��֤
 require_once ("mysql_connect.php");  
$sql = "select * from admin where username='$name'";  
$result = mysql_query($sql);  
$colum= mysql_fetch_array($result);  
   if($colum['password'] == $password)   
  {  
  echo"<script type='text/javascript'>alert('��¼�ɹ�');location='index.php';</script>"; 
 $_SESSION['name']=1;

   }else{ 
  echo"<script type='text/javascript'>alert('�������');location='login.php';</script>";
       
}
}

?>