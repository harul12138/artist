<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8" />
        <title>个人美术馆-作品售卖中...</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/style.min.css" rel="stylesheet" />
        <link href="css/prism.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/style4.css" />
            <link rel="shortcut icon" href="favicon.ico" />

             <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
   <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
   <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    </head>
    <body>  
  
     <div class="header">
             <ol class="breadcrumb">
  <li><a href="../artist.php">Home</a></li>
  <li><a href="#">艺术作品展</a></li>
  <li class="active">作品销售展示</li>
</ol>
            
        </div>
    
        <!-- Gallery -->
        <section>
            <ul id="gallery">
            
                <li id="fullPreview"></li>
          <?php
             require_once ("../mysql_connect.php");
             mysql_query("set names 'utf8'");
              $re="select * from salework order by id";
              $slist=mysql_query($re);
    
      while( $sa=mysql_fetch_array($slist))
    {   ?>
                <!-- 1 -->
                <li>
                    <a href="../uploads/salework/<?php echo $sa["picture"];?>"></a>
                    <img data-original="../uploads/salework/<?php echo $sa["picture"];?>" src="img/effects/white.gif" 
                    width="270" height="210" alt="<?php echo $sa["title"];?>" />
                    
                    <div class="overLayer"></div>
                    <div class="infoLayer">
                        <ul>
                            <li>
                                <h2>
                                   <?php echo $sa["title"];?>  
                                </h2>
                            </li>
                            <li>
                                <p>
                                    查看-View Picture
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="projectInfo">
                        <strong><?php echo $sa["price"];?></strong>
                        </br>
                         <p><?php echo $sa["filesize"];?></p>
                        </br>
                        <p><?php echo $sa["info"];?></p>
                    </div>
                </li>
                  <?php   }    ?>
               
                            
            </ul>


        </section>
        <!-- / Gallery -->
        
 
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.lazyload.js"></script>
        
        <script src="js/least.min.js"></script>
        <script src="js/prism.js"></script>
        
    </body>
</html>