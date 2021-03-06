﻿<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo "$base/$css";?>"/>
		<title>画板</title>
		<style type="text/css">
			body 
			{ padding-top: 58px; }
			#click
			{
				padding-right: 40px;
			}
			.navbar-text
			{
				font-size: 20px;
				padding-right: 0px;
				font-family: "微软雅黑";
			}
			.list
			{
				font-size: 25px;
				color: #000000;
				padding-left: 25px;
			}
			.nav-list
			{
				padding-top: 33px;
			}
			.btn-info
			{
				margin-left:80px ;
			}
			.checkbox
			{
				padding-top: 15px;
				margin-left: 80px;
			}
			.pic-d2
			{
				margin: 10px 20px 20px;
				padding: 10px 20px;
				
			}
			.pic-c2
			{
				border-style: dotted;
				border-width: 3px;
				border-color:#F2F2F2 ;
				height: 500px;
			}
			.pic-c3
			{
				font-size: 16px;
				color: #777777;
				padding: -100px -100px 0px 0px;
				height:0px;
			}
			.foot-size
			{
				text-align: center;
			}
			#stage
			{
				display:none
			}
			.draw_container
			{
				width: 1100px;
				margin-left: auto;
				margin-right: auto;
				height: 600px;
			}
			#btn-submit 
			{
				width: 100px;
				display: block;
				margin: -60px 1100px;
				transition: all 0.2s ease 0s;
				color: #FFF;
				font-family: "楷体";
				font-size: 30px;
				background-color: rgba(251, 81, 81, 0.75);
				text-align: center;
				border-radius: 7px;
				padding: 10px 0px 15px 7px;
				
			}
			a:hover
			{
				opacity: 0.8;
				text-decoration:none!important;  
			}
			#btn-back 
			{
				width: 100px;
				height: 90px;
				background-image: url(../../img/back.jpg);
				display: block;
				margin: -520px -80px;
				transition: all 0.2s ease 0s;
				
			}
			.form
			{
				margin: 0px 10px;
			}
			.thumbnail
			{
				border-color:rgba(251, 81, 81, 0.75)!important;
			}
			
		</style>
		<script src="../../js/jquery-2.1.0.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
	</head>
	<body onload="pageload()">
	<?php include "header.php"?>
		<div class="draw_container">
<!--			<p class="navbar-text pull-left">
				<a href="#" class="list">都市</a>
				<a href="#" class="list">生活</a>
				<a href="#" class="list">娱乐</a>
				<a href="#" class="list">爱好</a>
			</p>
			<ul class="nav nav-list">
		    	<li class="divider" style="height: 2px;"></li>
		    </ul>
-->
		    <div class="thumbnail pic-d2" align= "center">
		    	<div class="pic-c2">
		    		<canvas id="the_stage" width="1000" height="500" style="border:1px solid #999;">您的浏览器不支持canvas!</canvas>
		    	</div>
		<form class="form" action="/onepiece/save_draw/" method="post" onsubmit="return sub()">
					<div class="pic-c3">
						<input name="artwork_id"id="artwork_id" value="<?php echo $artwork_id?>" hidden="true">
						<input name="clip_position"id="clip_position" value="<?php echo $clip_position?>" hidden="true">
						<input name="coordinate"id="coordinate" value="" hidden="true">
						<input name="image"id="image" value=""hidden="true">
						<input name="clip_before_draw"id="clip_before_draw" value="<?php echo $clip_before_draw?>"hidden="true">
					</div><!--pic-c3-->			
			</div><!--thumbnail pic-d2-->
			<button id="btn-submit" type="submit">提交</button>
		</form>
			<a id="btn-back" href="<?php echo "/onepiece/picture_detail?artwork_id=$artwork_id";?>"></a>
		</div><!--container-->	
		<footer class="foot-size"><p>山东大学ING工作室 Copyright © 2014</p></footer>		
	</body>
	<script>
		//记录坐标的字符串
		var recordxy = "";
		var former_x = 0;
		var former_y = 0;
		var x, y;
		var myInterval;
		var i = 0
		var x1 = 0, y1 = 0;
		var record_x = "", record_y = "";
		var myInterval;
		var n = 0;
		var myCanvas = document.getElementById("the_stage");
		//标志是否为起点。若为&，为起点；若为|，不是起点
		var flag = "";
		function sub(){
			var image = myCanvas.toDataURL("image/png");
			if(recordxy!=""){
				$("#coordinate").attr("value",recordxy); 
				$("#image").attr("value",image);
				return true;
			}
			else{
				return false;
			}
		}
		function pageload(){
			var x,y;
			var can = document.getElementById("the_stage");
			var cans = can.getContext('2d');
			var objImg = new Image();
			objImg.src = "<?php echo $clip_before_draw?>";
			objImg.onload = function (){
				cans.drawImage(objImg,0,0,1100,550);//drawImage(Image,x,y,width,height)x,y:要绘制图像的左上角的位置;width,height:图像尺寸
			}
		}
		
		function getMousePos(canvas,evt){
			var rect = canvas.getBoundingClientRect();
			return {
			  x:evt.clientX - rect.left,
			  y:evt.clientY - rect.top
			}    
		  } 
		
		function Draw(arg) {
			if (arg.nodeType) {
				this.canvas = arg;
			} else if (typeof arg == 'string') {
				this.canvas = document.getElementById(arg);
			} else {
				return;
			}
			this.init();
		}
		Draw.prototype = {
			init: function() {
					var that = this;
					if (!this.canvas.getContext) {
						return;
					}
					this.context = this.canvas.getContext('2d');
					this.canvas.onselectstart = function () {
						return false; //修复chrome下光标样式的问题
					};
					this.canvas.onmousedown = function(event) {
					
						
						mousePos = getMousePos(myCanvas,event);
						x = mousePos.x;
						y = mousePos.y; 
						
					
					
						//记录起点坐标
						recordxy += "&"+x+","+y;
						that.drawBegin(event);
			//			myInterval = setInterval(setTimer(former_x,former_y),100);
					};
			},
			drawBegin: function(e) {
				var that = this,
				stage_info = this.canvas.getBoundingClientRect();
				window.getSelection ? window.getSelection().removeAllRanges() :
				document.selection.empty(); //清除文本的选中
				this.context.moveTo(
					e.clientX - stage_info.left,
					e.clientY - stage_info.top
				);
				document.onmousemove = function(event) {
				//	document.getElementById("xycoordinates").value += "onmousemove";
					x=event.clientX;
					y=event.clientY;
					that.drawing(event);
				};
				document.onmouseup = this.drawEnd;
			},
			//画图函数，鼠标左键松开前，会一直重复执行
			drawing: function(e) {
			//	document.getElementById("xycoordinates").value += "drawing";
				var stage_info = this.canvas.getBoundingClientRect();
				this.context.lineTo(
					e.clientX - stage_info.left,
					e.clientY - stage_info.top
				);
				mousePos = getMousePos(myCanvas,e) ;
				x = mousePos.x;
				y = mousePos.y; 
		
			//每移动三个像素画一笔。并记录坐标
			if(i%3 == 0 && x>0 && y>0 && x<myCanvas.width && y<myCanvas.height){
					recordxy += "|"+x+","+y;
					//设置线条宽度
					this.context.lineWidth = 5;
					this.context.stroke();
				}
				i++;
			},
			//鼠标松开时，停止画图
			drawEnd: function() {
			//	stopTimer(myInterval);
				document.onmousemove = document.onmouseup = null;
			}
		};
		var draw = new Draw('the_stage');
	</script>
</html>