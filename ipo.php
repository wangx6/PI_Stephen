<?php   
    include_once '../PokerIrelandSystem/core/init.inc.php';
    $page_title = " PokerIreland | IPO Details";
    include_once 'header.php';
?>

<?php 
    $location = $_GET['location'];
    $markup = '<div class="ipo__wrapper" location='.$location.'></div>';
    echo $markup;    
?>
<script src="js/ipo-plugin.js"></script>

<?php include_once 'footer.php'; ?>

