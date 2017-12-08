

	<?php
 		include 'includes/header.php';
	?>

	<!-- CONTENT 
	============================================= -->
	<div class="content">
		<div class="layout">
			<h2>Publications</h2>
				<!-- News -->
					<?php
                            $sql="SELECT * FROM aupdate ";
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
					
					<!-- End News -->
		</div>
	</div>
	<!-- END CONTENT 
	============================================= -->


	


	<?php
 		include 'includes/footer.php';
	?>