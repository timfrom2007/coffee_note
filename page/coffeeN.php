<?php include("Mysql_util.php"); ?>
<!DOCTYPE html>
<html lang="tw-zh" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta property="og:title" content="咖啡筆記店家" />
	<meta property="og:type" content="所有吃喝動手做" />
	<title>咖啡筆記店家</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/styleN.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> -->
	 <script src="../js/jquery-1.11.3.min.js"></script>
	 <script src="../js/coffeeN.js"></script>
</head>
<body>
     <div class="headback"></div>
	<div class="header">
		<a  href="">
			<img src="../img/Note.png" alt="revise later">
		</a>
		<div class="little_header">
			<a id="articleChange-color" class="selector">文章</a>
			<a id="articleChange-color" class="selector">專輯</a>
			<a id="articleChange-color" class="selector">原料</a>
			<a id="articleChange-color" class="selector">器材</a>
			<a id="articleChange-color" class="selector-check">店家</a>
			<a id="articleChange-color" class="selector">相簿</a>
			<a id="articleChange-color" class="selector">活動</a>
		</div>
	</div>  		
	<div class="left-column">
	  	<h1 class="find-shops">
	  		<!-- filter-v -->
	    	<a><img src="../img/findShops.png"></a>
	    </h1>
			    <div class="filter-row">
					<div class="filter-title">台北行政區</div>
					<div class="filter-item">
						<select id="area" name="area">
						  <option value="">請選擇</option>
						  <option value="中正區">中正區</option>
						  <option value="大同區">大同區</option>
						  <option value="中山區">中山區</option>
						  <option value="松山區">松山區</option>
						  <option value="大安區">大安區</option>
						  <option value="萬華區">萬華區</option>
						  <option value="信義區">信義區</option>
						  <option value="士林區">士林區</option>
						  <option value="北投區">北投區</option>
						  <option value="內湖區">內湖區</option>
						  <option value="南港區">南港區</option>
						  <option value="文山區">文山區</option>
						</select>
	  				</div>
	  			</div>
	  			<div class="filter-row">
		    		<div class="filter-title">設備</div>
		    		<ul class="filter-item" id="equipment">
						<li class="equipment-wifi">
							<input id="wifi-item-wifi" type="checkbox" value="true" onclick="" name="wifi">
							<label for="wifi-item-wifi" >wifi</label>
						</li>
						<li class="equipment-plug">
							<input id="wifi-item-plug" type="checkbox" value="true" onclick="" name="plug">
							<label for="wifi-item-plug" >插座</label>
						</li>
						<li class="equipment-outdoor">
							<input id="wifi-item-outdoor" type="checkbox" value="true" onclick="" name="outdoor">
							<label for="wifi-item-outdoor" >戶外場地</label>
						</li>
						<li class="equipment-meeting_area">
							<input id="wifi-item-meeting_area" type="checkbox" value="true" onclick="" name="meeting_area">
							<label for="wifi-item-meeting_area"  data-plug="1">會議區</label>
						</li>
						<li class="equipment-parking">
							<input id="wifi-item-parking" type="checkbox" value="true" onclick="" name="parking">
							<label for="wifi-item-parking" >停車場</label>
						</li>
					</ul>
	  			</div>
	  			<div class="filter-row">
		    		<div class="filter-title">提供服務</div>
		    		<ul class="filter-item" id="service-">
						<li class="service-credit">
							<input id="eat-item-credit" type="checkbox" value="true" onclick="" name="credit_card">
							<label for="eat-item-credit">可刷卡</label>
						</li>
						<li class="service-meal">
							<input id="eat-item-meal" type="checkbox" value="true" onclick="" name="meal">
							<label for="eat-item-meal" >提供簡餐</label>
						</li>
						<li class="service-reservation" >
							<input id="eat-item-reservation" type="checkbox" value="true" onclick="" name="reservation">
							<label for="eat-item-reservation" >可預約</label>
						</li>
						<li class="service-deliver" >
							<input id="eat-item-deliver" type="checkbox" value="true" onclick="" name="deliver">
							<label for="eat-item-deliver" >外送</label>
						</li>
						<li class="service-book_out" >
							<input id="eat-item-book_out" type="checkbox" value="true" onclick="" name="book_out">
							<label for="eat-item-book_out" >可包場</label>
						</li>
						<li class="service-exhibition" >
							<input id="eat-item-exhibition" type="checkbox" value="true" onclick="" name="exhibition">
							<label for="eat-item-exhibition" >展演</label>
						</li>
						<li class="service-time_unlimit" >
							<input id="eat-item-time_unlimit" type="checkbox" value="true" onclick="" name="time_unlimit">
							<label for="eat-item-time_unlimit" >不限時間</label>
						</li>
					</ul>
	  			</div>
	  			<div class="filter-row">
		    		<div class="filter-title">經典門市</div>
		    		<ul class="filter-item" id="classical">
						<li class="other-classic">
							<input id="other-item-classic" type="checkbox" value="true" onclick="" name="classical">
							<label for="other-item-classic">經典門市</label>
						</li>
					</ul>
	  			</div>
	  		</div>
	  		
	  		<div class="shop-list">
                <div class="shop-header">
                    <div class="shop-title">
                        <img src="../img/boil.png">
                    </div>
                    <div class="shop-title-text">
                        <img src="../img/coffeeShop.png">
                    </div>
                    <div class="shop-search">
                        <input type="text" value="" placeholder="搜尋店家名稱" class="inputShop">
                        <div type="button">
                            <img src="../img/search-icon.png">
                        </div>
                    </div>
                </div>
                
                <div id="shop">
                   <!-- ajax呼叫的結果會顯示在這 -->
                   <?php
                    $count = 0;
                    $result = show_all_cafe();
                    while($row = mysql_fetch_row($result)){

                        $count +=1;
                        if($count>4){ break; }

                      echo "<li class='one-shop'>";

                        echo "<!-- <div class='shop-line'>";
                            echo "<img src='../img/line.png' alt='revise later'>";
                        echo "</div> -->";
                        echo "<!-- ul li shop list shop item line pseudo -->";
                        echo "<div class='shop-box'>";
                            echo "<div class='shop-photo'>";
                                echo "<img src='$row[19]' alt='revise later'>";
                            echo "</div>";
                            echo "<div class='shop-text-box'>";
                                echo "<!-- shop-summery -->";
                                echo "<div class='shop-name'>";
                                    echo "$row[0]";
                                echo "</div>";
                                echo "<div class='shop-text-item'>地址:</div>";
                                echo "<p class='shop-name-text'>";
                                    echo "<!-- shop-address -->";
                                    echo "$row[2]";
                                echo "</p>";
                                echo "<div class='shop-text-item'>電話:</div>";
                                echo "<p class='shop-name-text'>";
                                    echo "<!-- shop-teaser -->";
                                    echo "$row[1]";
                                echo "</p>";
                            echo "</div>";
                        echo "</div>";
                      echo "</li>";

                    }
                    ?>
	  	        </div>
	  	
	  	
	</div>
	<div class="right-column">
	  	<div class="column-item">
		  	<img src="../img/cafe/dessert03.jpg" class="ads">
		</div>	
		<div class="column-item">
		  	<h1>
		    	<a>
		    		<img src="../img/cake.png" class="hot-cake">
		    		<img src="../img/hot-articles.png" class="hot-article-title">
		    	</a>
		    </h1>
		    <div class="hot-article-wrap">
			    <a href="">
			    	<div class="dot" ></div>
			    	<p class="hot-article-text">女神咖啡杯大賣，限時搶購熱銷秒殺</p>
			    </a>    
				<a href="">
					<div class="dot" ></div>
			    	<p class="hot-article-text">聊天聖地-不限時咖啡店全集</p>
				</a>
				<a href="">
					<div class="dot" ></div>
			    	<p class="hot-article-text">樹葉拉花拉不膩?簡單新招教給你</p>
				</a>
				<a href="">
					<div class="dot" ></div>
					<p class="hot-article-text">怎麼讓咖啡冷掉還是好好喝?</p>
				</a>
				<a href="">
					<div class="dot" ></div>
					<p class="hot-article-text">原來七夕這樣喝咖啡</p>
				</a>
			</div>
		</div>		
		<div class="column-item">
		  	<img src="../img/cafe/dessert03.jpg" class="ads">
		</div>
	</div>
	
	<div class="footer">
		<img src="../img/footer.png" alt="revise later">
	</div>
</body>
