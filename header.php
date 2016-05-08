<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="60" />
<title><?php echo $page_title;?></title>
<link rel="icon" type="image/gif" href="img/cards.gif" /> 
<link rel="shortcut icon" type="image/gif" href="img/cards.gif" /> 
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />

<?php 
	$css_files = array("header.css", "main.css", "footer.css", "ipo.css", "home.css", "full-tilt.css");
?>

<?php 
    foreach ($css_files as $css) {
    	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"css/".$css."\"/>";
    }
?>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
<script type="text/javascript" src="js/menu.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 7000
        });
    });
</script>



<?php
	$title = '';
	if (!empty($_GET["title"]))
		$title = $_GET["title"];
	else
		$title = 'empty';
	$class = 'class="menu_title_page_active"';
	
	$home = 'class = "menu_title"';
	$IPO_detail = 'class = "menu_title"';
	$IPO = 'class = "menu_title"';
	$registration = 'class = "menu_title"';
	$our_service = 'class = "menu_title"';
	$about_us = 'class = "menu_title"';
	$gallery = 'class = "menu_title"';
	$FAQs = 'class = "menu_title"';
	
	switch ($title) {
		case "home":
			$home = $class;
			break;
		case "IPO_detail":
			$IPO_detail = $class;
			break;
		case "IPO":
			$IPO = $class;
			break;
		case "registration":
			$registration = $class;
			break;
		case "our_service":
			$our_service = $class;
			break;
		case "about_us":
			$about_us = $class;
			break;
		case "gallery":
			$gallery = $class;
			break;
		case "FAQs":
			$FAQs = $class;
		default:
		  $home = $home;
	}


echo'
<meta name="google-translate-customization" content="5910738ac98200e9-f2af53477ea09c83-g54e4a82eae88021f-13"></meta>
</head>
<body>
';
   include_once("analyticstracking.php");
    	
       
echo'    
   		<div id="header">
    		<a href="./"><div id="logo_link"></div></a>
			<div id="social-media-share-btns">';?>
				
                <!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-536cef1a6bb86249"></script>
<!-- AddThis Button END -->
                
                
                
			<?php
			echo '
			</div>
        </div>
		
		<div id="menu">
        
            <a class="menu-title title_1" href="index.php?title=home">HOME</a>
            <a class="menu-title title_2 has-drop-down" menu="ipo" href="#">IPO</a>
            <a class="menu-title title_3" href="our_service.php?title=our_service">OUR SERVICE</a>
            <a class="menu-title title_4" href="gallery.php?title=gallery">GALLERY</a>
            <a class="menu-title title_6" href="about_us.php?title=about_us">ABOUT US</a>



			<div class="menu_title" id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: \'en\', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, \'google_translate_element\');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            
       
        
        </div>
        <div class="mask"></div>
        <div class="drop-block drop-block-ipo has-drop-down">
            <div class="drop-blk-title"><a href="ipo.php?location=dublin"><h3>IPO Dublin</h3></a></div>
            <div class="drop-blk-title"><a href="IPO_staff.php"><h3>IPO Staff</h3></a></div>
        </div>

        <div class="drop-block drop-block-liveupdate has-drop-down">
            <div class="drop-blk-title"><a href="token.php?forwhich=IPO_Cork_Day_1A"><h3>IPO Cork Main Event Day 1A</h3></a></div>
            <div class="drop-blk-title"><a href="token.php?forwhich=IPO_Cork_Day_1B"><h3>IPO Cork Main Event Day 1B</h3></a></div>
            <div class="drop-blk-title"><a href="token.php?forwhich=IPO_Cork_Day_2"><h3>IPO Cork Main Event Day 2</h3></a></div>
            <!--<div class="drop-blk-title"><a href="token.php?forwhich=ipo_bray_side_event_1"><h3>IPO Bray Side Event 1</h3></a></div>
            <div class="drop-blk-title"><a href="token.php?forwhich=ipo_bray_side_event_2"><h3>IPO Bray Side Event 2</h3></a></div>
            <div class="drop-blk-title"><a href="token.php?forwhich=ipo_side_event_3"><h3>IPO Bray Side Event 3</h3></a></div>-->
        </div>


<div id="content">
	
        

';

?>