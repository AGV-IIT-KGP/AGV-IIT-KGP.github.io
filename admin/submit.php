
<?php


if(isset($_POST['submit'])){
		require 'db_connect.php';
		date_default_timezone_set('Asia/Kolkata');
		unset($_SESSION['submit']);

		$con = mysqli_connect($host,$user,$pass,$db);
		if(!$con){
			die("can not connect" . mysqli_error());
			}
		mysqli_select_db($db);
		$t=time();
		$adate=$_POST['adate'];
        $adate1 = strtotime($adate);
				    $aupdate = 'aupdate';

					$sql = "INSERT INTO $aupdate (adate, headline, descript, type) VALUES ( '$adate1', '$_POST[headline]','$_POST[descript]','$_POST[type]')";
					mysqli_query($con, $sql);

					echo "<script> javascript: alert(\"Submitted Successfully\"); 
				    			window.location= \"admin.php\";</script>";	
					/*$redirect_page = "success.php";
					header('Location: '.$redirect_page);*/
					mysqli_close($con);
			
		}?>