<?php	
	include_once '../PokerIrelandSystem/core/init.inc.php';
	$page_title = " PokerIreland | Home";
	include_once 'header.php';
	//include_once 'live_video_feed.php';
?>

<?php 
	echo '
		<div class="home_info_block" id="slider">
        <ul id="sliderContent">
			
            <li class="sliderImage">
                <img src="img/IPO-2016-logo.jpg" alt="1" style="width:622px; height: 302px"/>
                <span class="bottom">Grosvenor Poker International Poker Open 2016.</span>
            </li>
            <div class="clear sliderImage"></div>
        </ul>
    	</div>

       
	
		<a href="user_register.php">
   		<div class="home_info_block" id="register_button">
			<sapn class="reg-desc">For Email Newsletters and Added Value</span><br>
        	<span class="reg-text">REGISTER NOW</span>
    	</div>
		</a>

		
	
	
		<div class="home_info_block discription_block">

            <h3>Grosvenor Poker IPO Dublin 2016</h3>
    			
            <p>The Grosvenor Poker International Poker Open Dublin 2016 takes place in the Regency Hotel, Swords Road,
            Whitehall, Dublin 9, Ireland.</p>

            <p>The IPO is one of Europe&#39;s longest running and favourite poker tournaments with entrant numbers ranging
            between 1,100 and 1,656 entrants between 2007 and 2015.</p>

            <p>The atmosphere created by players is always second to none so make the IPO Dublin your &quot;must attend&quot; poker event this year.</p>

            <h4>Main Event Schedule</h4>
            <ul>
                <li>Day 1A - 27th October - 14:00 Start Time</li>
                <li>Day 1B - 28th October - 14:00 Start Time</li>
                <li>Day 1C - 29th October - 14:00 Start Time</li>
                <li>Day 2 - 30th October - 13:00 Start Time</li>
                <li>Day 3 - 31st October - 13:00 Start Time</li>
                </ul>

            <p>Entry: €260 (+ €40 Registration Fee)</p>

            <p>30,000 Starting Stack with 40 minute levels on Day 1 and 50 minute levels on Day 2.</p>
            <p>Rules: 1 X Re-Entry Allowed per player (max two bullets)</p>
            <p>Click <a href="ipo.php?location=dublin">here</a> to view full event schedule (including side events).</p>
            <p>Online Satellites are running now.</p>
            <p>Note; All IPO players must hold a Grosvenor Poker account.</p>
            
            <h4>Qualify on Grosvenor Poker</h4>
                <p>Step 1. Follow this <a href="http://ads.grosvenorcasinos.com/redirect.aspx?pid=799692&amp;bid=3400" target="_blank">link</a> to register a new GrosvenorPoker account.</p>

                <p>Step 2. After you complete your account registration go to <a href="https://www.grosvenorcasinos.com/poker/download" target="_blank">this</a> page to download the
                GrosvenorPoker game lobby software.</p>

                <p>Step 3. Log-in to the client and create a Poker Alias (nickname).</p>

                <p>Step 4. Make a deposit into your poker account through this page</p>

            <p>(Note; a £25 or greater deposit will trigger the best welcome bonus)</p>


    	</div>

		<div class="home_info_block" id="home_right_blk">	
			<iframe width="258" height="180" src="http://www.youtube.com/embed/ojNqwZIDNoA" frameborder="0" allowfullscreen></iframe>
		</div>
	
	
	<br style="clear:both;" />
	
	';

?>

<?php include_once 'footer.php'; ?>

