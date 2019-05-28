<?php
    $counter = intval(file_get_contents("counter.dat"));  //创建一个dat数据文件   
    $counter++;  //刷新一次+1
    $fp = fopen("counter.dat","w");  //以写入的方式，打开文件，并赋值给变量fp
    fwrite($fp, $counter);   //将变量fp的值+1
    fclose($fp);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/mainpage.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
		<title>NCURobot</title>
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<body>
		<div id="box_float" style="position: fixed;bottom: 5px;height: 80px;>
			<a style="position:absolute;top:-20px;left:20px;" href="javascript:void(0);" onclick="document.getElementById('box_float').style.display='none'">关闭</a>
			<div class="box_links">
			<p style="display:inline-block;font-family:楷体;">其它链接：</p>
				<a href="http://ncurobot.club:1024">VIP视频解析</a>
	        	<a href="http://ncurobot.club:521">云盘</a>
			</div>
			
		</div>
		
		<div class="box">
			<div class="box_title">
				<span>南昌大学机器人大赛</span>
			</div>
			<div class="box_line">
				<hr style="width: 425px;height: 1px;border: none;background-color: black;"/>
			</div>
			<div class="box_subhead">
				<span>NanChang University Robot Competition</span>
			</div>
		</div>
		<div class="arrow">
			<div class="arrow_source">
				<a href="html/sources.html"><img src="img/sourceArrow.png" /></a>
			</div>
			<div class="arrow_signup">
				<a href="html/signup.html"><img src="img/loginArrow.png" /></a>
			</div>
		</div>
                <p style="position:absolute;width:450px;color:grey;bottom:10px;left:50%;font-family:楷体;"> <?php echo "访问量：".$counter;?> </p>
		<script src="https://cdn.bootcss.com/limonte-sweetalert2/7.28.5/sweetalert2.all.js"></script>
		<script src="js/mainpage.js"></script>
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	    <script>
			$(function(){
				$(".box").addClass("animated bounceIn");
			});
		</script>
	</body>
</html>
