<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>作品分类展示</title>
    <meta name="author" content="LHan" />
    <link rel="shortcut icon" href="favicon.ico">

 <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css" />
     
	<script src="js/modernizr-custom.js"></script>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body class="demo-1">

	<div class="container">
         <div class="header">		
         <ol class="breadcrumb">
  <li><a href="../artist.php">Home</a></li>
  <li><a href="#">艺术作品展</a></li>
  <li class="active">作品分类展示</li>
</ol>			
			
			<div class="clearfix"></div>
		</div>
	
		<header class="htmleaf-header">
			<h1>作品分类展示 <span>Category</span></h1>
			
			<nav class="htmleaf-demos">
			                     <?php
                                      require_once ("../mysql_connect.php");
                                       mysql_query("set names 'utf8'");
                                       $re="select * from artfam order by id limit 0,4";
                                             $alist=mysql_query($re);
    
                                            while( $cc=mysql_fetch_array($alist))
                                                  {   ?>
				<a href="<?php echo $cc["page"];?>"><?php echo $cc["category"];?></a>
				<?php      }   ?>
			</nav>
		</header>
		<div class="content">
			<div class="grid">
			               <?php
                                      require_once ("../mysql_connect.php");
                                       mysql_query("set names 'utf8'");
                                       $re="select * from artfam where id=1";
                                             $alist=mysql_query($re);
                                             $cc=mysql_fetch_array($alist);
                                        $back=$cc["category"];
              
                                       $aa="select * from artwork where category='$back'";
                                             $bb=mysql_query($aa);
                                         while( $dd=mysql_fetch_array($bb)){
                     ?>
				<div class="grid__item" data-size="<?php echo $dd["height"];?>x<?php echo $dd["width"];?>">
					<a href="../uploads/artwork/<?php echo $dd["picture"];?>" class="img-wrap"><img src="../uploads/artwork/<?php echo $dd["picture"];?>" alt="../uploads/artwork/<?php echo $dd["title"];?>" />
						<div class="description description--grid"><?php echo $dd["title"];?></div>
					</a>
				</div>
				<?php
						 }?>
				
			</div>
			<!-- /grid -->
			<div class="preview">
				<button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
				<div class="description description--preview"></div>
			</div>
			<!-- /preview -->
		</div>
		
	</div>
	<!-- /container -->
	
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function() {
			// create SVG circle overlay and append it to the preview element
			function createCircleOverlay(previewEl) {
				var dummy = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
				dummy.setAttributeNS(null, 'version', '1.1');
				dummy.setAttributeNS(null, 'width', '100%');
				dummy.setAttributeNS(null, 'height', '100%');
				dummy.setAttributeNS(null, 'class', 'overlay');
				var g = document.createElementNS('http://www.w3.org/2000/svg', 'g');
				var circle = document.createElementNS("http://www.w3.org/2000/svg", "circle");
				circle.setAttributeNS(null, 'cx', 0);
				circle.setAttributeNS(null, 'cy', 0);
				circle.setAttributeNS(null, 'r', Math.sqrt(Math.pow(previewEl.offsetWidth,2) + Math.pow(previewEl.offsetHeight,2)));
				dummy.appendChild(g);
				g.appendChild(circle);
				previewEl.appendChild(dummy);
			}
			
			new GridFx(document.querySelector('.grid'), {
				onInit : function(instance) {
					createCircleOverlay(instance.previewEl);
				},
				onResize : function(instance) {
					instance.previewEl.querySelector('svg circle').setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
				},
				onOpenItem : function(instance, item) {
					// item's image
					var gridImg = item.querySelector('img'),
						gridImgOffset = gridImg.getBoundingClientRect(),
						win = {width: document.documentElement.clientWidth, height: window.innerHeight},
						SVGCircleGroupEl = instance.previewEl.querySelector('svg > g'),
						SVGCircleEl = SVGCircleGroupEl.querySelector('circle');
						
					SVGCircleEl.setAttributeNS(null, 'r', Math.sqrt(Math.pow(instance.previewEl.offsetWidth,2) + Math.pow(instance.previewEl.offsetHeight,2)));
					// set the transform for the SVG g node. This will animate the circle overlay. The origin of the circle depends on the position of the clicked item.
					if( gridImgOffset.left + gridImg.offsetWidth/2 < win.width/2 ) {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(' + win.width + ', ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
					else {
						SVGCircleGroupEl.setAttributeNS(null, 'transform', 'translate(0, ' + (gridImgOffset.top + gridImg.offsetHeight/2 < win.height/2 ? win.height : 0) + ')');
					}
				}
			});
		})();
	</script>
</body>
</html>