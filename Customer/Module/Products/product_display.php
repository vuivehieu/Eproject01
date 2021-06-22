<?php 
$title = "Calendar";
require_once("Layout/headerforotherpages.php");
require_once("Config/utility.php");
$ProductList = executeResult("SELECT * FROM product WHERE CATEGORY = 'Desk Calendar' OR CATEGORY = 'Wall Calendar' LIMIT 0,4", false);
?>
<!-- =========== Product Intro ========== -->

		<div class="intro-container">
			<div class="intro-left" style="background-color: #50666d;">
				<div class="intro-content">
					<div class="intro-title">CALENDARS</div>
					<div class="intro-sub">Turn your desk into an inspiring, well-organised space with Ryana Calendar's high-quality stationery and delightful wall and desk calendars. </div>
				</div>
			</div>
			<div class="intro-right">
				<img src="../Images/Front/Thumbnail/calendar.jpg">
			</div>
		</div>

<div class="product">
	<div class="product-row">
<!-- Product list======== -->
<?php
$count = 1;
foreach ($CalendarList as $item) {
	
	// for ($item['ID']=1;$item['ID']<=4;$item['ID']++) { 
		echo		
				'<div class="product'.($count++).'">
					<div class="product-card">
						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:">
					  	<p class="calendar-designer">Iconic</p>
					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
					  	<p class="price">'.$item['PRICE'].' $</p><br>
					</div>
				</div>';
	// }

	}
?>
</div>
</div>

<div class="product">
	<div class="product-row">
<?php
$CalendarList = executeResult("SELECT * FROM product WHERE CATEGORY = 'Desk Calendar' OR CATEGORY = 'Wall Calendar' LIMIT 4,4", false);
$count = 1;
foreach ($CalendarList as $item) {
	
	// for ($item['ID']=1;$item['ID']<=4;$item['ID']++) { 
		echo		
				'<div class="product'.($count++).'">
					<div class="product-card">
						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:">
					  	<p class="calendar-designer">Iconic</p>
					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
					  	<p class="price">'.$item['PRICE'].' $</p><br>
					</div>
				</div>';
	// }

	}
?>
	</div>
</div>
<?php
require_once("Layout/footer.php");
?>