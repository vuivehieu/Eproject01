<?php 
$title = "Calendar";
require_once("Layout/headerforotherpages.php");

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


<!-- Product list======== -->
<?php

	echo	"<div class='product'>
			<div class='product-row'>
				<div class='product1'>
					<div class='product-card'>
						<img src='../images/calendar/desk/DC-001-01.png' alt='Cat Diary' style='width: 250px; height: '>
					  	<p class='calendar-designer'>Iconic</p>
					  	<p class='product-name' style='font-family: mallory;'>Thomas Kinkade Studios 2022 Day-to-Day Calendar</p><br>
					  	<p class='price'>$17.99</p><br>
					</div>
				</div>
			</div>
			<div class='product-row'>
				<div class='product1'>
					<div class='product-card'>
						<img src='../images/calendar/desk/DC-005-01.png' alt='Cat Diary' style='width: 250px;'>
					  	<p class='calendar-designer'>Completist</p>
					  	<p class='product-name' style='font-family: mallory;''>Zen Desk Calendar</p><br>
					  	<p class='price'>$17.99</p><br>
					</div>
				</div>
				</div>
			
			
		</div>";
?>


<?php
require_once("Layout/footer.php");
?>