<!DOCTYPE html>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<?php
     require_once ("mysql_connect.php");
		error_reporting(E_ALL);
		ini_set('display_errors',true);
			$id="-1";
	if(is_array($_POST)&&count($_POST)>0)//先判断是否通过Post提交了请求
    {
        
	        if(isset($_POST["id"]))
	       {
				$id=strip_tags($_POST['id'] );
			}
	       
	        if(isset($_POST["category"]))
	        {
				$category=strip_tags($_POST['category'] );
			}
			if(isset($_POST["abstract"]))
	        {
				$abstr=strip_tags($_POST['abstract'] );
			}
	        if(isset($_POST["info"]))
	        {
				$info=strip_tags($_POST['info'] );
			}
	
	      mysql_query("set names 'utf8'");
			$sql = "UPDATE `artfam` SET `category` = '$category',`abstr` = '$abstr',
				`info` = '$info' WHERE `artfam`.`id` =$id";
			 $result=mysql_query($sql);  
         if(!$result)
        {
  
          echo"<script type='text/javascript'>alert('信息修改失败');; 
      location='modicateg.php';</script>"; 
        }
        else
        {
          echo"<script type='text/javascript'>alert('信息修改成功');; 
      location='category.php';</script>"; 
        }
			
		
	}
	if(is_array($_GET)&&count($_GET)>0)//先判断是否通过Post提交了请求
    {
        if(isset($_GET["id"]))
        {
			$id=strip_tags($_GET['id'] );
		}
		mysql_query("set names 'utf8'");
	     $sql="select * from artfam where id=".$id;//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $list=mysql_fetch_array($sq);
	}	
?>
	<head>
		<meta charset="utf-8" />
		<title>ADMIN-后台管理</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.css" />

		<!-- fonts -->

	

		<!-- ace styles -->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-star"></i>
							ADMIN后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">				

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">

								<li>
									<a href="index.php">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-user"></i>
												个人信息
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="timelist.php">
										<i class="btn btn-xs btn-primary icon-heart"></i>
										时间轴
									</a>
								</li>

								<li>
									<a href="artwork.php">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-picture"></i>
												作品
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="newslist.php">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-list"></i>
												动态
											</span>
										</div>
									</a>
								</li>

								<li>
									<a href="message.php">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover icon-list-alt"></i>
												留言板
											</span>
										</div>
									</a>
								</li>
							</ul>
						</li>				
								

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎,</small>
									admin
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="index.php">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="login.php">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

		

					<ul class="nav nav-list">
						<li>
							<a href="index.php">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 个人信息 </span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-heart"></i>
								<span class="menu-text"> 时间轴 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
											<a href="adtimeline.php">
												<i class="icon-plus"></i>
												时间轴更新												
											</a>
											
												<li>
													<a href="timelist.php">
														<i class="icon-pencil"></i>
														时间轴管理
													</a>
												</li>										
										</li>
										</ul>
								</li>
						<li>
							<a href="portolio.php">
								<i class="icon-book"></i>
								<span class="menu-text"> 印象 </span>
							</a>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-picture"></i>
								<span class="menu-text"> 作品管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">

								<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												作品分类管理
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
										     	<li class="active">
													<a href="category.php">
														<i class="icon-plus"></i>
														作品类别管理
													</a>
												</li>
												<li>
													<a href="adartwork.php">
														<i class="icon-plus"></i>
														上传新作品
													</a>
												</li>
												<li>
													<a href="artwork.php">
														<i class="icon-eye-open"></i>
														查看作品列表
													</a>
												</li>
											</ul>
										</li>
								<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												销售作品
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="adsalework.php">
														<i class="icon-plus"></i>
														上传新作品
													</a>
												</li>
												<li>
													<a href="saleswork.php">
														<i class="icon-eye-open"></i>
														查看作品列表
													</a>
												</li>
											</ul>
										</li>
							
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 动态管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>
												个人新闻动态
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="addnews.php">
														<i class="icon-plus"></i>
														上传新动态
													</a>
												</li>
												<li>
													<a href="newslist.php">
														<i class="icon-eye-open"></i>
														查看动态列表
													</a>
												</li>
											</ul>
										</li>
							
								<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												艺术礼记
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="addreview.php">
														<i class="icon-plus"></i>
														上传
													</a>
												</li>
												<li>
													<a href="review.php">
														<i class="icon-eye-open"></i>
														查看列表
													</a>
												</li>
											</ul>
										</li>
							<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												艺术感悟
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="addfeeling.php">
														<i class="icon-plus"></i>
														上传
													</a>
												</li>
												<li>
													<a href="feeling.php">
														<i class="icon-eye-open"></i>
														查看列表
													</a>
												</li>
											</ul>
										</li>
							
							</ul>
						</li>
                 	<li>
							<a href="message.php">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 留言板管理 </span>
							</a>
						</li>	
				
						
					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>


				<div class="main-content">
					<div class="breadcrumbs" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="index.php">首页</a>
							</li>

							<li>
								<a href="category.php">作品类别管理</a>
							</li>
							<li class="active">类别编辑</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="modicateg.php" method="post">
								<input type="hidden" name="id" value="<?php echo $list["id"]; ?>">
	                          <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 类别名 </label>

										<div class="col-sm-9">
											<input type="text" name="category" id="form-field-1" class="col-xs-10 col-sm-5" value="<?php echo $list["category"];?>" />
										</div>
									</div>
															<div class="space-16"></div>
														<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 摘要 </label>

										<div class="col-sm-6">
											<textarea name="abstract" class="form-control" rows="3"><?php echo $list["abstr"];?></textarea>
										</div>
									</div>
                                     <div class="space-16"></div>
														<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 介绍 </label>

										<div class="col-sm-6">
											<textarea name="info" class="form-control" rows="7"><?php echo $list["info"];?></textarea>
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-7">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>
									</form>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; 选择皮肤</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> 固定导航条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> 固定滑动条</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs">固定面包屑</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl">切换到左边</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								切换窄屏
								<b></b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

</body>
</html>
