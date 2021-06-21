<?php 
$title = "Contact Us";
require_once("Layout/headerforotherpages.php");
?>


<style type="text/css">
	<?php 
include("contact.css");
	?>
</style>
	<!-- alert messages -->
	<!-- <div class="alert-success">
		<span>Message Sent! Thank you for contacting us.</span>
	</div> -->
	<!-- <div class="alert-error">
		<span>Something went wrong! Please try again.</span>
	</div> -->

	<div class="contact-section">
		<div class="contact-information">
			<div><i class="bi bi-geo-alt-fill"></i>Cơ sở 1: 54 Lê Thanh Nghị</div>
			<div><i class="bi bi-geo-alt-fill"></i>Cơ sở 2: 285 Đội Cấn</div>
			<div><img src="../Images/Front/Icons/mail.svg"><i class="bi bi-envelope"></i>ryanacalendar@gmail.com</div>
			<div><img src="../Images/Front/Icons/facebook.svg"><i class="bi bi-facebook"></i><a href="https://www.facebook.com/">FACEBOOK</a></div>
			<div><img src="../Images/Front/Icons/instagram.svg"><i class="bi bi-instagram"></i><a href="https://www.instagram.com/">INSTAGRAM</a></div>
			<div><img src="../Images/Front/Icons/phone.svg"><i class="bi bi-telephone-fill"></i>+000 000 000</div>
		</div> 
		<div class="contact-form">
			<h2 style="font-family: mallory;">Contact Us</h2>
			<form class="contact" action="" method="post">
				<input type="text" name="name" class="text-box" placeholder="Your Name" required="true">
				<input type="text" name="email" class="text-box" placeholder="Your Email" required="true">
				<textarea name="message" rows="5" placeholder="Your Message" required="true"></textarea>
				<button type="submit" name="submit" class="send-btn" onclick="">send</button>
			</form>
		</div>
	</div>

<iframe style="margin-left: 170px; margin-bottom: 50px;" class="googleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7297133656584!2d105.84690551501244!3d21.00346898601217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac428c3336e5%3A0xb7d4993d5b02357e!2sAptech%20Computer%20Education!5e0!3m2!1sen!2s!4v1623262526343!5m2!1sen!2s" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<?php
require_once("Layout/footer.php");
?>