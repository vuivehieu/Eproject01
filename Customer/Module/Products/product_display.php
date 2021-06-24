<?php 
$title = "Calendar";
require_once("Layout/headerforotherpages.php");
require_once("Config/utility.php");
// $ProductList = executeResult("SELECT * FROM product WHERE CATEGORY_ID LIKE 'DC%' LIMIT 0,4", false);
?>
<!-- =========== Product Intro ========== -->
<div class="container" style="display: flex;">
<div class="row">
<!-- Product list======== -->
<?php
$count = 0;
$nb =1;
$break = 4;
while ($number>0) {
	// code...

foreach ($ProductList as $item) {
	$count++;
	$number-=1;
	// for ($item['ID']=1;$item['ID']<=4;$item['ID']++) { 
// 		echo		
// 				'<div class="product'.($nb++).'">
// 					<div class="product-card">
// 						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:">
// 					  	<p class="calendar-designer">Iconic</p>
// 					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
// 					  	<p class="price">'.$item['PRICE'].' $</p><br>
// 					</div>
// 				</div>';
	
// 				
// echo '</br>';
	// $nb = 0;
	echo '<div class="col-md-3">
						<img src="'.$item['THUMBNAIL'].'" style="width: 250px; height:">
					  	<p class="calendar-designer">Iconic</p>
					  	<p class="product-name" style="font-family: mallory;"">'.$item['TITLE'].'</p><br>
					  	<p class="price">'.$item['PRICE'].' $</p><br>
					</div>';
if($count % $break == 0) break;
echo "</br>";
							}
							}

?>
</div>
</div>

	

<?php
require_once("Layout/footer.php");
?>