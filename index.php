
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>个人美术馆</title>

<link rel="shortcut icon" href="fonts/favicon.ico" />
<link rel="stylesheet" type="text/css" href="css3/normalize.css" />
<link rel="stylesheet" type="text/css" href="css3/demo.css" />

<!--必要样式-->
<link rel="stylesheet" type="text/css" href="css3/component.css" />

<!--[if IE]>
	<script src="js/html5.js"></script>
<![endif]-->
</head>
<body>

<div class="container demo-3">
	<div class="content">
		<div id="large-header" class="large-header">	
		<div id="ad" style="position:absolute">
<?php 
require_once ("admin/mysql_connect.php");
mysql_query("set names 'utf8'");
			$sql="select * from user where id=1";//查询指定文章的详细内容
	      $sq=mysql_query($sql);
	      $user=mysql_fetch_array($sq);
?>
<a href="<?php echo $user["website"];?>" target="_blank">
<img src="uploads/<?php echo $user["profile"];?>"  border="0"></a>
</div>
		<canvas id="canvas1"></canvas>
		<a href="gallery/artist.php">	
			<h1 class="main-title">中国杰出书画家- <?php echo $user["name"];?> 个人美术馆</span></h1></a>
	
		</div>
	</div>
</div><!-- /container -->


<script type="text/javascript">
var x = 0,y = 0 //浮动层的初始位置，分别对应层的初始X坐标和Y坐标 
var xin = true, yin = true //判断层的X坐标和Y坐标是否在在控制范围之内，xin为真是层向右移动，否则向左；yin为真是层向下移动，否则向上 
var step = 1 //层移动的步长，值越大移动速度越快 
var delay = 10 //层移动的时间间隔,单位为毫秒，值越小移动速度越快 
var obj=document.getElementById("ad") //捕获id为ad的层作为漂浮目标 
function floatAD() {
var L=10
var T=10 //层移动范围的左边界(L)和上边界(T)坐标 
var R= document.body.clientWidth-obj.offsetWidth-10 //层移动的右边界 
var B= document.body.clientHeight-obj.offsetHeight //层移动的下边界 
obj.style.left = x + document.body.scrollLeft //更新层的X坐标，实现X轴方向上的运动；document.body.scrollLeft为文档区域的滚动条向右拉的距离，以保证在滚动条右拉时层仍在可见范围内 
obj.style.top = y + document.body.scrollTop //更新层的Y坐标，实现Y轴方向上的运动；document.body.scrollTop为文档区域的滚动条向下拉的距离，以保证在滚动条下拉时层仍在可见范围内 
x = x + step*(xin?1:-1) //通过判断层的范围决定层在X轴上的运动方向 
if (x < L) { xin = true; x = L} //层超出左边界时的处理 
if (x > R){ xin = false; x = R} //层超出右边界时的处理 
y = y + step*(yin?1:-1) //通过判断层的范围决定层在Y轴上的运动方向 
if (y < T) { yin = true; y = T } //层超出上边界时的处理 
if (y > B) { yin = false; y = B } //层超出下边界时的处理
}
var itl= setInterval("floatAD()", delay) //每delay秒执行一次floatAD函数 
obj.onmouseover=function(){clearInterval(itl)} //层在鼠标移上时清除上面的间隔事件，实现层在的鼠标移上时停止运动的效果 
obj.onmouseout=function(){itl=setInterval("floatAD()", delay)} //层在鼠标移开时开始间隔事件，实现层在的鼠标移开时继续运动的效果
</script>

<script src="js3/TweenLite.min.js"></script>
<script src="js3/EasePack.min.js"></script>
<script src="js3/rAF.js"></script>
<script src="js3/canvas1.js"></script>
</body>
</html>