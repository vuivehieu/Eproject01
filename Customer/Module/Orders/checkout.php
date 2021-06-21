<?php
$title = "Checkout";	
require_once("Layout/headerforotherpages.php");
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
					<div class="shopping-bag-row">
						
						<div class="shopping-bag-image">
							<img src="../images/pen/fountain/FP-001-01.png">
						</div>
						<div class="shopping-bag-name">
							<div class="product-brand">
								lamy
							</div>
							<div class="product-name">
								Safari Fountain Pen
							</div>
						</div>
						<div class="shopping-bag-price">$7.99</div>
						<div class="shopping-bag-quantity">2</div>
						<img class="shopping-bag-delete" onclick="bagDelete()" src="trash-gray.svg">
					</div>	
					<div class="shopping-bag-row">
						<div class="shopping-bag-image">
							<img src="../images/pen/fountain/FP-002-01.png">
						</div>
						<div class="shopping-bag-name">
							<div class="product-brand">
								lamy
							</div>
							<div class="product-name">
								ABC Fountain Pen
							</div>
						</div>
						<div class="shopping-bag-price">$8.99</div>
						<div class="shopping-bag-quantity">1</div>
						<img class="shopping-bag-delete" onclick="bagDelete()" src="trash-gray.svg">
					</div>
					<div class="shopping-bag-row">
						<div class="shopping-bag-image">
							<img src="../images/pen/fountain/FP-003-01.png">
						</div>
						<div class="shopping-bag-name">
							<div class="product-brand">
								lamy
							</div>
							<div class="product-name">
								Classical Fountain Pen
							</div>
						</div>
						<div class="shopping-bag-price">$8.99</div>
						<div class="shopping-bag-quantity">4</div>
						<img class="shopping-bag-delete" onclick="bagDelete()" src="trash-gray.svg">
					</div>
					<div class="shopping-bag-row">
						<div class="shopping-bag-image">
							<img src="../images/pen/fountain/FP-004-01.png">
						</div>
						<div class="shopping-bag-name">
							<div class="product-brand">
								lamy
							</div>
							<div class="product-name">
								Student Fountain Pen
							</div>
						</div>
						<div class="shopping-bag-price">$8.99</div>
						<div class="shopping-bag-quantity">1</div>
						<img class="shopping-bag-delete" onclick="bagDelete()" src="trash-gray.svg">
					</div>
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
			

