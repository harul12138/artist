<!DOCTYPE html>
<!--[if IE 7]><html class="ie7" lang="zh"><![endif]-->
<!--[if gt IE 7]><!-->
<html lang="zh">
<!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>个人美术馆-时间轴</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
   
</head>
<body>
<div class="content">
  <div class="wrapper">
  <div class="header">
 
            
        </div>
    <div class="light"><i></i></div>
   
    <div class="main">
   <?php
             require_once ("../mysql_connect.php");
             mysql_query("set names 'utf8'");
              $time="select * from timeline order by id";
              $tlist=mysql_query($time);
    
      while( $tt=mysql_fetch_array($tlist))
    {   ?>
      <div class="year">
        <h2><a href="#"><?php echo $tt["date"];?><i></i></a></h2>
        <div class="list">
          <ul>
            <li class="cls">
              <p class="date"><?php echo $tt["date"];?></p>
              <p class="intro"><?php echo $tt["event"];?></p>
              <p class="version">&nbsp;</p>
              
            </li>
          </ul>
        </div>
      </div>
        <?php
                  }
              
            ?>
  
    </div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
  $(".main .year .list").each(function (e, target) {
      var $target=  $(target),
          $ul = $target.find("ul");
      $target.height($ul.outerHeight()), $ul.css("position", "absolute");
  }); 
  $(".main .year>h2>a").click(function (e) {
      e.preventDefault();
      $(this).parents(".year").toggleClass("close");
  });
  </script>
</body>
</html>
