<?php	
	include_once '../PokerIrelandSystem/core/init.inc.php';
	$page = explode("_",$_REQUEST['page']);
	$page_title = "PokerIreland |";
	foreach($page as $p)
	{
		$p = ucwords($p);
		$page_title.=" ".$p;
	}
	
	include_once 'header.php';
?>

<?php 
	$center = new Center();
	$center->markup.=($center->$_REQUEST['page']());
	$center->spit();
?>

<?php include_once 'footer.php'; ?>

