<?php
	include_once '../PokerIrelandSystem/core/init.inc.php';
	
	if($_SESSION['reg_isFinish'] == 0)
	{
		header("Location: index.php");
	}
	
	else{
		$_SESSION['reg_isFinish'] = 0;
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		$page_title = "PokerIreland | IPO 2012 Pre-Register";
		include_once 'header.php';



	
	
		echo'
		<div class="home_info_block" style="width:848px; height:auto; padding-left:50px; padding-top:20px; padding-bottom:30px; color:#09c;">
			<h1>Congratulations</h1>
			<p>Your registration was successful! We will be contacting you very soon</p>
			<p><a href="index.php">Back to homepage</a></p>
		</div>
		<br style="clear:both;" />';


	include_once 'footer.php'; 
	}
?>