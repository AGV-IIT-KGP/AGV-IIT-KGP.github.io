<?php
include 'header.php'
?>
	<!-- TITLE BAR
	============================================= -->
	<div class="b-titlebar">
		<div class="layout">
			<!-- Bread Crumbs -->
			<ul class="crumbs">
				<li>You are here:</li>
				<li><a href="#">Home</a></li>
				<li><a href="#">Contact Us: 2</a></li>
			</ul>
			<!-- Title -->
			<h1>Contact Us: 2</h1>
		</div>
	</div>
	<!-- END TITLE BAR
	============================================= -->

	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="b-google-map">
				<div id="map_canvas" class="full-shadow" style="width: 100%; padding-top: 40%; margin-bottom: 40px;">
				</div>
				<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				<script src="js/jquery.gmap.min.js"></script>
				<script>
					jQuery('#map_canvas').gMap({
						maptype: 'ROADMAP',
						scrollwheel: false,
						zoom: 18,
						markers: [
							{
								address: 'AGV Lab, IIT Kharagpur, Kharagpur, West Bengal', // Your Adress Here
								html: '',
								popup: false,
							}
						],
					});
				</script>
			</div>

			<div class="row">
				<div class="row-item col-3_4">
					<div class="title">
						<h3 class="lined">Contact Us</h3>
					</div>
					<p>
						Have a query? Drop us a message!
					</p>

					<div class="gap" style="height: 15px;"></div>

					<div id="contact">
						
						<div class="form-message"></div>
						
						<form class="b-form b-contact-form" action="contact.php" style="margin-bottom: 10px;">
							<div class="input-wrap">
								<i class="icon-user"></i>
								<input class="field-name" type="text" placeholder="Name (required)">
							</div>
							<div class="input-wrap">
								<i class="icon-envelope"></i>
								<input class="field-email" type="text" placeholder="Email (required)">
							</div>
							<div class="input-wrap">
								<i class="icon-pencil"></i>
								<input class="field-subject" type="text" placeholder="Subject">
							</div>
							<div class="textarea-wrap">
								<i class="icon-pencil"></i>
								<textarea class="field-comments" placeholder="Message"></textarea>
							</div>
							<input class="btn-submit btn colored" type="submit" value="Submit Comment">
						</form>
						<div class="gap" style="height: 20px;"></div>
					</div>
				</div>

				<div class="row-item col-1_4">
					<div class="title">
						<h3 class="lined">Contact Info</h3>
					</div>
					<ul class="b-list b-contact">
						<li class="contact-address"><i class="icon-map-marker"></i><span><strong>Address:</strong> AGV Lab, IIT Kharagpur, Kharagpur, West Bengal, India, 721302</span></li>
						<li class="contact-phone"><i class="icon-phone"></i><span><strong>Phone:</strong> +91 (03222) 281 692</span></li>
						<li class="contact-mail"><i class="icon-envelope"></i><strong>E-mail:</strong> <a href="#">mail@mail.com</a></li>
						
					</ul>

					<div class="gap" style="height: 20px;"></div>

					<div class="title">
						<h3 class="lined">Follow Us</h3>
					</div>

					<ul class="b-social m-varicolored">
						<li><a class="fb" href="https://www.facebook.com/agvkgp/"><i class="icon-facebook"></i></a></li>
						<li><a class="lin" href="https://www.linkedin.com/company/3863365/"><i class="icon-linkedin"></i></a></li>
						<li><a class="gh" href="https://github.com/AGV-IIT-KGP"><i class="icon-github-alt"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->

	<!-- FOOTER 
	============================================= -->
	<div class="footer">
		<!-- Widget Area -->
		<div class="b-widgets">
			<div class="layout">
				<div class="row">
					<!-- Links -->
					<div class="row-item col-1_4">
						<h3>Links</h3>
						<ul class="b-list just-links m-dark">
							<li><a href="#">Voluptas Assumenda</a></li>
							<li><a href="#">Repudiandae Sint</a></li>
							<li><a href="#">Perferendis Doloribus</a></li>
							<li><a href="#">Maxime Placeat</a></li>
							<li><a href="#">Quidem Rerum</a></li>
							<li><a href="#">Occaecati Cupiditate</a></li>
						</ul>
					</div>
					<!-- End Links -->
					<!-- Latest Tweets -->
					<div class="row-item col-1_4">
						<h3>Latest Tweets</h3>
						<div class="b-twitter m-footer">
							<ul>
								<!-- Twitter Message 1 -->
								<li>
									<span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem <a href="#" class="link">http://twitter.com</a></span>
									<span class="twit-date">Jan 7, 2013</span>
								</li>
								<!-- Twitter Message 2 -->
								<li>
									<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aliquid :) <a href="#" class="link">http://twitter.com</a></span>
									<span class="twit-date">Jan 7, 2013</span>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Latest Tweets -->
					<!-- Tag Cloud -->
					<div class="row-item col-1_4">
						<h3>Popular Tags</h3>
						<div class="b-tag-cloud m-dark">
							<a href="#">beach</a>
							<a href="#">bar</a>
							<a href="#">blog</a>
							<a href="#">business</a>
							<a href="#">coctail</a>
						</div>
					</div>
					<!-- End Tag Cloud -->
					<!-- Contact Form -->
					<div class="row-item col-1_4">
						<h3>Contact Form</h3>
						<!-- Success Message -->
						<div class="form-message"></div>
						<!-- Form -->
						<form class="b-form b-contact-form" action="contact.php">
							<div class="input-wrap m-full-width">
								<i class="icon-user"></i>
								<input class="field-name" type="text" placeholder="Name (required)">
							</div>
							<div class="input-wrap m-full-width">
								<i class="icon-envelope"></i>
								<input class="field-email" type="text" placeholder="E-mail (required)">
							</div>
							<div class="textarea-wrap">
								<i class="icon-pencil"></i>
								<textarea class="field-comments" placeholder="Message"></textarea>
							</div>
							<input class="btn-submit btn colored" type="submit" value="Send">
						</form>
						<!-- End Contact Form -->
					</div>
					<!-- End Get In Touch -->
				</div>
			</div>
		</div>
		<!-- End Widget Area -->
		<!-- Copyright Area -->
		<div class="b-copyright">
			<div class="layout">
				<!-- Copyright Text -->
				<span class="copy">Copyright © 2013 <a href="#">Boson</a>. All Right Reserved.</span>
				<!-- Social Icons -->
				<ul class="b-social bot">
					<li>Follow Us:</li>
					<li><a class="fb" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="tw" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gl" href="#"><i class="icon-google-plus"></i></a></li>
					<li><a class="dr" href="#"><i class="icon-dribbble"></i></a></li>
					<li><a class="sk" href="#"><i class="icon-skype"></i></a></li>
					<!-- 
					<li><a class="yt" href="#"><i class="icon-youtube"></i></a></li>
					<li><a class="tl" href="#"><i class="icon-tumblr"></i></a></li>
					<li><a class="is" href="#"><i class="icon-instagram"></i></a></li>
					<li><a class="pt" href="#"><i class="icon-pinterest"></i></a></li>
					<li><a class="lin" href="#"><i class="icon-linkedin"></i></a></li>
					<li><a class="vk" href="#"><i class="icon-vk"></i></a></li>
					<li><a class="dx" href="#"><i class="icon-dropbox"></i></a></li>
					<li><a class="fs" href="#"><i class="icon-foursquare"></i></a></li>
					<li><a class="gh" href="#"><i class="icon-github-alt"></i></a></li>
					<li><a class="mx" href="#"><i class="icon-maxcdn"></i></a></li>-->
				</ul>
			</div>
		</div>
	</div>
	<!-- END FOOTER 
	============================================= -->
	
</div>
<!-- END MAIN 
============================================= -->


</body>
</html>