<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

<?php
     require_once ("mysql_connect.php");
		error_reporting(E_ALL);
		ini_set('display_errors',true);
	if(is_array($_POST)&&count($_POST)>0)//先判断是否通过Post提交了请求,count()返回数组中元素的数目
    {
       	if(isset($_FILES['file']['name']))
	        {  

	         $uploads_dir = '../uploads/';
				 $tmp_name = $_FILES["file"]["tmp_name"];
          $fileName=$_FILES['file']['name'];    
            $name0 = iconv('utf-8','gb2312',$fileName); //利用Iconv函数对文件名进行重新编码
        move_uploaded_file($tmp_name, "$uploads_dir/$name0");
	}
		if(isset($_FILES['file2']['name']))
	 {    
	         $uploads_dir2 = '../gallery/uploads';
				 $tmp_name2 = $_FILES["file2"]["tmp_name"];
          $fileName2=$_FILES['file2']['name'];    
          $name = iconv('utf-8','gb2312',$fileName2); //利用Iconv函数对文件名进行重新编码
        move_uploaded_file($tmp_name2, "$uploads_dir2/$name");
	}
	        if(isset($_POST["namee"]))
	        {
				$name=strip_tags($_POST['namee'] ); //strip_tags() 函数剥去字符串中的 HTML、XML 以及 PHP 的标签。
			}
			 if(isset($_POST["addr"]))
	        {
				$addr=strip_tags($_POST['addr'] );
			}
			 if(isset($_POST["telee"]))
	        {
				$tele=strip_tags($_POST['telee'] );
			}
			if(isset($_POST["emaill"]))
	        {
				$email=strip_tags($_POST['emaill'] );
			}
			if(isset($_POST["web"]))
	        {
				$web=strip_tags($_POST['web'] );
			}
			if(isset($_POST["weiboo"]))
	        {
				$weibo=strip_tags($_POST['weiboo'] );
			}
			if(isset($_POST["info"]))
	        {
				$info=strip_tags($_POST['info'] );
			}
			

	    if(empty($fileName)&&!empty($fileName2)){
	    mysql_query("set names 'utf8'");
			$sql ="UPDATE `user` SET `name` = '$name',`info` = '$info',`telephone` = '$tele',`email` = '$email',`weibo` = '$weibo',`website` = '$web',`address` = '$addr',`music` = '$fileName2'
			WHERE `user`.`id` ='2'";
			 $result=mysql_query($sql);  
         if(!$result)
        {
          echo"<script type='text/javascript'>alert('个人信息编辑失败');; 
      location='index.php';</script>"; 
        }
        else
        {     
          echo"<script type='text/javascript'>alert('个人信息编辑成功');; 
      location='index.php';</script>"; 
        }
	    }else if(!empty($fileName)&&empty($fileName2)){
	     mysql_query("set names 'utf8'");
			$sql ="UPDATE `user` SET `name` = '$name',`info` = '$info',`telephone` = '$tele',`email` = '$email',`weibo` = '$weibo',`website` = '$web',`address` = '$addr',
			`profile` = '$fileName' WHERE `user`.`id` ='2'";
			 $result=mysql_query($sql);  
         if(!$result)
        {
          echo"<script type='text/javascript'>alert('个人信息编辑失败');; 
     location='index.php';</script>"; 
        }
        else
        {     
          echo"<script type='text/javascript'>alert('个人信息编辑成功');; 
     location='index.php';</script>"; 
        }
		
	}else if(empty($fileName)&&empty($fileName2)){
  mysql_query("set names 'utf8'");
			$sql ="UPDATE `user` SET `name` = '$name',`info` = '$info',`telephone` = '$tele',`email` = '$email',`weibo` = '$weibo',`website` = '$web',`address` = '$addr'
			WHERE `user`.`id` ='2'";
			 $result=mysql_query($sql);  
        if(!$result)
        {
  
          echo"<script type='text/javascript'>alert('个人信息编辑失败');; 
     location='index.php';</script>"; 
        }
        else
        {     
          echo"<script type='text/javascript'>alert('个人信息编辑成功');; 
     location='index.php';</script>"; 
        }
        }else{
         mysql_query("set names 'utf8'");
			$sql ="UPDATE `user` SET `name` = '$name',`info` = '$info',`telephone` = '$tele',`email` = '$email',`weibo` = '$weibo',`website` = '$web',`address` = '$addr',
			`profile` = '$fileName',`music` = '$fileName2' WHERE `user`.`id` ='2'";
			 $result=mysql_query($sql);  
        if(!$result)
        {
  
          echo"<script type='text/javascript'>alert('个人信息编辑失败');; 
     location='index.php';</script>"; 
        }
        else
        {     
          echo"<script type='text/javascript'>alert('个人信息编辑成功');; 
     location='index.php';</script>"; 
        }
        }

	}
	
?>
</html>