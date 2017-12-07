

	<?php
 		include 'includes/header.php';
	?>

	<!-- GOOGLE MAP
	============================================= -->
	<div class="b-google-map">
		<div id="map_canvas" class="top-shadow" style="width: 100%; height: 400px;"></div>

		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/jquery.gmap.min.js"></script>
		<script>
			jQuery('#map_canvas').gMap({
				maptype: 'ROADMAP',
				scrollwheel: false,
				zoom: 18,
				markers: [
					{
						address: 'New York', // Your Adress Here
						html: '',
						popup: false,
					}
				],
			});
		</script>
	</div>
	<!-- END GOOGLE MAP
	============================================= -->

	<!-- CONTENT 
	============================================= -->
	<div class="content shortcodes">
		<div class="layout">
			<div class="row">
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-phone light"></i>
						<h5>Phone</h5>
						<p>
							 +1 (229) 991-22-11 <br>
							+1 (239) 991-23-12 <br>
							+1 (259) 991-24-13
						</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-map-marker light"></i>
						<h5>Address</h5>
						<p>
							 103088, Ut wisi enim ad minim veniam, 27, of. 304
						</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-time light"></i>
						<h5>Business Hours</h5>
						<p>
							 Monday-Friday: 9:<sup>00</sup> — 18:<sup>00</sup><br>
							Saturday: 10:<sup>00</sup> — 17:<sup>00</sup><br>
							Sunday: closed
						</p>
					</div>
				</div>
				<div class="row-item col-1_4">
					<div class="icon-box">
						<i class="icon-envelope light"></i>
						<h5>E-mail</h5>
						<p>
							<a href="#">mail@mail.com</a>
						</p>
					</div>
				</div>
			</div>
			<hr class="dashed" style="margin-top: 0px;">

			<h1 class="centered">Yes, let’s talk business!</h1>
			<p class="p-20 centered">
				 Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat ullamcorper.
			</p>

			<div class="gap" style="height: 20px;"></div>

			<div class="form-message"></div>
						
			<form class="b-form b-contact-form m-contact-form" action="contact.php" style="margin-bottom: 10px;">
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
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->



	<?php
 		include 'includes/footer.php';
	?>