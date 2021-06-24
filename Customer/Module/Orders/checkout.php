<?php
$title = "Checkout";	
if(isset($_SESSION['user'])){
           require_once("Layout/headerforotherpages2.php");
}else{
	 	   require_once("Layout/headerforotherpages.php");
}
if(!isset($_SESSION['cart'])){
	$_SESSION['cart']=array();
}

if(isset($_GET['']))
$id = "";
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "SELECT product.TITLE,product.THUMBNAIL, product.MANUFACTURER, product.PRICE, order_detail.PRODUCT_QUANTITY
FROM product
INNER JOIN order_detail ON  product.ID = order_detail.PRODUCT_ID
WHERE order_detail.ORDER_ID ='$id'
";
?>

		<div class="checkout-page-container">


			<h1 class="shopping-bag-page-title">YOUR SHOPPING BAG</h1>
			


			<div class="checkout-container">
				
				<!-- =============== View shopping bag items =============== -->
				<div class="shopping-bag-container">
					<div class="shopping-bag-title">
							<div class="bag-title-1">Product</div>
							<div class="bag-title-2">Price</div>
							<div class="bag-title-3">Quantity</div>
					</div>
<?php
$total = 0;
foreach ($OrderList as $item){
	$total_price = $item['PRICE']*$item['QUANTITY'];
	$total +=$total_price;
	echo
					'<div class="shopping-bag-row">
						
						<div class="shopping-bag-image">
							<img src="'.$item['THUMBNAIL'].'">
						</div>
						<div class="shopping-bag-name">
							<div class="product-brand">
								'.$item['MANUFACTURER'].'
							</div>
							<div class="product-name">
								'.$item['TITLE'].'
							</div>
						</div>
						<div class="shopping-bag-price"><?php echo '.$item['PRICE'].' ?></div>
						<div class="shopping-bag-quantity"><?php echo '.$item['QUANTITY'].' ?></div>
						<img class="shopping-bag-delete" onclick="bagDelete()" src="../Images/Front/Icons/trash-gray.svg">
					</div>';
					}	
	

					?>
				</div>


				<!-- =============== Payment method ================ -->
				<div class="checkout-section">
					<div class="checkout-section-container">
						<div class="checkout-total">
							<div class="checkout-total-title">TOTAL</div>
							<div class="checkout-total-value">$300.00</div>
						</div>
						<div class="checkout-title">PAYMENT METHOD: </div>
						<div class="checkout-subtitle">All transactions are secure and encrypted.</div>
						<div class="checkout-checkbox">
							<div class="checkout-option">
								<input class="input-radio" type="radio" checked="checked" name="radio" id="visa">
								<label for="visa"><img class="checkout-option-img" src="../Images/Front/Icons/visa.svg"></label>
							</div>	
							<div class="checkout-option">
								<input class="input-radio" type="radio" name="radio" id="paypal">
								<label for="paypal"><img class="checkout-option-img" src="../Images/Front/Icons/paypal.svg"></label>
							</div>
							<div class="checkout-option">
								<input class="input-radio" type="radio" name="radio" id="momo">
								<label for="momo"><img class="checkout-option-img" src="../Images/Front/Thumbnail/momo.png"></label>
							</div>
						</div>	
						<button type="submit" name="checkout" class="checkout-btn" onclick="">CHECK OUT</button>
					</div>
				</div>

			</div>

		</div>
			

