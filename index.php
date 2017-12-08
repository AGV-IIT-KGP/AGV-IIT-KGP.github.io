

	<?php
 		include 'includes/header.php';
	?>


	<!-- REVOLUTION SLIDER
	============================================= -->
	<div class="fullwidthbanner-container top-shadow">
		<div class="fullwidthbanner">
			<ul>
				<!-- Slide 1 -->
				<li data-masterspeed="300" data-slotamount="2" data-transition="fade">
				<!-- Main Image -->
				<img alt="" src="img/slider/background_corporate.png">
				<!-- End Main Image -->
				<!-- Captions -->
				<div class="tp-caption m-3-2em m-text-black m-semibold sft" data-easing="easeOutExpo" data-speed="700" data-start="1400" data-x="40" data-y="130">
					<span>Husky</span>
				</div>
				<div class="tp-caption m-1-8em m-text-black sfr" data-easing="easeOutExpo" data-speed="700" data-start="1600" data-x="40" data-y="185">
					<span>Animate Anything You Want!</span>
				</div>
				<div class="tp-caption sfb" data-easing="easeInOutExpo" data-speed="700" data-start="1700" data-x="40" data-y="233">
					<a class="btn" href="#">Read More</a>
				</div>
				<!-- End Captions -->
				</li>
				<!-- End Slide 1 -->
				<!-- Slide 2 -->
				<li data-masterspeed="300" data-slotamount="2" data-transition="fade">
				<!-- Main Image -->
				<img alt="" src="img/slider/background_corporate.png">
				<!-- End Main Image -->
				<!-- Captions -->
				<div class="tp-caption m-3-2em m-text-black m-semibold sft" data-easing="easeOutExpo" data-speed="700" data-start="1400" data-x="40" data-y="130">
					<span>Husky</span>
				</div>
				<div class="tp-caption m-1-8em m-text-black sfr" data-easing="easeOutExpo" data-speed="700" data-start="1600" data-x="40" data-y="185">
					<span>Animate Anything You Want!</span>
				</div>
				<div class="tp-caption sfb" data-easing="easeInOutExpo" data-speed="700" data-start="1700" data-x="40" data-y="233">
					<a class="btn" href="#">Read More</a>
				</div>
				<!-- End Captions -->
				</li>
				<!-- End Slide 2 -->
				<!-- Slide 3 -->
				<li data-masterspeed="300" data-slotamount="2" data-transition="fade">
				<!-- Main Image -->
				<img alt="" src="img/slider/background_corporate.png">
				<!-- End Main Image -->
				<!-- Captions -->
				<div class="tp-caption m-3-2em m-text-black m-semibold sft" data-easing="easeOutExpo" data-speed="700" data-start="1400" data-x="40" data-y="130">
					<span>Husky</span>
				</div>
				<div class="tp-caption m-1-8em m-text-black sfr" data-easing="easeOutExpo" data-speed="700" data-start="1600" data-x="40" data-y="185">
					<span>Animate Anything You Want!</span>
				</div>
				<div class="tp-caption sfb" data-easing="easeInOutExpo" data-speed="700" data-start="1700" data-x="40" data-y="233">
					<a class="btn" href="#">Read More</a>
				</div>
				<!-- End Captions -->
				</li>
				<!-- End Slide 3 -->
			</ul>
		</div>
	</div>
	<!-- END REVOLUTION SLIDER
	============================================= -->


		<!-- CONTENT 
	============================================= -->
	<div class="content">
		<div class="layout">
				<div class="row">
					<div class="row-item col-1_1">
						<h3 style="text-align: left"><span style="color: #2eafbb">Team Autonomous Ground Vehicle (AGV)</span> is a multi-disciplinary research group aimed at building a fully operational self-driving car. Team AGV presented its latest "Eklavya" series robot, "Eklavya 4.0", in IGVC-2015 organized at Oakland University, Detroit, Michigan, USA from June 5th - June 8th, and came out with a good performance which includes qualification on most of the qualifying parameters in the Auto navigation challenge and a significantly improved performance in the design competition where it stood 20th among the 42 teams from all over the world, and the best among all other participants from India and being only Indian team to go on this far.</h3>
						<hr class="dashed">
					</div>
				</div>
			<div class="row">
			<div class="row-item col-1_2">
					<h3 class="lined margin-20"><i class="icon-bullhorn"></i>News</h3>
					<?php
                            $sql="SELECT * FROM aupdate WHERE type = '1' ";
                            $records=mysqli_query($con, $sql);
                            while($news=mysqli_fetch_assoc($records)) 
                            {
								echo '<div class="b-news">';
								echo '<div class="news-date"><div class="date-day">' .date('j', $news['adate']). '</div>';
								echo '<div class="date-mounth">' .date('M', $news['adate']). '</div>';
								echo '<div class="date-year">' .date('Y', $news['adate']). '</div></div>';
								echo "<div class=\"news-title\"><a href=' " .$news['link']. " '>" .$news['headline']. "</a></div>";
								echo '<div class="news-excerpt">' .$news['descript']. '</div></div>';
							}
							?>
					

			</div>
			<div class="row-item col-1_2">
					<h3 class="lined margin-20"><i class="icon-bullhorn"></i>Announcements</h3>
					<?php
                            $sql="SELECT * FROM aupdate WHERE type = '2' ";
                            $records=mysqli_query($con, $sql);
                            while($news=mysqli_fetch_assoc($records)) 
                            {
								echo '<div class="b-news">';
								echo '<div class="news-date"><div class="date-day">' .date('j', $news['adate']). '</div>';
								echo '<div class="date-mounth">' .date('M', $news['adate']). '</div>';
								echo '<div class="date-year">' .date('Y', $news['adate']). '</div></div>';
								echo "<div class=\"news-title\"><a href=' " .$news['link']. " '>" .$news['headline']. "</a></div>";
								echo '<div class="news-excerpt">' .$news['descript']. '</div></div>';
							}
							?>
			</div>	
			</div>
		</div>		
		
		<div class="layout">
			<div class="row port b-works">
				<div class="row-item col-1_3 identity photography tehnology">
					<div class="work">
						<a href="projects.php" class="work-image">
							<img src="img/port/work.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="projects.php" class="work-name">Project</a>
					</div>
				</div>
				<div class="row-item col-1_3 photography webdesign">
					<div class="work">
						<a href="publications.php" class="work-image">
							<img src="img/port/publications.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="publications.php" class="work-name">Publications</a>
					</div>
				</div>
				<div class="row-item col-1_3 identity">
					<div class="work">
						<a href="contact.php" class="work-image">
							<img src="img/port/contact.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="contact.php" class="work-name">Contact us</a>
					</div>
				</div>
			</div>

			<h3 class="lined margin-30"><i class="icon-rocket"></i>Our Research</h3>
			<div class="row port b-works">
				<div class="row-item col-1_4 identity photography tehnology">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Computer Vision</a>
					</div>
				</div>
				<div class="row-item col-1_4 photography webdesign">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Machine Learning</a>
					</div>
				</div>
				<div class="row-item col-1_4 identity">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Localization and Slam</a>
					</div>
				</div>
				<div class="row-item col-1_4 tehnology">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Control Systems</a>
					</div>
				</div> 
			</div>
			<div class="row">
				<center>
				<div class="row-item col-1_4 identity photography tehnology">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Computer Vision</a>
					</div>
				</div>
				<div class="row-item col-1_4 photography webdesign">
					<div class="work">
						<a href="#" class="work-image">
							<img src="img/port/smiling.jpg" alt="">
							<div class="link-overlay icon-chevron-right"></div>
						</a>
						<a href="#" class="work-name">Machine Learning</a>
					</div>
				</div>
				</center>
			</div>
		</div>

		
	</div>
	<!-- END CONTENT 
	============================================= -->


	<?php
 		include 'includes/footer.php';
	?>

	