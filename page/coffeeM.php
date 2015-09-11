<?php include("Mysql_util.php"); ?>
<?php ?>
<!DOCTYPE html>
<html lang="tw-zh" prefix="og: http://ogp.me/ns#">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta property="og:title" content="咖啡筆記器材" />
	<meta property="og:type" content="所有吃喝動手做" />
	<title>咖啡筆記器材</title>
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/styleM.css">
	<!-- <link href='http://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'> -->
	 <script src="../js/jquery-1.11.3.min.js"></script>
	 <script src="../js/coffeeM.js"></script>
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
			<a id="articleChange-color" class="selector-check">器材</a>
			<a id="articleChange-color" class="selector">店家</a>
			<a id="articleChange-color" class="selector">相簿</a>
			<a id="articleChange-color" class="selector">活動</a>
		</div>
	</div>	 		
	<div class="left-column">
	  	<h1 class="find-shops">
	    	<a><img src="../img/findMachines.png"></a>
	    </h1>
	    <div class="filter-row">
    		<div class="filter-title">豆子處理</div>
				<ul class="filter-item" id="bean-deal">
					<li class="bean-deal-dry" data-cost="0">
						<input id="bean-item-dry" type="checkbox" value="1" onclick="" name="coffee_machine" >
						<label for="bean-item-dry">咖啡機</label>
						<p class="asinput"></p>
					</li>
					<li class="bean-deal-mo" data-cost="100">
						<input id="bean-item-mo" type="checkbox" value="2" onclick="" name="grinder" >
						<label for="bean-item-mo">磨豆機</label>
					</li>
				</ul>	
			</div>
			<div class="filter-row">
	    		<div class="filter-title">咖啡沖泡</div>
		    		<ul class="filter-item" id="bean-boil">
		    		    <li class="bean-boil-paper" data-time="5">
							<input id="bean-item-paper" type="checkbox" value="3" onclick="" name="coffee_filter_pot" >
							<label for="bean-item-paper">咖啡濾紙</label>
						</li>
						<li class="bean-boil-pot" data-time="0">
							<input id="bean-item-pot" type="checkbox" value="4" onclick="" name="coffee_pot" >
							<label for="bean-item-pot">咖啡壺</label>
						</li>
						<li class="bean-boil-hand" data-time="1">
							<input id="bean-item-hand" type="checkbox" value="5" onclick="" name="hand_pot" >
							<label for="bean-item-hand">手沖壺</label>
						</li>
						<li class="bean-boil-handcup" data-time="2">
							<input id="bean-item-handcup" type="checkbox" value="6" onclick="" name="hand_filter_pot" >
							<label for="bean-item-handcup">手沖濾杯</label>
						</li>
						<li class="bean-boil-milk" data-time="3">
							<input id="bean-item-milk" type="checkbox" value="7" onclick="" name="foamer" >
							<label for="bean-item-milk">奶泡器</label>
						</li>
						<li class="bean-boil-fire" data-time="4">
							<input id="bean-item-fire" type="checkbox" value="8" onclick="" name="gas" >
							<label for="bean-item-fire">瓦斯爐</label>
						</li>
						
					</ul>
				</div>
			</div>

		<div class="shop-list">
	  		<div class="shop-header">
	  			<div class="shop-title">
	  				<img src="../img/beanME.png">
	  			</div>
	  			<div class="shop-title-text">
					<img src="../img/product.png">
	  			</div>
	  			<div class="shop-search">
	  				<input type="text" value="" placeholder="搜尋器材名稱" class="inputShop">
	  				<div type="button">
	  					<img src="../img/search-icon.png">
	  				</div>
	  			</div>
	  		</div>
	  		
	  		<div id="product">
	  		    <?php
                $count = 0;
                for($x=0; $x<3; $x++){
                    echo "<li class='one-shop'>";
                        
                        $result = show_all_product($count, 3);
                        while($row = mysql_fetch_row($result)){
                            echo "<div class='shop-box'>";
                                echo "<div class='shop-photo'>";
                                    echo "<img src='$row[6]' alt='revise later'>";
                                echo "</div>";
                                echo "<div class='shop-text-box'>";
                                    echo "<!-- shop-summery -->";
                                    echo "<div class='shop-name'>";
                                        echo "$row[0]";
                                    echo "</div>";
                                echo "</div>";
                            echo "</div>";
                            $count +=1;
                        }
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
	<div class="page">
		    <h>page:</h>
			<a href="">1</a>    
			<a href="">2</a>
			<a href="">3</a>
			<a href="">4</a>
			<a href="">5</a>
		</div>
	<div class="footer">
		<img src="../img/footer.png" alt="revise later">
	</div>
</body>
