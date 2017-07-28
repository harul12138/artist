<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>主要获奖作品浏览</title>
	    <meta name="description" content="artist show" />
        <meta name="author" content="LHan" />
		<link rel="shortcut icon" href="../img/favicon.ico">

		<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
		<div class="header">
			 <ol class="breadcrumb">
  <li><a href="../artist.php">Home</a></li>
  <li><a href="#">艺术作品展</a></li>
  <li class="active">主要获奖作品展示</li>
</ol>
		</div>
			<section class="grid-wrap">
				<ul class="grid swipe-down" id="grid">
					<li class="title-box">
						<h2>获奖作品展</h2>
					</li>
					 <?php
                                      require_once ("../mysql_connect.php");
                                       mysql_query("set names 'utf8'");                                   
                                       $aa="select * from artwork where typical='yes' limit 0,7";
                                             $bb=mysql_query($aa);
                                         while( $dd=mysql_fetch_array($bb)){
                     ?>
					<li><a href="#"><img src="../uploads/artwork/<?php echo $dd["picture"];?>" alt="<?php echo $dd["title"];?>" width="100%" height="320px"><h3><?php echo $dd["prize"];?></h3></a></li>
						<?php
						 }?>
					<li><a href="#"><img src="img/2.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/3.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/4.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/5.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/6.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/7.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/8.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/9.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/10.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/11.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/12.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/13.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/14.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/1.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/2.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/3.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/4.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/5.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/6.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/7.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/8.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/9.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/10.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
					<li><a href="#"><img src="img/11.jpg" alt="dummy"><h3>A fantastic title</h3></a></li>
			
				</ul>
			</section>
		
		</div><!-- /container -->
		<script src="js/masonry.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/colorfinder-1.1.js"></script>
		<script src="js/gridScrollFx.js"></script>
		<script>
			new GridScrollFx( document.getElementById( 'grid' ), {
				viewportFactor : 0.4
			} );
		</script>
	</body>
</html>