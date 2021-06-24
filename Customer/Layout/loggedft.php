
<!-- ========================== Guarantee Section =========================== -->
			<div class="section-4">
				<div class="section-4-title">WHY SHOP WITH RYANA CALENDAR</div>
				<div class="section-4-row">
					<div class="section-4-col">
						<img src="../Images/Front/Icons/truck.svg">
						<p>Fast delivery</p>
					</div>
					<div class="section-4-col">
						<img class="section-4-img" src="../Images/Front/Icons/gift.svg">
						<p>Best discounts</p>
					</div>
					<div class="section-4-col">
						<img class="section-4-img" src="../Images/Front/Icons/check-circle.svg">
						<p>Secure shopping</p>
					</div>
				</div>
			</div>
		</div>


<!-- ====================== Footer ====================== -->		

		<div class="footer">
			<div class="row">
				<div class="footer1">
					<h5>About Us</h5>
					<p style="font-size: 14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					<div class="readmore">
						<a style="text-decoration: none; font-family: mallory; font-size: 14px;" href="index.php?module=contact&action=about">Read more...</a>
					</div>
				</div>
				<div class="footer2">
					<h5>Shop</h5>
					<div class="footershop">
						<a href="calendar.html">Calendars</a><br>
						<a href="#b">Journals</a><br>
						<a href="diary.html">Diaries</a><br>
						<a href="pen.html">Pen</a><br>
						<a href="#e">Accessories</a>
					</div>
				</div>
				<div class="footer3">
					<h5>Follow Us</h5>
					<p style="font-size: 14px;">Keep up with our latest news through social media!</p>
					<div class="social">
						<a href="#facebook"><img src="../Images/Front/Icons/facebook.svg"></a>
						<a href="#facebook"><img src="../Images/Front/Icons/instagram.svg"></a>
						<a href="#facebook"><img src="../Images/Front/Icons/twitter.svg"></a>
						<a href="#facebook"><img src="../Images/Front/Icons/pinterest.svg"></a>
					</div>
				</div>
				<div class="footer4">
					<h5>Office</h5>
					<p style="font-size: 14px;">Aptech Center<br>54, LE THANH NGHI STREET<br>HANOI-10000<br>VIETNAM</p>
					<h5>Contact us via email :</h5>
					<p style="font-size: 14px;">ryanacalendar@gmail.com</p>
				</div>
			</div>
			<div class="copyright">
				<p style="font-family: mallory;">© 2021 RYANA CALENDAR. ALL RIGHTS RESERVED</p>
			</div>
		</div>


<!-- =============== navigation bar reveal on scroll ============== -->
    <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
    </script>


<!-- ========== open navbar to login form ============ -->
<!--     <script>
		function openNav() {
		  document.getElementById("mySidenav").style.width = "400px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		  document.getElementById("main").style.marginLeft= "0";
		}

		function signUpnav() {
			document.getElementById("signUp").style.width = "400px";
		}

		function backTologin() {
			document.getElementById("signUp").style.width = "0";
			document.getElementById("mySidenav").style.width = "400px";
		}
		function closeSignup() {
			document.getElementById("signUp").style.width = "0";
			document.getElementById("mySidenav").style.width= "0";
		}
		</script> -->

<!-- ======== transparrent to solid header =========== -->
		<script>
		    window.onscroll = function() {scrollFunction()};
		 
		function scrollFunction() {
		  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		    
		    document.getElementById("header-container").style.background = "#ffffff";
		  } else {
		   
		    document.getElementById("header-container").style.background = "none";
		  }
		}
		</script>


<!-- ========== open navbar logged in ============ -->
    <script>
        function openNavlogged() {
          document.getElementById("loggedSidenav").style.width = "400px";
        }

        function closeNavlogged() {
          document.getElementById("loggedSidenav").style.width = "0";
          // document.getElementById("main").style.marginLeft= "0";
        }

        function passChangenav() {
            document.getElementById("passChange").style.width = "400px";
        }

        function backLink() {
            document.getElementById("passChange").style.width = "0";
            document.getElementById("loggedSidenav").style.width = "400px";
        }
        function closePassnav() {
            document.getElementById("passChange").style.width = "0";
            document.getElementById("loggedSidenav").style.width= "0";
        }
        </script>
        <script type="text/javascript">
</script>
<script>
function openSearch() {
  document.getElementById("searchBar").style.display = "block";
}

function closeSearch() {
  document.getElementById("searchBar").style.display = "none";
}
</script>


</body>
</html>