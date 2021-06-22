<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!-- ================== Sidebar content (Login form) ================= -->
		<div id="loggedSidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNavlogged()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">Vũ Minh Hiếu</div>
						<p class="user-phone"><img src="../Images/Front/Icons/phone.svg">03992131231</p>
						<p class="user-address"><img src="../Images/Front/Icons/map-pin.svg">Hà Nội</p>
						<div style="display: flex;">
							<button type="submit" name="logout" class="logout-btn" onclick="">LOG OUT</button>
							<p name="changepass" class="change-password-link"  onclick="passChangenav()">Change password</p>
						</div>
				</div>
		</div>
		<div id="passChange" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closePassnav()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">CHANGE YOUR PASSWORD</div>
					<form class="user-login" action="" method="post">
						
						<input type="password" name="oldpassword" class="text-box" placeholder="Old password*" required="true">
						<input type="password" name="newpassword" class="text-box" placeholder="New password*" required="true">
						<input type="password" name="confirmnewpassword" class="text-box" placeholder="Confirm new password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="create-btn" onclick="">CHANGE PASSWORD</button>
							<a href="#backtosignin" onclick="backLink()">Back</a>
						</div>
						
					</form>
				</div>
		</div>


<!-- ======================== Navigation bar ======================= -->		

		<div class="header">
			<div class="header-bg-image">
				<div class="header-container" id="header-container">
					<div class="header-left">
						<a href="index.php?module=home&action=home"><img class="logo" src="../Images/Front/Thumbnail/site_logo.png"></a>
					</div>
					<div class="navbar">
						<a href="index.php?module=contact&action=about">About Us</a>

						<!-- Dropdown megamenu -->
				    <div class="dropdown">
						    <button class="dropbtn"><a href="index.php?module=products&action=calendar">Calendar</a></button>
						    <div class="dropdown-content">
								<!-- <div class="mega-header">
								    <h3>Shop calendar now!</h3>
								</div>    -->
						    	<div class="mega-row">
							        <div class="mega-col">
							          	<h3>Desk Calendar</h3>
							          	<a href="#">Staedler</a>
							          	<a href="#">Stabilo</a>
							          	<a href="#">Roman</a>
							        </div>
							        <div class="mega-col">
							          	<h3>Wall Calendar</h3>
							          	<a href="#">Traveler's Note</a>
							          	<a href="#">Midori</a>
							          	<a href="#">Completist</a>
							        </div>
							        	<img class="mega-img" src="../Images/Front/Thumbnail/calendar.jpg">
						    	</div>
						    </div>
						</div> 
						<div class="dropdown">
						    <button class="dropbtn"><a href="diary.html">Diary</a></button>
						    <div class="dropdown-content">
									<!-- <div class="mega-header">
									  <h3>Shop diaries now!</h3>
									</div>    -->
						    	<div class="mega-row">
						        <div class="mega-col">
					          	<h3>Diaries</h3>
					          	<a href="#">Traveler's Note</a>
					          	<a href="#">Midori</a>
					          	<a href="#">Completist</a>
						        </div>
						        <div class="mega-col">
					          	<h3>Planners</h3>
					          	<a href="#">Moleskin</a>
					          	<a href="#">Blackwing</a>
					          	<a href="#">LAMY</a>
						        </div>
							      <img class="mega-img" src="../Images/Front/Thumbnail/notebook.jpg">
						    	</div>
						    </div>
						</div> 
						<div class="dropdown">
						    <button class="dropbtn"><a href="pen.html">Pen</a></button>
						    <div class="dropdown-content">
								<!-- <div class="mega-header">
								    <h3>Shop pens now!</h3>
								</div>    -->
						    	<div class="mega-row">
							        <div class="mega-col">
							          	<h3>Fountain Pen</h3>
							          	<a href="#">Kaweco</a>
							          	<a href="#">Hong Ha</a>
							          	<a href="#">Traveler's Pen</a>
							        </div>
							        <div class="mega-col">
							          	<h3>Pencils & Ball Point Pens</h3>
							          	<a href="#">Staedler</a>
							          	<a href="#">Stabilo</a>
							          	<a href="#">Roman</a>
							        </div>
							        	<img class="mega-img" src="../Images/Front/Thumbnail/pen.jpg">
						    	</div>
						    </div>
						</div>
  					</div>
  					<div class="header-right">
  						<a href="#facebook"><img src="../Images/Front/Icons/Search.svg"></a>
						<a href="index.php?module=contact&action=contact"><img src="../Images/Front/Icons/map-pin.svg"></a>
						<!-- login sidebar -->
						<a href="#facebook" onclick="openNav()"><img src="../Images/Front/Icons/user.svg"></a>
						<a href="index.php?module=orders&action=checkout"><img src="../Images/Front/Icons/shopping-bag.svg"></a>
  					</div>
				</div>
			</div>
		</div>

