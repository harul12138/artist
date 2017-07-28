<!doctype html>
<html lang="zh" class="no-js">
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
	<link rel="stylesheet" type="text/css" href="css/style3.css" />

	<script src="js/modernizr-custom.js"></script>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body class="demo-3">
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
                                       $re="select * from artfam where id=3";
                                             $alist=mysql_query($re);
                                             $cc=mysql_fetch_array($alist);
                                        $back=$cc["category"];
              
                                       $aa="select * from artwork where category='$back'";
                                             $bb=mysql_query($aa);
                                         while( $dd=mysql_fetch_array($bb)){
                     ?>
				<div class="grid__item" data-size="<?php echo $dd["height"];?>x<?php echo $dd["width"];?>">
					<a href="../uploads/artwork/<?php echo $dd["picture"];?>" class="img-wrap"><img src="../uploads/artwork/<?php echo $dd["picture"];?>" alt="<?php echo $dd["title"];?>" />
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
		<!-- /content -->
		
	</div>
	<!-- /container -->
	
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<script>
		(function() {
			var support = { transitions: Modernizr.csstransitions },
				// transition end event name
				transEndEventNames = { 'WebkitTransition': 'webkitTransitionEnd', 'MozTransition': 'transitionend', 'OTransition': 'oTransitionEnd', 'msTransition': 'MSTransitionEnd', 'transition': 'transitionend' },
				transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
				onEndTransition = function( el, callback ) {
					var onEndCallbackFn = function( ev ) {
						if( support.transitions ) {
							if( ev.target != this ) return;
							this.removeEventListener( transEndEventName, onEndCallbackFn );
						}
						if( callback && typeof callback === 'function' ) { callback.call(this); }
					};
					if( support.transitions ) {
						el.addEventListener( transEndEventName, onEndCallbackFn );
					}
					else {
						onEndCallbackFn();
					}
				};

			new GridFx(document.querySelector('.grid'), {
				imgPosition : {
					x : 1,
					y : 0.75
				},
				pagemargin : 50,
				onOpenItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							var delay = Math.floor(Math.random() * 150);
							el.style.WebkitTransition = 'opacity .4s ' + delay + 'ms cubic-bezier(.7,0,.3,1), -webkit-transform .4s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							el.style.transition = 'opacity .4s ' + delay + 'ms cubic-bezier(.7,0,.3,1), transform .4s ' + delay + 'ms cubic-bezier(.7,0,.3,1)';
							
							el.style.WebkitTransform = 'translate3d(0,400px,0)';
							el.style.transform = 'translate3d(0,400px,0)';
							el.style.opacity = 0;
						}
					});
				},
				onCloseItem : function(instance, item) {
					instance.items.forEach(function(el) {
						if(item != el) {
							el.style.WebkitTransition = 'opacity .3s, -webkit-transform .3s';
							el.style.transition = 'opacity .3s, transform .3s';

							el.style.WebkitTransform = 'translate3d(0,0,0)';
							el.style.transform = 'translate3d(0,0,0)';
							el.style.opacity = 1;

							onEndTransition(el, function() {
								el.style.transition = 'none';
								el.style.WebkitTransform = 'none';
							});
						}
					});
				}
			});
		})();
	</script>
</body>
</html>