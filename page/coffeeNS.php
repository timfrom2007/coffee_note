<?php include("Mysql_util.php"); ?>
<?php $cafe = $_GET['cafe']; ?>
<?php

$result = show_coffeeNS($cafe);
while($row = mysql_fetch_row($result)){?>
<!DOCTYPE html>
<html lang="tw-zh" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta property="og:title" content="咖啡筆記店家內頁" />
	<meta property="og:type" content="所有吃喝動手做" />
	<title>咖啡筆記-Starbucks</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/styleNS.css">
	<link rel="stylesheet" type="text/css" href="../slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
	<!-- <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> -->
	 <script src="../js/jquery-1.11.3.min.js"></script>
	 <script src="../js/coffeeNS.js"></script>
</head>
<body class="wrap">
	<div class="header">
		<a >
			<img src="../img/notehead.png" alt="revise later">
		</a>
	</div>	  
	<div class="content">		
		<div class="shop-list">
			<div class="shop-header">
				<div class="shop-title">
					<img src="../img/takengo.png">
				</div>
				<div class="shop-title-text">
					<a><?php echo $row[0]; ?></a>
				</div>
				<div class="faces">
					<div id="smileface" class="smile"></div>
					<div id="smileface-check" class="smile-check is-hidden"></div>
					<div id="sosoface" class="soso"></div>
					<div id="sosoface-check" class="soso-check is-hidden"></div>
					<div id="badface" class="bad"></div>
					<div id="badface-check" class="bad-check is-hidden"></div>
				</div>
			</div>
			<li class="one-shop">
				<div class="shop-head-box">
					<div class="shop-head-photo">
						<img src="<?php echo $row[19]; ?>" alt="revise later">
					</div>
					<div class="small-intro">
					    <a class="intro-name">小介紹</a>
					    <div class="intro-wrap">
						    <div class="intro-item">
						    	<img src="../img/cake.png" >
						    	<a class="item">地址</a>
						    	<a class="intro-text"><?php echo $row[2]; ?></a>
						    </div>    
							<div class="intro-item">
								<img src="../img/cake.png" >
						    	<a class="item">營業時間</a>
						    	<a class="intro-text"><?php echo $row[3]; ?></a>
							</div>
							<div class="intro-item">
								<img src="../img/cake.png" >
					    		<a class="item">電話</a>
					    		<a class="intro-text"><?php echo $row[1]; ?></a>
					    		<!-- <p class="shop-text-item">電話</p>
					    		<a class="shop-name-text">2315-5642</a> -->
					    	</div>
							<div class="intro-item">
								<img src="../img/cake.png" >
								<a class="item">價格</a>
								<a class="intro-text"><?php echo $row[6]; ?></a>
							</div>
							<div class="intro-item">
								<img src="../img/cake.png" >
								<a class="item">備註</a>
								<a class="intro-text"><?php echo $row[18]; } ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</li>
		  	<li class="one-shop">
				<div class="shop-box">
					<div class="shop-text-box">
						<div class="shop-name">
							Starbucks超級無敵好喝的啦~~
						</div>
						<p class="shop-name-text">
							跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。
						</p>
						<p class="shop-name-text">
							跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。
						</p>
						<p class="shop-name-text">
							跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。跟任何星巴克包裝打卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。卡都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。都很上鏡，不管是牛皮紙袋還是綠色女神咖啡杯都能讓你瞬間升級質感文青，而且好好喝喔。
						</p>
						<div class="shop-text-item">
							咖啡隱士--08/05/2015
						</div>
					</div>
				</div>
		  	</li>
		  	<li class="one-shop">
				<div class="shop-header">
					<div class="shop-title">
						<img src="../img/bottle.png">
					</div>
					<div class="shop-title-text">
						<a>討論</a>
					</div>
				</div>
				<div class="shop-box">
				    <div class="comment-item">
				    	<img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xpa1/v/t1.0-1/p200x200/11205032_10204511182214036_2553782430863779392_n.jpg?oh=a4379038f7d5ee4b0f41634c2d620ab2&oe=567FD327&__gda__=1450805430_3358dbe49aa1374e031adb8b4dd333c0" class="user-head">
				    	<a class="comment-name">cathyshihs</a>
				    	<p class="comment-text">夏天就是要喝星冰樂啊</p>
				    </div>
				    <div class="comment-item">
				    	<img src="../img/cafe/dessert02.jpg" class="user-head">
				    	<a class="comment-name">gmfireman</a>
				    	<p class="comment-text">每天都在買一送一==</p>
				    </div>
				    <div class="comment-item">
				    	<img src="../img/cafe/dessert01.jpg" class="user-head">
				    	<a class="comment-name">chocochoco</a>
				    	<p class="comment-text">我是覺得在喝氣氛啦，只是怎麼大家排隊都可以遇到正妹店員，我也想要在咖啡杯上被寫鼓勵的話啦QQ</p>
				    </div>
				</div>
		  	</li>
	  		<div class="page">
			    <h>page:</h>
				<a href="">1</a>    
				<a href="">2</a>
				<a href="">3</a>
				<a href="">4</a>
				<a href="">5</a>
			</div>
		</div>
		<div class="right-column">
		  	<div class="map">
			  	<h2 class="map-text">
			  		Map
			  	</h2>
			  	<div class="map-item">
					<img src="../img/map2.jpg">
				</div>
			</div>
			<div class="map">
			  	<h2 class="map-text">
			  		Photo
			  	</h2>
			  	<div class="slider">
				    <div class="image01"></div>
				    <div class="image02"></div>
				    <div class="image03"></div>
				    <div class="image04"></div>
				    <div class="image05"></div>
				    <div class="image06"></div>
  				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="../slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        centerMode: true,
        variableWidth: true
      });
    });
  </script>
	
</body>
