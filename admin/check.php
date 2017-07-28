<?php 
@session_start();
?>
<?php  
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{   echo"<script type='text/javascript'>alert('请填写用户名');location='login.php';</script>"; 

}  
elseif($password == "")  
{    
  echo"<script type='text/javascript'>alert('请填写密码');location='login.php';</script>";      

}  
{  //登录验证
 require_once ("mysql_connect.php");  
$sql = "select * from admin where username='$name'";  
$result = mysql_query($sql);  
$colum= mysql_fetch_array($result);  
   if($colum['password'] == $password)   
  {  
  echo"<script type='text/javascript'>alert('登录成功');location='index.php';</script>"; 
 $_SESSION['name']=1;

   }else{ 
  echo"<script type='text/javascript'>alert('密码错误');location='login.php';</script>";
       
}
}

?>