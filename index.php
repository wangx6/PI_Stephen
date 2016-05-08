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
                <a href="http://www.fulltilt.com/promotions/full-tilt-ipo" target="_blank"><img src="img/fulltilt.jpg" alt="1" /></a>
                <span class="bottom">Full Tilt International Poker Open Tour 2015.</span>
            </li>
            <div class="clear sliderImage"></div>
        </ul>
    	</div>

        <div class="home_info_block" id="full-tilt__promote-blk">
            <div class="full-tilt__promo__logo"><img src="img/Full-Tilt-Logo-New.png"/></div>
            <div class="full-tilt__promo__btn"><a href="http://www.fulltilt.com/promotions/full-tilt-ipo" target="_blank"><img style="width:100%;" src="img/Full-Tilt-Play-Now-Button.png"/></a></div>
        </div>
	
		<a href="user_register.php">
   		<div class="home_info_block" id="register_button">
			<sapn class="reg-desc">For Email Newsletters and Added Value</span><br>
        	<span class="reg-text">REGISTER NOW</span>
    	</div>
		</a>

		
	
	
		<div class="home_info_block discription_block">	
            <div class="home__table__wrapper"></div>


            <h3>Full Tilt IPO Tour 2015</h3>
    			
            <P>
                The Full Tilt International Poker Open Tour will bring some of Europe\'s most 
                exciting live poker events to a city near you. 
            </p>
          
            <p>
                The IPO is well established as Europe\'s favourite poker tournament and with 
                1,656 entrants in Dublin in 2014 and a prize-pool of €331,200 this tour offers 
                some real "must attend" poker events. 
            </p>

            <p>
                Online Satellites are running now.
            </p>

            <p>
                Qualify on Full Tilt! <a href="http://www.fulltilt.com/promotions/Full-Tilt-IPO/" target="_blank"> Click here for more information</a>.
    		</P>
            <p>
                More IPO Tour dates will be announced later in 2015!<br>
                <a href="user_register.php">Register now for PokerIreland newsletters</a><br>
                Note; All Full Tilt IPO players must hold a Full Tilt Poker account.
            </p>
    	</div>

		<div class="home_info_block" id="home_right_blk">	
			<iframe width="258" height="180" src="http://www.youtube.com/embed/ojNqwZIDNoA" frameborder="0" allowfullscreen></iframe>
		</div>
	
	
	<br style="clear:both;" />
	
	';

?>

<?php include_once 'footer.php'; ?>

