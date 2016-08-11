<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="<?php echo "$base/$css";?>" />
		<title>画板</title>
		<style type="text/css">
			
			body 
			{ padding-top: 58px; }
			#click
			{
				padding-left: 100px;
				margin-top: 0px;
			}
			#myCarousel
			{
				padding-left: 15px;
				padding-top: 15px;
			}
			#hr
			{
				margin-top: 0px;
				margin-bottom: 7px;
				margin-left: 10px;
				width: 200px;
				border-color: rgba(251, 81, 81, 0.75);
			}
			#det
			{
				margin-left: 120px;
				margin-top: -30px;
				font-size: 23px;
				font-family: 楷体;
				color: #5E3821;
				width: 300px;
			}
			#dlzc
			{
				margin-top: 10px;
			}
			.navbar-text
			{
				font-size: 20px;
				padding-right: 20px;
				
			}
			.list
			{
				font-size: 25px;
				color: #414140;
				padding-left: 50px;
			}
			.nav-list
			{
				padding-top: 35px!important;
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
		    .btn-success
		    {
		    	margin-left: 570px;
		    	
		    }
			.carousel-inner
			{
				margin-left: 55px;
			}
			
			.fenlei
			{
				padding-left: 10px;
				padding-top: 20px;
				margin-bottom: 8px;
				font-size: 22px;
				font-family: "微软雅黑";
				color: #000000;
			}
			p.fenlei:hover
			{
				text-decoration: none!important;
				color: rgba(87, 41, 41, 0.4);
			}
			a:hover
			{
				text-decoration: none!important;
			}
			.more
			{
				font-size: 15px;
				padding-left: 100px;
			}
			.leftimg
			{
				padding-left: 10px;
				width: 95px;
				height: 80px;
			}
			.rightimg
			{
				padding-right: 10px;
				width: 95px;
				height: 80px;
			}
			.navbar-fixed-bottom
			{
				margin-left: 523px;
			}
			.picture-list
			{
				float: left;
				height: auto;
				
			}
			.a-list
			{
				width: 210px;
			}
			.left-list
			{
				width: 105px;
				float: left;
			}
			.btn-join
			{
				width: 100px;
				display: block;
				transition: all 0.2s ease 0s;
				color: #FFF;
				font-family: "楷体";
				font-size: 30px;
				background-color:rgba(251, 81, 81, 0.75);
				text-align: center;
				border-radius: 7px;
				padding: 5px 0px 5px 0px;
				margin-left: 650px;
				margin-top: -30px;
			}
			a.btn-join:hover
			{
				opacity: 0.8;
				text-decoration:none!important; 
				color: #ffffff!important; 
			}
		
<?php 
	if($artwork_url != "no"){
?>
			.pictures
			{
				background-image: url("<?php echo $artwork_url;?>");
				background-size: 750px 375px;
				width: 750px;
				height: 375px; 
			}
<?php
	}
?>
			.left
			{
				margin-left: 64px;
			}
			.right
			{
				margin-right: -50px;
			}
			#overf
			{
				overflow: visible;
				padding: 0px 5px 50px 120px;
				margin-left: -80px;
				width: 750px;
			}
			#gallery {
			    overflow: visible;
			}
			#gallery ul{
			    
			    margin-left:0px; 
			    }
			#gallery ul li {
			    
			    list-style:none; display:inline-table;margin-left: 0px;
			    }
			
			#gallery ul li .pic{
			    
			    -webkit-transition: all 0.6s ease-in-out;
			    
			    -moz-transition: all 0.6s ease-in-out;
			    
			    -o-transition: all 0.6s ease-in-out;
			    
			    opacity:0;
			    visibility:hidden; 
			    position:absolute; 
			    margin-top:50px; 
			    margin-left:0px; 
			    border:1px solid black;
			}
			#gallery ul li .mini:hover{
			    cursor:pointer;
			}
			
			#gallery ul li:hover .pic {
			    
			    width:400px; 
			    height:autopx;
			    opacity:1; 
			    visibility:visible; 
			    float:right;
			}
			.detail_container
			{
				width:1100px;
				margin-left:auto;
				margin-right:auto;
			}
			.list-pic
			{
				margin: -10px -5px;
			}
		</style>
		<script src="<?php echo $base."/js/jquery-2.1.0.js"?>"></script>
        <script src="<?php echo $base."/js/bootstrap.min.js"?>"></script>
        <style type="text/javascript" >
            function login()
            {
            	
            	var my2=document.getElementById(myModal2);
            	alert(my2);
            	my2.style.aria-hidden="true";
            }
            function resist()
            {
            	var my=document.getElementById(myModal);
            	alert(my);
            	my.style.aria-hidden="true";
            }
			
        </style>
	</head>
	<?php include "header.php";?>
	<body>
		<div class="detail_container">
			<p class="navbar-text pull-left">
				<a href="/onepiece/home" class="list">首页</a>
				<a href="/onepiece/class_list/0/0" class="list">海贼王</a>
				<a href="/onepiece/class_list/0/1" class="list">古剑</a>
				<a href="/onepiece/class_list/0/2" class="list">爸爸去哪儿</a>
				<a href="/onepiece/class_list/0/3" class="list">TFBOYS</a>
				<a href="/onepiece/class_list/0/4" class="list">IPHONO</a>
			</p>
			<ul class="nav nav-list">
		    	<li class="divider" style="height: 2px;background-color:rgba(251, 81, 81, 0.75);"></li>
		    </ul>
			<div class="row-fluid">
				<div class="span9" style="height: 480px;">
					<form id="draw" action="" method="post">
						<div id="myCarousel" class="carousel slide" style="width: 900px;height: 450px;">		  
							<div id="overf" class="carousel-inner">
								<div class="item active" >
								<div id="pictures" class="pictures" alt="" >
									<div id="gallery">
									 <ul>
<?php
	if(!empty($clip_infor)){
		foreach($clip_infor as $clip_item){
?>
									<li class="list-pic"><a href="<?php echo '/onepiece/show?record_id='.$clip_item['record_id']?>">
										<img src="<?php echo $clip_item['clip_after_draw'];?>" class="mini" width="30" height="15" id="picture" /><img src="<?php echo $clip_item['clip_after_draw'];?>" class="pic" id="picture" /></a>
									</li>
<?php
		}
	}
?>			
								</ul>				
								</div>
								</div>							
									<input name="artwork_id"id="artwork_id" hidden="true"value="<?php echo $artwork_id;?>">
									<input name = "theme" id="theme" hidden="true" value="<?php echo $theme;?>">
									<input name="artwork_url" hidden="true" value="<?php echo $artwork_url;?>">
									<input name="clip_position" hidden="true" value="<?php echo $clip_position;?>">
									<input id="choice" name="choice" hidden="true" value="">
								</div>
									<button type="submit"id="prev" class="left carousel-control"  data-slide="prev">&lsaquo;</button>
									<button type="submit"id="next" class="right carousel-control" data-slide="next">&rsaquo;</button>					
						</div> <!--lunbo-->
						<a type="submit" id="join" class="btn-join">参与</a>
					</form>
						<p id="det"><?php echo $artwork_name;?></p>
				</div><!--span9-->
				</div>
				<div class="span3" style="height: 480px;">
					<div>
						<a href="/onepiece/class_list/0/3"><p class="fenlei">TFBOYS</p></a>
						<hr id="hr">
					    <div class="row-fluid" >
				    		<div class="a-list" >
<?php 
	foreach($food as $food_item){
		$artwork_url = $food_item['artwork_url'];
		$artwork_id = $food_item['artwork_id'];
		$storage = new SaeStorage();
		$artwork = $storage->getUrl('onepiece',$artwork_url);
?>
				    			<a class="left-list" href="<?php echo "/onepiece/picture_detail?artwork_id=".$artwork_id;?>"><img class="leftimg" src="<?php echo $artwork;?>"></a>
<?php 
				}
?>
				    		</div>				    	
					    </div>   
					</div>
					<div>
						<a href="/onepiece/class_list/0/1"><p class="fenlei">古剑奇谭</p></a>
						<hr id="hr">
					    <div class="row-fluid" >
				    		<div class=" list-a" >
<?php 
	foreach($star as $star_item){
		$artwork_id = $star_item['artwork_id'];
		$artwork_url = $star_item['artwork_url'];
		$storage = new SaeStorage();
		$artwork = $storage->getUrl('onepiece',$artwork_url);
?>
				    			<a href="<?php echo "/onepiece/picture_detail?artwork_id=".$artwork_id;?>"><img class="leftimg" src="<?php echo $artwork;?>"></a>
<?php
					}
?>
				    		</div>					    	
					    </div>  
					</div>	
				</div>
			</div>
		</div>
		<a href="#" class="navbar navbar-fixed-bottom">山东大学ING工作室 Copyright © 2014</a>
	</body>
	<script>
		$(document).ready(function(){
			$("#prev").click(function(){
				$("#choice").attr("value",2); 
				$("#draw").attr("action","/onepiece/get_picture/"); 
				$("form").submit();
			});
			$("#next").click(function(){
				$("#choice").attr("value",1); 
				$("#draw").attr("action","/onepiece/get_picture/"); 
				$("form").submit();
			});
			$("#join").click(function(){
				$("#draw").attr("action","/onepiece/draw/"); 
				$("form").submit();
			});
		});
		
/*		$(function(){
//点击前翻，显示前一张图片
			$("#prev").click(function(){
				var choice = 2;
				var artwork_id = $('#artwork_id').val();
				var theme = $("#theme").val();
				$.post('/onepiece/get_picture',{artwork_id:artwork_id,theme:theme,choice:choice},function(msg){
					if(msg=="no"){
					//	document.write(msg);
						alert("无更多图片显示");
					}else{
						var infor=msg.split('*');
						$('#artwork_id').attr('value',infor[0]);
						$('#artwork_id').attr('hidden','true');
						$(".pictures").css("background-image","url("+infor[1]+")");
						$('#theme').attr('value',infor[2]);
						$('#theme').attr('hidden','true');
					}
				});
			});
//点击后翻，显示后一张图片;
			$("#next").click(function(){
				var choice = 1;
				var artwork_id = $('#artwork_id').val();
				var theme = $("#theme").val();
				$.post('/onepiece/get_picture',{artwork_id:artwork_id,theme:theme,choice:choice},function(msg){	
					if(msg=="no"){
					//	document.write(msg);
						alert("无更多图片显示");
					}
					else{
						var infor=msg.split('*');	
						$('#artwork_id').attr('value',infor[0]);
						$('#artwork_id').attr('hidden','true');
						$(".pictures").css("background-image","url("+infor[1]+")");				
						$('#theme').attr('value',infor[2]);
						$('#theme').attr('hidden','true');
					}
				});
			});
		});
		*/
	</script>
</html>
