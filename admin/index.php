<?php
@session_start();
if($_SESSION['name']!=1){
@Header("location:login.php");}
?>

<!DOCTYPE html>
<html lang="en">
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

<!-- page specific plugin styles -->

		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="assets/css/select2.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-editable.css" />
		<!-- ace styles -->
    <link rel="shortcut icon" href="assets/favicon.ico" />
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
						<li class="active">
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
										     	<li>
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
							<li class="active">个人信息</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								Profile
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="clearfix">					
	                          <div class="alert alert-info">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>
											<strong>Heads up!</strong>
                                        头像图片用于引导页，个人链接用于点击图片后链接到的站点，可为百科介绍或有关画家信息介绍的网站链接，其余信息均显示在主页的联系方式中。
										</div>
										<div class="alert alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="icon-remove"></i>
											</button>
											头像无需每次编辑时均上传，首次上传后在需要修改时再上传即可。
										</div>

									<div class="pull-right">
										<span class="green middle bolder">修改个人信息: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div data-toggle="buttons" class="btn-group no-margin">
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">当前信息</span>

													<input type="radio" value="1" />
												</label>

											</div>
										</div>
									</div>
								</div>

								<div class="hr dotted"></div>
							
								<div>
								  <form class="form-horizontal" role="form" action="editinfo.php" method="post" enctype="multipart/form-data">
									<div id="user-profile-1" class="user-profile row">
										<div class="col-xs-12 col-sm-3 center">
											<div>
											<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
?>
										<div class="widget-box">
												<div class="widget-header">
													<h4>头像图片上传</h4>

													<span class="widget-toolbar">
														<a href="#" data-action="collapse">
															<i class="icon-chevron-up"></i>
														</a>
													</span>
													
												</div>

												
												<div class="widget-body">
													<div class="widget-main">
						
												<input type="file" name="file" id="id-input-file-3" />

													</div>
												</div>
											</div>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a href="#" class="user-title-label dropdown-toggle" data-toggle="dropdown">
															<i class="icon-circle light-green middle"></i>
															&nbsp;
															<span class="white">用户</span>
														</a>
													
													</div>
												</div>
											</div>
											
										</div>
                           
										<div class="col-xs-12 col-sm-9">
										

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
												<div class="profile-info-name"> 姓名 </div>

													<div class="profile-info-value">
														<span class="editable" id="username" name="username"><?php echo $user["name"];?></span>
														<input type="hidden" id="namee" name="namee"></input>
													</div>
												
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 地址 </div>

													<div class="profile-info-value">
														<span class="editable" id="address"><?php echo $user["address"];?></span>
														<input type="hidden" id="addr" name="addr"></input>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 电话 </div>

													<div class="profile-info-value">
														<span class="editable" id="tele"><?php echo $user["telephone"];?></span>
															<input type="hidden" id="telee" name="telee"></input>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 电子邮箱 </div>

													<div class="profile-info-value">
														<span class="editable" id="email"><?php echo $user["email"];?></span>
															<input type="hidden" id="emaill" name="emaill"></input>
													</div>
												</div>
                                               <div class="profile-info-row">
													<div class="profile-info-name"> 个人链接 </div>

													<div class="profile-info-value">
														<span class="editable" id="website"><?php echo $user["website"];?></span>
															<input type="hidden" id="web" name="web"></input>
													</div>
												</div>
												<div class="profile-info-row">
													<div class="profile-info-name"> 微博 </div>

													<div class="profile-info-value">
														<span class="editable" id="weibo"><?php echo $user["weibo"];?></span>
															<input type="hidden" id="weiboo" name="weiboo"></input>
													</div>
												</div>
                                         
												<div class="profile-info-row">
													<div class="profile-info-name"> 简介 </div>

													<div class="profile-info-value">
														<span class="editable" id="about"><?php echo $user["info"];?></span>
														<input type="hidden" id="info" name="info"></input>
														
													</div>
												</div>
                                                <div class="profile-info-row">
													<div class="profile-info-name"> 网站背景音乐 </div>

													<div class="profile-info-value">	
													     
                                            <input type="text" disabled="disable" value="<?php echo $user["music"];?>" id="fileName">
                                            
                              <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="right" data-content="显示目前网站背景音乐" title="music name">?</span>
												
													<input type="file" name="file2" id="id-input-file-2" onchange="handleFile()"/>
													</div>
												</div>
											</div>

											<div class="space-20"></div>
				

											<div class="hr hr2 hr-double"></div>
											<div class="space-6"></div>
                                             <div class="center">
												<button class="btn btn-info" type="submit" onclick="fll()">
													<i class="icon-rss bigger-150 middle"></i>
													<span class="bigger-110">提交全部信息</span></input>
												</button>
											</div>
											<div class="space-6"></div>
										</div>
									</div>
									</form>
								</div>


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


		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
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

		<script src="assets/js/chosen.jquery.min.js"></script>
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.gritter.min.js"></script>
		<script src="assets/js/bootbox.min.js"></script>
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<script src="assets/js/jquery.hotkeys.min.js"></script>
		<script src="assets/js/bootstrap-wysiwyg.min.js"></script>
		<script src="assets/js/select2.min.js"></script>
		<script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="assets/js/x-editable/bootstrap-editable.min.js"></script>
		<script src="assets/js/x-editable/ace-editable.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>


		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
  var file2 = document.getElementById("id-input-file-2");
  var fileName = document.getElementById("fileName");
        function handleFile(){
        var   str1=file2.value;   
     var   regstr=/\\/;   
  var   regresult=new   RegExp(regstr)   
  var   sss=str1.split(regresult,'100');   
  var   need=sss[sss.length-1];   
  var   a=need.split('\\');   
  fileName.value=a[0];   
  //fileName.value=a[1];   
          //  fileName.value = file2.value;
       
        }
			jQuery(function($) {

      	$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});



       $('#id-input-file-2').ace_file_input({
					no_file:'请在想更改网站背景音乐时上传',
					btn_choose:'Choose',
					btn_change:'Change',
					droppable:false,
					onchange:null,
					thumbnail:false //| true | large
					//whitelist:'gif|png|jpg|jpeg'
					//blacklist:'exe|php'
					//onchange:''
					//
				});

			$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'更换头像图片',
					btn_change:null,
					no_icon:'icon-picture',
					droppable:true,
					thumbnail:'small'//large | fit
					,
					preview_error : function(filename, error_code) {
					
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});

				//editables on first profile page
				$.fn.editable.defaults.mode = 'inline';
				$.fn.editableform.loading = "<div class='editableform-loading'><i class='light-blue icon-2x icon-spinner icon-spin'></i></div>";
			    $.fn.editableform.buttons = '<button type="submit" class="btn btn-info editable-submit"><i class="icon-ok icon-white"></i></button>'+
			                                '<button type="button" class="btn editable-cancel"><i class="icon-remove"></i></button>';    
				
				//editables 
			    $('#username').editable({
					type: 'text',
					name: 'username'
			    });
			   $('#weibo').editable({
					type: 'text',
					name: 'weibo'
			    });
			     $('#email').editable({
					type: 'text',
					name: 'email'
			    });
			     $('#address').editable({
					type: 'text',
					name: 'address'
			    });
			     $('#tele').editable({
					type: 'text',
					name: 'tele'
			    });

			    $('#website').editable({
					type: 'text',
					name: 'website'
			    });
						
				//var $range = document.createElement("INPUT");
				//$range.type = 'range';
			
				$('#about').editable({
					mode: 'inline',
			        type: 'wysiwyg',
					name : 'info',
					wysiwyg : {
						//css : {'max-width':'300px'}
					},
					success: function(response, newValue) {
					}
				});
				
				
				
			
				
			
				////////////////////
				//change profile
				$('[data-toggle="buttons"] .btn').on('click', function(e){
					var target = $(this).find('input[type=radio]');
					var which = parseInt(target.val());
					$('.user-profile').parent().addClass('hide');
					$('#user-profile-'+which).parent().removeClass('hide');
				});
			});
		</script>

		 <script type="text/javascript">
		function fll(){
		
		if(username.innerHTML == ""){
		alert("name empty");
		}else{
		namee.value = username.innerHTML;
		//alert(namee.value);
		}
			if(tele.innerHTML == ""){
		alert("tele empty");
		}else{
		telee.value = tele.innerHTML;
		//alert(telee.value);
		}
		if(address.innerHTML == ""){
		alert("address empty");
		}else{
		addr.value = address.innerHTML;
		//alert(addr.value);
		}
		if(email.innerHTML == ""){
		alert("email empty");
		}else{
		emaill.value = email.innerHTML;
		//alert(emaill.value);
		}
		if(website.innerHTML == ""){
		alert("website empty");
		}else{
		web.value = website.innerHTML;
		//alert(web.value);
		}
		if(weibo.innerHTML == ""){
		alert("weibo empty");
		}else{
		weiboo.value = weibo.innerHTML;
		//alert(weiboo.value);
		}
		if(about.innerHTML == ""){
		alert("about empty");
		}else{
		info.value = about.innerHTML;
		//alert(info.value);
		}
		}

		
			</script>
 
	</div>
</html>

