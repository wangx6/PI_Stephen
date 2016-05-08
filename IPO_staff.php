<?php
	include_once '../PokerIrelandSystem/core/init.inc.php';
	$page_title = " PokerIreland | IPO Dublin";
	include_once 'header.php';
?>

<?php
	$markup = '
			<div class="home_info_block" id="IPO_dublin_2">
			<h1>Meet Our IPO Staff</h1>
			<p style="width: 700px; margin-top: 40px">The IPO is recognised as one of the best poker festivals in Europe.
			If you would like to see an IPO event near your home why not leave a suggestion<a href="user_register.php"> here</a> </p>
			<div class="staff-block">
			    <img src="img/staff1.jpg"/>
			    <h3>Tournament Director</h3>
			    <p>Nick O\'Hara is one of the world\'s best known tournament directors and has been the IPO TD for a number of years. Always fair and expansive with his explanations of the rules we are delighted to have Nick O’Hara as IPO Tournament Director.</p>

			</div>

			<div class="staff-block">
			    <img src="img/staff2.jpg"/>
			    <h3>IPO Senior Floor Staff</h3>
			    <p>Roz Jordan is based in the USA and has been Tournament Supervisor at LSOP Hard Rock Punta Cana, Ante Up Poker Cruises, and WPT Events at Seminole Hard Rock Hollywood,
			    Florida. Additionally, Roz has worked PCA in Bahamas, EPT Grand Final Monaco and a host of other events worldwide.</p>
			</div>

			<div class="staff-block">
			    <img src="img/staff3.jpg"/>
			    <h3>Senior Floor Staff</h3>
			    <p>Lorand (Larry) Szanto is one of the best and most popular senior floor staff in Europe and has been a stalwart of the IPO for many years.</p>
			</div>

			<div class="staff-block">
			    <img src="img/staff4.jpg"/>
			    <h3>Stalwart</h3>
			    <p>Glenn Doyle is a stalwart of the IPO and is known by players far and wide as one of the best floor staff personnel in the poker business.</p>
			</div><br><br>



			<br style="clear:both" />
			';

	echo $markup;



?>

<?php include_once 'footer.php'; ?>

