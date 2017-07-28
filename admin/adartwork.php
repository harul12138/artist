<!DOCTYPE html>
<html lang="en">
<?php 
   require_once ("mysql_connect.php");
   error_reporting(E_ALL);
  ini_set('display_errors',true);
 
  $fileName="";
    $fileInfo="";
   $fileTitle="";
    $size="";
     $height="";
     $width="";
    $category="";
   $typical="";
   $prize="";
  $reqAct="";

  if(is_array($_POST)&&count($_POST)>0)//先判断是否通过Post提交了请求
    {
       // echo "1";
        if(isset($_POST["action"]))
        {
      $reqAct=strip_tags($_POST['action'] );
      //    echo "2";
    }
    if(!strcmp($reqAct,"upload"))
{
 
 $uploads_dir = '../gallery/uploads/artwork/';
        $tmp_name = $_FILES["file"]["tmp_name"];
    $fileName=$_FILES['file']['name'];    
     $name = iconv('utf-8','gb2312',$fileName); //利用Iconv函数对文件名进行重新编码
       if( move_uploaded_file($tmp_name, "$uploads_dir/$name")){
        $size = getimagesize("$uploads_dir/$fileName");
     
       }
       //   echo  $size[0];
           $width = $size[0];  //kuan
           $height = $size[1]; //gao
          
         $fileTitle=$_POST['title']; 
         $category=$_POST['category'];
         $typical=$_POST['typical'];
       //  echo $typical;
       $prize=$_POST['prize'];
      $fileInfo=$_POST['info'];
       
  
  if($fileTitle==""||$typical=="")  
{  
    echo"必填项不能为空";  

}else{ 
   mysql_query("set names 'utf8'");
     $sql = "INSERT INTO `artwork` (`title`,`picture`,`width`,`height`,`category`,`typical`,`prize`,`info`) 
     VALUES ('$fileTitle','$fileName','$width','$height','$category','$typical','$prize','$fileInfo')";
       
          $result=mysql_query($sql);  
          if($result>0)
        {  
         echo"<script type='text/javascript'>alert('上传成功');; 
      location='adartwork.php';</script>"; 
          
     
        }  
        else 
        {  
            echo"<script type='text/javascript'>alert('上传失败');; 
      location='adartwork.php';</script>"; 
         
  }}
  }}
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
										     	<li>
													<a href="category.php">
														<i class="icon-plus"></i>
														作品类别管理
													</a>
												</li>
												<li class="active">
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
								<a href="#">作品分类管理</a>
							</li>
							<li class="active">上传新作品</li>
						</ul><!-- .breadcrumb -->

					</div>

					<div class="page-content">
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
                  <form class="form-horizontal" role="form" action="adartwork.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="action" value="upload">
                                    <div class="form-group">
                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 作品 </label>
                                 <div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>图片上传</h4>

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
                                          <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" 
                                          data-content="此项必填" title="必">?</span>
										</div>
                                         </div>
                           <hr/>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 作品标题 </label>

										<div class="col-sm-9">
											<input type="text" name="title" id="form-field-1" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-select-1"> 作品类别 </label>
 
                                                  <div class="col-sm-3">
															<select class="form-control" name="category" id="select">
																<option value="">&nbsp;</option>
																<?php
                                      require_once ("mysql_connect.php");
                                       mysql_query("set names 'utf8'");
                                       $re="select * from artfam order by id";
                                             $alist=mysql_query($re);
    
                                            while( $cc=mysql_fetch_array($alist))
                                                  {   ?>
																<option value="<?php echo $cc["category"];?>"><?php echo $cc["category"];?></option>
																<?php      }   ?>
															</select>
														</div>	
														<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" 
                                          data-content="此项必填" title="必">?</span>
									</div>

									<div class="space-4"></div>
                                 
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-5">是否列为获奖作品</label>
                                    <span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" 
                                          data-content="此项必填" title="必">?</span>
                                     <div class="col-sm-9">
										<div class="radio">
													<label>
														<input name="typical" type="radio" class="ace" value="yes"/>
														<span class="lbl"> 是</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input name="typical" type="radio" class="ace" value="no"/>
														<span class="lbl"> 否</span>
													</label>
												</div>
											</div>

									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-6">获得奖项</label>

										<div class="col-sm-9">
											<input data-rel="tooltip" type="text" name="prize" id="form-field-6" placeholder="可为空" title="若上一项为否此项可空" data-placement="bottom" class="col-xs-10 col-sm-5" />
											<span class="help-button" data-rel="popover" data-trigger="hover" data-placement="left" data-content="若上一项为否此项可空" title="请按照要求填写">?</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">作品简介</label>

										<div class="col-sm-7">
											<textarea class="form-control editable" name="info" id="about" rows="7"></textarea>
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

		<!--[if !IE]> -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

		<!-- <![endif]-->

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
		<script src="assets/js/jquery.knob.min.js"></script>
		<script src="assets/js/jquery.autosize.min.js"></script>
		<script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="assets/js/jquery.maskedinput.min.js"></script>
		<script src="assets/js/bootstrap-tag.min.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				$('#id-disable-check').on('click', function() {
					var inp = $('#form-input-readonly').get(0);
					if(inp.hasAttribute('disabled')) {
						inp.setAttribute('readonly' , 'true');
						inp.removeAttribute('disabled');
						inp.value="This text field is readonly!";
					}
					else {
						inp.setAttribute('disabled' , 'disabled');
						inp.removeAttribute('readonly');
						inp.value="This text field is disabled!";
					}
				});
			
			
				$(".chosen-select").chosen(); 
				$('#chosen-multiple-style').on('click', function(e){
					var target = $(e.target).find('input[type=radio]');
					var which = parseInt(target.val());
					if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
					 else $('#form-field-select-4').removeClass('tag-input-style');
				});
			
			
				$('[data-rel=tooltip]').tooltip({container:'body'});
				$('[data-rel=popover]').popover({container:'body'});
				
				$('textarea[class*=autosize]').autosize({append: "\n"});
				$('textarea.limited').inputlimiter({
					remText: '%n character%s remaining...',
					limitText: 'max allowed : %n.'
				});
			
				$.mask.definitions['~']='[+-]';
				$('.input-mask-date').mask('99/99/9999');
				$('.input-mask-phone').mask('(999) 999-9999');
				$('.input-mask-eyescript').mask('~9.99 ~9.99 999');
				$(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
			
			
			
				$( "#input-size-slider" ).css('width','200px').slider({
					value:1,
					range: "min",
					min: 1,
					max: 8,
					step: 1,
					slide: function( event, ui ) {
						var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
						var val = parseInt(ui.value);
						$('#form-field-4').attr('class', sizing[val]).val('.'+sizing[val]);
					}
				});
			
				$( "#input-span-slider" ).slider({
					value:1,
					range: "min",
					min: 1,
					max: 12,
					step: 1,
					slide: function( event, ui ) {
						var val = parseInt(ui.value);
						$('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
					}
				});
				
				
				$( "#slider-range" ).css('height','200px').slider({
					orientation: "vertical",
					range: true,
					min: 0,
					max: 100,
					values: [ 17, 67 ],
					slide: function( event, ui ) {
						var val = ui.values[$(ui.handle).index()-1]+"";
			
						if(! ui.handle.firstChild ) {
							$(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
						}
						$(ui.handle.firstChild).show().children().eq(1).text(val);
					}
				}).find('a').on('blur', function(){
					$(this.firstChild).hide();
				});
				
				$( "#slider-range-max" ).slider({
					range: "max",
					min: 1,
					max: 10,
					value: 2
				});
				
				$( "#eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
					// read initial values from markup and remove that
					var value = parseInt( $( this ).text(), 10 );
					$( this ).empty().slider({
						value: value,
						range: "min",
						animate: true
						
					});
				});
				
				$('#id-input-file-3').ace_file_input({
					style:'well',
					btn_choose:'Drop images here or click to choose',
					btn_change:null,
					no_icon:'icon-picture',
					droppable:true,
					thumbnail:'small'//large | fit
					,
					preview_error : function(filename, error_code) {
						//name of the file that failed
						//error_code values
						//1 = 'FILE_LOAD_FAILED',
						//2 = 'IMAGE_LOAD_FAILED',
						//3 = 'THUMBNAIL_FAILED'
						//alert(error_code);
					}
			
				}).on('change', function(){
					//console.log($(this).data('ace_input_files'));
					//console.log($(this).data('ace_input_method'));
				});
				
			
			
				$('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
				.on('change', function(){
					//alert(this.value)
				});
				$('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'icon-caret-up', icon_down:'icon-caret-down'});
				$('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'icon-plus smaller-75', icon_down:'icon-minus smaller-75', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
			
			
				
				$('.date-picker').datepicker({autoclose:true}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				$('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function(){
					$(this).next().focus();
				});
				
				$('#timepicker1').timepicker({
					minuteStep: 1,
					showSeconds: true,
					showMeridian: false
				}).next().on(ace.click_event, function(){
					$(this).prev().focus();
				});
				
				$('#colorpicker1').colorpicker();
				$('#simple-colorpicker-1').ace_colorpicker();
			
				
				$(".knob").knob();
				
				
				//we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
				var tag_input = $('#form-field-tags');
				if(! ( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase())) ) 
				{
					tag_input.tag(
					  {
						placeholder:tag_input.attr('placeholder'),
						//enable typeahead by specifying the source array
						source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
					  }
					);
				}
				else {
					//display a textarea for old IE, because it doesn't support this plugin or another one I tried!
					tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
					//$('#form-field-tags').autosize({append: "\n"});
				}
				
				
				
			
				/////////
				$('#modal-form input[type=file]').ace_file_input({
					style:'well',
					btn_choose:'Drop files here or click to choose',
					btn_change:null,
					no_icon:'icon-cloud-upload',
					droppable:true,
					thumbnail:'large'
				})
				
				//chosen plugin inside a modal will have a zero width because the select element is originally hidden
				//and its width cannot be determined.
				//so we set the width after modal is show
				$('#modal-form').on('shown.bs.modal', function () {
					$(this).find('.chosen-container').each(function(){
						$(this).find('a:first-child').css('width' , '210px');
						$(this).find('.chosen-drop').css('width' , '210px');
						$(this).find('.chosen-search input').css('width' , '200px');
					});
				})
				/**
				//or you can activate the chosen plugin after modal is shown
				//this way select element becomes visible with dimensions and chosen works as expected
				$('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
				*/
			
			});
		</script>
</body>
</html>
