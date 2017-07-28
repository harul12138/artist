
<!DOCTYPE html>
<html>
<head>
<title>最新动态</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

 <link rel="stylesheet" type="text/css" href="css/demo.css" />
   <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="favicon.ico" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<?php 
require_once ("../mysql_connect.php");
 error_reporting(E_ALL);
  ini_set('display_errors',true);
		$id="-1";
		if(is_array($_GET)&&count($_GET)>0)//先判断是否通过Post提交了请求
	    {
	        if(isset($_GET["id"]))
	        {
				$id=strip_tags($_GET['id'] );
			}
		}

		if(intval($id)>0)
		{
		     mysql_query("set names 'utf8'");
			$sql="select * from news where id=".$id;//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $nn=mysql_fetch_array($sq);
		}
?>
<body>
	<!-- header-section-starts -->
			
<div class="container">
<div class="header">
			 <ol class="breadcrumb">
  <li><a href="../artist.php">Home</a></li>
  <li><a href="#">艺术动态</a></li>
  <li class="active">最新动态-latest news</li>
</ol>
		
			<div class="clearfix"></div>
		</div>
</div>
	<div class="container">
		<div class="content">
			<div class="single-page">
				<div class="print-main">
					<h3><?php echo $nn["title"];?></h3>
					<p class="sub_head">Posted on <?php echo $nn["date"];?></p>

					<?php if(!empty($nn["website"])){  ?>
					<p class="sub_head">相关链接：<a href="<?php echo $nn["website"];?>" target="_blank"><?php echo $nn["website"];?></a></p>
				<?php	}   ?>

					<img src="images/111.jpg" class="img-responsive" alt="" />
					<p class="ptext"><?php echo nl2br($nn["content"]);?></p>
				</div>
				
			</div>
			
			
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="col-md-3 footer-links">

				<h4>联系方式</h4>
								 <?php 
require_once ("../mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
?>
						   <a href="#">电话 telephone--<?php echo $user["telephone"];?></a>
						   <a href="#"> 邮箱 email--<?php echo $user["email"];?></a>
							<a href="<?php echo $user["weibo"];?>" target="_blank">画家<?php echo $user["name"];?>的微博</a>
							<a href="#">地址 address--<?php echo $user["address"];?></a>
						
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</body>
</html>