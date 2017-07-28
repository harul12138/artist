<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>个人美术馆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="artist show" />
  <meta name="author" content="LHan" />

    <!-- Le styles -->
    <!--外部链接样式表>
    <![endif]-->
      <link rel="shortcut icon" href="img/favicon.ico" />
         <link href="css/bootstrap.css" rel="stylesheet" />
          <link href="css/component.css" rel="stylesheet" />
          <link href="css/bootstrap-responsive.css" rel="stylesheet" />

 <!-- button-->
 <link rel="stylesheet" type="text/css" href="css/style4.css" />

 <!-- lunbo assets -->
        <link rel="stylesheet" type="text/css" href="css/jcarousel.connected-carousels.css">

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>

        <script type="text/javascript" src="js/jcarousel.connected-carousels.js"></script>

       <!-- news-->
       <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->

        <!-- timeliness-->
	<link href="css/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery1.10.2.js"></script>
<script type="text/jscript">
$(function(){
	
	//time
	$('.course_nr2 li').hover(function(){
		$(this).find('.shiji').slideDown(600);
	},function(){
		$(this).find('.shiji').slideUp(400);
	});
	
});

</script>

	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <!-- news-->
    <link rel="stylesheet" href="css/index.css"/>
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <!--内部样式表
  <![endif]-->
  <style type="text/css">
 <!--
body {
    font-family: 'Lato', Calibri, Arial, sans-serif;
    color: #f2ede3;
    background: #333;
    font-size: 0.9em;
    font-weight: 300;
}

a {
	color: #000;
	text-decoration: none;
	font-weight: 700;
	letter-spacing: 2px;
	padding: 0 5px;
	text-transform: uppercase;
	font-size: 100%;
}

a:hover {
	color: #fff;
}

-->
/*留言板*/
　#time{

background-color:#CC3333;

　　}

</style>
</head>

  <body>
<!--<?php
      require_once ("mysql_connect.php");
              mysql_query("set names 'utf8'");                                   
       	$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
                     ?>
<audio controls autoplay="autopaly" loop="loop">
  <source src="uploads/<?php echo $user["music"];?>" type="audio/mp3" />
  您的浏览器不支持 audio 标签。
</audio> -->
    <div class="container">

			<div id="bl-main" class="bl-main">
	
			<!--===========SECTION ===========-->
				<section id="bl-work-section">
					<div class="bl-box">
						<h2>artistic work <!-- class="bl-icon bl-icon-about" -->
						<!--内嵌样式
						<![endif]-->
						<br/>
						<br/>
						<p style="font-style:italic;font-size:140%;font-weight:800">艺术作品展</p></h2>
					</div><!-- /bl-box -->
					<span class="bl-icon bl-icon-close"></span>
					<div class="bl-content">
						<div class="row-fluid">
							<div class="span12">
										<h2><p align=center>代表获奖作品-Representative Works </p></h2>
								  <div class="wrapper">
            <div class="connected-carousels">
                <div class="stage">
                    <div class="carousel carousel-stage">
                        <ul>
                         <?php
                                      require_once ("mysql_connect.php");
                                       mysql_query("set names 'utf8'");                                   
                                       $aa="select * from artwork where typical='yes' limit 0,7";
                                             $bb=mysql_query($aa);
                                         while( $dd=mysql_fetch_array($bb)){
                     ?>
                            <li><img src="uploads/artwork/<?php echo $dd["picture"];?>" width="637px" height="400px" 
                            alt="<?php echo $dd["title"];?>"></li>
                    		<?php
						 }?>
                        </ul>
                    </div>
                    <a href="#" class="prev prev-stage"><span>&lsaquo;</span></a>
                    <a href="#" class="next next-stage"><span>&rsaquo;</span></a>
                </div>
            </div>
        </div>
     <!-- <iframe id="repre" name="repre" src="repre/index2.php" height="800" width="100%" frameborder="0" scrolling="auto" ></iframe>  --> 
        </br>
        <div class="row-fluid">	
					 <p align=center><a href="repre/index2.php" class="a-btn" target="_blank">
						<span class="a-btn-text">查看具体获奖作品</span> 
						<span class="a-btn-slide-text">-click here</span>
						<span class="a-btn-icon-right"><span></span></span>
					</a> </p> </div>
<hr/>
								<div class="row-fluid">
									<div class="span12">
									<h2><p align=center>作品分类展示-Category</p></h2>
									    <!-- Progress Bar --> 
									    
										<div class="progress ">
										<div class="bar" style="width: 65%;"><p align=center>山水画 65%</p></div>
										</div>  
										<div class="progress">
										<div class="bar" style="width: 85%;"><p align=center>花鸟画 85%</p></div>
										</div>  
										<div class="progress">
										<div class="bar" style="width: 70%;"><p align=center>人物画 70%</p></div>
										</div>  
										<div class="progress">
										<div class="bar" style="width: 75%;"><p align=center>写意 75%</p></div>
										</div>  
										<div class="progress">
										<div class="bar" style="width: 25%;"><p align=center>工笔 25%</p></div>
										</div> 
										<!-- Progress Bar End --> 
									</div><!-- /span6 -->
									</br>
										 <div class="row-fluid">	
					 <p align=center><a href="category/index.php" class="a-btn" target="_blank">
						<span class="a-btn-text">查看具体个人作品</span> 
						<span class="a-btn-slide-text">-click here</span>
						<span class="a-btn-icon-right"><span></span></span>
					</a> </p> </div>
									
									<hr/>
								    <br />
								    <br />

									<div class="span12">
									<h2><p align=center>作品销售展示-Sales</p></h2>
				<?php
             require_once ("mysql_connect.php");
             mysql_query("set names 'utf8'");
              $cc="select * from artfam LIMIT 0,3"; 
              $clist=mysql_query($cc);
    
      while( $ca=mysql_fetch_array($clist))
    {   ?>   
                         <div class="row-fluid">
					  <div class="span4">
					<h3><i class="icon-heart icon-white"></i> <?php echo $ca["category"];?></h3>
						<p class="lead"><?php echo $ca["abstr"];?></p>
                                        <font color="#FFFFCC"> <h1> <?php echo $ca["info"];?> </h1></font>
            
											</div>
            <?php
                  }
            ?>
										</div>
			
										</br>
										 <div class="row-fluid">	
					 <p align=center><a href="sales/index.php" class="a-btn" target="_blank">
						<span class="a-btn-text">查看具体销售作品</span> 
						<span class="a-btn-slide-text">-click here</span>
						<span class="a-btn-icon-right"><span></span></span>
					</a> </p> </div>

									</div><!-- /span12 -->
									
								</div><!-- /row -->
							</div><!-- /span12 -->
						</div><!-- /row-fluid -->
						
					</div><!-- /bl-content -->
					
				</section>
				
				
				<!--===========SECTION ===========-->
				<section id="bl-portfolio-section">
					<div class="bl-box">
					<h2>life and time <!-- class="bl-icon bl-icon-about" -->
						<!--内嵌样式
						<![endif]-->
						<br/>
						<br/>
						<p style="font-style:italic;font-size:140%;font-weight:800">画家个人介绍</p></h2>
					</div>
						<div class="bl-content">
						<div class="row-fluid">
							<div class="span12">
									<h2><p align=center><font color="#FFF2DF">画家简介-A Little About Me</p></h2></font>
								<p align=center><img src="images/black.jpg" align="center" alt="" /></p>
								<font color="#063418">
<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=2";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
	      $str=trim($user["info"]); // 取得字串同时去掉头尾空格和空回车

?>
								<p><?php echo nl2br($user["info"]);?><p /></font>
								<hr />
								</p>
								<h2><p align=center><font color="#FFF2DF">时间轴-Timeline Of Me</font></p>
								</h2>
		<script>
		$(function(){
			$().timelinr({
				arrowKeys: 'true'
			})
		});
	</script>

  <div class="clearfix web_widht course_nr">
    <ul class="course_nr2">
    <?php
             require_once ("mysql_connect.php");
             mysql_query("set names 'utf8'");
              $time="select * from timeline order by id limit 0,8";
              $tlist=mysql_query($time);
    
      while( $tt=mysql_fetch_array($tlist))
    {   ?>
      <li><p><?php echo $tt["date"];?></p>
        <div class="shiji">
          <h1><?php echo $tt["date"];?></h1>
          <p>
          <p><font size="3"><?php echo $tt["event"];?></font></p>
          </p>
        </div>
      </li>
          <?php
                  }
              
            ?>
            <li><p><a href="timeline/timeline.php" target="_blank"><font size="+3" color="#063418">MORE</font></a></p></li>
    </ul>
  </div>
</br>
</br>
</br>
</br>
</br>
</br>
		<hr />
		<h2><p align=center><font color="#FFF2DF">印象-Typical Images</p></h2>
		<div class="row-fluid">
		<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $list=mysql_fetch_array($sq);?> 
							<div class="span4">
								<ul id="bl-work-items" style="list-style: none;">
									<li data-panel="panel-1"><a href="#"><img src="uploads/portfolio/<?php echo $list["cover"];?>" /></a></li>
								</ul>
								<p><b><?php echo $list["intro1"];?></b></p>							
							</div><!-- /span4 -->
								<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=2";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $blist=mysql_fetch_array($sq);?> 
							<div class="span4">
								<ul id="bl-work-items">
									<li data-panel="panel-2"><a href="#"><img src="uploads/portfolio/<?php echo $blist["cover"];?>" /></a></li>
								</ul>
								<p><b><?php echo $blist["intro1"];?></b></p>
                                             							
							</div><!-- /span4 -->
								<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=3";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $olist=mysql_fetch_array($sq);
	     // $olist=str_replace('<br />','\n',$olist); // 用p标签取代换行符?> 
							<div class="span4">
								<ul id="bl-work-items">
									<li data-panel="panel-3"><a href="#"><img src="uploads/portfolio/<?php echo $olist["cover"];?>" /></a></li>
								</ul>
								<p><b><?php echo nl2br($olist["intro1"]);?></b></p>							
							</div><!-- /span4 --></font>

						</div><!-- /row-fluid -->
							<hr />
								<p />
				                <?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
?>
								<p />
						<h2>联系方式-CONTACT ME</h2><font color="#000">
						   <p>电话 telephone——<?php echo $user["telephone"];?></p>
							<p>邮箱 email——<?php echo $user["email"];?></p>
							<p>微博——<a href="<?php echo $user["weibo"];?>" target="_blank">画家<?php echo $user["name"];?>的微博</a></p>
							<p>地址 address——<?php echo $user["address"];?></p></font>
							<p>
							
							
						</div>
					</div></div>
					<span class="bl-icon bl-icon-close"></span>
				</section>
				
				
	
	

<!--===========SECTION ===========-->
				<section>
					<div class="bl-box" id="bl-comm-section">
					     <div class="he_border2">
                <img class="he_border2_img" src="images/66.jpg" alt="Image 01">
                <div class="he_border2_caption">
                 <h3 class="he_border2_caption_h">ARTISTIC COMMUNITY</h3>
					<p class="he_border2_caption_p">艺术礼记</p>
                </div>
            </div>
					</div><!-- /bl-box -->
					<div class="bl-content">
					<h2><p align=center>艺术动态-Latest News </p></h2>
							<p align=center><img src="images/b2.jpg" align="center" alt="" /></p>
				
				 <div class="warrper">
       <div class="content">
           <!--最新动态-->
           <div class="index-new w1200 mt30">
               <div class="indexadd mt50 mb60">
                   <div id="banners" class="ui-banner">
               
                       <ul class="ui-banner-slides">
                           <?php
             require_once ("mysql_connect.php");
             mysql_query("set names 'utf8'");
              $re="select * from news where category='个人新闻' order by id DESC";
              $rlist=mysql_query($re);
    
      while( $nn=mysql_fetch_array($rlist))
    {   
       if(!empty($nn["picture"])){   ?> 

    <li> <a href="news/news.php?action=adminSelectSingle&id=<?php echo $nn["id"];?>" target="_blank"><img src="uploads/news/<?php echo $nn["picture"];?>" alt="<?php echo $nn["title"];?>" title="<?php echo $nn["title"];?>"/></a></li>
  <?php 
       }else{     ?>

     <li> <a href="news/news.php?action=adminSelectSingle&id=<?php echo $nn["id"];?>" target="_blank"><img src="images/newd.jpg" alt="<?php echo $nn["title"];?>" title="<?php echo $nn["title"];?>"/></a></li>
   <?php      }
      
                    }
       ?>
                       </ul><!--ui-banner-slides end-->
                      
                       <ul class="ui-banner-slogans">
                        <?php
             require_once ("mysql_connect.php");
             mysql_query("set names 'utf8'");
              $re="select * from news where category='个人新闻' order by id DESC";
              $rlist=mysql_query($re);
    
      while( $nn=mysql_fetch_array($rlist))
    {   
      ?> 
                           <li class="ui-line">
                               <div class="ullinehover">

                    <?php           if(!empty($nn["picture"])){  
                     ?> 
                                   <div class="ui-bnnerimg floatLeft">
                                       <img src="uploads/news/<?php echo $nn["picture"];?>" alt="" width="103" height="80"/>
                                   </div>  
                  <?php 
                            }else{     ?>

                                   <div class="ui-bnnerimg floatLeft">
                                       <img src="images/new0.jpg" alt="" width="103" height="52"/>
                                   </div>  
 <?php      }   ?>
                                   <div class="ui-bnnerp floatRight mt09">
                                      <h3><font color="#D6D6D6"><b><?php echo $nn["title"];?></b></font>
                                     
                             </br>  <font color="#151515"><b><?php echo mb_strlen($nn['content'], 'utf-8') > 32 ? mb_substr($nn['content'], 0, 32, 'utf-8').'....' : $nn['content'];?>
                                      </b></font></h3>
                                   </div>
                                    
                               </div>
                           </li>
          <?php
                                                      }
                                                 ?>
                       </ul><!--ui-banner-slogans end-->
                      
                   </div>  
               </div>
           </div>
           <!--最新动态 end-->
       </div>
       <!--content end-->


   </div>	
								<p />
					 <div class="row-fluid">	
					 <p align=center><a href="trend/index2.php"  class="a-btn" target="_blank">
						<span class="a-btn-text">更多-more trend of life</span> 
						<span class="a-btn-slide-text">more..</span>
						<span class="a-btn-icon-right"><span></span></span>
					</a> </p> </div>
							<hr />
						
                    <h2><p align=center>留言板-Message Board </p></h2>
<iframe id="message" name="message" src="message.php" height="700" width="100%" frameborder="0" scrolling="no" ></iframe>

                            <hr />
                            <?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
?>
								<p />
						<h2>联系方式-CONTACT ME</h2>
						  <font color="#000"> <p>电话 telephone--<?php echo $user["telephone"];?></p>
							<p>邮箱 email--<?php echo $user["email"];?></p>
							<p>微博--<a href="<?php echo $user["weibo"];?>" target="_blank">画家<?php echo $user["name"];?>的微博</a></p>
							<p>地址 address--<?php echo $user["address"];?></p></font>
							
							
					</div><!-- /bl-content -->
					<span class="bl-icon bl-icon-close"></span>
				</section>
				
			<!--=========== MOVIE SECTION ===========-->
				<div class="bl-panel-items" id="bl-panel-work-items">
					<div data-panel="panel-1">
						<div class="row-fluid">
						<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $list=mysql_fetch_array($sq);?> 
							<div class="span8 offset2 tweak">
								<img src="uploads/portfolio/<?php echo $list["img"];?>" />
								<br />
								<br/>
							<p><b><?php echo $list["intro2"];?></b></p>
							</div><!-- /span8 -->
						</div><!-- /row-fluid -->	
					</div><!-- /panel1 -->
					
					<div data-panel="panel-2">
						<div class="row-fluid">
						<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=2";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $blist=mysql_fetch_array($sq);?> 
							<div class="span8 offset2 tweak">
							<img src="uploads/portfolio/<?php echo $blist["img"];?>" />
							<br />
							<br />
							<p><b><?php echo nl2br($blist["intro2"]);?></b><p>
							</div><!-- /span8 -->
						</div><!-- /row-fluid -->	
					</div><!-- /panel2 -->
					
					<div data-panel="panel-3">
						<div class="row-fluid">
							<?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from portfolio where id=3";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $olist=mysql_fetch_array($sq);?> 
							<div class="span8 offset2 tweak">
							<img src="uploads/portfolio/<?php echo $olist["img"];?>" />
							<br />
							<br />
							<p><b><?php echo nl2br($olist["intro2"]);?></b></p>
							</div><!-- /span8 -->
						</div><!-- /row-fluid -->	
					</div><!-- /panel3 -->
					
					<nav>
						<span class="bl-next-work">&gt; NEXT</span>
						<span class="bl-icon bl-icon-close"></span>
					</nav>
				</div><!-- /panel-items -->
				
				
			<!-- /bl-main -->

     <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>

    <script src="js/jquery-1.10.2.min.js"></script>

<!--news-->
    <script src="js/jquery-1.7.2.min.js" type="text/javascript" charset="utf-8"></script>
    
    <script src="js/jquery-ui-1.8.6.core.widget.js"></script>
    <script src="js/jqueryui.bannerize.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#banners').bannerize({
                shuffle: 1,
                interval: "5"
            });
            $(".ui-line").hover(function(){
                $(this).addClass("ui-line-hover");
                $(this).find(".ui-bnnerp").addClass("ui-bnnerp-hover");
            },function(){
                $(this).removeClass("ui-line-hover");
                $(this).find(".ui-bnnerp").removeClass("ui-bnnerp-hover");
            });
        });
    </script>

  </div></div></body>
</html>
