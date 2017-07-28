<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>艺术动态</title>
<meta name="author" content="LHan" />
<link rel="shortcut icon" href="favicon.ico">

 <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
 <link rel="stylesheet" type="text/css" href="css/style4.css" />

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="css/card.css" />
<link rel="stylesheet" type="text/css" href="css/pattern.css" />
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
	var root = document.getElementsByTagName('html')[0];
	root.setAttribute('class', 'ff');
};
</script>
</head>
<body class="demo-1">
	<div class="container">
	<div class="container">
         <div class="header">			
			     <ol class="breadcrumb">
  <li><a href="../artist.php">Home</a></li>
  <li class="active">艺术动态</li>
</ol>
			<div class="clearfix"></div>
		</div>
	</div>
		<header class="codrops-header">
			<nav class="codrops-demos">
				<a href="index2.php">艺术礼记</a>
				<a class="current-demo" href="index.php">艺术感悟</a>
			</nav>
		</header>
		
		<div class="content">
			<!-- trianglify pattern container -->
			<div class="pattern pattern--hidden"></div>
			<!-- cards -->
			<div class="wrapper">
<?php
             require_once ("../mysql_connect.php");
             mysql_query("set names 'utf8'");
              $re="select * from news where category='艺术感悟' order by id";
              $flist=mysql_query($re);
    
      while( $ff=mysql_fetch_array($flist))
    {   ?>
				<div class="card">
					<div class="card__container card__container--closed">
						<svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
							<defs>
								<clipPath id="clipPath1">
									<polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
								</clipPath>
							</defs>
					<?php	 if(!empty($ff["picture"])){   ?> 
							<image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="../uploads/feeling/<?php echo $ff["picture"];?>"></image>
          <?php  }else{     ?>
                            <image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="img/n.jpg"></image>
          <?php   }    ?>
						</svg>
						<div class="card__content">
							<i class="card__btn-close fa fa-times"></i>
							<div class="card__caption">
								<h2 class="card__title"><?php echo $ff["title"];?></h2>
								
							</div>
							<div class="card__copy">
								<div class="meta">
									<img class="meta__avatar" src="img/pen.png" alt="author01" />
									<span class="meta__author"><?php echo $ff["writer"];?></span>
									<span class="meta__date"><?php echo $ff["date"];?></span>
								</div>
								<p><p><?php echo nl2br($ff["content"]);?></p></p>
							</div>
						</div>
					</div>
				</div>
			<!-- /cards -->
			 <?php
                                                      }
                                                 ?>
		</div><!-- /content -->

	</div>
	<!-- /container -->
	<!-- JS -->
	<script type="text/javascript" src="js/vendors/trianglify.min.js"></script>
	<script type="text/javascript" src="js/vendors/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/vendors/ScrollToPlugin.min.js"></script>
	<script type="text/javascript" src="js/vendors/cash.min.js"></script>
	<script type="text/javascript" src="js/Card-circle.js"></script>
	<script type="text/javascript" src="js/demo.js"></script>
	
</body>
</html>