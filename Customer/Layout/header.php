
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
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">SIGN IN</div>
					<form class="user-login" action="module/common/login.php" method="POST">
						<input type="email" name="email" class="text-box" placeholder="Email address*" required="true">
						<input type="password" name="password" class="text-box" placeholder="Password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="signin-btn" onclick="">SIGN IN</button>
							<!-- <a href="#forgotpass">Forgot password?</a> -->
						</div>
						
					</form>
					<div class="user-form-suggest">
						<div class="user-form-title">NEW TO RYANA CALENDAR?</div>
						<button name="signup" class="suggest-btn"  onclick="signUpnav()">SIGN UP NOW</button>
					</div>
				</div>
		</div>
		<div id="signUp" class="sidenav">
			<a href="javascript:void(0)" class="closebtn" onclick="closeSignup()">&times;</a>
				<div class="user-form-container">
					<div style="text-align: center; padding-top: 100px;" class="user-form-title">SIGN UP</div>
					<form class="user-login" method="POST" action="module/common/register.php">
						<input type="text" name="username" class="text-box" placeholder="Username*" required="true">
						<input type="email" name="email" class="text-box" placeholder="Email address*" required="true">
						<input type="number" name="phone" class="text-box" placeholder="Phone*" required="true">
						<input type="text" name="address" class="text-box" placeholder="Address*" required="true">
						<input type="password" name="password" class="text-box" placeholder="Password*" required="true">
						<input type="password" name="passwordconfirm" class="text-box" placeholder="Confirm password*" required="true">
						<div style="display: flex;">
							<button type="submit" name="signin" class="create-btn" onclick="">CREATE ACCOUNT</button>
							<a href="#backtosignin" onclick="backTologin()">Back to login</a>
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

