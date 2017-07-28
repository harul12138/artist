<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
 require_once ("mysql_connect.php");
 mysql_query("SET NAMES 'utf8'"); 
  $name=$_POST['name'];
  $content=$_POST['content'];
  $time=date("Y-m-d H:i:s");
  if(is_array($_POST)&&count($_POST)>0)//先判断是否通过Post提交了请求
    {
  if($name==""||$content=="")  
{  
     echo"<script type='text/javascript'>alert('不能为空');; 
      location='artist.php';</script>";   

}else{ 
      $sql = "insert into board (name,content,date) values ('".$name. "','".$content."','".$time."')";
          $result=mysql_query($sql);  
        if(!$result)  
        {  
          echo"<script type='text/javascript'>alert('留言发布失败');; 
      </script>"; 
     
        }  
        else   
        {  
             echo"<script type='text/javascript'>alert('留言发布成功');; 
      </script>"; 
        }  
  } }
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

         <link href="css/bootstrap.css" rel="stylesheet" />
          <link href="css/component.css" rel="stylesheet" />
          <link href="css/bootstrap-responsive.css" rel="stylesheet" />



<style type="text/css">
/*留言板*/
body{color:#333;background-color:transparent;}
#msgBox{width:832px; height:800px; border-radius:5px;margin:12px auto;padding-top:12px;}
#userName,#conBox{color:#777;border:2px solid #d0d0d0;border-radius:6px;padding:5px 7px;font:14px/1.5 arial;}
#userName.active,#conBox.active{border:2px solid #fff;}
#userName{height:35px;margin:0px 0px 20px 55px;}  /*shang,you,xia,zuo*/
#conBox{width:729px;resize:none;height:97px;overflow:auto;}
#msgBox form div{position:relative;color:#999;margin-top:10px;}
#msgBox img{border-radius:3px;}
#face{position:absolute;top:0px;left:51px;}
#face img{width:33px;height:33px;cursor:pointer;margin-right:7px;opacity:0.5;filter:alpha(opacity=50);}
#face img.hover,#face img.current{width:31px;height:31px;border:1px solid #fff;opacity:1;filter:alpha(opacity=100);}
#msgBox form .maxNum{font:26px/30px Georgia, Tahoma, Arial;padding:0 5px;}
#msgBox .list{padding:7px;}
#msgBox .list h3{position:relative;height:33px;font-size:14px;font-weight:400;background:#e3eaec;border:1px solid #dee4e7;}
#msgBox .list h3 span{position:absolute;left:6px;top:6px;background:#fff;line-height:28px;display:inline-block;padding:0 15px;}
#msgBox .list ul{overflow:hidden;zoom:1;height:330px;overflow-y: auto;}
#msgBox .list ul li{float:left;clear:both;width:100%;border-bottom:1px dashed #d8d8d8;padding:10px 0;background:#fff;overflow:hidden;}
#msgBox .list ul li.hover{background:#f5f5f5;}
#msgBox .list .userPic{float:left;width:50px;height:50px;display:inline;margin-left:10px;border:1px solid #ccc;border-radius:3px;}
#msgBox .list .content{float:left;width:400px;font-size:14px;margin-left:10px;font-family:arial;word-wrap:break-word;}
#msgBox .list .userName{display:inline;padding-right:5px;}
#msgBox .list .userName a{color:#2b4a78;}
#msgBox .list .msgInfo{display:inline;word-wrap:break-word;}
#msgBox .list .times{color:#889db6;font:12px/18px arial;margin-top:5px;overflow:hidden;zoom:1;}
#msgBox .list .times span{float:left;}
#msgBox .list .times a{float:right;color:#889db6;display:none;}
.tr{overflow:hidden;zoom:1;}
.tr p{float:right;line-height:29px;margin-bottom:3px;}
.countTxt{color:#A5B1AE;}


</style>
<script type="text/javascript">
//留言板

var get = {
  byId: function(id) {
    return typeof id === "string" ? document.getElementById(id) : id
  },
  byClass: function(sClass, oParent) {
    var aClass = [];
    var reClass = new RegExp("(^| )" + sClass + "( |$)");
    var aElem = this.byTagName("*", oParent);
    for (var i = 0; i < aElem.length; i++) reClass.test(aElem[i].className) && aClass.push(aElem[i]);
    return aClass
  },
  byTagName: function(elem, obj) {
    return (obj || document).getElementsByTagName(elem)
  }
};
/*-------------------------- +
  事件绑定, 删除
 +-------------------------- */
var EventUtil = {
  addHandler: function (oElement, sEvent, fnHandler) {
    oElement.addEventListener ? oElement.addEventListener(sEvent, fnHandler, false) : (oElement["_" + sEvent + fnHandler] = fnHandler, oElement[sEvent + fnHandler] = function () {oElement["_" + sEvent + fnHandler]()}, oElement.attachEvent("on" + sEvent, oElement[sEvent + fnHandler]))
  },
  removeHandler: function (oElement, sEvent, fnHandler) {
    oElement.removeEventListener ? oElement.removeEventListener(sEvent, fnHandler, false) : oElement.detachEvent("on" + sEvent, oElement[sEvent + fnHandler])
  },
  addLoadHandler: function (fnHandler) {
    this.addHandler(window, "load", fnHandler)
  }
};
/*-------------------------- +
  设置css样式
  读取css样式
 +-------------------------- */
function css(obj, attr, value)
{
  switch (arguments.length)
  {
    case 2:
      if(typeof arguments[1] == "object")
      { 
        for (var i in attr) i == "opacity" ? (obj.style["filter"] = "alpha(opacity=" + attr[i] + ")", obj.style[i] = attr[i] / 100) : obj.style[i] = attr[i];
      }
      else
      { 
        return obj.currentStyle ? obj.currentStyle[attr] : getComputedStyle(obj, null)[attr]
      }
      break;
    case 3:
      attr == "opacity" ? (obj.style["filter"] = "alpha(opacity=" + value + ")", obj.style[attr] = value / 100) : obj.style[attr] = value;
      break;
  }
};

EventUtil.addLoadHandler(function ()
{
  var oMsgBox = get.byId("msgBox");
  var oUserName = get.byId("userName");
  var oConBox = get.byId("conBox");
  var oSendBtn = get.byId("sendBtn");
  var oMaxNum = get.byClass("maxNum")[0];
  var oCountTxt = get.byClass("countTxt")[0];
  var oList = get.byClass("list")[0];
  var oUl = get.byTagName("ul", oList)[0];
  var aLi = get.byTagName("li", oList);
  var aFtxt = get.byClass("f-text", oMsgBox);
  var aImg = get.byTagName("img", get.byId("face"));
  var bSend = false;
  var timer = null;
  var oTmp = "";
  var i = 0;
  var maxNum = 200;
  

  
  //为Ctrl+Enter快捷键绑定发送事件
  EventUtil.addHandler(document, "keyup", function(event)
  {
    var event = event || window.event;
    event.ctrlKey && event.keyCode == 13 && fnSend()
  });
  
  
  
  //事件绑定, 判断字符输入
  EventUtil.addHandler(oConBox, "keyup", confine);  
  EventUtil.addHandler(oConBox, "focus", confine);
  EventUtil.addHandler(oConBox, "change", confine);
  
  //输入字符限制
  function confine ()
  {
    var iLen = 0;   
    for (i = 0; i < oConBox.value.length; i++) iLen += /[^\x00-\xff]/g.test(oConBox.value.charAt(i)) ? 1 : 0.5;
    oMaxNum.innerHTML = Math.abs(maxNum - Math.floor(iLen));  
    maxNum - Math.floor(iLen) >= 0 ? (css(oMaxNum, "color", "#000"), oCountTxt.innerHTML = "\u8fd8\u80fd\u8f93\u5165", bSend = true) : (css(oMaxNum, "color", "#fff"), oCountTxt.innerHTML = "\u5df2\u8d85\u51fa", bSend = false)
  }
  //加载即调用
  confine();    
  
  
  //li鼠标划过/离开处理函数
  function liHover()
  {
    for (i = 0; i < aLi.length; i++)
    {
      //li鼠标划过样式
      EventUtil.addHandler(aLi[i], "mouseover", function (event)
      {
        this.className = "hover";
        oTmp = get.byClass("times", this)[0];
        var aA = get.byTagName("a", oTmp);
    
          aA[0].style.display = "block";
        
      });

      //li鼠标离开样式
      EventUtil.addHandler(aLi[i], "mouseout", function ()
      {
        this.className = "";
        var oA = get.byTagName("a", get.byClass("times", this)[0])[0];
        oA.style.display = "none" 
      })
    }
  }
  liHover();
  
  
  
  //输入框获取焦点时样式
  for (i = 0; i < aFtxt.length; i++)
  {
    EventUtil.addHandler(aFtxt[i], "focus", function () {this.className = "active"});   
    EventUtil.addHandler(aFtxt[i], "blur", function () {this.className = ""})
  }
  
  //格式化时间, 如果为一位数时补0
  function format(str)
  {
    return str.toString().replace(/^(\d)$/,"0$1")
  }
  
  //头像
  for (i = 0; i < aImg.length; i++)
  {
    aImg[i].onmouseover = function ()
    {
      this.className += " hover"
    };
    aImg[i].onmouseout = function ()
    {
      this.className = this.className.replace(/\s?hover/,"")
    };
    aImg[i].onclick = function ()
    {
      for (i = 0; i < aImg.length; i++) aImg[i].className = "";
      this.className = "current"  
    }
  }
});

</script>
</head>
<body>

<div id="msgBox">
    <form action="message.php" method="post" target="message">
        
        <div align="center">
            <p id="face"><img src="message/face1.gif" class="current" /><img src="message/face2.gif" /><img src="message/face3.gif" /><img src="message/face4.gif" /><img src="message/face5.gif" /><img src="message/face6.gif" /><img src="message/face7.gif" /></p>
            <input id="userName" class="f-text" name="name"/>
        </div>
        <div align="center"><textarea id="conBox" class="f-text" name="content" placeholder="请输入您的姓名（昵称）和留言内容"></textarea></div>
        <div class="tr">
            <p>
                <span class="countTxt">还能输入</span><strong class="maxNum">200</strong><span class="countTxt">个字</span>
                <button id="sendBtn" type="submit" class="btn btn-info">发布</button>
              
            </p>
        </div>
    </form>

    <div class="list">

        <ul>
                        <?php 
require_once ("mysql_connect.php");
mysql_query("set names 'utf8'");
      $sql="select * from board ORDER BY id DESC"; 
        $sq=mysql_query($sql);
while($mlist=mysql_fetch_array($sq)){    ?> 
            <li>
                <div class="userPic">
                <?php 
//This will get an array of all the gif, jpg and png images in a folder 
$img_array = glob("message/*.{gif,jpg}",GLOB_BRACE); 
//Pick a random image from the array 
$img = array_rand($img_array);   
//Display the image on the page 
echo '<img src="'.$img_array[$img].'" />'; 
?>
</div>
                    
                <div class="content">
<font color="#777">
                    <div class="userName"><a href="#"><?php echo $mlist['name'];?></a>:</div>
                    <div class="msgInfo"><?php echo $mlist['content'];?></div></font>
                    <div class="times"><span><?php echo $mlist['date'];?></span></div>
 <?php }    ?>
                </div>
   
            </li>
           
        </ul>
    </div>  
</div>

</body>
</html>

